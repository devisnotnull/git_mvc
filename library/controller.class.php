<?php
	
	class controller extends session
	{
		
		protected	$_controller;
		protected	$_model;
		protected	$_action;
		protected	$_activemodel;
		protected 	$_session;
		protected	$_accesslevel = GUEST_LEVEL_STRING;
		protected 	$_template;
		protected	$_write;
		
		public function __construct($controller,$model,$action)
		{
			
			$this->_session = new session;
			
			$this->_controller = $controller;
			
			if(!$model){$this->_model = "index"; }
			
			else {$this->_model = $model; }
			
			$this->_action = $action;
			
			$namefor = "model_".$this->_controller;	
			
			$this->_template = new Template($this->_controller,$this->_model,$this->_action);
			
				
		}
		
		function auth_check(){ 
		
			if($this->_activemodel->write_granted()) { return true;}
			
			else {
				
				$this->_session->ses_logOut();
				
				header('Location: '.BASE_PATH.'/user');} 
				
		}
		
		function model_get($modelGrab){
			
			include(BASE_ROOT.'/model/'.$modelGrab);
		
		}
		
		function set($name,$value)
		{
			$this->_template->set($name,$value);
		}
		
		
		
		function __destruct(){
			$this->_template->render();
			exit();
		}

	}

 