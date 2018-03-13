<?php
	
	session_start();
	require_once 'Facebook/autoload.php';
	$FB = new \Facebook\Facebook([
	'app_id'=>'your app_id',
	'app_secret'=>'your app_secret key',
	'default_graph_version'=>'v2.10'
	]);

	$helper = $FB->getRedirectLoginHelper();

?>