<?php
	class controller_error extends controller
	{
		
	
		public function index()
		{
			header("HTTP/1.0 404 Not Found");
			$this->set('title', 'ERROR 404 | Page Not Found !');
			$this->set('body', 'ERROR 404 | Page Not Found !');
		}
		
	}
?>