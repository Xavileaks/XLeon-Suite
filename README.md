# XLeon Suite

## WooCommerce Cart CSS: espacio adicional en móvil (1.2.77)

Elimina los 28 px laterales que Elementor añade a las filas del carrito hasta 767 px, además del padding configurado en la sección. Conserva el padding y los márgenes elegidos en Elementor, el espacio vertical de los productos y el diseño de escritorio. La regla solo afecta al widget Carrito de Elementor cuando WooCommerce Cart CSS está activo; no cambia el carrito clásico, el mini carrito ni el checkout. Sin `!important`, para permitir estilos propios más específicos.

## WooCommerce: Precio en oferta y categoría de Elementor (1.2.76)

Nueva caja opcional «Precio en oferta» (Sale price), desactivada de forma predeterminada, en WooCommerce. Actívala y guarda para añadir su widget a la categoría de la suite en Elementor. Mantiene la distribución habitual de dos cajas por fila en escritorio y una hasta 1024 px.

El widget muestra el precio actual y, solo con una oferta activa, el original tachado. Cuando no hay oferta, el precio normal utiliza el mismo estilo del precio actual. Cada precio tiene color, tipografía, trazo de texto, sombra y modo de fusión independientes. Incluye alineación vertical arriba/medio/abajo, alineación horizontal y separación adaptables por dispositivo. Lee el producto actual en plantillas y Loops, respeta moneda e impuestos y actualiza las variaciones con o sin descuento; al restablecerlas recupera el rango del producto. No modifica precios ni aplica descuentos. Requiere WooCommerce y Elementor; no requiere Elementor Pro.

La categoría XLeon Suite / Creative Pear Suite aparece justo antes de «Custom Widget» y conserva su posición al cambiar de documento. Si esa sección no existe en la versión de Elementor, se coloca antes de Pro. Las demás categorías mantienen su orden.

Plugin personalizado de WordPress con funciones reutilizables y una pantalla para activar, desactivar y configurar cada módulo.




## Citas: campos reales y editor visual de mensajes (1.2.75)

Editar datos usa únicamente los campos guardados por el formulario; deja de añadir contactos vacíos y elimina los campos internos que el editor anterior había generado. Si el formulario tiene dos correos, conserva sus dos campos reales. La tarjeta y el envío consultan el mismo correo del formulario, también en reservas antiguas con el índice interno vacío. Una reparación por lotes de 100 actualiza los índices de contacto mediante comparación de los datos originales, sin cambiar campos enviados, estados ni fechas de las citas. No verifica que una dirección tenga buzón: valida su formato.

Se retira la caja inferior Listas para reagendar: el número de días se elige en el apartado superior.

Cada uno de los cuatro mensajes ofrece Saludo, un selector de campo para personalizarlo, Mensaje central, detalles seleccionables con botones + y eliminar, y Mostrar el nombre del sitio. El catálogo utiliza etiquetas de los formularios Elementor conectados y de las reservas existentes; nunca muestra sus respuestas en los desplegables, contraseñas ni campos ocultos. Los campos de un formulario distinto o sin valor se omiten. Se pueden añadir hasta diez detalles. Los mensajes ya personalizados con el formato anterior siguen activos hasta guardar la nueva configuración, según el aviso de cada tarjeta.

WhatsApp prepara saludo, mensaje y detalles; el correo muestra los detalles en una tabla HTML y permite revisar el saludo/mensaje antes de enviar. Desmarcar el nombre del sitio lo quita del mensaje, del asunto automático y de las cabeceras/pies automáticos del correo. Solo se envía al pulsar Enviar correo. Las selecciones y el destinatario se comprueban de nuevo al enviar; cambiar la configuración invalida la vista previa anterior. Se mantienen dos columnas de mensajes en escritorio y una hasta 1024 px.

## Citas: apartados y búsqueda en vivo (1.2.74)

Próximas citas muestra las confirmadas vigentes y Pendientes tiene su propio apartado, situado a continuación. Historial conserva completadas, canceladas y confirmadas ya pasadas. Se elimina el desplegable de estados. El buscador filtra por nombre, correo o teléfono mientras se escribe, consulta todos los registros del apartado y pagina los resultados, sin limitarse a las tarjetas ya cargadas. Reconoce teléfonos sin espacios o separadores. Las respuestas antiguas se descartan y los borradores de tarjetas se conservan antes de actualizar la lista.

