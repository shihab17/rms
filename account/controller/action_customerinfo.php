<?php

if(isset($_POST['submit'])){
	if(empty($_POST['Customer No']))
	{
		$CustomernoErr= "no is required";
	}
	else{
		$CustomerNo=$_POST['CustomerNo'];
	}

if(empty($_POST['CustomerName']))
	{
		$CustomerNameErr= "Customer Name is required";
	}
	else{
		$CustomerName=$_POST['Customer Name'];
	}
if(empty($_POST['E-mail']))
	{
		$EmailErr= "Email is required";
	}
	else{
		$Email=$_POST['Email'];
	}
if(empty($_POST['Phone no']))
	{
		$PhonenoErr= "Phone no is required";
	}
	else{
		$Phoneno=$_POST['Phone no'];
	}
if(empty($_POST['DOB']))
	{
		$DOBErr= "DOB is required";
	}
	else{
		$DOB=$_POST['DOB'];
	}
if(empty($_POST['Address']))
	{
		$AddressErr= "Address is required";
	}
	else{
		$Address=$_POST['Address'];
	}














?>