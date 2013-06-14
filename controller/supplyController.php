
<?php
session_start();
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
		$_SESSION['quantity'] = $_REQUEST["quantity"];
		include ("../view/recipientinfo.php");
	}
	public function emailindb() 
	{
		require_once ("../model/classes.supply.php");
		$obj = new Supply ();
		$result = $obj->fetchEmail ();
		if(!empty($result))
		{
			die("1");
		}
		else
		{
			die("0");
		}
	}
	public function fetchdonorname() 
	{
		require_once ("../model/classes.supply.php");
		$obj = new Supply ();
		$result = $obj->fetchDonorName ();
		//print_r($result);die;
		if(!empty($result))
		{
			if(count($result) == 1)
			{
				$arr[] = $result[0]['name'];
				$arr[] = $result[0]['address'];
				$arr[] = $result[0]['contact_no'];
				echo json_encode($arr);
			}
			
		}
		else
		{
			die("1");
		}
		//include ("../view/fetcheddonors.php");
	}
	public function recipientDetails()
	{
		if($_SESSION['quantity'] > $_REQUEST['quantity'])
		{
			require_once ("../model/classes.supply.php");
			$obj = new Supply ();
			$obj->setAddress($_REQUEST['recipient_address']);
			$obj->setName($_REQUEST['recipient_name']);
			$obj->setEmail($_REQUEST['recipient_email']);
			$obj->setContact($_REQUEST['recipient_contactno']);
			$obj->setProfession($_REQUEST['recipient_profession']);
			$obj->setDate($_REQUEST['recipient_date']);
			$obj->setReason($_REQUEST['recipient_reason']);
			$obj->setQuantity($_REQUEST['quantity']);
			$result = $obj->RecipientDetails ();
			if($result)
			{
				unset($_SESSION['quantity']);
				echo "Go and Collect the blood";
			}
			
	
		}
		else
		{
			echo "Quantity Not Available";
		}
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
