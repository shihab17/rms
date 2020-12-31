<?php
if(isset($_POST['submit'])){
	if(empty($_POST['Old EMAIL']))
	{
		$OldEMAILErr= "email is required";
	}
	else{
		$OldEMAIL=$_POST['Old EMAIL'];
	}

if(empty($_POST['New EMAIL']))
	{
		$NewEMAILErr= "Newemail is required";
	}
	else{
		$NewEMAIL=$_POST['New EMAIL'];
	}
if(empty($_POST['Confirm EMAIL']))
	{
		$ConfirmEMAILErr= "Confirm EMAIL is required";
	}
	else{
		$ConfirmEMAIL=$_POST['Confirm EMAIL'];
	}





?>