<?php

require_once 'curl/curl.php';

// Get command line options
$shortopts  = "";
$shortopts .= "u:";
$shortopts .= "p:";

$longopts  = array(
	"user:",
	"pass:",
	"no-update",
	"no-create"
);
$options = getopt($shortopts, $longopts);

$user = $pass = FALSE;
if (isset($options['user']) OR isset($options['u']))
	$user = isset($options['user']) ? $options['user'] : $options['u'];

if (isset($options['pass']) OR isset($options['p']))
	$pass = isset($options['pass']) ? $options['pass'] : $options['p'];

if (!$user)
{
	die('Username is requred.');
}

$update = isset($options['no-update']) ? FALSE : TRUE;
$create = isset($options['no-create']) ? FALSE : TRUE;

// Set up curl
$curl = new Curl;
$curl->setAuth($user,$pass);
//$curl->options['CURLOPT_PROXY'] = 'localhost:8888';
//$curl->options['CURLOPT_SSL_VERIFYHOST'] =  0;
//$curl->options['CURLOPT_SSL_VERIFYPEER'] =  0;

// Get base path
$script_path = realpath(dirname(__FILE__).'/../');

// get list of files (pot)
$files = scandir($script_path.'/po/po-en_US');
$pot_files = array();
foreach($files as $k => $file)
{
	if ($file == '.' OR $file == '..')
		unset($files[$k]);
	if (strpos($file,'.pot') !== FALSE)
	{
		$pot_files[] = str_replace('.pot','',$file);
	}
}

// get list of resources
$response = $curl->get('https://www.transifex.net/api/2/project/ushahidi-localizations/resources/');
$resources = json_decode($response->body);

// match resources to files
foreach ($resources as $resource)
{
	$key = array_search($resource->slug, $pot_files);
	if ($key !== FALSE)
	{
		if ($update)
		{
			// update existing resource
			echo 'Updating '.$resource->slug;
			
			$file_path_str = $script_path.'/po/po-en_US/'.$pot_files[$key].'.pot';
			$data = array('name' => $pot_files[$key].'.pot', 'file' => '@'.$file_path_str);
			
			// Use postfields because we're sending a PUT like a POST.
			$curl->options['CURLOPT_POSTFIELDS'] = array('name' => 'Foo', 'file' => "@$file_path_str");
			// This actually sets CURLOPT_CUSTOMREQUEST not CURLOPT_PUT - again sending PUT like its POST
			$put_response = $curl->put('https://www.transifex.net/api/2/project/ushahidi-localizations/resource/'.$resource->slug.'/content/', array(), 'multipart/form-data');
			//var_dump($put_response);
			
			$result = json_decode($put_response->body);
			echo ". Strings Added: $result->strings_added, Strings Updated: $result->strings_updated.";
			
			echo "\n";
			unset($pot_files[$key]);
		}
		else
		{
			echo 'Skipping '.$resource->slug.' - already exists.';
		}
	}
}

// upload remaining
foreach ($pot_files as $file)
{
	if ($create)
	{
		echo 'Adding '.$file."\n";
		
		$data = array(
			'name' => $file,
			'slug' => $file,
			'i18n_type' => 'PO',
			'content' => file_get_contents($script_path.'po/po-en_US/'.$file.'.pot'),
		);
			
		// Use postfields because we're sending a PUT like a POST.
		$curl->options['CURLOPT_POSTFIELDS'] = json_encode($data);
		$curl->headers['Content-type'] = 'application/json';
		// This actually sets CURLOPT_CUSTOMREQUEST not CURLOPT_PUT - again sending PUT like its POST
		$post_response = $curl->post('https://www.transifex.net/api/2/project/ushahidi-localizations/resources/', array(), 'application/json');
	}
	else
	{
		echo 'Skipping '.$file.' - does not exists.';
	}
}

