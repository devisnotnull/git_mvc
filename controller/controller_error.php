<?php
	class controller_error extends controller
	{
		
	
		public function index()
		{
			$this->set('page_type', 'static');
		
			$this->set('page_title', 'ERROR 404 | Page Not Found !');
			$this->set('content', 'ERROR 404 | Page Not Found !');
		}
		
	}
?>