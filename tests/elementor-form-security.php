<?php
/** Local WordPress integration using the real Elementor form record and handler. */
if ( PHP_SAPI !== 'cli' || empty( $argv[1] ) ) { exit( "Supply an isolated WordPress directory.\n" ); }
$suite = 'creativepear' === ( $argv[2] ?? '' ) ? 'build/creativepear-suite/creativepear-suite.php' : 'xleon-suite.php';
$GLOBALS['wp_filter']['option_active_plugins'][10][] = array(
    'function' => static function() { return array( 'elementor/elementor.php', 'pro-elements/pro-elements.php' ); },
    'accepted_args' => 1,
);
$GLOBALS['wp_filter']['pre_http_request'][10][] = array( 'function' => static function() { return new WP_Error( 'local_qa', 'No external requests in QA.' ); }, 'accepted_args' => 1 );
require rtrim( $argv[1], '/\\' ) . '/wp-load.php';
if ( 'local' !== wp_get_environment_type() ) { exit( 'Local environment required.' ); }
require dirname( __DIR__ ) . '/' . $suite;

function security_check( $ok, $label ) {
    if ( ! $ok ) { throw new RuntimeException( $label ); }
    echo "PASS: $label\n";
}

function security_submit( $name, $message = 'Hola', $finish = true, $success = true ) {
    $record = new ElementorPro\Modules\Forms\Classes\Form_Record( array( 'message' => $message ), array( 'widgetType' => 'form', 'settings' => array(
        'form_name' => $name,
        'form_metadata' => array(),
        'submit_actions' => array(),
        'form_fields' => array( array( 'custom_id' => 'message', 'field_type' => 'textarea', 'field_label' => 'Message', 'required' => true ) ),
    ) ) );
    $handler = new ElementorPro\Modules\Forms\Classes\Ajax_Handler();
    $valid = $record->validate( $handler );
    if ( $valid && $finish ) {
        $record->process_fields( $handler );
        if ( ! $success ) { $handler->add_error_message( 'Simulated action failure' ); }
        do_action( 'elementor_pro/forms/new_record', $record, $handler );
    }
    return array( $valid, $record, $handler );
}

$settings = xw_get_default_settings();
security_check( 0 === $settings['features']['elementor_form_security'], 'existing sites receive the feature switched off' );
$settings['features']['elementor_form_security'] = 1;
$settings['form_security'] = array( 'days' => '1', 'hours' => '02', 'minutes' => '15' );
$settings = xw_sanitize_settings( $settings );
security_check( array( 'days' => 1, 'hours' => 2, 'minutes' => 15 ) === $settings['form_security'], 'settings preserve each unit' );
security_check( array( 'days' => 365, 'hours' => 0, 'minutes' => 0 ) === xw_form_security_sanitize( array( 'days' => '9999', 'hours' => -1, 'minutes' => array( 12 ) ) ), 'numeric bounds and malformed values' );
add_filter( 'pre_option_xw_settings', static function() use ( &$settings ) { return $settings; } );

$table = $wpdb->prefix . 'xw_form_security';
$ip = '2001:db8:42::' . dechex( random_int( 1, 65535 ) );
$second_ip = '2001:db8:43::' . dechex( random_int( 1, 65535 ) );
$key = hash_hmac( 'sha256', inet_pton( $ip ), wp_salt() );
$second_key = hash_hmac( 'sha256', inet_pton( $second_ip ), wp_salt() );

try {
    $_SERVER['REMOTE_ADDR'] = $ip;
    security_check( ! security_submit( 'Contact', '' )[0], 'required field failure still stops validation' );
    security_check( security_submit( 'Contact', 'Hola', true, false )[0], 'valid form reaches actions even if an earlier attempt was invalid' );
    list( $valid, $record, $handler ) = security_submit( 'Contact', 'Hola', false );
    security_check( $valid, 'a failed action releases the IP so the visitor can retry' );
    $in_flight = security_submit( 'Quote' );
    security_check( ! $in_flight[0] && ! empty( $in_flight[2]->messages['error'] ), 'another form cannot process while the IP has a submission in progress' );
    do_action( 'elementor_pro/forms/new_record', $record, $handler );
    $expiry = (int) $wpdb->get_var( $wpdb->prepare( "SELECT expires FROM $table WHERE ip_key = %s", $key ) );
    security_check( abs( $expiry - time() - ( DAY_IN_SECONDS + 2 * HOUR_IN_SECONDS + 15 * MINUTE_IN_SECONDS ) ) <= 2, 'successful submission starts the combined cooldown' );
    $_SERVER['REMOTE_ADDR'] = str_replace( '::', ':0:0:0:0:', $ip );
    $_SERVER['HTTP_X_FORWARDED_FOR'] = $second_ip;
    $blocked = security_submit( 'Quote' );
    security_check( ! $blocked[0] && ! empty( $blocked[2]->messages['error'] ), 'equivalent IPv6 notation and a forwarding header cannot change the IP limit' );
    security_check( $expiry === (int) $wpdb->get_var( $wpdb->prepare( "SELECT expires FROM $table WHERE ip_key = %s", $key ) ), 'blocked retries do not extend the cooldown' );
    $_SERVER['REMOTE_ADDR'] = $second_ip;
    security_check( security_submit( 'Contact' )[0], 'another IP may send independently' );
    $_SERVER['REMOTE_ADDR'] = $ip;
    $wpdb->update( $table, array( 'expires' => time() - 1 ), array( 'ip_key' => $key ) );
    security_check( security_submit( 'Quote' )[0], 'same IP can submit again after the cooldown' );
    $settings['form_security'] = array( 'days' => 0, 'hours' => 0, 'minutes' => 0 );
    security_check( security_submit( 'Contact' )[0], 'all-zero interval disables the cooldown' );
    $settings['form_security']['minutes'] = 5;
    $settings['features']['elementor_form_security'] = 0;
    security_check( security_submit( 'Contact' )[0], 'switching off bypasses a prior cooldown' );
} finally {
    $wpdb->delete( $table, array( 'ip_key' => $key ) );
    $wpdb->delete( $table, array( 'ip_key' => $second_key ) );
}
