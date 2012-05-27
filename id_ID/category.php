<?php
	$lang = array(
	'category_color' => array(
		'length' => 'Panjang isian warna harus sejumlah 6 karakter',
		'required' => 'Isian warna tidak boleh dikosongkan',
	),
	'category_description' => array(
		'required' => 'Isian keterangan tidak boleh dikosongkan',
	),
	'category_image' => array(
		'size' => 'Mohon pastikan besar gambar yang di unggah tidak lebih dr 50kb',
		'type' => 'Format gambar yang disertakan tidak terterima. Format yang berlaku hanya .JPG, .PNG dan .GIF',
		'valid' => 'Format gambar yang disertakan tidak terterima',
	),
	'category_title' => array(
		'length' => 'Panjang judul harus minimal 3 karakter tapi tidak lebih dr 80 karakter',
		'required' => 'Isian judul tidak boleh dikosongkan',
	),
	'parent_id' => array(
		'exists' => 'Induk kategorinya tidak ada',
		'numeric' => 'Induk kategori harus berupa angka',
		'required' => 'Induk kategori tidak boleh dikosongkan',
		'same' => 'Kategori tidak boleh sama dengan induk kategori',
	));
?>
