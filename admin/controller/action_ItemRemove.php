<?php
include('../data/dbConnection.php');
if(isset ($_REQUEST['itemId']) )
	{
		$itemId= $_REQUEST['itemId'];
		$statement = $db-> prepare ("delete from tbl_items where itemId=?");
		$statement->execute(array($itemId));
		header('location: ../view/item.php');
	}
	else
	{
		header('location: ../view/item.php');
	}
	//echo $itemId;
?>