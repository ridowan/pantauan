<?php

function base_url () {
	$currentPath = $_SERVER['PHP_SELF']; //output /site/index.php
	$pathInfo = pathinfo($currentPath); //output: array[dirname] => /site [basename] => index.php[extension] => php [filename]
	$hostName = $_SERVER['HTTP_HOST'];
	$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5)) == 'https://'?'https://':'http://';
	$url ='http://localhost/pantauan';
	
	return $url.'/';	
}
?>