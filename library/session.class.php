<?php
class session {
	
	protected $_sessionid;
	protected $_sessionlevel;
	protected $_sessionusername;
	protected $_sessionremoteip;
	
	function __construct(){

		session_start();
		
		$this->startSession();
		
		$this->_sessionid = session_id();
		
		$this->_sessionremoteip = $_SERVER['REMOTE_ADDR'];

	}


	function startSession(){

		if(!isset($_SESSION['ses_username']) || !isset($_SESSION['ses_user_level'])){
				
				$this->_sessionusername = GUEST_LEVEL_STRING;
				
				$this->_sessionlevel = GUEST_LEVEL_STRING;
				
				$_SESSION['ses_username'] = GUEST_LEVEL_STRING;	
				
				$_SESSION['ses_user_level'] = GUEST_LEVEL_STRING;

		}
		else if($_SESSION['ses_username'] == GUEST_LEVEL_STRING || $_SESSION['ses_user_level'] == GUEST_LEVEL_STRING){

				$this->_sessionusername = GUEST_LEVEL_STRING;
				
				$this->_sessionlevel = GUEST_LEVEL_STRING;
		}
		
		else{
				
				$this->_sessionusername = $_SESSION['ses_username'];
				
				$this->_sessionlevel = $_SESSION['ses_user_level'];
				
		}
	
	}
	
	function __set($name,$var){
		
	}
	function __get($name){
	
	}
	
	/***********************
	
	***********************/
	
	function ses_login($username,$ip,$level){
		
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
	
	function integrity_check($username,$sessionid,$userip,$lastdate){
		
		
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