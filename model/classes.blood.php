<?php
require_once 'model.php';
ini_set("display_error",'on');
class Blood extends model {
	
	protected $id;
	protected $blood;
	protected $quantity;
	
    
    /**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return the $blood
	 */
	public function getBlood() {
		return $this->blood;
	}

	/**
	 * @return the $quantity
	 */
	public function getQuantity() {
		return $this->quantity;
	}

	/**
	 * @param field_type $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @param field_type $blood
	 */
	public function setBlood($blood) {
		$this->blood = $blood;
	}

	/**
	 * @param field_type $quantity
	 */
	public function setQuantity($quantity) {
		$this->quantity = $quantity;
	}

	public function fetchBloodName(){
        $this->db->Fields ( array ( "id","blood" ));
        $this->db->From ("blood_avail");
        $this->db->Select();
        return $this->db->resultArray();
    }
}
?>