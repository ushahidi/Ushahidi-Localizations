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
		'length' => 'The password field must be at least 5 and no more 16 characters long.',
		'login error' => 'Please check that you entered the correct password.',
		'required' => 'The password field is required.',
	),
	'password_confirm' => array(
		'matches' => 'The password confirmation field must match the password field.',
	),
	'roles' => array(
		'required' => 'You must define at least one role.',
		'values' => 'You must select either ADMIN or USER role.',
	),
	'username' => array(
		'admin' => 'The admin user role cannot be modified.',
		'exists' => 'Sorry, this username is already in use.',
		'length' => 'The username field must be at least 2 and no more 16 characters long.',
		'login error' => 'Please check that you entered the correct username.',
		'required' => 'The username field is required.',
	));
?>
