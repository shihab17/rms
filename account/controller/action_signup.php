<?php
include('../data/dbCon.php'); 
if(isset($_POST['submit'])){
	if(empty($_POST['firstname']))
	{
		$fnameErr= "name is required";
	}
	else{
		$firstname=$_POST['firstname'];
	}
	if(empty($_POST['lastname']))
	{
		$lnameErr= "lastname is required";
	}
	else{
	$lastname=$_POST['lastname'];
	}
	if(empty($_POST['username']))
	{
		//$lnameErr= "lastname is required";
	}
	else{
	$username=$_POST['username'];
	}
	if(empty($_POST['phonenum']))
	{
		$phonenumErr= "phonenum is required";
	}
	else{
	$PhoneNum=$_POST['phonenum'];
	}
	if(empty($_POST['emailid']))
	{
		$emailErr= "emailid is required";
	}
	else{
	$email=$_POST['emailid'];
	}
	if(empty($_POST['password']))
	{
		$passErr= "pass is required";
	}
	else{
	$Password=$_POST['password'];
	}
	if(empty($_POST['Address']))
	{
		$addErr= "add is required";
	}
	else{
	$Address=$_POST['Address'];
	}
	
	$Gender=$_POST['Gender'];
	if(empty($_POST['NID']))
	{
		$NIDNumErr= "NIDNum is required";
	}
	else{
	
	$NIDNum=$_POST['NID'];
	
}
$statement = $db->prepare("insert into tbl_account (fname,lname,username,pnum,email,address,nidnum,gender,password) values (?,?,?,?,?,?,?,?,?)");
$statement->execute(array ($firstname,$lastname,$username,$PhoneNum,$email,$Address,$NIDNum,$Gender,$Password) );

$query = $db->prepare("INSERT INTO tbl_login (username,password) values (?,?)");
$query->execute(array($username,$Password));

}
else{
	echo "error";
}
?>