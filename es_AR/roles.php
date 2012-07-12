<?php
	$lang = array(
	'description' => array(
		'length' => 'El campo descripción debe tener al menos 3 y no más de 100 caracteres.',
		'required' => 'El campo descripción es requerido.',
	),
	'name' => array(
		'alpha_numeric' => 'El campo nombre debe contener solo números y letras.',
		'length' => 'El campo nombre debe tener al menos 2 y no más de 30 caracteres.',
		'nomodify' => 'El rol de SuperAdmin no puede ser modificado.',
		'required' => 'El campo nombre es requerido.',
	)
	'access_level' => array(
		'numeric' => 'Nivel de accesso debe ser un número entre 0 y 100',
		'required' => 'Nivel de accesso debe ser un número entre 0 y 100',
	)
    'permissions' => array(
		'reports_view' => 'Ver Reportes',
		'reports_edit' => 'Crear/Editar Reportes',
        'reports_evaluation' => 'Approbar Reportes',
        'reports_comments' => 'Administrar Comentarios',
        'reports_download' => 'Descargar Reportes',
        'reports_upload' => 'Subir Reportes',
        'messages' => 'Administrar Mensajes',
        'messages_reporters' => 'Administrar Informantes',
        'stats' => 'Ver Estadísticas',
        'settings' => 'Modificar Configuración',
        'manage' => 'Administrar el Panel',
        'users' => 'Administrar Usuarios',        
	)
	);
?>
