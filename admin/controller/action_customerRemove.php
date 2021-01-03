<?php
include('../data/dbConnection.php');
if(isset ($_REQUEST['customerId']) )
	{
		$customerId= $_REQUEST['customerId'];
		$statement = $db-> prepare ("delete from tbl_customer where customerId=?");
		$statement->execute(array($customerId));
		header('location: ../view/customer.php');
	}
	else
	{
		header('location: ../view/customer.php');
	}
?>