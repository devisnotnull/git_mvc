<?php

	class controller_home extends controller
	{
		private function __construct(){
			
		}
		
		public function index()
		{
			$this->set('title', 'Welcome To The Home Page');
			$this->set('content', 'Welcome To The Home Page !');
		}
		
		
}
   