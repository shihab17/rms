<?php
if(isset ($_REQUEST['bookinglist']) )
	{
		$itemId= $_REQUEST['bookinglist'];
	}
	else
	{
		header('location: ../view/viewbookinglist.php');
	}
	//echo $bookinglist;
?>