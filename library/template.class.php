<?php
class template {

		protected $variables = array();
		
		protected $_controller;
		
		protected $_action;
		
		function __construct($controller,$model,$action) {
		
			$this->_controller = $controller;
			
			$this->_model = $model;
			
			if($this->_model == "index"){
					
				$this->_model = $this->_controller;
						
			}
		
			$this->_action = $action;
		
		}

		/** Set Variables **/
		
		 
		function set($name,$value) {
		
			$this->variables[$name] = $value;
		}
		
		
		/** Display Template **/
		
		 
		
		function render() {
			
			
			extract($this->variables);
			
			get_header();
			echo $content.'</br>';
			include(BASE_ROOT.DS.'view'.DS.'home'.DS.'view_home.php');
			var_dump($_SESSION);
			get_footer();

		}
		
		 
		
}