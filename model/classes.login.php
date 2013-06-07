<?php
require_once 'model.php';
ini_set("display_error",'on');
class Login extends model {
	protected $user;
	protected $pwd;
	/**
	 * @return the $user
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * @param field_type $user
	 */
	public function setUser($user) {
		$this->user = $user;
	}

	/**
	 * @return the $pwd
	 */
	public function getPwd() {
		return $this->pwd;
	}

	/**
	 * @param field_type $pwd
	 */
	public function setPwd($pwd) {
		$this->pwd = $pwd;
	}

	
	public function check() {
		$pwd = md5($this->getPwd ());
		
		$this->db->Fields ( array (
				"admin_name",
				"password",
				
		) );
		$this->db->From ( "admin" );
		$this->db->Where ( array (
				"admin_name" => $this->getUser (),
				"password" => $pwd
		) );
		$this->db->Select ();
		$value = $this->db->resultArray ();
		if($value){
			return  $value;
		}
		else{
			$this->db->Fields ( array (
					"user_name",
					"password",
					"type"
			
			) );
			$this->db->From ( "employee" );
			$this->db->Where ( array (
					"user_name" => $this->getUser (),
					"password" => $this->getPwd ()
			) );
			
			$this->db->Select ();
			$value1 = $this->db->resultArray ();
			
			if($value1){
				return  $value1;
			}
			else{
				return 0;
			}
			
		}
	}
	
}
?>