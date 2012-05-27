<?php
	$lang = array(
	'email' => array(
		'email' => '邮件地址格式不正确',
		'exists' => '对不起，这个邮件地址已被使用',
		'length' => '邮件地址长度须在4至64个字符之间',
		'required' => '邮件是必填项',
	),
	'name' => array(
		'length' => '全名的长度须在3至100个字符之间',
		'required' => '全名是必填项',
		'standard_text' => '用户名包含不合法字符',
	),
	'current_password' => array(
		'length' => 'The password field must be at least 8 characters long.',
		'login error' => 'Please check that you entered the correct email and password.',
		'matches' => 'Please enter the same password in the two password fields.',
		'required' => 'The password field is required.',
		'alpha_dash' => 'The password field must have alphabetical characters, the # and @ symbols, numbers, underscores and dashes only',
		'incorrect' => 'The current password you entered for your account is incorrect. Please try again.',
	),
	'new_password' => array(
		'length' => 'The password field must be at least 8 characters long.',
		'login error' => 'Please check that you entered the correct email and password.',
		'matches' => 'Please enter the same password in the two password fields.',
		'required' => 'The password field is required.',
		'alpha_dash' => 'The password field must have alphabetical characters, the # and @ symbols, numbers, underscores and dashes only',
	),
	'password' => array(
		'default' => 'There has been an error attempting to log you in.',
		'length' => 'The password field must be at least 8 characters long.',
		'login error' => 'Please check that you entered the correct email and password.',
		'matches' => 'Please enter the same password in the two password fields.',
		'required' => 'The password field is required.',
		'riverid server down' => 'The authentication server is down. Please try again later.',
		'alpha_dash' => 'The password field must have alphabetical characters, the # and @ symbols, numbers, underscores and dashes only',
	),
	'password_confirm' => array(
		'matches' => '你输入的两次密码不一致',
	),
	'resetemail' => array(
		'email' => '邮件地址格式不正确',
		'invalid' => '对不起，我们没有你的邮件地址',
		'required' => '邮件是必填项',
	),
	'role' => array(
		'superadmin_modify' => 'Only a superadmin may modify a superadmin or upgrade a user to admin.',
	),
	'roles' => array(
		'alpha_numeric' => '无效的角色格式',
		'length' => '角色名不得少于5个字符，不得多于30个字符',
		'required' => '至少要定义一个角色',
		'values' => '必须选择 ADMIN 或 USER 角色.',
	),
	'username' => array(
		'admin' => '管理员帐户不能被修改',
		'alpha_numeric' => 'The public profile URL field must only contain numbers and letters.',
		'exists' => '对不起，这个用户名已被使用',
		'length' => '用户名长度须在2至16个字符之间',
		'login error' => '你输入的用户名不正确',
		'required' => '用户名是必填项',
		'superadmin' => '超级管理员帐户不能被修改',
		'csrf' => 'Possible CSRF attack. Did you really mean to create/edit a user?'
	));
?>
