<?php
	include('../data/dbCon.php'); 
	if(isset ($_REQUEST['username']) )
	{
	$username= $_REQUEST['username'];
	}
	else
	{
	header('location: ../view/index.php');
	}
if(isset($_POST['Updatedata']))
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
	 if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  }
  else {
    $email = test_input($_POST["email"]);
  }
	if(empty($_POST['PresentAddress']))
	{
		$PresentAddressErr="please Enter the present add";
	}
	else{
		$PresentAddress=$_POST['Padd'];
	}
	if(empty($_POST['Roadno']))
	{
		$RoadnoErr="please Enter the road no";
	}
	else{
		$Roadno=$_POST['roadno'];
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
	if(empty($_POST['PhoneNumber']))
	{
		$PhoneNumberErr="Enter the phone no";
	}
	else{
		$PhoneNumber=$_POST['Number'];
	}
	if(empty($_POST['city']))
	{
		$cityErr="Please select the city";
	}
	else{
		$city=$_POST['city'];
	}
	 if (empty($_POST["Gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
		$statement = $db->prepare("update tbl_account set fname = ?,lname = ?,username = ?, pnum=? , email =?, address =?,nidnum=?,gender=? where username=?");
        $statement->execute(array ($firstName,$lastName,$username,$PhoneNumber,$email,$PresentAddress,$gender,$username) );
		// $statement = $db->prepare("update tbl_account set fname = ?,lname = ? where username=?");
        // $statement->execute(array ($firstName,$lastName,$username) );
    
  
}
?>

<!DOCTYPE html>
<html>
<head>


<title>VIEW SELF INFORMATION</title>


</head>

<body>
<?php include('header.php'); 

$stmt = $db-> prepare("SELECT * FROM tbl_account where username=?");
		$stmt->execute(array($username));
		$result = $stmt-> fetchAll (PDO::FETCH_ASSOC);
		foreach($result as $row){
			$fname=$row['fname'];
			$lname=$row['lname'];
			$email=$row['email'];
			$address=$row['address'];
			$nidnum=$row['nidnum'];
			$gender=$row['gender'];
	
		}

?>
<center><h1>SELF INFORMATION</h1></center>
<div class="INFROMATION">
<form action = "" method = "post">
<h2>Please Fill In All Details in Block Letters</h2>
<label>First Name:</label>
<input type="text" name="firstname" value="<?php echo $fname;?>" required><br><br>
<label>Last Name:</label>
<input type="text" name="lname"  value="<?php echo $lname;?>" required><br><br>
<label>Email Id:</label>
<input type="mail" name="email" value="<?php echo $email;?>"required><br><br>

<label>Present Address:</label>
<input type="text" name="Padd" value="<?php echo $address;?>" required><br><br>
<label>Road no:</label>
<input type="text" name="roadno" required><br><br>
<label>Area:</label>
<input type="text" name="area" required><br><br>

<label>Occupation:</label>
<input type="text" name="Occupation" required><br><br>
<label>Phone Number:</label>
<select>
<option>+088</option>
<option>+971</option>
<option>+978</option>
<option>+988</option>
<option>+561</option>
<option>+766</option>
<option>+443</option>
<option>+778</option>
<input type="" name="Number" required>
</select><br><br>
<label>city:</label>
<select name="city">
<option>CTG</option>
<option>dhaka</option>
<option>barisal</option>
<option>khulna</option>
<option>cumilla</option>
<option>ragpur</option>
<option>sylhet</option>
<option>cox'x bazar</option>

</select><br>
<label>Gender:</label>

    <input type="radio" name="Gender">Male
    <input type="radio" name="Gender">Female
	<input type="radio" name="Gender">Other<br><br>
<label></label><br>
<input type="Submit" value="submit" name="submit"></td><br>
<label></label><br>
<input type="submit" value="Update" name="Updatedata"></td>
<?php include('footer.php');?>
</body>





</html>

