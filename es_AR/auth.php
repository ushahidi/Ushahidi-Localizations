<?php
	$lang = array(
	'email' => array(
		'email' => 'El campo correo electrónico parece no contener una dirección de correo electrónico válida.',
		'exists' => 'Lo siento, ya existe una cuenta de usuario que usa ese correo electrónico.',
		'length' => 'El campo correo electrónico debe tener por lo menos 4 y no mas de 64 caracteres.',
		'required' => 'El campo correo electrónico es obligatorio.',
	),
	'name' => array(
		'length' => 'El campo nombre completo debe tener por lo menos 3 y no mas de 100 caracteres.',
		'required' => 'El campo nombre completo es obligatorio.',
		'standard_text' => 'El campo nombre de usuario contiene caracteres no permitidos.',
	),
	'password' => array(
		'alpha_numeric' => 'El campo clave puede contener solo números y letras.',
		'length' => 'El campo clave debe tener por lo menos 5 y no mas de 16 caracteres de largo.',
		'login error' => 'Por favor revise que ha ingresado la clave correcta.',
		'matches' => 'Por favor ingrese la misma clave en ambos campos.',
		'required' => 'El campo clave es obligatorio.',
	),
	'password_confirm' => array(
		'matches' => 'El campo confirmación de la clave debe ser igual al campo clave.',
	),
	'resetemail' => array(
		'email' => 'El campo correo electrónico parece no contener una dirección de correo electrónico valida.',
		'invalid' => 'Lo siento, no tenemos su dirección de correo electrónico',
		'required' => 'El campo correo electrónico es obligatorio.',
	),
	'roles' => array(
		'alpha_numeric' => 'El formato del rol es inválido.',
		'length' => 'El campo rol debe tener al menos 5 y no más de 30 caracteres de largo.',
		'required' => 'Usted debe definir al menos un rol.',
		'values' => 'Usted debe seleccionar el rol ADMIN o USUARIO.',
	),
	'username' => array(
		'admin' => 'El rol del usuario administrador no puede ser modificado.',
		'alpha' => 'El campo nombre de usuario solo puede contener letras.',
		'exists' => 'Lo siento, este nombre de usuario ya está siendo usado.',
		'length' => 'El campo nombre de usuario debe tener por lo menos 2 y no más de 16 caracteres.',
		'login error' => 'Por favor revise que ingreso el nombre de usuario correcto.',
		'required' => 'El campo nombre de usuario es obligatorio.',
		'superadmin' => 'El rol del usuario super-administrador no puede ser modificado.',
	));
?>
