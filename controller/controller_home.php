<?php

	class controller_home extends controller
	{

		
		public function index()
		{
			$this->set('page_type', 'static');
			
			$this->set('page_title', 'Welcome To The Home Page');
			$this->set('content', 'Welcome To The Home Page !');
		}
		
		
}
   