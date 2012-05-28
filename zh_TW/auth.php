<?php
	$lang = array(
	'email' => array(
		'email' => '請確認email為正確資料',
		'exists' => '抱歉，這個email帳號已經註冊了',
		'length' => 'email資料需為4～64個字元',
		'required' => 'email為必填',
	),
	'name' => array(
		'length' => '姓名欄位必須填入3~100個字元',
		'required' => '姓名為必填',
		'standard_text' => '使用者名稱出現不能使用的字元',
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
		'length' => '密碼必須為5~16個字元',
		'login error' => '請確認你已輸入正確的密碼',
		'matches' => '請在兩個密碼欄位中輸入一樣的密碼',
		'required' => '密碼為必填欄位',
		'riverid server down' => 'The authentication server is down. Please try again later.',
		'alpha_dash' => 'The password field must have alphabetical characters, the # and @ symbols, numbers, underscores and dashes only',
	),
	'password_confirm' => array(
		'matches' => '密碼確認欄位資料需與密碼欄位資料一致',
	),
	'resetemail' => array(
		'email' => '請確認輸入的email是正確的',
		'invalid' => '抱歉，系統內沒有你的email資料',
		'required' => 'email欄位為必填',
	),
	'role' => array(
		'superadmin_modify' => 'Only a superadmin may modify a superadmin or upgrade a user to admin.',
	),
	'roles' => array(
		'alpha_numeric' => 'Invalid role format.',
		'length' => '角色地欄位字元長度需於5~30之間.',
		'required' => '請至少選擇一種角色',
		'values' => '必須選擇是管理者或使用者',
	),
	'username' => array(
		'admin' => '管理者權限無法被修改',
		'alpha_numeric' => 'The public profile URL field must only contain numbers and letters.',
		'exists' => '抱歉，這個使用者名稱已經被註冊',
		'length' => '使用者帳號必須為2~16個字元',
		'login error' => '請確認你已輸入正確的使用者名稱',
		'required' => '使用者帳號為必填',
		'superadmin' => '超級管理者權限無法被修改',
		'csrf' => 'Possible CSRF attack. Did you really mean to create/edit a user?'
	));
?>
