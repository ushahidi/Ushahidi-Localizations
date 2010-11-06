<?php
	$lang = array(
	'category_color' => array(
		'length' => 'The color field must be 6 characters long.',
		'required' => 'Die Angabe der Farbe ist notwendig.',
	),
	'category_description' => array(
		'required' => 'Das Feld mit der Beschreibung muss ausgefuellt werden.',
	),
	'category_image' => array(
		'size' => 'Please ensure that image uploads sizes are limited to 50KB.',
		'type' => 'The image field does not appear to contain a valid image. The only accepted formats are .JPG, .PNG and .GIF.',
		'valid' => 'The image field does not appear to contain a valid file',
	),
	'category_title' => array(
		'length' => 'The title field must be at least 3 and no more 80 characters long.',
		'required' => 'Das Titelfeld ist notwendig.',
	),
	'parent_id' => array(
		'exists' => 'The parent category does not exist.',
		'numeric' => 'The parent category field must be numeric.',
		'required' => 'The parent category field is required.',
		'same' => 'The category and the parent category cannot be the same.',
	));
?>
