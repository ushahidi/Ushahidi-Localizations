<?php
	$lang = array(
	'category_color' => array(
		'length' => '컬러필드 입력은 6자 이상이어야 합니다.',
		'required' => '컬러필드를 입력해주세요.',
	),
	'category_description' => array(
		'required' => '상세설명을 입력해주세요.',
	),
	'category_image' => array(
		'size' => '업로드한 이미지 크기가 50KB이하인지 확인바랍니다.',
		'type' => '다음의 이미지 포맷만 사용이 가능합니다. .JPG, .PNG and .GIF. 이 아닐 경우 이미지가 나타나지 않습니다.',
		'valid' => '허용되지 않은 이미지 포맷의 경우 이미지가 나타나지 않습니다.',
	),
	'category_title' => array(
		'length' => '제목은 최소3이상 80자 이하여야 합니다.',
		'required' => '제목을 입력해주세요.',
	),
	'parent_id' => array(
		'exists' => '상위 카테고리가 존재하지 않습니다.',
		'numeric' => '상위 카테고리는 숫자여야 합니다.',
		'required' => '상위 카테고리를 입력해주세요.',
		'same' => '상위 카테고리와 하위 카테고리는 동일할 수 없습니다.',
	));
?>

