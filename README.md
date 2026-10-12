# XLeon Suite

Plugin personalizado de WordPress con funciones reutilizables y una pantalla para activar, desactivar y configurar cada módulo.

## Pedidos en el menú principal (1.2.51)

Nueva caja opcional **WooCommerce > Pedidos en el menú principal**, apagada por defecto. Mueve el acceso nativo de Pedidos justo debajo de WooCommerce, antes de Productos, fuera del submenú. Conserva el idioma y contador de WooCommerce y sus permisos; no crea otra pantalla ni modifica pedidos. Compatible con HPOS y almacenamiento clásico, listado y editor. Solo retira la entrada visual del submenú al renderizar el encabezado, después de que WordPress haya comprobado la autorización y los hooks nativos de HPOS.

Al apagar y guardar vuelve al submenú original. Guarda por AJAX; el menú refleja la configuración al navegar o recargar. No hace nada sin WooCommerce, sin el menú nativo o sin permisos, y respeta accesos independientes ya registrados por terceros. Caja en dos columnas de escritorio y una en tablet/móvil. Pruebas locales en `tests/orders-menu.php`, excluidas del ZIP.

## Icono de Rank Math en la barra (1.2.50)

**Compact admin bar style** neutraliza el desplazamiento propio de 6 px del contenedor `.rank-math-icon`, que no utiliza la clase nativa `.ab-icon`. El SVG queda centrado en escritorio sin cambiar el espacio entre icono y texto, el hover ni los desplegables. La corrección queda dentro del breakpoint de escritorio; móvil conserva la barra de 46 px. Verificado con el marcado y la regla inline observados en el sitio, incluida su carga después del CSS de la suite, y menús con Enter/Escape. Fixture local en `tests/admin-bar-icons-fixture.php`, excluido de la publicación.

## Cantidades, barra y limpieza de módulos (1.2.49)

**Quantity Plus Minus Button** añade forma Normal/Circular, radio independiente del campo y separación (Gap) de 0–40 px. Circular usa el ancho como diámetro y radio de 50 %, manteniendo la altura del campo independiente. Normal conserva el alto configurado y el radio de botón. Configuraciones anteriores con radio de botón de 100 px pasan a Circular; una selección explícita Normal se respeta. Gap inicial de 4 px, configurable a 0. Sigue centrado, sin foco negro al hacer clic y sin duplicar botones de bloques.

**Compact admin bar style** corrige las cajas de iconos de escritorio: padding nativo neutralizado y glifos centrados en 32 px, incluidos SVG. Mantiene las reglas móviles de 46 px separadas y no reposiciona los desplegables de escritorio.

Retirados **Loading transition** y **Export plugin** de la pantalla, los valores activos y el código de ejecución: no hay ocultación/fade del body ni botón, generador ZIP o endpoint de exportación. Los demás módulos y las dos columnas de escritorio no cambian. La versión anterior del código sigue disponible en Git.

## Comentarios: caja y desplegable de la suite (1.2.48)

**WordPress > Comentarios** sigue el mismo patrón que las demás funciones: interruptor principal, flecha al encender y cuatro opciones dentro del desplegable. Las opciones interiores se distribuyen en dos columnas en escritorio (>1024 px) y una en tablet/móvil, sin cambiar las dos cajas por fila de escritorio.

Apagar el módulo suspende las restricciones y cierra el desplegable, pero conserva todas las selecciones. Al actualizar desde la caja anterior se mantiene activo si ya había alguna restricción seleccionada; una configuración inactiva sigue apagada. Usa el guardado AJAX existente y no borra comentarios.

## Cantidad: anchos independientes y centrado (1.2.47)

Corrige **Quantity Plus Minus Button** cuando el tema o Elementor fija el ancho/flex del contenedor: `Input width` se aplica solo al campo y `Button width` a cada botón, sin repartir ni encoger esas medidas. El grupo ocupa la suma de sus tres controles y la cantidad permanece centrada, también en carrito y selectores nativos de bloques.

El clic/tap no muestra el contorno o sombra negra de foco del tema. Tab y flechas conservan un indicador accesible de teclado, con color del sistema o `--xw-qty-focus-color`. No cambia mínimos/máximos/pasos, eventos del carrito ni controles de terceros. Pruebas de regresión con reglas de Elementor/tema y campo de 100/140 px frente a botones de 50 px.

