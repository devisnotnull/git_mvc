<?php
	
	define("BASE_PATH", "http://localhost/git_mvc");
	define("BASE_ROOT",'C:\xampp\htdocs\git_mvc');

	define('DS', "/");
	define("GET_ARRAY", $_SERVER['REQUEST_URI']);
	
	$url_get_all = explode( '?', $_SERVER['REQUEST_URI'] );

	
 		$mtime = microtime(); 
		$mtime = explode(" ",$mtime); 
		$mtime = $mtime[1] + $mtime[0]; 
		define("START_TIME_CON", $mtime); 
		
class urldef{
	
	public $controller = null;
	public $model = null;
	public $view = array(); 
	public $start_time;
	
	function __construct(){
	
		
		
	}
	
	function start(){
	
	if(!isset($_GET['url'])){
		$url = "home";
	}
	else{
		$url = $_GET['url'];
	}

		$urlArray = array();
		
		$urlArray = explode("/",$url);
		
		if(!isset($urlArray[0])){} 
		else $this->controller = $urlArray[0];
		array_shift($urlArray);
		
		if(!isset($urlArray[0])){}
		else $this->model = $urlArray[0];
		array_shift($urlArray);
		
		if(sizeof($urlArray) > 0){
			if(!isset($urlArray[0])){}
			array_push($this->view , $urlArray);
			array_shift($urlArray);
		}
	
	}
		
	function load_required_files(){

			if(file_exists(BASE_ROOT.DS."config".DS."config.php")){
				require_once(BASE_ROOT.DS."config".DS."config.php");
			}
			if (file_exists(BASE_ROOT.DS."library".DS."session.class.php")){
				require_once(BASE_ROOT.DS."library".DS."session.class.php");
			}
			if (file_exists(BASE_ROOT.DS."library".DS."database.class.php")){
				require_once(BASE_ROOT.DS."library".DS."database.class.php");
			}
			if (file_exists(BASE_ROOT.DS."library".DS."controller.class.php")){
				require_once(BASE_ROOT.DS."library".DS."controller.class.php");
			}
			if (file_exists(BASE_ROOT.DS."library".DS."model.class.php")){
				require_once(BASE_ROOT.DS."library".DS."model.class.php");
			}
			if (file_exists(BASE_ROOT.DS."library".DS."template.class.php")){
				require_once(BASE_ROOT.DS."library".DS."template.class.php");
			}

	
		}
		
		function check_integrity(){
			
		if(!$this->controller){ $this->controller = "home"; }
			
			if(file_exists(BASE_ROOT.DS."controller".DS."controller_".$this->controller.".php")){
				
				if(file_exists(BASE_ROOT.DS."model".DS."model_".$this->controller.".php")){
					
					require_once(BASE_ROOT.DS."controller".DS."controller_".$this->controller.".php");
					
					if($this->model){
						
						$controllerformat = "controller_".$this->controller;
						
						if (method_exists($controllerformat, $this->model)){ return true; }
						
						else {return false;}
						
					}
					
					else {
						return true;}
				}
			}
			else {return false;}
		}
		
		function load_controller_files(){
		
			if($this->check_integrity()){
				
				require_once(BASE_ROOT.DS."controller".DS."controller_".$this->controller.".php");
				
				require_once(BASE_ROOT.DS."model".DS."model_".$this->controller.".php");
				
			}
				
			else if(file_exists(BASE_ROOT.DS."controller".DS."controller_error.php")){
					if(file_exists(BASE_ROOT.DS."model".DS."model_error.php")){
						$this->controller = "error";
						require_once(BASE_ROOT.DS."controller".DS."controller_error.php");
						require_once(BASE_ROOT.DS."model".DS."model_error.php");
					}
			}
			else{
				echo "AN INTERNAL ERROR HAS OCCURED THAT CANNOT BE RECOVERED FROM";
				exit();
			}
			
			
		}
			


}

		$urldef = new urldef;
		
		$urldef->start();
		
		$urldef->load_required_files();
		
		$urldef->load_controller_files();
		
		$controllerformat = "controller_".$urldef->controller;
		
		
		if (method_exists($controllerformat, $urldef->model)) { 
			
			$model = $urldef->model;
			
			$controlnew = new $controllerformat($urldef->controller,$urldef->model,$urldef->view);
			
			$controlnew->$model();
			
			exit();
								
		} 	

		else {
		
			$modelformat = "model_".$urldef->controller;
			
			$controllerformat = "controller_".$urldef->controller;
			
			$model = "index";
			
			$controlnew = new $controllerformat($urldef->controller,$urldef->model,$urldef->view);
			
			$controlnew->$model();
			
			
			   $mtime = microtime(); 
			   $mtime = explode(" ",$mtime); 
			   $mtime = $mtime[1] + $mtime[0]; 
			   $endtime = $mtime; 
			   $totaltime = ($endtime - START_TIME_CON); 
			   define("EXEC_TIME",$totaltime);
			
			exit();
			
		}
	
	
