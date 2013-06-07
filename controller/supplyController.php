
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
		echo $_REQUEST['id'];
		include ("../view/recipientinfo.php");die;
		require_once ("../model/classes.supply.php");
		$obj = new Supply ();
		$result = $obj->SupplyBlood ();
		include ("../view/bloodavailable.php");
	}
	public function recipientDetails()
	{
		//echo $_REQUEST['id'];
		require_once ("../model/classes.supply.php");
		$obj = new Supply ();
		$obj->setAddress($_REQUEST['recipient_address']);
		$obj->setAddress($_REQUEST['recipient_name']);
		$obj->setAddress($_REQUEST['recipient_email']);
		$obj->setAddress($_REQUEST['recipient_contactno']);
		$obj->setAddress($_REQUEST['recipient_profession']);
		$obj->setAddress($_REQUEST['recipient_date']);
		$obj->setAddress($_REQUEST['recipient_reason']);
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