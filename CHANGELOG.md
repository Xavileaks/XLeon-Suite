# Historial de cambios

## 1.2.15

- WooCommerce: el cambio de imagen usa ahora dos transiciones de opacidad simultáneas para crear un fundido cruzado real.
- La imagen que aparece utiliza la duración configurada y la que desaparece tarda 0,1 segundos adicionales; los tiempos se invierten al retirar el cursor.

## 1.2.14

- WooCommerce: la imagen principal del listado se oculta completamente cuando termina de aparecer la imagen secundaria.
- Al retirar el cursor, la imagen principal se restaura antes de desvanecer la secundaria para evitar espacios en blanco.

## 1.2.13

- WooCommerce: el cambio de imagen en los listados ahora utiliza un fundido cruzado real, manteniendo siempre visible la imagen principal mientras aparece la imagen de la galería.
- Se elimina el instante en blanco entre imágenes y la capa secundaria conserva el tamaño, encuadre y bordes de la imagen original.

## 1.2.12

- WooCommerce: nueva opción para mostrar la primera imagen de la galería al pasar el cursor sobre la imagen principal en los listados de productos.
- El único ajuste de esta función es la duración del fade, configurable entre 0 y 5 segundos.
- Compatible con listados clásicos de WooCommerce, Elementor Loop, bloques de productos y contenido cargado mediante AJAX.

## 1.2.11

- WooCommerce: opción para mostrar miniaturas de producto de 55 × 55 píxeles junto al nombre en el resumen del checkout.
- WooCommerce: opción para ocultar el cálculo y los costes de envío únicamente en el carrito, conservándolos en el checkout.
- WooCommerce: opción para exigir a usuarios conectados el correo de su cuenta como campo obligatorio y de solo lectura en el checkout, con validación del servidor.
- Las tres funciones nuevas están desactivadas por defecto y sus textos se adaptan al español o inglés de WordPress.

## 1.2.10

- Volver arriba: el botón queda aislado del CSS de temas, constructores y otros plugins para conservar su forma y sus estados.
- El anillo de progreso y el círculo comparten una única sombra exterior.
- El progreso SVG uniforme se aplica a las formas circular, redondeada y cuadrada, comenzando en el centro superior.
- Eliminado el sistema anterior basado en degradados para todas las formas.

## 1.2.9

- Volver arriba: se neutralizan los estilos hover globales de temas y constructores para que el botón no cambie de color, sombra ni icono al pasar el cursor.

## 1.2.8

- Volver arriba: controles numéricos compactos con nombre, valor y unidad en una sola línea.
- Los controles de visibilidad móvil, tablet y escritorio aparecen juntos en una sola fila.
- Se elimina la opción y el efecto de color al pasar el cursor sobre el botón.

## 1.2.7

- Interfaz: la tarjeta «Volver arriba» ocupa la columna disponible junto a «Marca del administrador» y mantiene una sola columna en móvil.

## 1.2.6

- Volver arriba: se corrige la inicialización cuando WordPress u otro optimizador imprime el script antes del botón.
- El botón se renderiza antes de los scripts del pie y JavaScript espera al DOM como protección adicional.

## 1.2.5

- WordPress: nuevo botón «Volver arriba» con desplazamiento suave e indicador de progreso permanente.
- Personalización de icono, posición, forma, márgenes, umbral, duración, tamaños, colores y visibilidad por dispositivo.
- Ajustes organizados en dos columnas en escritorio y una columna en móvil; el botón nunca se carga en el administrador.
- Actualizador: comprobación independiente de nuevas publicaciones cada diez minutos mediante WP-Cron.

## 1.2.4

- Interfaz: títulos, descripciones e interruptores alineados entre tarjetas con y sin ajustes desplegables.

## 1.2.3

- WooCommerce: actualización automática del carrito al cambiar cantidades, con espera configurable en segundos.
- WooCommerce: opción para ocultar únicamente los mensajes de confirmación `.woocommerce-message` del frontend.
- WooCommerce: eliminación de imágenes adjuntas, destacada y galería al borrar definitivamente un producto, conservando las compartidas con otros productos.
- Interfaz: tarjetas alineadas visualmente en escritorio y con altura natural en dispositivos móviles.

## 1.2.2

- Detección inmediata de nuevas publicaciones de GitHub durante la comprobación de WordPress.
- Compatibilidad con el mecanismo oficial de actualizaciones externas mediante `Update URI`.

## 1.2.1

- Funciones organizadas en secciones independientes para WordPress, Elementor y WooCommerce.
- Orden visual fijo: WordPress, Elementor y WooCommerce.

## 1.2.0

- Configuración inicial desactivada y sin elementos visuales preseleccionados.
- Interfaz y mensajes adaptados automáticamente al español o inglés de WordPress.
- Conservación de los ajustes guardados durante las actualizaciones.
