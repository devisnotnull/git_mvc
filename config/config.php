<?php

	define("CRON_SERVERNAME","");
	define("CRON_USERNAME","");
	define("CRON_PASSWORD","");
	define("CRON_DATABASE","");
	
	
/*****************************
	Definition Of Database Constants - Paramters required to connect to the database.
*****************************/

	define("DB_GUEST_USERNAME",""); 
	define("DB_GUEST_AUTH_LEVEL","3");
	define("DB_GUEST_PASSWORD","");
	
	define("DB_STANDARD_USERNAME","");
	define("DB_STANDARD_AUTH_LEVEL","2");
	define("DB_STANDARD_PASSWORD","");
	
	define("DB_ADMIN_USERNAME","");
	define("DB_ADMIN_AUTH_LEVEL","1");
	define("DB_ADMIN_PASSWORD","");	
	
	define("DEFAULT_DATABASE_NAME","");
		
	define("DEFAULT_LOCALHOST","");
	define("DEFAULT_PDO_CONNECTION_STRING","");

	
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

	define("DEFAULT_IMG_SRC", "/public/img/");
	
	define("DEFAULT_CSS_SRC", "/public/style/");
	
	define("DEFAULT_JS_SRC", "/public/js/");

	define("HASH_STRING_DEFAULT","5ZV2FSfGHfKFyj9TbY37Wx4r")
	



?>