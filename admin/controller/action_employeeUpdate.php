<?php 
include('../data/dbConnection.php');
$counter = 0;
if(isset ($_REQUEST['empId']) )
	{
		$empId= $_REQUEST['empId'];
	}
	else
	{
		header('location: ../view/employee.php');
	}
if(isset($_POST['formUpdateEmp']))
{
	if(empty($_POST['empFName']))
	{
		$empFNameErr ="First Name is reqierd";
		$counter = $counter + 1;
	}
	else{
		if (!preg_match("/^[a-zA-Z ]*$/",$_POST['empFName'])){
			$empFNameErr = "Only letters and white space allowed";//First name is Invaild.
			$counter = $counter + 1;
		}
		else{
		$empFName=$_POST['empFName'];
		}
	}
	if(empty($_POST['empLName']))
	{
		$empLNameErr ="last Name is reqierd";
		$counter = $counter + 1;
	}
	else{
		if (!preg_match("/^[a-zA-Z ]*$/",$_POST['empLName'])){
			$empLNameErr = "Only letters and white space allowed";//Last name is Invaild.
			$counter = $counter + 1;
		}
		$empLName=$_POST['empLName'];
	}
	if(empty($_POST['empUName']))
	{
		$empUNameErr ="Username is reqierd";
		$counter = $counter + 1;
	}
	else{
		if (!preg_match("/(?=.{3})(?!.{11})^[a-zA-Z 0 -9]+$/",$_POST['empUName']))
		{
			$empUNameErr = "username is not valid, please type minimum 3 Letters";//User name is Invaild.
			$counter = $counter + 1;
		}
		$empUName=$_POST['empUName'];
	}
	if(empty($_POST['empGender']))
	{
		$empGenderErr ="Gender is reqierd";
		$counter = $counter + 1;
	}
	else{
		$empGender=$_POST['empGender'];
	}
	if(empty($_POST['empBirthday']))
	{
		$empBirthdayErr ="Birthday is reqierd";
		$counter = $counter + 1;
	}
	else{
		$empBirthday=$_POST['empBirthday'];
	}
	if(empty($_POST['empAddress']))
	{
		$empAddressErr ="Address is reqierd";
		$counter = $counter + 1;
	}
	else{
		$empAddress=$_POST['empAddress'];
	}
	if(empty($_POST['empEmail']))
	{
		$empEmailErr ="Email Address is reqierd";
		$counter = $counter + 1;
	}
	else{
		if (!filter_var($_POST['empEmail'], FILTER_VALIDATE_EMAIL)){
			$empEmailErr ="Email Address is invalid";
			$counter = $counter + 1;
		}
		else{
		$empEmail=$_POST['empEmail'];
		}
	}
	if(empty($_POST['empPhn']))
	{
		$empPhnErr ="Phone Number is reqierd";
		$counter = $counter + 1;
	}
	else{
		
		if (!preg_match (" /(^(\+8801|8801|01|008801))[1|5-9]{1}(\d){8}$/",$_POST['empPhn']) )
			{
				$empPhnErr="Invaild Phone Number";
				$counter = $counter + 1;
			}
			else{
				$empPhn=$_POST['empPhn'];
			}
	}
	if(empty($_POST['empdgn']))
	{
		$empdgnErr =" reqierd";
		$counter = $counter + 1;
	}
	else{
		$empdgn=$_POST['empdgn'];
	}
	if(empty($_POST['empSalgrade']))
	{
		$empSalgradeErr ="reqierd";
		$counter = $counter + 1;
	}
	else{
		$empSalgrade=$_POST['empSalgrade'];
		
	}
	if($counter == 0){
		$statement = $db->prepare("update tbl_emp set fname = ?,lanme = ?,username = ?, gender=? , dob =?, address =?, email =?, phnNumber =?, designation =?, salary =? where empId=?");
		$statement->execute(array ($empFName,$empLName,$empUName,$empGender,$empBirthday,$empAddress,$empEmail,$empPhn,$empdgn,$empSalgrade,$empId) );
		$sucess="Succsessfully Updated Employee";
	}
	else{
		$error="Faild! Update Employee";
	}
}
?>
<!DOCTYPE html>
<html>
<title>Update Employee</title>
<link rel="stylesheet" href="../view/style.css">
<body>
<style>
.error{color:red;}
</style>
<?php 
	include('../view/header.php'); 
	$stmt = $db-> prepare("SELECT * FROM tbl_emp where empId =?");
	$stmt->execute(array($empId));
	$result = $stmt-> fetchAll (PDO::FETCH_ASSOC);
	foreach($result as $row){
	$empFirstNameOld=$row['fname'];
	$empLastNameOld=$row['lanme'];
	$empUsernameOld=$row['username'];
	$empGenderOld=$row['gender'];
	$empDobOld=$row['dob'];
	$empAddressOld=$row['address'];
	$empEmailOld=$row['email'];
	$empPhoneNumberOld=$row['phnNumber'];
	$empDesignationOld=$row['designation'];
	$empSalaryOld=$row['salary'];
	}
