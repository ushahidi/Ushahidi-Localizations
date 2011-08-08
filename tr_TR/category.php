<?php
	$lang = array(
	'category_color' => array(
		'length' => 'Renk ismi en az 6 karakterden oluşmalıdır.',
		'required' => 'Renk kısmı boş bırakılamaz.',
	),
	'category_description' => array(
		'required' => 'Açıklama kısmı boş bırakılamaz.',
	),
	'category_image' => array(
		'size' => 'En fazla 50KB resim yükleme hakkınız olduğu aklınızda bulunsun.',
		'type' => 'Seçilen dosya türü geçerli değil. Geçerli olan dosya türleri .JPG, .PNG, .GIF olmalıdır.',
		'valid' => 'Resim yükleme bölümü geçersiz bir dosya türü içermektedir',
	),
	'category_title' => array(
		'length' => 'Başlık en az 3, en fazla 80 karakter uzunluğunda olmalıdır.',
		'required' => 'Başlık kısmı boş bırakılamaz.',
	),
	'parent_id' => array(
		'exists' => 'Ebeveyn kategorisi girilmedi.',
		'numeric' => 'Ebeveyn kategorisi bölümü numerik (sayı) olmalıdır.',
		'required' => 'Ebeveyn kategorisinin girilmesi gereklidir.',
		'same' => 'Kategori ve ebeveyn kategorisi aynı olamaz.',
	));
?>