Listas para reagendar sustituye el calendario por un número de días (15 por defecto, de 1 a 3650). Solo incluye completadas y canceladas cuyo cambio de estado alcance ese plazo, excluyendo las ya reagendadas; los días se cuentan por calendario en la zona horaria del sitio. El plazo de la búsqueda se conserva al cambiar de apartado; el ajuste inferior sigue definiendo el valor predeterminado. Crear una nueva cita abre Pendientes.

Los cuatro mensajes están inmediatamente después de Conecta un formulario: Pendiente y Confirmada en la primera fila, Cancelada y Reagendar en la segunda. Se apilan hasta 1024 px y tienen Guardar mensajes en esa posición; su guardado conserva el resto de la disponibilidad y actualiza los contactos visibles. Las búsquedas y el guardado de mensajes requieren los mismos permisos y nonce de Citas. No generan envíos automáticos.

## Citas: acceso, edición, mensajes y reagendado (1.2.73)

Citas incorpora acceso por correo para cuentas existentes de cualquier rol, incluidas administradoras. Las cuentas listadas solo pueden gestionar Citas: se ocultan los menús y la barra superior, se restringen rutas, capacidades y API, y se añade Cerrar sesión/Log out según el idioma del sitio. La lista se guarda aparte; solo un administrador sin restricción puede editarla y debe quedar al menos uno fuera. No se crean usuarios ni se alteran sus roles. Desactivar Citas deja de aplicar esta restricción.

Las tarjetas muestran todos los datos ordinarios del formulario, sin desplegable, y permiten editarlos y elegir qué campo usar como nombre. Los campos técnicos de cita se cambian mediante disponibilidad. WhatsApp y Correo desaparecen cuando su dato es inválido y vuelven al corregirlo. WhatsApp valida formato internacional con metadatos locales de libphonenumber-js 1.13.15 (MIT, licencia incluida); esto no comprueba que el número tenga una cuenta de WhatsApp.

Hay mensajes editables para pendiente, confirmada, cancelada y reagendar, con saludo opcional por nombre y marcadores {fecha}, {hora}, {consultorio}, {sitio} y {campo:ID}. WhatsApp abre el texto preparado; el correo tiene un editor con asunto, mensaje y vista previa HTML. Solo se envía al pulsar Enviar correo, al destinatario guardado; los reintentos de una misma solicitud se deduplican. Cambiar estados, fechas o datos no envía avisos automáticamente. WordPress debe tener configurado el envío de correo.

Próximas citas, Listas para reagendar e Historial son apartados separados. El plazo configurable (15 días por defecto) se cuenta por días del calendario desde el cambio de estado, con filtro por fecha de corte. Se incluyen canceladas y confirmadas/completadas que ya terminaron; se excluyen pendientes, confirmadas futuras y las ya reagendadas. Las antiguas sin fecha de cambio no reciben una fecha inventada: se puede indicar la fecha conocida en Editar datos. Reagendar comprueba disponibilidad, crea una nueva cita pendiente y conserva la original enlazada en el historial. La migración añade dos columnas sin reescribir fechas originales.

Cajas de ajustes en dos columnas de escritorio y una hasta 1024 px; tarjetas de citas en tres columnas, dos en tablet y una en móvil. Verificado con WordPress local, Elementor, cuentas administradora/suscriptora restringidas, edición, conflictos, mensajes interceptados (sin entregas reales), calendario y reagendado. Publicar no instala la actualización en los sitios.

## WooCommerce: Valor relativo y absoluto (1.2.72)

Nueva caja al principio de **WooCommerce**, apagada por defecto. Actívala, guarda y busca **Valor relativo y absoluto** en Elementor, dentro de la categoría de la suite. El widget muestra el ahorro de la oferta como **porcentaje** (`Ahorra 11%`) o **importe** (`Ahorra 60€`, con el formato monetario de la tienda). Colócalo junto al widget de precio en una plantilla de producto o Loop.

