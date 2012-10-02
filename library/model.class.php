<?

class model extends database {
	
	public $_dbconnect;
	
	public  $_sessionid;
	public  $_userlevel;
	
	public  $_username;
	public  $_userip;
	
	
	function __construct($ses_username,$ses_userlevel,$ses_id,$ses_ip){
	
			$this->_sessionid = $ses_id;
			
			$this->_userip = $ses_ip;
			
			$this->_userlevel = $ses_userlevel;
			
			$this->_username = $ses_username;
			
			$this->_dbconnect = new database(DEFAULT_LOCALHOST,DB_GUEST_USERNAME,DB_GUEST_PASSWORD);

	}
	
	public function rand_num_gen($min = 0, $max = 999){

		$random_salt = null;
		
		$i = 0;
		
		while($i<5){
			
			$alphabet_array = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
			
			$alph_salt = $alphabet_array[array_rand($alphabet_array)];
			
			$num_salt = mt_rand($min,$max);
			
			$random_salt = $random_salt.($alph_salt.$num_salt);
			
			$i++;
		}
		
		return $random_salt;
	}
	
	private function user_acess_level(){
			
			switch($this->_dbconnect->db_get_auth_level($this->_username)){
			
				case DB_STANDARD_AUTH_LEVEL:
					return DB_STANDARD_AUTH_LEVEL;
					break;
					
				case DB_ADMIN_AUTH_LEVEL:
					return DB_ADMIN_AUTH_LEVEL;
					break;
					
				default:
					return DB_GUEST_AUTH_LEVEL;
					
			}
	
	} 
	
	public function write_granted(){
		
		if($this->user_acess_level() < 3){
			return true;
		}
		
		else{
			return false;
		}
	}
	


} 