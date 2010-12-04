<?php
	$lang = array(
	'email' => array(
		'email' => 'O campo do email parece não conter um endereço de email válido.',
		'exists' => 'Um nome de usuário já foi registrado com esse email.',
		'length' => 'O campo do email deve ter pelo menos 4 e no máximo 64 caracteres.',
		'required' => 'É necessário preencher o campo do email.',
	),
	'name' => array(
		'length' => 'O nome deve ter pelo menos 3 e no máximo 100 caracteres.',
		'required' => 'É necessário preencher o campo do nome.',
		'standard_text' => 'O campo do nome de usuário contém caracteres não permitidos.',
	),
	'password' => array(
		'alpha_numeric' => 'A senha deve conter apenas números e letras.',
		'length' => 'A senha deve ter pelo menos 5 e no máximo 16 caracteres.',
		'login error' => 'Verifique se a senha foi digitada corretamente.',
		'matches' => 'Digite a mesma senha nos dois campos.',
		'required' => 'É necessário preencher o campo senha.',
	),
	'password_confirm' => array(
		'matches' => 'O campo de confirmação da senha deve corresponder à senha digitada no primeiro campo.',
	),
	'resetemail' => array(
		'email' => 'O campo do email parece não conter um endereço de email válido.',
		'invalid' => 'Não foi possível encontrar esse email.',
		'required' => 'É necessário preencher o campo de email.',
	),
	'roles' => array(
		'alpha_numeric' => 'O formato do perfil é inválido',
		'length' => 'O campo perfil deve ter pelo menos 5 e no máximo 30 caracteres.',
		'required' => 'É necessário definir pelo menos um perfil.',
		'values' => 'É necessário definir o perfil de ADMIN ou de USUÁRIO.',
	),
	'username' => array(
		'admin' => 'Não é possível modificar o perfil de admin.',
		'alpha' => 'O campo nome de usuário só pode conter letras.',
		'exists' => 'Esse nome de usuário já está em uso.',
		'length' => 'O nome de usuário deve ter pelo menos 2 e no máximo 16 caracteres.',
		'login error' => 'Verifique se o nome de usuário foi digitado corretamente.',
		'required' => 'É necessário preencher o campo nome de usuário.',
		'standard_text' => 'O campo do nome de usuário contém caracteres não permitidos.',
		'superadmin' => 'Não é possível modificar o perfil de super admin.',
	));
?>
