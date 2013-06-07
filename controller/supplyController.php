
<?php
// session_start();
ini_set ( "display_errors", "1" );

$route = array ();
class Bloodsupply 
{
	/* To fetch the employee from the database */
	public function bloodAvailable() 
	{
		require_once ("../model/classes.supply.php");
		$obj = new Supply ();
		$result = $obj->bloodavailableFetch ();
		include ("../view/bloodavailable.php");
	}
	public function supplyBlood()
	{
		include ("../view/recipientinfo.php");
	}
	public function fetchdonorname() 
	{
		require_once ("../model/classes.supply.php");
		$obj = new Supply ();
		$result = $obj->fetchDonorName ();
		if($result)
		{
			die("1");
		}
		//include ("../view/fetcheddonors.php");
	}
	public function recipientDetails()
	{
		//print_r($_REQUEST);
		require_once ("../model/classes.supply.php");
		$obj = new Supply ();
		$obj->setAddress($_REQUEST['recipient_address']);
		$obj->setAddress($_REQUEST['recipient_name']);
		$obj->setAddress($_REQUEST['recipient_email']);
		$obj->setAddress($_REQUEST['recipient_contactno']);
		$obj->setAddress($_REQUEST['recipient_profession']);
		$obj->setAddress($_REQUEST['recipient_date']);
		$obj->setAddress($_REQUEST['recipient_reason']);
		$obj->setQuantity($_REQUEST['quantity']);
		$result = $obj->RecipientDetails ();
		include ("../view/bloodavailable.php");
	}
	
}

$request = "";
if (isset ( $_GET ["method"] )) {
	
	$request = $_GET ["method"];
}

$obj = new Bloodsupply ();

if (! empty ( $request )) {
	$obj->$request ();
}
?>