En el widget puedes editar texto, color, fondo, tipografía, borde, redondeado, espacio interior y alineación; los estilos se aplican por instancia. Lee el producto actual, no cambia sus precios ni aplica descuentos. El importe es por unidad y respeta moneda e impuestos de visualización de WooCommerce. El porcentaje entero se calcula a la baja para no exagerar el ahorro; los inferiores al 1% se muestran como `< 1%`.

Sin oferta activa, con precios inválidos o fuera de las fechas de oferta, se oculta. En productos variables espera a la selección y usa el ahorro de **esa variación**, sin mezclar precios mínimos/máximos de variantes distintas; se oculta al reiniciar o elegir una variante sin oferta. Los eventos de WooCommerce actualizan cada instancia y conservan separados otros Loops. No necesita Elementor Pro para registrar el widget, aunque el editor de plantillas/Loops depende de las funciones disponibles en tu Elementor.

Activos cargados por el widget, independientes de Estilos CSS globales. Sin WooCommerce o Elementor no se registra; no se añade una tabla ni se guardan copias de precios. Diseño basado en la etiqueta de la referencia y convertido con 12ui. Probado localmente con WooCommerce 11.2.1, Elementor 4.3.4 y sus controles nativos; cálculo, estados, exclusiones, estilos por instancia y vista móvil. Publicar no lo instala ni activa automáticamente en los sitios.

## Cantidad: respetar la altura configurada (1.2.71)

El input del módulo Quantity Plus Minus Button fija `height`, `min-height` y `max-height` al valor de su ajuste. Así los límites de altura del tema no encogen ni agrandan el campo. Se limita al control mejorado `.quantity.xw-quantity` y al selector nativo de bloques WooCommerce que ya estiliza el módulo; no afecta otros inputs ni los controles de otros plugins que el módulo omite. Los botones circulares mantienen su diámetro independiente. La carga sigue dependiendo del interruptor existente.

## Estilos globales: evitar el doble scroll (1.2.70)

Se elimina el ancho forzado y `overflow-x: hidden !important` sobre `html` y `body`. El recorte horizontal usa `overflow-x: clip`, sin `!important`, y únicamente si el navegador lo admite. No convierte `body` en un contenedor adicional de scroll vertical ni impone anchos, alturas o `overflow-y`. Se aplica en ambos elementos para evitar también la ampliación del viewport móvil cuando un hijo sobresale horizontalmente. En navegadores sin `clip` se mantiene el comportamiento del tema. Sigue dependiendo de la caja Estilos CSS globales.

## Estilos globales: respetar el ancho de Elementor (1.2.69)

Se retiran las reglas que imponían `--container-max-width: 90%` entre 1025 y 1400 px y `70%` desde 1700 px. Cada sitio conserva el ancho de sus contenedores configurado en Elementor.

## Elementor: ancho del mensaje de confirmación (1.2.68)

El campo Mensaje de confirmación ocupa todo el ancho interior de su caja, también en móvil, y permite ajustar su altura. Se mantienen las dos columnas de funciones en escritorio.

## Elementor: iconos verdes en los correos (1.2.67)

Los iconos de mensaje y recepción usan verde con fondo verde suave. La URL incluye la versión del plugin para renovar la imagen almacenada en caché.

## Elementor: estilos de correo para administrador y cliente (1.2.66)

Dos cajas nuevas al principio de **Elementor**, apagadas por defecto e independientes:

- **Correo del administrador**: da estilo a la acción Email existente. Nombre/logo del sitio, aviso de nuevo mensaje, campos ordenados y metadatos seleccionados. Omite campos vacíos y controles de seguridad como CAPTCHA/contraseñas; conserva campos ordinarios, incluido el valor 0, y el manejo nativo de adjuntos.
- **Correo del cliente**: da estilo únicamente a **Email 2 ya configurado**. Confirmación breve con icono, sin repetir los datos enviados. En su caja puedes cambiar el texto; vacío usa el mensaje genérico en español/inglés según el idioma de WordPress. Configura en Elementor el destinatario de Email 2, por ejemplo `[field id="email"]`; la suite no añade envíos ni cambia destinatarios, remitentes, copias o adjuntos.

