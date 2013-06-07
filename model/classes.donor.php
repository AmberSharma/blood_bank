<?php
require_once 'model.php';
ini_set("display_error",'on');
class Donor extends model {
	
    protected $name;
    protected $address;
    protected $email_id;
    protected $age;
    protected $blood_type;
    protected $event_id;
    protected $contact_no;
    

   

    /**
	 * @return the $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return the $address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * @return the $email_id
	 */
	public function getEmail_id() {
		return $this->email_id;
	}

	/**
	 * @return the $age
	 */
	public function getAge() {
		return $this->age;
	}

	/**
	 * @return the $blood_type
	 */
	public function getBlood_type() {
		return $this->blood_type;
	}

	/**
	 * @return the $event_id
	 */
	public function getEvent_id() {
		return $this->event_id;
	}

	/**
	 * @return the $contact_no
	 */
	public function getContact_no() {
		return $this->contact_no;
	}

	/**
	 * @param field_type $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @param field_type $address
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * @param field_type $email_id
	 */
	public function setEmail_id($email_id) {
		$this->email_id = $email_id;
	}

	/**
	 * @param field_type $age
	 */
	public function setAge($age) {
		$this->age = $age;
	}

	/**
	 * @param field_type $blood_type
	 */
	public function setBlood_type($blood_type) {
		$this->blood_type = $blood_type;
	}

	/**
	 * @param field_type $event_id
	 */
	public function setEvent_id($event_id) {
		$this->event_id = $event_id;
	}

	/**
	 * @param field_type $contact_no
	 */
	public function setContact_no($contact_no) {
		$this->contact_no = $contact_no;
	}

	public function uploadDonorRecord()
    {
    	$this->db->Fields(array("name"=>$this->getName(),"address"=>$this->getAddress(),
    			"age"=>$this->getAge(),"event_id"=>$this->getEvent_id(),
    			"blood_type"=>$this->getBlood_type(),"email_id"=>$this->getEmail_id(),
    			"contact_no"=>$this->getContact_no()));
    	$this->db->From("donor");
    	$result=$this->db->insert();
    	return $result;
    
    }
    
    
    
}
?>