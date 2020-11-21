<?php
$viewselfinfo=$fname=$lname=$emailid=$PresentAddress=$Roadno=$Area=$Occupation=$city=$PhoneNumber=$Gender"";
if(isset($_POST['viewselfinfo']))
{
	if(empty($_POST['fname']))
	{
		$firstNameErr="Please Enter first Name";
	}
	else{
		$firstName=$_POST['fname'];
	}
	if(empty($_POST['lname']))
	{
		$lastNameErr="Please Enter lirst Name";
	}
	else{
		$lastName=$_POST['lname'];
	}
	if(empty($_POST['email']))
	{
		$itemDescriptionErr="Please Enter email id";
	}
	else{
		$emailid=$_POST['emailid'];
	}
	if(empty($_POST['Present Address']))
	{
		$PresentAddressErr="please Enter the present add";
	}
	else{
		$PresentAddress=$_POST[''];
	}
	if(empty($_POST['Road no']))
	{
		$RoadnoErr="please Enter the road no";
	}
	else{
		$Roadno=$_POST[''];
	}
	if(empty($_POST['Area']))
	{
		$AreaErr="Please Enter The Area holding";
	}
	else{
		$Area=$_POST['Area'];
	}
	if(empty($_POST['Occupation']))
	{
		$OccupationErr="Select a Occupation";
	}
	else{
		$Occupation=$_POST['Occupation'];
	}
	if(empty($_POST['Phone Number']))
	{
		$PhoneNumberErr="Enter the phone no";
	}
	else{
		$PhoneNumber=$_POST[''];
	}
	if(empty($_POST['city']))
	{
		$cityErr="Please select the city";
	}
	else{
		$city=$_POST[''];
	}
	if(empty($_POST['Gender']))
	{
		$cityErr="Please select the Gender";
	}
	else{
		$Gender=$_POST[''];
	}
}
?>