<?php
	$lang = array(
	'email' => array(
		'email' => 'The email field does not appear to contain a valid email address?',
		'exists' => 'Sorry, a user account already exists for this email address.',
		'length' => 'The email field must be at least 4 and no more 64 characters long.',
		'required' => 'The email field is required.',
	),
	'name' => array(
		'length' => 'The full name field must be at least 3 and no more 100 characters long.',
		'required' => 'The full name field is required.',
		'standard_text' => 'The username field contains disallowed characters.',
	),
	'password' => array(
		'alpha_numeric' => '',
		'length' => 'The password field must be at least 5 and no more 16 characters long.',
		'login error' => 'Please check that you entered the correct password.',
		'matches' => '',
		'required' => 'The password field is required.',
		'standard_text' => '',
	),
	'password_confirm' => array(
		'matches' => 'The password confirmation field must match the password field.',
	),
	'resetemail' => array(
		'email' => '',
		'invalid' => '',
		'required' => '',
	),
	'roles' => array(
		'alpha_numeric' => '',
		'length' => '',
		'required' => 'You must define at least one role.',
		'values' => 'You must select either ADMIN or USER role.',
	),
	'username' => array(
		'admin' => 'The admin user role cannot be modified.',
		'alpha' => '',
		'exists' => 'Sorry, this username is already in use.',
		'length' => 'The username field must be at least 2 and no more 16 characters long.',
		'login error' => 'Please check that you entered the correct username.',
		'required' => 'The username field is required.',
		'superadmin' => '',
	));
?>
