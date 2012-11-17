<?php
class session {
	
	global $session_defaults;
	protected $_sessionid = null;
	protected $_sessiontoken = null;
	protected $_sessionlevel = null;
	protected $_sessionusername = null;
	protected $_sessionremoteip = null;
	
	protected $db_con = null;
	
	function __construct(){

		session_start();
		
		$this->startSession();
		$this->_sessionid = session_id();
		$this->_sessionremoteip = $_SERVER['REMOTE_ADDR'];
		
		$this->con_db = database_instance::__getInstance();
		$this->con_db = database_instance::connect();

	}


	private function startSession(){

		if(!isset($_SESSION['ses_username']) || !isset($_SESSION['ses_user_level'])){
				
				$this->_sessionusername = GUEST_LEVEL_STRING;
				$this->_sessionlevel = GUEST_LEVEL_STRING;
				$_SESSION['ses_username'] = GUEST_LEVEL_STRING;	
				$_SESSION['ses_user_level'] = GUEST_LEVEL_STRING;

		}
	
	}
	
	function __set($name,$var){
		
	}
	function __get($name){
	
	}
	
	/***********************
	
	***********************/
	
	public function ses_login($username,$ip,$level){
		
				foreach ($_SESSION as $var => $val) {
					
			 		 $_SESSION[$var] = null;
					 
		  		}
				
				switch($level){
			
				case DB_STANDARD_AUTH_LEVEL:
					$_SESSION['ses_user_level'] = STANDARD_LEVEL_STRING;
					$_SESSION['ses_username'] = $username;
					$_SESSION['ses_id'] = session_id();
					$_SESSION['ses_ip'] = $ip;
					
					$this->_sessionlevel = DB_STANDARD_AUTH_LEVEL;
					$this->_sessionusername = $username;
					$this->_sessionid = session_id();
					$this->_sessionremoteip = $ip;
					
					return true;
					
					break;
					
				case DB_ADMIN_AUTH_LEVEL:
					$_SESSION['ses_user_level'] = ADMIN_LEVEL_STRING;
					$_SESSION['ses_username'] = $username;
					$_SESSION['ses_id'] = session_id();
					$_SESSION['ses_ip'] = $ip;
					
					$this->_sessionlevel = DB_ADMIN_AUTH_LEVEL;
					$this->_sessionusername = $username;
					$this->_sessionid = session_id();
					$this->_sessionremoteip = $ip;
					
					return true;
					
					break;	
					
				default:
					$_SESSION['ses_user_level'] = GUEST_LEVEL_STRING;
					$_SESSION['ses_username'] = GUEST_LEVEL_STRING;
					$_SESSION['ses_id'] = session_id();
					$_SESSION['ses_ip'] = $ip;
					
					$this->_sessionlevel = DB_GUEST_AUTH_LEVEL;
					$this->_sessionusername = GUEST_LEVEL_STRING;
					$this->_sessionid = session_id();
					$this->_sessionremoteip = $ip;
					
					return false;
					
			}
	
	}
	
	
	function integrity_check(){
		
		 $this->_sessionid = null;
		 $this->_sessiontoken = null;
		 $this->_sessionlevel = null;
		 $this->_sessionusername = null;
		 $this->_sessionremoteip = null;
	
	}
	
	private function regen_token(){
		
		global $session_defaults;
		substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $session_defaults['TOKENLENGTH']);
		
	}
	
	/***********************
	
	***********************/
	
	function ses_logout(){
		
		foreach ($_SESSION as $var => $val) {
			  $_SESSION[$var] = null;
		  }
		session_unset();
		session_destroy();

         
		
	}
}