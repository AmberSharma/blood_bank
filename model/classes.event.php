<?php
require_once 'model.php';
ini_set("display_error",'on');
class Event extends model {
    protected $assigned_by;
    protected $assigned_to;
    protected $date_of_event;
    protected $location;
    protected $created_on;
    protected $name_event;

   

    /**
	 * @return the $assigned_by
	 */
	public function getAssigned_by() {
		return $this->assigned_by;
	}

	/**
	 * @return the $assigned_to
	 */
	public function getAssigned_to() {
		return $this->assigned_to;
	}

	/**
	 * @return the $date_of_event
	 */
	public function getDate_of_event() {
		return $this->date_of_event;
	}

	/**
	 * @return the $location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * @return the $created_on
	 */
	public function getCreated_on() {
		return $this->created_on;
	}

	/**
	 * @return the $name_event
	 */
	public function getName_event() {
		return $this->name_event;
	}

	/**
	 * @param field_type $assigned_by
	 */
	public function setAssigned_by($assigned_by) {
		$this->assigned_by = $assigned_by;
	}

	/**
	 * @param field_type $assigned_to
	 */
	public function setAssigned_to($assigned_to) {
		$this->assigned_to = $assigned_to;
	}

	/**
	 * @param field_type $date_of_event
	 */
	public function setDate_of_event($date_of_event) {
		$this->date_of_event = $date_of_event;
	}

	/**
	 * @param field_type $location
	 */
	public function setLocation($location) {
		$this->location = $location;
	}

	/**
	 * @param field_type $created_on
	 */
	public function setCreated_on($created_on) {
		$this->created_on = $created_on;
	}

	/**
	 * @param field_type $name_event
	 */
	public function setName_event($name_event) {
		$this->name_event = $name_event;
	}
    
	
	public function eventFetch(){
		$this->db->Fields ( array ( "id","date_of_event","location","name_event" ));
		$this->db->From ("event");
		$this->db->Where (array ("assigned_to" => 1));
		$this->db->Select();
		return $this->db->resultArray();
	}
	
	public function eventFetchname(){
		$this->db->Fields ( array ( "id","name_event" ));
		$this->db->From ("event");
		$this->db->Where (array ("assigned_to" => 1));
		$this->db->Select();
		return $this->db->resultArray();
	}
	
	public function assignEvent(){
		$this->db->Fields ( array (
				"id"
				) );
		$this->db->From ( "admin" );
		$this->db->Where ( array (
				"admin_name" => $this->getAssigned_by(),
				) );
			
		$this->db->Select ();
		$value = $this->db->resultArray ();
		
		
		$this->db->Fields ( array (
				"assigned_by" => print_r($value),
				"assigned_to" => $this->getAssigned_to(),
				"date_of_event" => $this->getDate_of_event(),
				"location" => $this->getLocation(),
				"created_on" => date ( 'Y-m-d H:m:s' ),
				"name_event" => $this->getName_event()
				
		) );
		$this->db->From ( "event" );
		
		
		if ($this->db->Insert ()) {
			print_r($this->db->lastQuery ());die;
			return 1;
		} else {
			print_r($this->db->lastQuery ());die;
			return 0;
		}
    }
}
?>