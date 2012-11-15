<?php

/* 

	ALBROWNDESIGN DATABASE BASE CLASS
	vesrsion V2.0
	PDO Prefrence method
	Must be used as part of V2 MVC Framework

*/

class database{
	
	private $db_connection_var;
	 
	private $db_connection_host;
	private $db_connection_username;
	private $db_connection_password;
	private $db_auth_level;
	
	private $db_connection_database;
	
	private $db_connection_timestamp_var; 
	private $db_connection_error;
	
	
		public  function __construct($db_username,$db_password){
			
			if($db_host == null){$this->db_connection_host = DEFAULT_LOCALHOST;}
			
			else {$this->db_connection_host = $db_host;}
			
			$this->db_connection_username = $db_username;
			$this->db_connection_database = DB_NAME;
			$this->db_connection_password = $db_password;
			$this->db_connection_timestamp_var = date('Y-m-d H:i:s');
			
			$dbConnString = "mysql:host=" . DEFAULT_LOCALHOST . "; dbname=" . DEFAULT_DATABASE_NAME;
			
			try {
				
				$this->db_connection_var = new PDO($dbConnString, $db_username, $db_password);	
				
			}
			 catch (PDOException $e) {
				 
				echo "There Was A Fatal Error Connecting To The Databasefg";
				
				echo $e->getMessage();
				
				die();
				
			}
	
		}
		
		public function generate_pro(){}
		
		public function get_pro(){}
		


		
		private function __destruct(){
			
			$this->db_connection_var = null;
			
		}
		
	};