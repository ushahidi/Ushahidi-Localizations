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
	'password' => array(
		'alpha_numeric' => '密碼需含有數字與英文字母',
		'length' => '密碼必須為5~16個字元',
		'login error' => '請確認你已輸入正確的密碼',
		'matches' => '請在兩個密碼欄位中輸入一樣的密碼',
		'required' => '密碼為必填欄位',
	),
	'password_confirm' => array(
		'matches' => '密碼確認欄位資料需與密碼欄位資料一致',
	),
	'resetemail' => array(
		'email' => '請確認輸入的email是正確的',
		'invalid' => '抱歉，系統內沒有你的email資料',
		'required' => 'email欄位為必填',
	),
	'roles' => array(
		'alpha_numeric' => 'Invalid role format.',
		'length' => '角色地欄位字元長度需於5~30之間.',
		'required' => '請至少選擇一種角色',
		'values' => '必須選擇是管理者或使用者',
	),
	'username' => array(
		'admin' => '管理者權限無法被修改',
		'alpha' => '使用者名稱包含不能使用的字元',
		'exists' => '抱歉，這個使用者名稱已經被註冊',
		'length' => '使用者帳號必須為2~16個字元',
		'login error' => '請確認你已輸入正確的使用者名稱',
		'required' => '使用者帳號為必填',
		'superadmin' => '超級管理者權限無法被修改',
	));
?>
