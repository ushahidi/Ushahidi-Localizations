<?php
	$lang = array(
	'email' => array(
		'email' => 'שדה האימייל אינו מכיל כתובת אימייל תקנית?',
		'exists' => 'כבר קיים במערכת משתמש הרשום תחת כתובת אימייל זו.',
		'length' => 'שדה האימייל חייב להכיל לפחות 4 תווים ולא יותר מ-64 תווים.',
		'required' => 'שדה האימייל הינו שדה חובה.',
	),
	'name' => array(
		'length' => 'שם המלא חייב להכיל לפחות 34 תווים ולא יותר מ-100 תווים.',
		'required' => 'שדה השם הינו שדה חובה.',
		'standard_text' => 'שדה שם המשתמש מכיל תווים שאינם מותרים לשימוש.',
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
		'length' => 'הסיסמה חייבת להכיל לפחות 5 תווים ולא יותר מ-16 תווים.',
		'login error' => 'אנא בדוק שהזנת את הסיסמה הנכונה.',
		'matches' => 'אנא הקלד את אותה הסיסמה לכל אחד משני שדות הסיסמה.',
		'required' => 'חובה להזין סיסמה.',
		'riverid server down' => 'The authentication server is down. Please try again later.',
		'alpha_dash' => 'The password field must have alphabetical characters, the # and @ symbols, numbers, underscores and dashes only',
	),
	'password_confirm' => array(
		'matches' => 'אנא הקלד את אותה הסיסמה שהוקלדה בשדה הסיסמה.',
	),
	'resetemail' => array(
		'email' => 'שדה האימייל אינו מכיל כתובת אימייל תקנית?',
		'invalid' => 'אין ברשותנו את כתובת האימייל שלך',
		'required' => 'שדה האימייל הינו שדה חובה.',
	),
	'role' => array(
		'superadmin_modify' => 'Only a superadmin may modify a superadmin or upgrade a user to admin.',
	),
	'roles' => array(
		'alpha_numeric' => 'תבנית תפקיד שגויה',
		'length' => 'שדה התפקיד חייב להכיל לפחות 5 תווים ולא יותר מ-30 תווים.',
		'required' => 'עליך להגדיר לפחות תפקיד אחד.',
		'values' => 'יש לבחור תפקיד בין משתמש (USER) לבין מפעיל (ADMIN).',
	),
	'username' => array(
		'admin' => 'לא ניתן לשנות את תפקיד המפעיל.',
		'alpha' => 'על שם המשתמש להכיל אותיות בלבד.',
		'exists' => 'שם המשתמש שבחרת כבר קיים במערכת.',
		'length' => 'שם המשתמש חייב להכיל לפחות 2 תווים ולא יותר מ-16 תווים.',
		'login error' => 'אנא בדוק שהזנת את שם המשתמש הנכון.',
		'required' => 'שם המשתמש הינו שדה חובה.',
		'superadmin' => 'לא ניתן לשנות את תפקיד מפעיל-על',
		'csrf' => 'Possible CSRF attack. Did you really mean to create/edit a user?'
	));
?>
