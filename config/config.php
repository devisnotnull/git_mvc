<?php

/*****************************
	Definition Of Database Constants - Paramters required to connect to the database.
*****************************/



	
/*****************************
	Definition Of Acess Levels
*****************************/

	define("GUEST_LEVEL_STRING","guest");
	define("STANDARD_LEVEL_STRING","standard");
	define("ADMIN_LEVEL_STRING","admin");
	

	
/*****************************
	Timeout Times - In Mins
*****************************/

	define("USERTIMEOUT","10");
	define("GUESTTIMEOUT","5");
	
/*****************************
	Track Users Online ?
*****************************/

	define("TRACKUSERNUMBERS","true");
	
/*****************************
	Set Cookie Parameters
*****************************/

	define("COOKIE_EXPIRETIME","60*60*24*1");
	// Cookies Only Last For a single day - 60 seconds * 60 mins * 24 hours * 1 day
	define("COOKIE_PATH","/");
	
/*****************************
	Register Input Variables
*****************************/

	define("LOWERCASE","true");
	define("STRIPSLASHES","true");
	
/*************************
	View Locations
*****************************/

	define("DB_GUEST_USERNAME","albrownd_GuestP");
	define("DB_GUEST_AUTH_LEVEL","3");
	define("DB_GUEST_PASSWORD","366362");
	
	define("DB_STANDARD_USERNAME","");
	define("DB_STANDARD_AUTH_LEVEL","2");
	define("DB_STANDARD_PASSWORD","");
	
	define("DB_ADMIN_USERNAME","");
	define("DB_ADMIN_AUTH_LEVEL","1");
	define("DB_ADMIN_PASSWORD","");
	

	$session_defaults = array(
		'TOKENLENGTH' 	=>	'30'
			);
	
 	$set_dev_defaults = array();
	
	$database_default = array(
		'DEFAULT_DB'	=>	'albrownd_personal_db', 
		'DEFAULT_USERNAME'	=>	'albrownd_mvc',
		'DEFAULT_PASSWORD'	=>	'366362',
		'DEFAULT_SERVER'	=>	'localhost',
	);
	
	$hash_default = array(
		"HASH_STRING_DEFAULT" => "5ZV2FSfGHfKFyj9TbY37Wx4r"
	);
	
	$default_location_public = array(
		'JS' => BASE_PATH.DS.'public'.DS.'js',
		'CSS' => BASE_PATH.DS.'public'.DS.'css',
		'IMG' => BASE_PATH.DS.'public'.DS.'img'
	);
	
	$default_location_private = array(
		'TEMPLATE' => BASE_ROOT.DS.'view'.DS.'default'.DS,
		'MODULES' => BASE_ROOT.DS.'view'.DS.'modules'.DS
	);
	
?>