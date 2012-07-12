<?php
	$lang = array(
	'allow_comments' => array(
		'between' => 'El campo comentarios permitidos no contiene un valor válido.',
		'required' => 'El campo comentarios permitidos es obligatorio.',
	),
	'allow_feed' => array(
		'between' => 'El campo incluir feed no contiene un valor válido?',
		'required' => 'El campo incluir feed es obligatorio.',
	),
	'allow_alerts' => array(
		'between' => 'El campo Permitir Alertas no contiene un valor válido.',
		'required' => 'Es campo Permitir Alertas es obligatorio.',
	),
	'allow_reports' => array(
		'between' => 'El campo informes permitidos no contiene un valor válido.',
		'required' => 'El campo informes permitidos es obligatorio.',
	),
	'allow_stat_sharing' => array(
		'between' => 'El campo Compartir Estadísticas no contiene un valor válido.',
		'required' => 'El campo Compartir Estadísticas es obligatorio.',
	),
	'api' => array(
		'default_record_limit' => 'Número de registros a obtener en cada llamada al API',
		'maximum_record_limit' => 'Máximo número de registros a obtener en cada llamada al API',
		'maximum_requests_per_ip_address' => 'Máximo número de llamadas al API por cada dirección IP cliente',
	),
	'api_akismet' => array(
		'alpha_numeric' => 'El campo Akismet no contiene un valor válido.',
		'length' => 'El campo Akismet no contiene un valor válido.',
	),
	'banner_image' => array(
		'default' => 'Se detectó un problema con este archivo.',
		'size' => 'El tamaño dela archivo excede el límite establecido.'
	),
	'cache_pages' => array(
		'between' => 'El campo Páginas de Caché es obligatorio.',
		'required' => 'El campo Páginas de Caché no contiene un valor válido.',
	),
	'cache_pages_lifetime' => array(
		'in_array' => 'El campo Duración de Páginas en Caché no contiene un valor válido.',
		'required' => 'El campo Duración de Páginas en Caché es obligatorio.',
	),
	'cleanurl' => array(
		'clean_url_disabled' => 'Parece que su servidor no está configurado para soportar URLs limpias. Es necesario que cambie la configuración de su servidor antes de que pueda habilitar las URLs limpias. Vea más información sobre cómo habilitar URLs limpias en este <a href="http://forums.ushahidi.com/topic/server-configuration-for-apache-mod-rewrite" target="_blank">mensaje</a> (en inglés)',
		'clean_url_enabled' => 'Esta opción permite que se pueda acceder a Ushahidi via URLs "limpias", es decir sin "index.php" en la URL.',
		'enable_clean_url' => 'Habilitar URLs limpias.',
		'title' => 'URLs limpias.',
	),
	'clickatell_api' => array(
		'length' => 'El campo número de API Clickatell debe tener a lo más 20 caracteres de largo.',
		'required' => 'El campo número de API Clickatell es obligatorio.',
	),
	'clickatell_password' => array(
		'length' => 'El campo clave de Clickatell debe tener al menos 5 y no más de 50 caracteres de largo.',
		'required' => 'El campo clave de Clickatell es obligatorio.',
	),
	'clickatell_username' => array(
		'length' => 'El campo nombre de usuario Clickatell debe tener a lo más 50 caracteres de largo.',
		'required' => 'El campo nombre de usuario Clickatell es obligatorio.',
	),
	'configure_map' => 'Configure el Mapa',
	'default_location' => 'Ubicación Predeterminada',
	'default_map_all' => array(
		'alpha_numeric' => 'El campo color del feed no contiene un valor válido.',
		'length' => 'El campo color debe tener a lo más 6 caracteres.',
		'required' => 'El campo color es obligatorio.',
	),
	'default_map_view' => 'Vista predeterminada',
	'default_zoom_level' => 'Nivel de detalle predeterminado',
	'download_city_list' => 'Descargar lista de ciudades',
	'email_host' => array(
		'length' => 'El puerto del servidor de correo es demasiado largo',
		'numeric' => 'El puerto del servidor de correo debe ser un número.',
	),
	'email_password' => array(
		'length' => 'La contraseña del servidor de correo debe tener al menos 5 y no más de 50 caracteres de largo.',
		'required' => 'La contraseña del servidor de correo es obligatoria.',
	),
	'email_port' => array(
		'length' => 'El puerto del servidor de correo es demasiado largo',
		'numeric' => 'El puerto del servidor de correo debe ser un número.',
	),
	'email_servertype' => array(
		'length' => 'El campo Tipo de Servidor de Correo excede la longitud máxima.',
		'required' => 'El campo Tipo de Servidor de Correo es obligatorio',
	),
	'email_username' => array(
		'length' => 'El campo Usuario de Servidor de Correo excede la longitud máxima (50).',
		'required' => 'El campo Usuario de Servidor de Correo es obligatorio.',
	),
	'facebook' => array(
		'title' => 'Opciones de configuración de Facebook',
		'description' => 'Para obtener esta información deberá crear una nueva apliçación en',
		'app_id' => 'ID de Aplicación de Facebook',
		'app_secret' => 'Secreto de Aplicación de Facebook'
	),
	'google_analytics' => array(
		'length' => 'El campo Google Analytics debe contener un ID Web Property vÃ¡lido en el formato UA-XXXXX-XX.',
	),
	'https' => array(
	   'enable_https' => 'habilitar HTTPS',
	   'https_disabled' => 'Esta opción permite transmisión de datos sin cifrado (protocolo HTTP)',
	   'https_enabled' => 'Esta opción permite transmisión de datos cifrados (protocolo HTTPS) y brinda mayor seguridad',
	   'title' => 'HTTPS'
	),
	'items_per_page' => array(
		'between' => 'El campo items por página (Frontend) parece no contiene un valor válido.',
		'required' => 'El campo items por página (Frontend) es obligatorio.',
	),
	'items_per_page_admin' => array(
		'between' => 'El campo items por página (Admin) no contiene un valor válido.',
		'required' => 'El campo items por página (Admin) es obligatorio.',
	),
	'map' => array(
		'default_location' => 'Ingrese la información de configuración del proveedor de servicios de mapeo',
		'zoom' => 'Nivel de zoom',
	),
	'map_provider' => array(
		'choose' => 'Escoja un proveedor',
		'enter_api' => 'Ingrese la llave del API',
		'get_api' => 'Obtenga la llave del API',
		'info' => 'Ingrese la información de configuración del proveedor de servicios de mapeo',
		'name' => 'Proveedor de Mapas',
	),
	'map_settings' => 'Configuración del Mapa',
	'multiple_countries' => '¿Este sistema se utiliza en múltiples países?',
	'select_default_location' => 'Por favor escoja el país predeterminado',
	'set_location' => 'Seleccione la ubicación exacta en el mapa',
	'site' => array(
		'allow_clustering' => 'Agrupar los reportes en el mapa',
		'allow_comments' => 'Cualquiera puede agregar información a los reportes',
		'allow_feed' => 'Incluir noticias?',
		'allow_alerts' => 'Permitir que los usuarios se suscriban a las alertas',
		'allow_reports' => 'Permitir a los usuarios a enviar reportes',
		'api_akismet' => 'Llave API de Akismet',
		'banner' => 'Cartel en la página principal',
		'blocks_per_row' => 'Bloques por fila',
		'cache_pages' => 'Páginas de caché',
		'cache_pages_lifetime' => 'Duración de las páginas de caché',
		'checkins' => 'Habilitar Checkins',
		'copyright_statement' => 'Mensaje de derechos de autor',
		'default_category_colors' => 'Colores predeterminados para las categorías',
		'default_category_icons' => 'Icono predeterminado para todas las categorías',
		'delete_banner_image' => 'Borrar el cartel de la página principal',
		'delete_default_map_all_icon' => 'Borrar ícono predeterminado',
		'display_contact_page' => 'Mostrar página de contactos',
		'display_howtohelp_page' => 'Muestra página "Cómo Ayudar"',
		'email_alerts' => 'Dirección de correo electrónico para las alertas',
		'email_notice' => '<span>Para recibir reportes por correo electrónico, por favor configure su cuenta de correo electrónico.</span>',
		'email_site' => 'Dirección de correo electrónico del sistema',
		'google_analytics' => 'Servicio de estadísticas de Google (Google Analytics)',
		'google_analytics_example' => 'Web Property ID - Formato: UA-XXXXX-XX',
		'items_per_page' => 'Items por Página - Página Inicial',
		'items_per_page_admin' => 'Items por Página - Administración',
		'kismet_notice' => 'Evite recibir correo basura utilizando <a href="http://akismet.com/" target="_blank">Akismet</a>. <BR />Puede obtener una llave gratuita registrando una <a href="http://en.wordpress.com/api-keys/" target="_blank">cuenta de WordPress.com</a>',
		'laconica_configuration' => 'Configuración de Laconica',
		'laconica_site' => 'Website Laconica',
		'language' => 'Idioma del sitio',
		'manually_approve_users' => 'Aprobar nuevos usuarios manualmente',
		'map_point_reports' => 'Reportes como puntos',
		'message' => 'Mensaje en página principal',
		'name' => 'Nombre del sitio',
		'private_deployment' => 'Sitio privado',
		'require_email_confirmation' => 'Verificar la dirección de correo de los usuarios',
		'submit_report_message' => 'Enviar un mensaje con el reporte',
		'share_site_stats' => 'Compartir las estadísticas del sitio',
		'tagline' => 'Subtítulo',
		'timezone' => 'Zona horaria',
		'title' => 'Configuración del Sistema',
		'twitter_configuration' => 'Configuración de Twitter',
		'twitter_hashtags' => 'Hashtags (Separar con comas)',
	),
	'site_email' => array(
		'email' => 'El campo email del sitio parece no contener una direcciÃ³n de email vÃ¡lida?',
		'length' => 'El campo email del sitio debe tener al menos 4 y no mÃ¡s de 100 caracteres de largo.',
	),
	'site_name' => array(
		'length' => 'El campo nombre del sitio debe tener al menos tres y no más de 50 caracteres de largo.',
		'required' => 'El campo nombre del sitio es obligatorio.',
	),
	'site_tagline' => array(
		'length' => 'El campo tagline debe tener al menos 3 y no mÃ¡s de 100 caracteres de largo.',
		'required' => 'El campo tagline es obligatorio.',
	),
	'sms' => array(
		'clickatell_api' => 'Clave del API',
		'clickatell_check_balance' => 'Saldo de Cuenta',
		'clickatell_load_balance' => 'Cargar Saldo',
		'clickatell_password' => 'Clave',
		'clickatell_text_1' => 'Asociése al servicio Clickatells <a href="https://www.clickatell.com/central/user/client/step1.php?prod_id=2" target="_blank">seleccionando aquí</a>',
		'clickatell_text_2' => 'Ingrese su información de cuenta de Clickatell',
		'clickatell_username' => 'Usuario',
		'flsms_description' => 'FrontlineSMS es un software libre que convierte un computador en un procesador de mensajes SMS. Permite a los usuarios enviar y recibir mensajes de texto a grupos de usuarios por medio de sus teléfonos móviles. Presione el botón gris para solicitar esta aplicación a FrontlineSMS.com',
		'flsms_download' => 'Descargar Frontline SMS e instalarlo en su equipo',
		'flsms_instructions' => 'Los mensajes recibidos en FrontlineSMS pueden ser sincronizados con este sistema. Se encuentran instrucciones detalladas en <strong><a href="http://wiki.ushahididev.com/doku.php?id=how_to_use_ushahidi_alpha#how_to_setup_frontlinesms_to_sync_with_ushahidi" target="_blank">here</a></strong>. La clave y el URL que se indican a continuación serán necesarias para esta sincronización',
		'flsms_key' => 'Su Clave de Sincronización',
		'flsms_link' => 'Enlace HTTP POST para FrontlineSMS',
		'flsms_synchronize' => 'Sincronizar con Ushahidi',
		'flsms_text_1' => 'Ingrese el número telefónico para ingreso a Frontline SMS',
		'flsms_text_2' => 'Ingrese el número sin "+" ni guiones',
		'option_1' => 'Opción 1: Use Frontline SMS',
		'option_2' => 'Opción 2: Use un sistema SMS externo',
		'title' => 'Opciones de Configuración SMS',
	),
	'sms_no1' => array(
		'length' => 'El campo teléfono 1 no es válido.',
		'numeric' => 'El campo teléfono 1 debe contener sólo números.',
	),
	'sms_no2' => array(
		'length' => 'El campo teléfono 2 es demasiado largo',
		'numeric' => 'El campo teléfono 2 debe contener sólo números.',
	),
	'sms_no3' => array(
		'length' => 'El campo teléfono 3 es demasiado largo',
		'numeric' => 'El campo teléfono 3 debe contener sólo números.',
	)
);
?>
