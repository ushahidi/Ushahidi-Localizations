<?php
	$lang = array(
	'category_color' => array(
		'length' => 'O campo cor deve ter 6 caracteres.',
		'required' => 'É necessário preencher o campo cor.',
	),
	'category_description' => array(
		'required' => 'É necessário preencher o campo descrição.',
	),
	'category_image' => array(
		'size' => 'Certifique-se de que as fotos enviadas têm até 50KB.',
		'type' => 'O campo de imagem parece não conter uma imagem válida. Os únicos formatos aceitos são .JPG, .PNG e .GIF.',
		'valid' => 'O campo de imagem parece não conter um arquivo válido.',
	),
	'category_title' => array(
		'length' => 'O campo título deve ter pelo menos 3 e no máximo 80 caracteres.',
		'required' => 'É necessário preencher o campo título.',
	),
	'parent_id' => array(
		'exists' => 'A categoria principal não existe.',
		'numeric' => 'É necessário preencher o campo de categoria principal com números.',
		'required' => 'É necessário preencher o campo de categoria principal.',
		'same' => 'A categoria não pode ser a mesma da categoria principal.',
	));
?>
