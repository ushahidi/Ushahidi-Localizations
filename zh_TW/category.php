<?php
	$lang = array(
	'category_color' => array(
		'length' => '顏色欄位字元至少需六碼.',
		'required' => '顏色欄位為必填.',
	),
	'category_description' => array(
		'required' => '描述欄位為必填.',
	),
	'category_image' => array(
		'size' => '請確認上傳地圖檔未超過50KB.',
		'type' => '請確認上傳圖檔格式，需為JPG,PNG或GIF.',
		'valid' => '請確認上傳圖檔為正確檔案格式',
	),
	'category_title' => array(
		'length' => '標題欄位字元長度為3～80之間.',
		'required' => '標題欄位為必填.',
	),
	'parent_id' => array(
		'exists' => '上一層目錄並不存在.',
		'numeric' => '上一層目錄需為數字.',
		'required' => '上一層欄位為必填.',
		'same' => '目錄與上一層目錄名稱不得相同.',
	));
?>
