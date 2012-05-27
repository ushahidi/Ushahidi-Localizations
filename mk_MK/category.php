<?php
	$lang = array(
	'category_color' => array(
		'length' => 'The color field must be 6 characters long.',
		'required' => 'The color field is required.',
	),
	'category_description' => array(
		'required' => 'Описот е задолжителен.',
	),
	'category_image' => array(
		'size' => 'Please ensure that image uploads sizes are limited to 50KB.',
		'type' => 'The image field does not appear to contain a valid image. The only accepted formats are .JPG, .PNG and .GIF.',
		'valid' => 'The image field does not appear to contain a valid file',
	),
	'category_title' => array(
		'length' => 'Насловот мора да биде најмалку 3 а најмногу 80 карактери долг.',
		'required' => 'Насловот е задолжителен.',
	),
	'parent_id' => array(
		'already_parent' => 'You cannot subcategorize a category with subcategories.',
		'exists' => 'The parent category does not exist.',
		'numeric' => 'The parent category field must be numeric.',
		'parent_trusted' => 'The parent category cannot be a special category',
		'required' => 'The parent category field is required.',
		'same' => 'The category and the parent category cannot be the same.',
		'special' => 'Special categories cannot be subcategorised.',
		
	));
?>
