<?php

class model {
	
	public $db_con = null;
	
	function __construct(){
	
	}
	
	public function load_database(){
	
		$this->db_con= new db_i;
			
	}

} 