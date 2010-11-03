<?php
	$lang = array(
	'category_color' => array(
		'length' => 'Vul een kleurcode in van 6 tekens, zonder # er voor.',
		'required' => 'kleur is verplicht.',
	),
	'category_description' => array(
		'required' => 'Omschrijving is verplicht.',
	),
	'category_image' => array(
		'size' => 'Afbeeldingen mogen niet groter zijn dan 50KB.',
		'type' => 'De afbeelding wordt niet geaccepteerd. Selecteer een afbeelding van het type .JPG, .PNG of .GIF.',
		'valid' => 'Het bestand met de afbeelding is ongeldig',
	),
	'category_title' => array(
		'length' => 'Titel moet tenminste 3 en maximaal 80 tekens bevatten',
		'required' => 'Titel is verplicht.',
	),
	'parent_id' => array(
		'exists' => 'De hoofdcategorie bestaat niet.',
		'numeric' => 'De hoofdcategorie moet een nummer zijn.',
		'required' => 'De hoofdcategorie is verplicht.',
		'same' => 'Categorie en hoofdcategorie kunnen niet hetzelde zijn.',
	));
?>
