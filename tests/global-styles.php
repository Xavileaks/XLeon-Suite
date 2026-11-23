<?php
/** Local WordPress integration for the Global CSS styles card and its AJAX save. */
if ( PHP_SAPI !== 'cli' || empty( $argv[1] ) ) { exit( "Supply an isolated WordPress directory.\n" ); }
define( 'DOING_AJAX', true );
$suite = 'creativepear' === ( $argv[2] ?? '' ) ? 'build/creativepear-suite/creativepear-suite.php' : 'xleon-suite.php';
$GLOBALS['wp_filter']['option_active_plugins'][10][] = array( 'function' => static function() { return array(); }, 'accepted_args' => 1 );
$GLOBALS['wp_filter']['pre_http_request'][10][] = array( 'function' => static function() { return new WP_Error( 'local_qa' ); }, 'accepted_args' => 1 );
require rtrim( $argv[1], '/\\' ) . '/wp-load.php';
if ( 'local' !== wp_get_environment_type() ) { exit( 'Local environment required.' ); }
require dirname( __DIR__ ) . '/' . $suite;

function global_styles_check( $condition, $label ) {
    if ( ! $condition ) { throw new RuntimeException( $label ); }
    echo "PASS: $label\n";
}

function global_styles_save( $settings ) {
    $_SERVER['REQUEST_METHOD'] = 'POST';
    $_POST = array( 'xw_settings' => wp_slash( $settings ), '_wpnonce' => wp_create_nonce( 'xw_settings_group-options' ), 'xw_settings_complete' => '1' );
    $_REQUEST = $_POST;
    ob_start();
    try {
        xw_ajax_save_settings();
    } catch ( RuntimeException $error ) {
        if ( 'qa-json-end' !== $error->getMessage() ) { throw $error; }
        return json_decode( ob_get_contents(), true, 512, JSON_THROW_ON_ERROR );
    } finally {
        ob_end_clean();
    }
}

function global_styles_load() {
    $GLOBALS['wp_styles'] = null;
    xleon_suite_enqueue_styles();
    return array_values( array_filter( wp_styles()->queue, static function( $handle ) { return 0 === strpos( $handle, 'xleon-' ); } ) );
}

xw_register_settings();
wp_set_current_user( get_users( array( 'role' => 'administrator', 'number' => 1, 'fields' => 'ID' ) )[0] );
add_filter( 'wp_die_ajax_handler', static function() { return static function() { throw new RuntimeException( 'qa-json-end' ); }; } );
$original = get_option( 'xw_settings' );

try {
    $legacy = xw_get_default_settings();
    unset( $legacy['styles']['rules'] );
    $legacy['features']['assets_styles'] = 1;
    $legacy['styles']['primary_color'] = '#611206';
    $legacy['styles']['scrollbar_width'] = 0;
    update_option( 'xw_settings', $legacy );
    $catalog = xw_global_style_files();
    $handles = global_styles_load();
    global_styles_check( count( $catalog ) >= 15 && count( $handles ) === count( $catalog ), 'existing installations start with the bundled global styles enabled' );
    global_styles_check( ! array_intersect( array( 'elementor-date', 'woocommerce-cart', 'back-to-top' ), array_keys( $catalog ) ), 'feature-specific style files are excluded from the global card' );
    global_styles_check( str_contains( implode( '', wp_styles()->get_data( 'xleon-elementor-extra', 'after' ) ), '--color-web:#611206' ) && str_contains( implode( '', wp_styles()->get_data( 'xleon-global-scrollbar', 'after' ) ), 'width:0px' ), 'saved global color and scrollbar options still apply' );

    $input = xw_get_settings();
    $input['styles']['rules']['global-paragraph-last-margin'] = '0';
    $input['styles']['rules']['global-scrollbar'] = '0';
    $input['styles']['rules']['missing-file'] = '1';
    $result = global_styles_save( $input );
    $handles = global_styles_load();
    global_styles_check( $result['success'] && 0 === $result['data']['settings']['styles']['rules']['global-paragraph-last-margin'], 'AJAX save persists individual off switches' );
    global_styles_check( ! isset( xw_get_settings()['styles']['rules']['missing-file'] ) && in_array( 'xleon-global-elementor-icon', $handles, true ), 'only catalog entries are saved and unchecked rules remain independent' );
    global_styles_check( ! in_array( 'xleon-global-paragraph-last-margin', $handles, true ) && ! wp_styles()->get_data( 'xleon-global-scrollbar', 'after' ), 'disabled rules omit both the stylesheet and its custom CSS' );

    $input['styles']['rules'] = array_fill_keys( array_keys( $catalog ), '0' );
    $result = global_styles_save( $input );
    global_styles_check( $result['success'] && ! global_styles_load() && ! array_filter( xw_get_settings()['styles']['rules'] ), 'turning all rules off persists and loads no global CSS' );
    $input['styles']['rules'] = array_fill_keys( array_keys( $catalog ), '1' );
    $result = global_styles_save( $input );
    global_styles_check( $result['success'] && count( global_styles_load() ) === count( $catalog ), 'all global styles can be restored' );
} finally {
    if ( false === $original ) { delete_option( 'xw_settings' ); } else { update_option( 'xw_settings', $original ); }
}
