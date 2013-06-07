
<?php
//session_start();
ini_set("display_errors", "1");

$route = array();

class MyClass {
	
    
    /* To fetch the employee from the database */
	public function fetchEventslist(){
          require_once("../model/classes.event.php");
          $obj = new Event();
          $get = $obj -> eventFetch();
          include("../view/show_event.php");
            
        }
        
        public function showinformationpage(){
        	require_once("../model/classes.blood.php");
        	$obj = new Blood();
        	$get = $obj -> fetchBloodName();
        	include("../view/upload_eventinfo.php");
        
        }
        
        
        public function fetchEventsname(){
        	require_once("../model/classes.event.php");
        	$obj = new Event();
        	$get = $obj -> eventFetchname();
        	include("../view/show_eventname.php");
        
        }
        
        public function uploaddetail(){
            require_once("../model/classes.donor.php");
            $obj = new Donor();
            $obj -> setName($_REQUEST['donor_name']);
            $obj -> setAddress($_REQUEST['donor_address']);
            $obj -> setAge($_REQUEST['donor_age']);
            $obj -> setBlood_type($_REQUEST['donor_bloodname']);
            $obj -> setContact_no($_REQUEST['donor_contactno']);
            $obj -> setEmail_id($_REQUEST['donor_email']);
            $obj ->setEvent_id($_REQUEST['donor_eventid']);
            $result=$obj -> uploadDonorRecord();
        	return $result;
        }
      }

$request = "";
if (isset($_GET["method"])) {

    $request = $_GET["method"];
}

$obj = new MyClass();

if (!empty($request)) {
    $obj->$request();
}
?>