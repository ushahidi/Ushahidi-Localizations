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
		'length' => '密码必须有至少8个字符的长度。',
		'login error' => '请您输入正确的电子邮件地址和密码。',
		'matches' => '两次输入的密码不一致。',
		'required' => '请输入密码。',
		'alpha_dash' => '密码只能由字母，数字和符号＃、@、_以及-组成。',
		'incorrect' => '您输入的账户密码是不正确的，请再试一次。',
	),
	'new_password' => array(
		'length' => '用户密码必须有至少8个字符的长度。',
		'login error' => '请您输入正确的电子邮件地址和密码。',
		'matches' => '两次输入的密码不一致。',
		'required' => '请输入密码。',
		'alpha_dash' => '密码只能由字母，数字和符号＃、@、_以及-组成。',
	),
	'password' => array(
		'default' => '登录发生了一个错误。',
		'length' => '账户密码必须有至少8个字符的长度。',
		'login error' => '请您输入正确的电子邮件地址和密码。',
		'matches' => '两次输入的密码不一致。',
		'required' => '请输入密码。',
		'riverid server down' => '访问认证服务器失败，请稍后再试。',
		'alpha_dash' => '密码只能由字母，数字和符号＃、@、_以及-组成。',
	),
	'password_confirm' => array(
		'matches' => '两次输入的密码不一致。',
	),
	'resetemail' => array(
		'email' => '邮件地址格式不正确',
		'invalid' => '对不起，我们没有你的邮件地址',
		'required' => '邮件是必填项',
	),
	'role' => array(
		'superadmin_modify' => '只有超级管理员可以修改超级管理员或升级用户到管理员。',
	),
	'roles' => array(
		'alpha_numeric' => '无效的角色格式',
		'length' => '角色名不得少于5个字符，不得多于30个字符',
		'required' => '至少要定义一个角色',
		'values' => '必须选择 ADMIN 或 USER 角色.',
	),
	'username' => array(
		'admin' => '管理员帐户不能被修改',
		'alpha_numeric' => '公开的URL只能包含数字和字母。',
		'exists' => '对不起，这个用户名已被使用',
		'length' => '用户名长度须在2至16个字符之间',
		'login error' => '你输入的用户名不正确',
		'required' => '用户名是必填项',
		'superadmin' => '超级管理员帐户不能被修改',
		'csrf' => '可能的CSRF(跨站请求伪造)攻击。你真的要创建/编辑用户？'
	));
?>
