<?php

class db_i
{
	
	public $con_db = null;
		
	public function __construct(){
		
		$this->con_db = database_instance::__getInstance();
		$this->con_db = database_instance::connect();
		
	}

	public function set($table,$vars){
		
			
		if(!$table || !$vars) return false;
				
	}

	public function get($table,$ref=null,$var=null){
			 
		return $this->con_db->query("SELECT * FROM $table");
	
	}

	public function update($table,$vars){
			
		if(!$table || !$vars) return false;

	}

	public function delete($table,$vars){
			
		if(!$table || !$vars) return false;

	}
	
	private function exec(){
	
	}


}


?>