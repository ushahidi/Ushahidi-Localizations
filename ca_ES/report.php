<?php
	$lang = array(
	'comments_form_error' => 'error!',
	'country_name' => array(
		'single_country' => 'This deployment spans within one country only. Please make sure the report location is within the country '.ORM::factory('country', Kohana::config('settings.default_country'))->country.'.'
	),
	'custom_field' => array(
		'values' => 'Please enter a valid value for one of your custom form items',
	),
	'data_include' => array(
		'between' => 'Please select a valid item to include in the download',
		'numeric' => 'Please select a valid item to include in the download',
	),
	'data_point' => array(
		'between' => 'Please select a valid type of report to download',
		'numeric' => 'Please select a valid type of report to download',
		'required' => 'Please select a valid type of report to download',
	),
	'from_date' => array(
		'date_mmddyyyy' => 'El camp de data DES DE sembla no contenir una data vàlida',
		'range' => 'Si us plau, entreu una data vàlida DES DE. No pot ser més gran que la data d`avui.',
	),
	'incident_active' => array(
		'between' => 'Si us plau, entreu un valor vàlid per a Aprovar Aquest Llistat',
		'required' => 'Si us plau, entreu un valor vàlid per a Aprovar Aquest Llistat',
	),
	'incident_ampm' => array(
		'validvalues' => 'El camp am/pm sembla contenir un valor no vàlid',
	),
	'incident_category' => array(
		'numeric' => 'El camp "Categories" no sembla tenir una categoria vàlida',
		'required' => 'El camp "Categories" és obligatori.',
	),
	'incident_date' => array(
		'date_ddmmyyyy' => 'El camp data no sembla tenir una data vàlida',
		'date_mmddyyyy' => 'El camp data no sembla tenir una data vàlida',
		'required' => 'El camp data és obligatori.',
	),
	'incident_description' => array(
		'required' => 'El camp "Descripció" és obligatori.',
	),
	'incident_hour' => array(
		'between' => 'El camp hora no sembla tenir una hora vàlida',
		'required' => 'El camp hora és obligatori.',
	),
	'incident_information' => array(
		'alpha' => 'Si us plau, entreu un valor vàlid per a Information Probability',
		'length' => 'Si us plau, entreu un valor vàlid per a Information Probability',
	),
	'incident_minute' => array(
		'between' => 'El camp minut no sembla tenir un valor vàlid',
		'required' => 'El camp minut és obligatori.',
	),
	'incident_news' => array(
		'url' => 'El camp enllaç a les fonts de notícies no sembla tenir una URL vàlida',
	),
	'incident_photo' => array(
		'size' => 'Si us plau, assegureu-vos que les mides de les fotos a pujar no tinguin més de 2MB.',
		'type' => 'El camp Pujar Fotos no sembla tenir una imatge vàlida. Els únics format acceptats són .JPG, .PNG and .GIF.',
		'valid' => 'El camp Pujar Fotos no sembla tenir un fitxer vàlid',
	),
	'incident_source' => array(
		'alpha' => 'Si us plau un valor vàlid per a Source Reliability',
		'length' => 'Si us plau un valor vàlid per a Source Reliability',
	),
	'incident_title' => array(
		'length' => 'El camp "Títol del Llistat" ha de tenir entre 3 i 200 caracters.',
		'required' => 'El camp "Títol del Llistat" es obligatori.',
	),
	'incident_verified' => array(
		'between' => 'Si us plau, entre un valor vàlid per a Verificar aquest Llistat',
		'required' => 'Si us plau, entre un valor vàlid per a Verificar aquest Llistat',
	),
	'incident_video' => array(
		'url' => 'El camp enllaços a video sembla no tenir una URL vàlida',
	),
	'latitude' => array(
		'between' => 'El camp latitud sembla no tenir una latitud vàlida',
		'required' => 'El camp latitude és obligatori. Si us plau, cliqueu al mapa per assenyalar una ubicació.',
	),
	'locale' => array(
		'alpha_dash' => 'El camp locale té un valor incorrecte. ',
		'exists' => 'Aquest llistat ja disposa d`una traducció per aquest idioma',
		'length' => 'El camp locale té un valor incorrecte. ',
		'locale' => 'El Llistat Original i la Traducció tenen el mateix locale (idioma)',
		'required' => 'El locale és obligatori.',
	),
	'location_name' => array(
		'length' => 'El camp "Nom Refinat d`Ubicació" ha de tenir entre 3 i 200 caracters.',
		'required' => 'El camp "Nom Refinat d`Ubicació" és obligatori.',
	),
	'longitude' => array(
		'between' => 'El camp longitud sembla no tenir un valor vàlid',
		'required' => 'El camp longitud és obligatori. Si us plau, cliqueu al mapa per assenyalar una ubicació.',
	),
	'person_email' => array(
		'email' => 'El camp Correu Electrònic sembla contenir una adreça no vàlida',
		'length' => 'El camp Correu Electrònic ha de tenir entre 4 i 64 caracters.',
	),
	'person_first' => array(
		'length' => 'El camp Primer Nom ha de tenir entre 3 i 100 caracters.',
	),
	'person_last' => array(
		'length' => 'El camp Segon Nom ha de tenir entre 2 i 100 caracters.',
	),
	'to_date' => array(
		'date_mmddyyyy' => 'El camp data A sembla tenir una data no vàlida',
		'range' => 'Si us plau, entreu una data A vàlida.No pot ser més gran que la data d`avui.',
		'range_greater' => 'La vostra data DES DE no pot ser més gran que la vostra data A.',
	));
?>
