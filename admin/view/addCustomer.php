<?php
ob_start();
	session_start();
	if($_SESSION['name']!='resdnt'){
		header("location: login.php");
	}
	else{
	$uname= $_SESSION['uname'];
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Add customer</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include('header.php'); ?>
<h1 class="headStyle">Add Customer</h1>
<form action="../controller/action_addCustomer.php" method="POST" >
	<label for="cfname"> First Name </label>
	<input type="text" name="cfname" id="cfname" placeholder="Enter Customer Name"  >
	<br>
	<br>
	<label for="clname"> Last Name </label>
	<input type="text" name="clname" id="clname" placeholder="Enter Customer Name"  >
	<br>
	<br>
	<label for="cgender"> Gender</label>
	<input type="radio" name="cgender" id="male" value="male" ><span class="styleGenderInput">Male</span>
	<input type="radio" name="cgender" id="female" value="Female" ><span class="styleGenderInput">Female</span>
	<input type="radio" name="cgender" id="other" value="other" ><span class="styleGenderInput">Other</span>
	<br>
	<br>
	<label for="email" > Email Address  </label>
	<input type="email" name="cemail" id="email" placeholder="Enter Customer Email Address " >
	<br>
	<br>
	<label for="cphone" > Phone Number </label>
	<input type="tel" name="cphone" id="cphone" value="" placeholder="Enter Phone Number " pattern="[0]{1}[1]{1}[3-9]{1}[0-9]{8}" >
	<br>
	<br>
	<label for="cItemName" > Item Name </label><br>
	<input type="checkbox" class="checkStyleInput" id="cItemName1" name="cItemName1" value="rice">
	<span class="checkStyle" for="cItemName1"> Rice</span>
	<input type="checkbox" class="checkStyleInput" id="cItemName2" name="cItemName2" value="Drink">
	<span class="checkStyle" for="cItemName2"> Drink</span><br>
	<br>
	<br>
	<label for="" >Quantity</label>
	<input type="text" name="cQuantity" id="cQuantity" value="" placeholder="enter number of item" >
	<br>
	<br>
	<input type="submit" name="formAddCustomer" value="Add Customer" >
</form>
<br>
<br>
<?php include('footer.php'); ?>
</body>
</html>