<?php
  $lang = array (
	'email' => array(
	  'email' => 'Emailová adresa nejspíše není ve správném formátu',
	  'exists' => 'Je nám líto, uživatelský účet už pro tuto emailovou adresu existuje',
	  'length' => 'Emailová adresa musí mít ne méně než 4 znaky a ne více než 64 znaků',
	  'required' => 'Emailová adresa je povinná položka',
	),
	'name' => array(
	  'length' => 'Políčko se jménem musí mít ne méně než 3 znaky a ne více než 100 znaků',
	  'required' => 'Políčko se jménem je povinná položka',
	  'standard_text' => 'Uživatelský login obsahuje nepovolené znaky',
	),
	'password' => array(
	  'alpha_numeric' => 'Heslo může obsahovat pouze čísla a písmena',
	  'length' => 'Heslo musí mít ne méně 5 a ne více než 16 znaků',
	  'login error' => 'Please check that you entered the correct password.',
	  'matches' => 'Vložte stejné heslo v obou políčkách pro zadání hesla',
	  'required' => 'Heslo je povinné položka',
	),
	'password_confirm' => array(
	  'matches' => 'Hesla se musí shodovat',
	),
	'resetemail' => array(
	  'email' => 'Je emailová adresa zadaná ve správném formátu?',
	  'invalid' => 'Je nám líto, Vaše adresa nebyla rozpoznána',
	  'required' => 'Emailová adresa je povinná položka',
	),
	'roles' => array(
	  'alpha_numeric' => 'Neplatný formát role',
	  'length' => 'Políčko role musí mít ne méně než 5 a ne více než 30 znaků',
	  'required' => 'Je třeba definoval alespoň jednu roli',
	  'values' => 'Je třeba vybrat buď ADMIN anebo USER (uživatelskou) roli',
	),
	'username' => array(
	  'admin' => 'Role admina není možné upravit',
	  'alpha' => 'Položka uživatelský login musí obsahovat pouze písmena',
	  'exists' => 'Je nám líto, tento login už používá jiný uživatel/ka',
	  'length' => 'Položka uživatelský login musí mít méně než 2 a více než 16 znaků',
	  'login error' => 'Please check that you entered the correct username.',
	  'required' => 'Políčko s uživatelským jménem je povinná položka',
	  'superadmin' => 'Roli super admina není možné upravit',
	),
);
