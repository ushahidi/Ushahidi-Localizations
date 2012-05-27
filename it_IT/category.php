<?php
	$lang = array(
	'category_color' => array(
		'length' => 'Il campo colore deve contenere 6 caratteri.',
		'required' => 'Il campo colore ',
	),
	'category_description' => array(
		'required' => 'Il campo descrizione ',
	),
	'category_image' => array(
		'size' => 'Assicurati che il peso delle immagini caricate non sia superiore a 50KB.',
		'type' => 'Il campo immagine non contiene un\'immagine valida. I soli formati accettati sono .JPG, .PNG e .GIF.',
		'valid' => 'Il campo immagine non contiene un file valido',
	),
	'category_title' => array(
		'length' => 'Il campo titolo deve essere lungo almeno 3 caratteri non pi',
		'required' => 'Il campo titolo ',
	),
	'parent_id' => array(
		'exists' => 'La categoria madre non esiste.',
		'numeric' => 'Il campo categoria madre deve essere numerico.',
		'required' => 'Il campo categoria madre ',
		'same' => 'La categoria e la categoria madre non possono essere uguali.',
	));
?>
