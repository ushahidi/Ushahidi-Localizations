<?php

$lang = array
(
	'layer_name' => array
	(
		'required'		=> 'Մուտքագրեք անվանումը:',
		'length'		=> 'Անվանումը պետք է պարունակի առնվազն 3 և առավելագույնը` 80 նիշ:',
	),
	
	'layer_url' => array
	(
		'url' => 'Մուտքագրեք ճիշտ URL: Օր. http://www.ushahidi.com/layerl.kml',
		'atleast' => 'Նշեք կա՛մ KML/KMZ Url, կա՛մ KML/KMZ ֆայլ:',
		'both' => 'Դուք չեք կարող միաժամանակ նշել և՛ KML/KMZ Url, և՛ KML/KMZ ֆայլ:'
	),
	
	'layer_color' => array
	(
		'required'		=> 'Նշեք շերտավորման գույնը:',
		'length'		=> 'Գույնի երկարությունը պետք է լինի 6 նիշ:',
	),
	
	'layer_file' => array
	(
		'valid'		=> 'Ֆայլը վնասված է կամ չունի ճիշտ ձևաչափ:',
		'type'		=> 'Ֆայլը վնասված է կամ չունի ճիշտ ձևաչափ: Ընդունելի ձևաչափերն են` .KMZ, .KML:'
	),	
);