## Duplicate page (1.2.46)

Nueva caja opcional **WordPress > Duplicate page**, apagada por defecto. Añade «Duplicar» en los listados de páginas, entradas y tipos públicos compatibles, y plantillas Elementor. Ajustes: editor (todos/clásico/Gutenberg), estado (borrador/pendiente/privado/publicado), volver al listado o editar la copia, y sufijo opcional. En Gutenberg aparece en Opciones y en el clásico junto a Publicar; copia solo la versión guardada.

Copia contenido, extracto, orden, taxonomías, campos repetidos y diseño/ajustes de Elementor, manteniendo las referencias a imágenes sin duplicar archivos. No cambia el original ni copia comentarios, bloqueos, cachés de Elementor o condiciones globales de plantillas. Valida nonce y permisos de lectura/edición/creación; privado/publicado requiere permiso de publicación. Los productos mantienen la duplicación nativa de WooCommerce. Si Duplicate Page está activo, conserva sus acciones sin añadir otras; desactívalo para usar este módulo. Ajustes AJAX y dos columnas en escritorio, una en tablet/móvil.

## Control de comentarios (1.2.45)

Nueva caja **WordPress > Comentarios**, con exactamente cuatro interruptores, apagados por defecto: desactivar globalmente, en entradas, en productos y en páginas. Global tiene prioridad y conserva las selecciones individuales para cuando se desactive. Productos incluye las reseñas de WooCommerce.

Cierra comentarios/pingbacks nuevos y oculta la discusión en las plantillas y bloques públicos nativos. Conserva los comentarios existentes, la moderación administrativa y las configuraciones originales de cada publicación; no modifica notas internas de pedidos. Al apagar las opciones vuelve a respetar los ajustes originales. Guarda por AJAX y mantiene dos cajas por fila en escritorio y una en tablet/móvil.

## Barra compacta responsive (1.2.44)

**Compact admin bar style** adapta iconos, logotipo y avatar al móvil con controles de 46 px y desplegables debajo de la barra. Mantiene en escritorio la altura nativa de 32 px y el texto compacto. Evita reglas globales de posición/flex que dejaban títulos y avatar fuera de sitio, conservando teclado, etiquetas accesibles y menús en administración y frontend. Solo carga el CSS con la opción activa, usuario conectado y barra visible; no cambia las cajas de la suite.

## Quantity Plus Minus Button (1.2.43)

Módulo opcional en **WooCommerce > Quantity Plus Minus Button**, apagado por defecto. Añade controles accesibles +/− a los campos de cantidad existentes de productos y carrito, sin reemplazar plantillas. Permite editar fondo/borde/texto de botones y hover, ancho/radio del borde, ancho del botón, ancho/alto del campo y sus colores, con el guardado AJAX de la suite.

Respeta mínimo/máximo y pasos decimales, mantiene eventos normales del carrito y se sincroniza con AJAX y variaciones. Conserva los controles nativos de bloques y evita duplicar los del tema. Si el plugin de referencia está activo, desactívalo antes de usar el módulo; no lo desinstala ni cambia sus ajustes. Mantiene dos columnas en escritorio y una en tablet/móvil, con objetivos táctiles de 44 px como mínimo. No crea cantidades en listados sin campo ni transforma un mini carrito de texto en un formulario editable.

## Aviso de salida y editor visual (1.2.42)

Corrige el aviso de cambios pendientes después de un guardado AJAX confirmado. La reescritura HTML de TinyMCE al salir no se considera una edición nueva. El texto del pie se sincroniza con el guardado y la respuesta saneada; las ediciones posteriores, durante el guardado y los fallos siguen protegidos.

## Guardado de ajustes (1.2.41)

El botón **Guardar cambios** aparece gris y desactivado sin cambios pendientes, y azul al editar. Guarda por AJAX sin recargar ni perder posición o paneles abiertos. Muestra guardando, guardado y errores; conserva las ediciones si falla la petición y mantiene pendientes los cambios realizados durante el guardado. Usa los mismos permisos, nonce y sanitización que el guardado tradicional.

## Imágenes de carrito y checkout (1.2.40)