Se aplican solo si **Mensaje** está vacío o es exactamente `[all-fields]`, y **Enviar como** es HTML. Si el contenido tiene texto, HTML, códigos de campo personalizados o contenido dinámico, se respeta el correo de Elementor. El modo texto plano también se conserva. Los asuntos genéricos se adaptan al idioma de WordPress; los asuntos personalizados, las etiquetas y los valores del formulario se mantienen.

Los metadatos se eligen en Email o Email 2: únicamente los activados y disponibles aparecen en su sección, que desaparece al quedar vacía. No requiere Global CSS. No guarda copias de los correos ni configura SMTP: el transporte y los errores de entrega siguen siendo de Elementor/WordPress. HTML basado en tablas, estilos en línea, fuentes del sistema e iconos PNG con texto alternativo. Revisado en vista previa de navegador; no supone una prueba de entrega en cada cliente de correo.

Diseño elaborado con 12ui. Pruebas locales con las acciones reales Email/Email2 y todas las llamadas a `wp_mail` interceptadas, sin envíos: idiomas, condiciones de exclusión, metadatos, escapes, destinatarios, adjuntos, fallos y restauración del registro. Las cajas conservan dos columnas en escritorio y una en tablet/móvil. No instala ni activa la utilidad en sitios automáticamente.

## Fecha: flechas alineadas con mes y año (1.2.65)

- La fila de mes/año se convierte en la referencia de posición de sus flechas, evitando que aparezcan sobre el título superior. Ambas quedan centradas verticalmente, con área de 44 px, también en móvil. Conserva la ocultación al alcanzar los límites mínimo/máximo y la navegación existente.

## Phone mask: color del campo de Elementor (1.2.64)

- El prefijo internacional y la flecha del selector con bandera usan el color calculado del input, es decir, **Field → Text Color** de ese formulario. No toman el color del contenedor ni el gris fijo del icono; cada campo mantiene su propio color.
- Sigue los cambios de estilos y clases del editor, hojas de estilo, foco y tamaño de pantalla, agrupando las actualizaciones por frame. Mantiene países, banderas, formato, validación y la paleta del desplegable. Integrado en Phone mask, sin opciones adicionales.

## Fecha: selector conjunto de mes y año (1.2.63)

- El diseño aprobado con 12ui para Cita se aplica también al campo Date dentro del interruptor **Form Elementor: fecha**, sin nuevas opciones. Encabezado de mes y año juntos; dos ruedas desplazables sin barras visibles; × para volver al calendario del período centrado. Acento del color principal de Elementor con franja al 10 % y ancho alineado con el input en móvil/tablet.
- Usa el Flatpickr de Elementor también para las fechas nativas/móviles, mediante un control auxiliar sin nombre: conserva el input original, su validación y un único valor ISO enviado. No requiere activar Citas ni Global CSS; el cargador global excluye ahora el CSS de Fecha para respetar su interruptor.
- Mantiene escritura numérica, máscara y validación por dígitos, icono permanente, límites mínimo/máximo, paso entre fechas, fechas desactivadas, restablecimiento y campos dinámicos. El selector de Fecha usa los límites de ese campo, permite años 1000–3999 si no hay otros límites y no usa la disponibilidad de Citas. Limpia los calendarios auxiliares al reconstruir el formulario.

## Citas: selector conjunto de mes y año (1.2.62)

- Encabezado único «Octubre 2026» en lugar del mes desplegable y el año numérico separados. Abre una vista con dos ruedas desplazables de meses y años, selección central y un único botón ×. Sin días ni barras de scroll en esa vista; admite gesto táctil, rueda de ratón, clic y teclado.
- La × lleva al calendario del período centrado, listo para elegir día y después hora. Enter/Escape también vuelven al calendario. Solo ofrece meses/años dentro del rango de reserva del sitio, adapta los meses al cambiar de año y conserva una cita ya elegida mientras navegas. Texto en español/inglés y ancho móvil alineado con el input.
- Diseño revisado con 12ui e integrado en el campo Cita existente, sin opciones adicionales ni cambios en los campos Date ordinarios.

## Citas: desplegable alineado en móvil (1.2.61)

