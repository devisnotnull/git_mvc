<?php
	
	class model_blog extends model
	{
		
		public function __construct(){
			
			parent::__construct();
			$this->load_database();
			
			return new model;
			
		}
		
		public function get_blog(){
			
			$query = $this->db_con->get('sticky');
			return $query;
			
		}
		
		
	}
	
	
?>