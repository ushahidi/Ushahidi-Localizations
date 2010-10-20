<?php
	$lang = array(
	'category_color' => array(
		'length' => 'A szín mező legalább 6 karakter hosszú kell hogy legyen.',
		'required' => 'A szín mező kitöltése szükséges.',
	),
	'category_description' => array(
		'required' => 'A leírás mező kitöltése szükséges.',
	),
	'category_image' => array(
		'size' => 'A képek feltöltési mérete 50kb-ra van korlátozva.',
		'type' => 'A kép meő nem tartalmaz megfelelő formátumú képet. Az elfogadott formátumok: JPG, PNG és GIF',
		'valid' => 'Az kép mező nem tartalmaz érvényes fájlt.',
	),
	'category_title' => array(
		'length' => 'A cím mező legalább 3 karakter kell tartalmazzon és nem lehet hosszabb 80 karakternél.',
		'required' => 'A cím mező kitöltése szükséges.',
	),
	'parent_id' => array(
		'exists' => 'A szülő kategória nem létezik.',
		'numeric' => 'A szülő kategória mezőnek számnak kell lennie.',
		'required' => 'A szülő kategória mező kitöltése szükséges.',
		'same' => 'A kategória és a szülő kategória nem lehet ugyanaz.',
	));
?>