- En móvil y tablet (hasta 1024 px), el calendario y las horas toman el ancho real del input de Cita. Se mide antes de que Flatpickr calcule su posición para mantener ambos bordes alineados, sin desplazarse a la derecha.
- Recalcula el ancho al abrir, redimensionar o cambiar el tamaño del campo. Incluye el borde en el ancho y desconecta la observación al retirar el formulario. Conserva el ancho de escritorio y la selección de día y hora existente.

## Fecha con formato persistente y foco de select (1.2.60)

- Global CSS styles elimina también la sombra de foco del `select` dentro de `.elementor-select-wrapper`: Elementor sitúa la clase `.elementor-field` en el contenedor, no en el select. Solo cambia `box-shadow`, sin quitar bordes ni añadir opciones.
- Form Elementor: fecha cubre ahora tanto fechas nativas/móviles como el campo Date de Flatpickr en escritorio. Mientras escribes conserva la guía restante (`01/mm/aaaa`), inserta las barras y limita a ocho dígitos. Solo entrega al calendario fechas completas y válidas: ya no interpreta texto parcial como un año. Mantiene validación, límites, campos dinámicos, restablecimiento y un único valor original enviado.
- Impide insertar dígitos inválidos: día 01–31 (primero 0–3), mes 01–12 (primero 0–1) y año 1000–3999 (primero 1–3). Rechaza también días imposibles para el mes y años no bisiestos; conserva el texto anterior, marca el campo y muestra el aviso del navegador. Borrar y corregir sigue siendo posible. Los límites configurados del calendario se mantienen.
- Icono de calendario siempre visible, igual al del campo Cita, con botón accesible de 44 px. Abre el calendario nativo o Flatpickr existente; no lo sustituye. Escritura numérica al tocar el texto y calendario al pulsar el icono. No modifica los campos Cita ni formularios ajenos a Elementor. Depende del interruptor Form Elementor: fecha, independiente de Global CSS styles.

## Citas: tarjetas, contacto y cambio de fecha (1.2.59)

- Reservas en tarjetas revisadas con 12ui: tres por fila en escritorio, dos en tablet y una en móvil. Nombre, consultorio, fecha/hora, zona, estado y datos originales. Pendientes primero, confirmadas después, luego canceladas y completadas al final. Conserva filtros, paginación y guardado de estados.
- WhatsApp y correo abren sus enlaces, sin enviar mensajes automáticamente. Código de país configurable por sitio para teléfonos locales, sin asumir un valor. Los números internacionales con `+` o `00` funcionan sin ese ajuste. Contactos sin datos válidos quedan desactivados. Consultorio detectado por etiqueta o por ID explícito en el campo Cita de Elementor para nuevos envíos; si falta, «No indicado».
- Cambiar fecha usa el mismo desplegable de día y hora, solo para pendientes o confirmadas. La consulta privada requiere administrador y nonce, excluye la propia reserva y comprueba de nuevo disponibilidad bajo el bloqueo de reservas al guardar. Conserva estado y datos originales, libera el horario anterior y no envía avisos.
- «Minutos» y «días en adelante» debajo de sus inputs. Calendario de días libres al ancho interior, siete columnas y círculos de hasta 44 px para reducir su altura. Selector de color, texto y restablecer comparten 44 px de altura. Las cajas de ajustes permanecen en dos columnas de escritorio y una en tablet/móvil.

## Citas: distribución y duración vigente (1.2.58)

- Lista de reservas, filtros y tabla justo debajo de la introducción, antes de la guía y los ajustes. Las dos cajas de configuración se conservan en escritorio.
- Duración, antelación y horizonte en una fila de tres columnas; en móvil se apilan. Selectores de turnos, eliminar y añadir con altura común de **44 px**, siguiendo la alineación revisada con 12ui. Calendario de días libres al ancho completo interior de su caja, sin recortarse en tablet.
- La duración actual se usa también para calcular la ocupación de reservas pendientes, confirmadas y temporales activas. Una reserva de las 10:00 creada con 30 minutos bloqueará hasta las 11:00 al cambiar a 60. También respeta reducciones y duraciones mayores, sin modificar las horas de inicio ni reescribir los registros históricos. Completadas conservan su duración registrada; canceladas no bloquean.
- Consulta pública y validación final comparten este cálculo, incluso al extenderse una cita desde el día o mes anterior. Ampliar la duración no cancela ni desplaza otras citas ya existentes: revisa los posibles solapamientos. Prueba local de distribución sin guardar opciones en `tests/appointments-layout.php` y casos de regresión en `tests/appointments.php`.

