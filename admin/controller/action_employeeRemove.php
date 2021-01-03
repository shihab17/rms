<?php
include('../data/dbConnection.php');
if(isset ($_REQUEST['empId']) )
	{
		$empId= $_REQUEST['empId'];
		$statement = $db-> prepare ("delete from tbl_emp where empId=?");
		$statement->execute(array($empId));
		header('location: ../view/employee.php');
	}
	else
	{
		header('location: ../view/employee.php');
	}
?>