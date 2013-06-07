<?php
require_once 'model.php';
ini_set("display_error",'on');
class Supply extends model {
	protected $name;
	protected $email;
	protected $contact;
	protected $reason;
	protected $address;
	protected $profession;
	protected $date;
	protected $quantity;
    
    /**
	 * @return the $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return the $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @return the $contact
	 */
	public function getContact() {
		return $this->contact;
	}

	/**
	 * @return the $reason
	 */
	public function getReason() {
		return $this->reason;
	}

	/**
	 * @return the $address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * @return the $profession
	 */
	public function getProfession() {
		return $this->profession;
	}

	/**
	 * @return the $date
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * @param field_type $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @param field_type $email
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * @param field_type $contact
	 */
	public function setContact($contact) {
		$this->contact = $contact;
	}

	/**
	 * @param field_type $reason
	 */
	public function setReason($reason) {
		$this->reason = $reason;
	}

	/**
	 * @param field_type $address
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * @param field_type $profession
	 */
	public function setProfession($profession) {
		$this->profession = $profession;
	}

	/**
	 * @param field_type $date
	 */
	public function setDate($date) {
		$this->date = $date;
	}

	public function getQuantity() {
		return $this->quantity;
	}

	public function setQuantity($quantity) {
		$this->quantity = $quantity;
	}

	public function bloodavailableFetch(){
        $this->db->Fields ( array ( "id","blood", "quantity"));
        $this->db->From ("blood_avail");
        $this->db->Select();
        return $this->db->resultArray();
    }
	public function fetchDonorName(){
        $this->db->Fields ( array ("name", "email_id"));
        $this->db->From ("donor");
	$this->db->Like("email_id",$_REQUEST['strval']);
        $this->db->Select();
	echo $this->db->lastQuery();die;
        return $this->db->resultArray();
    }
    public function SupplyBlood(){
    	$this->db->Fields ( array ( "id","blood", "quantity"));
    	$this->db->From ("blood_avail");
    	$this->db->Select();
    	return $this->db->resultArray();
    }
    public function RecipientDetails(){
    	$this->db->fields(array("id"=>' ',"name"=>$this->getName(),"address"=>$this->getAddress(),"contact_no"=>$this->getContact(),"email_id"=>$this->getEmail(),"profession"=>$this->getProfession(),"reason"=>$this->getReason(),"date_received"=>$this->getDate() ,"quantity"=>$this->getQuantity() , "blood_id"=>$_REQUEST['id']));
    	$this->db->From ("recipient");
    	$this->db->insert();
    	return $this->db->resultArray();
    }
}
?>
