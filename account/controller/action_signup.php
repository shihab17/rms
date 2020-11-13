<?php
if(isset($_post['submit'])){
	if(empty($_POST['firstname']))
	{
		$fnameErr= "name is required";
	}
	else{
		$firstname=$_post['firstname'];
	}
	if(empty($_POST['lastname']))
	{
		$lnameErr= "lastname is required";
	}
	else{
	$lastname=$_post['lastname'];
	}
	if(empty($_POST['phonenum']))
	{
		$phonenumErr= "phonenum is required";
	}
	else{
	$PhoneNum=$_post['Phone Num'];
	}
	if(empty($_POST['email']))
	{
		$emailErr= "email is required";
	}
	else{
	$email=$_post['email'];
	}
	if(empty($_POST['password']))
	{
		$passErr= "pass is required";
	}
	else{
	$Password=$_post['password'];
	}
	if(empty($_POST['address']))
	{
		$addErr= "add is required";
	}
	else{
	$Address=$_post['Address'];
	}
	if(empty($_POST['NIDNum']))
	{
		$NIDNumErr= "NIDNum is required";
	}
	else{
	
	$NIDNum=$_post['NID Num'];
}
?>