<?php
	
	include_once('../config');
	
	$request_method === $_SERVER['REQUEST_METHOD'];
	
	switch($_SERVER['REQUEST_METHOD']){
	
		case 'GET':
			
			break;
			
		case 'POST':
			
			break;
			
		case 'PUT':
			
			break;
			
		case 'DELETE':
			
			break;
			
	}
	
	
	
$stringmain = $file = file_get_contents('example.json', true);


echo $stringmain; ?>