## Citas: calendario y hora en un solo desplegable (1.2.57)

- Un único campo de Cita: abre el calendario, elige un día y pasa con un desvanecimiento a las horas disponibles, con botón para volver. La selección final muestra fecha y hora juntas. Instrucciones, zona horaria y reintento quedan dentro del desplegable; no hay un segundo selector de hora en el formulario.
- Horas de inicio cada **15 minutos**, respetando la duración de las citas y los descansos. Citas pendientes, confirmadas y reservas temporales activas bloquean todos los intervalos que se solapen. El servidor vuelve a comprobar antes de reservar.
- Horario semanal con desplegables de 15 minutos, un turno inicial y botón para añadir hasta **cuatro turnos por día**. Un día con todos sus turnos vacíos permanece cerrado. Valida turnos incompletos, invertidos o solapados; conserva los horarios válidos anteriores sin redondearlos.
- Calendario para marcar días libres en rojo desde hoy, usando la fecha de WordPress; los pasados quedan desactivados. Las excepciones prevalecen sobre la semana, sin cancelar citas existentes. Colores de círculo, background y número de fechas disponibles, y background del calendario, con restablecimiento automático y vista previa.
- Dos columnas de ajustes en escritorio, una en tablet/móvil, guardado AJAX y botón gris sin cambios. No modifica formularios de producción: si hay un campo Date antiguo además de Cita, elimínalo desde Elementor y conserva un solo campo Cita.

## Form Elementor: citas (1.2.56)

Nueva caja **Elementor > Form Elementor: citas**, apagada por defecto. Al activarla aparece **Citas / Appointments** debajo de Comentarios (posición 25.1), con acceso exclusivo de administradores. Una agenda por sitio; no depende de un dominio, página o ID fijo. Requiere el widget Formulario de Elementor Pro o una implementación compatible con su API.

1. Activa la utilidad en la suite y guarda. En **Citas** configura horarios por día (`09:00-13:00, 15:00-18:00`); vacío significa cerrado. Inicialmente todos están cerrados.
2. Define duración (5–240 min), antelación (0–10080 min), horizonte (1–180 días) y excepciones `AAAA-MM-DD`, una por línea. Se usa la zona horaria de WordPress, visible en el formulario; no la hora del navegador.
3. En cada formulario que deba recibir reservas, añade **un** campo de tipo **Cita / Appointment**. Los demás formularios no cambian. Detecta primer texto/nombre, email y teléfono, con IDs opcionales para mapear campos distintos. Guarda los campos ordinarios del formulario, no contraseñas, uploads, campos ocultos ni CAPTCHA.
4. El visitante abre el calendario al tocar el campo o icono, sin escribir fechas. Reutiliza el Flatpickr incluido en Elementor, también en móvil (sin sustitución nativa); círculos en días disponibles, días pasados/bloqueados/sin huecos en gris, y selección posterior de una hora libre. No afecta al módulo de fecha numérica ni a otros campos Date.
5. El envío AJAX correcto de Elementor registra una solicitud **pendiente**, visible en la tabla privada con datos, búsqueda, filtros, paginación y estados pendiente/confirmada/completada/cancelada. Cancelar libera el horario; una cancelada no se reactiva sin una nueva reserva. El panel guarda por AJAX con botón gris cuando no hay cambios.

Validación y disponibilidad en servidor; almacenamiento UTC con zona original, intervalos sin solapamiento, cambios de horario de verano, comprobación de citas existentes incluso tras cambiar duración, y mutex atómico de base de datos entre comprobar e insertar. Reserva temporal durante las acciones del formulario: si fallan o se interrumpe la petición, se libera; las reservas temporales caducan a los 10 minutos. Límite adicional de 30 intentos por IP anonimizada cada 10 min; **configura también CAPTCHA/honeypot y consentimiento en Elementor**. El endpoint público devuelve solo fechas/horas/zona, nunca personas ni registros.