?>
<h1 class="headStyle">Update employee</h1>
<h3 style="color:green;" ><?php if(isset($sucess)){echo $sucess;} ?></h3>
<h3 style="color:red;" ><?php if(isset($error)){echo $error;} ?></h3>
<form action="" method="POST" >
	<label for="empFName">First Name </label>
	<input type="text" id="empFName" name="empFName" value="<?php echo $empFirstNameOld; ?>" placeholder="Enter first name"  >
	<span class="error" ><?php if(isset($empFNameErr)){echo $empFNameErr;} ?></span>
	<br>
	<br>
	<label for="empLName">Last Name </label>
	<input type="text" id="empLName" name="empLName" value="<?php echo $empLastNameOld; ?>" placeholder="Enter Last name" >
	<span class="error" ><?php if(isset($empLNameErr)){echo $empLNameErr;} ?></span>
	<br>
	<br>
	<label for="empUName">Username </label>
	<input type="text" id="empUName" name="empUName" value="<?php echo $empUsernameOld; ?>" placeholder="Enter username" >
	<span class="error" ><?php if(isset($empUNameErr)){echo $empUNameErr;} ?></span>
	<br>
	<br>
	<label for="empGender">Gender</label>
	<input type="radio" id="empGender" name="empGender" value="male" ><span class="styleGenderInput">Male</span>
	<input type="radio" id="empGender" name="empGender" value="female" ><span class="styleGenderInput">Female</span>
	<input type="radio" id="empGender" name="empGender" value="other" ><span class="styleGenderInput">Other</span>
	<span class="error" ><?php if(isset($empGenderErr)){echo $empGenderErr;} ?></span>
	<br>
	<br>
	<label for="empBirthday" >Birthday</label>
	<input type="date" id="empBirthday" name="empBirthday" value="<?php echo $empDobOld; ?>" >
	<span class="error" ><?php if(isset($empBirthdayErr)){echo $empBirthdayErr;} ?></span>
	<br>
	<br>
	<label  for="empAddress" >Address</label>
	<textarea id="empAddress" name="empAddress" rows="5" cols="20"  ><?php echo $empAddressOld; ?></textarea>
	<span class="error" ><?php if(isset($empAddressErr)){echo $empAddressErr;} ?></span>
	<br>
	<br>
	<label for="empEmail">Email Address </label>
	<input type="email" id="empEmail" name="empEmail" value="<?php echo $empEmailOld; ?>" placeholder="Enter Email Address" >
	<span class="error" ><?php if(isset($empEmailErr)){echo $empEmailErr;} ?></span>
	<br>
	<br>
	<label for="empPhn">Phone Number </label>
	<input type="tel" id="empPhn" name="empPhn" value="<?php echo $empPhoneNumberOld; ?>" placeholder="" >
	<span class="error" ><?php if(isset($empPhnErr)){echo $empPhnErr;} ?></span>
	<br>
	<br>
	<label for="empdgn" >Designation</label>
	<select id="empdgn" name="empdgn"  >
	<option selected disabled >Choose...</option>
	<option value="manager" >Manager</option>
	<option value="account" >Accounts</option>
	</select>
	<span class="error" ><?php if(isset($empdgnErr)){echo $empdgnErr;} ?></span>
	<br>
	<br>
	<label for="empSalgrade" >Salary grade</label>
	<select id="empSalgrade" name="empSalgrade"  >
	<option selected disabled >Choose...</option>
	<option value="1" >Grade 1</option>
	<option value="2" >Grade 2</option>
	<option value="3" >Grade 3</option>
	<option value="4" >Grade 4</option>
	<option value="5" >Grade 5</option>
	</select>
	<span class="error" ><?php if(isset($empSalgradeErr)){echo $empSalgradeErr;} ?></span>
	<br>
	<br>
	<input type="submit" name="formUpdateEmp" value="Update Employee" >
</form>
<br>
<br>
<?php include('../view/footer.php'); ?>
</body>
</html>