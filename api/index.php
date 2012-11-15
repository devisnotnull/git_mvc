<?php 

class apiController{
	
	private static $api_main;
	public static $request_type;
	
	
	private function __construct(){
	}
	
	public static function getInstance(){
		
		if(self::$api_main) self::$api_main = new apiController;
		return self::$api_main;
		
	}
	
}