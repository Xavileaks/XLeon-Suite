# XLeon Suite

Plugin personalizado de WordPress con funciones reutilizables y una pantalla para activar, desactivar y configurar cada módulo.

## Wishlist de Elementor (1.2.38)

Módulo opcional en **Ajustes > XLeon Suite > Elementor > Wishlist**, apagado por defecto. Requiere WooCommerce y Elementor. Al encenderlo añade exactamente tres widgets: **Wishlist — Tabla**, **Wishlist — Contador** y **Wishlist — Añadir**. Elige una página publicada y coloca Tabla en ella; el contador enlaza a esa página salvo que se configure otro enlace.

Todos los estilos se editan dentro de los widgets. En **Tabla > Estilo > Product name > Variation options** (en español, **Nombre del producto > Opciones de la variación**) se configuran color, color hover, tipografía —incluido tamaño por dispositivo— y separación de las opciones. Se muestran debajo del título y no afectan sus controles anteriores. Los productos generales no reservan espacio vacío.

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
