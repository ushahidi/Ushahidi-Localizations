<?php
  $lang = array (
	'category_color' => array(
	  'length' => 'Políčko s barvou musí mít 6 znaků',
	  'required' => 'Barva je povinná položka',
	),
	'category_description' => array(
	  'required' => 'Políčko popis je povinná položka',
	),
	'category_image' => array(
	  'size' => 'Ujistěte se, že obrázky mají méně než 50KB.',
	  'type' => 'Obrázek není ve správném formátu; nahrát je možné obrázky ve formátu .JPG, .PNG a .GIF.',
	  'valid' => 'Obrázek není ve správném formátu',
	),
	'category_title' => array(
	  'length' => 'Název musí mít ne méně než 3 a ne více než 80 znaků',
	  'required' => 'Políčko název je povinná položka',
	),
	'parent_id' => array(
	  'exists' => 'Nadřazená kategorie neexistuje.',
	  'numeric' => 'Nadřazená kategorie musí být v číselném tvaru.',
	  'required' => 'Políčko nadřazená kategorie je povinná položka.',
	  'same' => 'Kategorie a nadřazená kategorie nemůže být stejná.',
	),
);
