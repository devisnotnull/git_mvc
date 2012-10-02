<?
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
		
			if($_SERVER['REQUEST_METHOD'] == "POST"){
				
				echo 'Default Post Responce';
				
			}
			else{
				
				if (file_exists(BASE_ROOT."/view/".$this->_controller."/header.php")) {
					
					require_once(BASE_ROOT."/view/".$this->_controller."/header.php");
					
					}
				
				else if(file_exists(BASE_ROOT."/view/default/header.php")){
					
					require_once(BASE_ROOT."/view/default/header.php");
					
					}
																											
			 if(file_exists(BASE_ROOT."/view/".$this->_controller."/view_".$this->_model.".php")){
		
						require_once(BASE_ROOT."/view/".$this->_controller."/view_".$this->_model.".php");
				}
					
				else if(file_exists(BASE_ROOT."/view/error/view_error.php")){
					
					require_once(BASE_ROOT."/view/error/view_error.php");
				}
				
				if (file_exists(BASE_ROOT."/view/".$this->_controller."/footer.php")) {
					
					require_once(BASE_ROOT."/view/".$this->_controller."/footer.php");
					
				}
				
				else if(file_exists(BASE_ROOT."/view/default/footer.php")){
					
					require_once(BASE_ROOT."/view/default/footer.php");
					
					}
				
			}
		 
	}
		
		 
		
}