
<?php
session_start();
ini_set("display_errors", "1");

$route = array();

class MyClass {
	
    
    /* To fetch the employee from the database */
	public function fetchEmployee(){
          require_once("../model/classes.employee.php");
          $obj = new Employee();
          $get = $obj -> employeeFetch();
          include("../view/create_event.php");
            
        }
        
        public function assignTo(){
        	require_once("../model/classes.event.php");
        	$obj = new Event();
            $obj -> setAssigned_by($_SESSION['username']);
            $obj -> setName_event($_REQUEST['event_name']);
            $obj -> setLocation($_REQUEST['location']);
            $obj -> setDate_of_event($_REQUEST['date_of_event']);
            $obj -> setAssigned_to($_REQUEST['employee']);
            
            $value = $obj -> assignEvent();
            if($value){
            	echo "Done";
            }
            else{
            	echo "Sorry Wrong";
            }
        }
        
        public function login(){
        	require_once("../model/classes.login.php");
        	$obj = new Login();
        	$obj -> setUser($_REQUEST['user_name']);
        	$obj -> setPwd($_REQUEST['pwd']);
        	$value = $obj-> check();
        	
        	if(!empty($value[0]['type'])){
        	if($value && $value[0]['type'] == 1){
        		$_SESSION['username'] = $value[0]['user_name'];
        		include("../view/information_user.php");
        	
        	}
        	else{
        		$_SESSION['username'] = $value[0]['user_name'];
        		include("../view/supply_user.php");
        	}
        	}
        	elseif($value){
        		$_SESSION['username'] = $value[0]['admin_name'];
        	
        		//print_r($value[0][admin_name]);die;
        		include("../view/adminView.php");
        	}
        	else{
        		header("location:../index.php?msg='error'");
        	}
        }
        
        public function insertPic(){
        	echo "<pre/>";
        	print_r($_FILES);die;
        	require_once("../model/classes.uploadimg.php");
        	$obj = new Upload();
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