**WooCommerce Cart CSS** aplica encuadre cuadrado `1:1` y `object-fit: contain` a las imágenes del carrito y mini carrito, incluido Menu Cart de Elementor. Mantiene el ancho configurado. La caja **Mostrar imágenes en el checkout** aplica el mismo encuadre sin requerir Checkout CSS; con ambos módulos mantiene los tamaños responsive existentes. No afecta imágenes del catálogo ni activa módulos apagados.

## Wishlist de Elementor (1.2.39)

Módulo opcional en **Ajustes > XLeon Suite > Elementor > Wishlist**, apagado por defecto. Requiere WooCommerce y Elementor. Al encenderlo añade exactamente tres widgets: **Wishlist — Tabla**, **Wishlist — Contador** y **Wishlist — Añadir**. Elige una página publicada y coloca Tabla en ella; el contador enlaza a esa página salvo que se configure otro enlace.

Todos los estilos se editan dentro de los widgets. En **Tabla > Estilo > Product name > Variation options** (en español, **Nombre del producto > Opciones de la variación**) se configuran únicamente el tamaño de fuente por dispositivo y el color. Las opciones aparecen debajo del título, con etiquetas de peso 600 y valores de peso 400 separados con `|`, en el orden definido en el producto. Conserva tamaños y colores guardados y no afecta los controles del nombre. Los productos generales no reservan espacio vacío.

Al guardar un producto con todas sus opciones seleccionadas se conserva esa variación exacta, con su precio, imagen y atributos. Cada combinación es independiente, también para atributos «Cualquiera». Sin una selección completa se guarda el producto general y se abre su ficha para elegir opciones. El carrito respeta la validación de WooCommerce y retira solo las combinaciones añadidas correctamente; la confirmación flotante se cierra a los 5 segundos o manualmente. La vista previa del editor no modifica listas ni carritos.

La tabla se adapta a tarjetas en tablet/móvil, con líneas interiores en cruz que usan el color de borde de las celdas. El contador, iconos, botones, imágenes, padding y bordes son editables. Los ajustes de la suite mantienen dos columnas por encima de 1024 px y una en tablet/móvil.

Compartir permite Facebook, X/Twitter, Pinterest, WhatsApp, Telegram, LinkedIn, Reddit, email y copiar enlace. Genera un enlace público de solo lectura sin exponer la cuenta ni permitir cambios a terceros. El usuario confirma el envío en la app/web seleccionada; no se publican mensajes automáticamente.

Las listas admiten hasta 200 productos/combinaciones. Los visitantes usan una cookie HttpOnly de un año y su lista se fusiona al iniciar sesión. Guarda IDs, fechas y atributos elegidos; no importa listas de otros plugins, no añade widgets automáticamente ni cambia plantillas. Apagar el módulo conserva los datos. No activar ambas suites simultáneamente: comparten utilidades y el mismo módulo.

Las pruebas en `tests/wishlist-*` requieren WordPress aislado con `WP_ENVIRONMENT_TYPE=local`, WooCommerce y Elementor. Los generadores crean exclusivamente fixtures locales; nunca se deben ejecutar contra producción. El ZIP de publicación excluye estas pruebas.

## Actualizaciones desde GitHub

El plugin consulta cada diez minutos la última publicación estable de este repositorio mediante WP-Cron. Si la versión publicada es mayor que la instalada, la actualización aparece en **Plugins > Plugins instalados** y puede aplicarse con **Actualizar ahora** o mediante las actualizaciones automáticas de WordPress. Como WP-Cron depende de la actividad del sitio, la comprobación se ejecuta durante la primera visita recibida después de cumplirse el intervalo.

La instalación inicial del plugin sigue haciéndose una sola vez con el ZIP. A partir de ese momento, las versiones nuevas llegan desde GitHub Releases.

## Publicar una versión

1. Cambiar `Version:` y `XW_FUNCTIONS_VERSION` en `xleon-suite.php` al mismo número.
2. Guardar y subir los cambios a la rama `main`.
3. Crear y subir una etiqueta con esa versión, por ejemplo:

```powershell
git tag v1.2.15
git push origin main --tags
```

La acción **Publicar plugin** valida el PHP, comprueba que la etiqueta coincide con la versión, genera `xleon-suite.zip` y crea la publicación de GitHub.

## Requisitos para el ZIP

No se debe subir a WordPress el ZIP automático de “Source code” que muestra GitHub. El actualizador utiliza el archivo `xleon-suite.zip` adjunto a cada publicación.
