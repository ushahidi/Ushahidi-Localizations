<?php
	$lang = array(
	'email' => array(
		'email' => 'Érvénytelen e-mail cím szerepel az e-mail mezőben.',
		'exists' => 'Már létezik ezzel az e-mail címmel regisztrált felhasználó.',
		'length' => 'Az e-mail mező legalább 4 és legfeljebb 64 karakter hosszú lehet.',
		'required' => 'Az e-mail mezőt kötelező kitölteni.',
	),
	'name' => array(
		'length' => 'A teljes név mezőben legalább 3 és legfeljebb 100 karakter szerepelhet.',
		'required' => 'A teljes név mező kitöltése kötelező.',
		'standard_text' => 'A felhasználónévben nem engedélyezett karakter szerepel.',
	),
	'password' => array(
		'alpha_numeric' => 'A jelszóban csak betűk és számok lehetnek.',
		'length' => 'A jelszó minimum 5  és maximum 16 karakter hosszú lehet.',
		'login error' => '',
		'matches' => 'Kérem, ugyanazt a jelszót adja meg mindkét mezőben.',
		'required' => 'A jelszó mezőt kötelező kitölteni.',
		'standard_text' => '',
	),
	'password_confirm' => array(
		'matches' => 'A jelszó megerősítésének egyeznie kell a megadott jelszóval.',
	),
	'resetemail' => array(
		'email' => 'Érvénytelen e-mail címet adott meg?',
		'invalid' => 'Nem találjuk ezt az e-mail címet.',
		'required' => 'Az e-mail mező kitöltése kötelező.',
	),
	'roles' => array(
		'alpha_numeric' => 'Érvénytelen formátumú felhasználótípus.',
		'length' => 'A felhasználó típusa mezőben legalább 5 és maximum 30 karakter szerepelhet.',
		'required' => 'Legalább egy felhasználói típust be kell állítani.',
		'values' => 'Kérem, válasszon az ADMIN vagy USER felhasználói típusok közül.',
	),
	'username' => array(
		'admin' => 'Az admin felhasználótípus nem változtatható meg.',
		'alpha' => 'A felhasználónévben csak betűk szerepelhetnek.',
		'exists' => 'Ez a felhasználónév már foglalt.',
		'length' => 'A felhasználónév legalább 2, maximum 16 karakter hosszú lehet.',
		'login error' => '',
		'required' => 'A felhasználónév mező kitöltése kötelező',
		'superadmin' => 'A szuper admin felhasználótípus módosítása nem lehetséges.',
	));
?>
