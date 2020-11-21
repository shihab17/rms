<?php
if(isset ($_REQUEST['order']) )
	{
		$itemId= $_REQUEST['order'];
	}
	else
	{
		header('location: ../view/ordersummary.php');
	}
	//echo $order;
?>