Permisos `manage_options`, nonces en cambios administrativos, consultas preparadas y salida escapada. Exportación y anonimización por correo con las herramientas de privacidad de WordPress, también con la utilidad apagada. No borra reservas al apagar, no cifra la base de datos ni sustituye la política de conservación/copias/seguridad del sitio. Las citas anonimizadas conservan el horario, sin cancelar automáticamente. Los correos siguen siendo las acciones configuradas en Elementor; cambiar estados no envía avisos, no hay pagos ni sincronización con calendarios externos ni múltiples profesionales. Cambiar horarios no cancela citas anteriores.

Interfaz integrada con la suite: dos cajas por fila en escritorio >1024px, una en tablet/móvil; tabla con desplazamiento contenido. Pruebas CLI en `tests/appointments.php`, concurrencia con dos procesos en `tests/appointments-race-worker.php` y fixtures locales con Elementor real, todos excluidos del ZIP. No instala ni configura sitios de producción automáticamente.

## Form Elementor: fecha (1.2.55)

Nueva caja opcional **Elementor > Form Elementor: fecha**, apagada por defecto, sin controles adicionales. General para todos los formularios Elementor del sitio: no depende de un dominio, página ni ID. Activa escritura `dd/mm/aaaa` con separadores automáticos e `inputmode="numeric"`, manteniendo el input `date`, su icono y el selector nativo original. Conserva el nombre original y envía una sola fecha ISO (`aaaa-mm-dd`), incluidos los campos nativos que genera Flatpickr en móvil; no convierte los calendarios Flatpickr de escritorio ni otros pickers personalizados. No afecta a hora/datetime ni a campos ajenos a Elementor.

Respeta obligatoriedad, límites mínimo/máximo, paso, campos desactivados y de solo lectura. Rechaza fechas parciales/imposibles, sincroniza selecciones del calendario y restablecimientos, y detecta campos de popups/contenido dinámico sin duplicarlos. Etiqueta accesible del calendario y foco de teclado con subrayado, sin nueva sombra. Funciona independientemente de Global CSS, usa el guardado AJAX existente y conserva las dos columnas de escritorio y una en tablet/móvil. Las pruebas no envían formularios y validan la serialización con Flatpickr 4.6.13; el teclado del sistema necesita confirmación en un teléfono físico. Apagar el módulo restaura el comportamiento original al cargar de nuevo la página. No instala actualizaciones en sitios.

## Foco de formularios Elementor (1.2.54)

**Global CSS styles** elimina automáticamente el `box-shadow` de los campos de Elementor Form al recibir foco, sin añadir otra opción. Se limita a `.elementor-widget-form .elementor-form .elementor-field:focus`: inputs, selects y textarea. No modifica bordes, colores ni outline configurados, ni campos de otros formularios. Depende del interruptor existente; apagado no carga esta regla. Prueba local sin envíos en `tests/elementor-form-focus.php`, excluida del ZIP.

## Scrollbar y actualizaciones (1.2.53)

El ancho predeterminado de la scrollbar es **5 px** para configuraciones nuevas o sin ancho definido; los valores ya guardados, incluido 0, se conservan. El control sigue siendo configurable.

La comprobación de actualizaciones, caché de GitHub y bloqueo de consultas pasan a **5 minutos**. Las instalaciones existentes migran el evento anterior de 10 minutos al nuevo en `init`, sin duplicarlo ni modificar eventos ajenos; se invalidan la caché y el bloqueo antiguos. La desactivación limpia ambos eventos de la suite. WP-Cron depende de las visitas: no garantiza comprobaciones ni instalaciones automáticas en un minuto exacto.

## Icono de carrito para Pedidos (1.2.52)

El acceso independiente de **Pedidos** usa el carrito de compras nativo de WordPress (`dashicons-cart`) en lugar del portapapeles. Mantiene la ubicación debajo de WooCommerce, contador, permisos y funcionamiento de HPOS y pedidos clásicos.

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

El plugin consulta cada cinco minutos la última publicación estable de este repositorio mediante WP-Cron. Si la versión publicada es mayor que la instalada, la actualización aparece en **Plugins > Plugins instalados** y puede aplicarse con **Actualizar ahora** o mediante las actualizaciones automáticas de WordPress. Como WP-Cron depende de la actividad del sitio, la comprobación se ejecuta durante la primera visita recibida después de cumplirse el intervalo.

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
