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
		$fnameErr= "name is required";
	}
	$PhoneNum=$_post['Phone Num'];
	$Email=$_post['Email'];
	$Password=$_post['Password'];
	$Address=$_post['Address'];
	$NIDNum=$_post['NID Num'];
}
?>