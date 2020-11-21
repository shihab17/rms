<?php
if(isset($_POST['formAddCustomer'])){
	if(empty($_POST['cfname'])){
		$cfnameErr="First Name is not empty";
	}
	else{
		$cfname=$_POST['cfname'];
	}
	if(empty($_POST['clname'])){
		$clnameErr="Last Name is not empty";
	}
	else{
		$clname=$_POST['clname'];
	}
	if(empty($_POST['cgender'])){
		$cgenderErr="Gender is not empty";
	}
	else{
		$cgender=$_POST['cgender'];
	}
	if(empty($_POST['cemail'])){
		$cemailErr="Email is not empty";
	}
	else{
		$cemail=$_POST['cemail'];
	}
	if(empty($_POST['cphone'])){
		$cphoneErr="Phone Number is not empty";
	}
	else{
		$cphone=$_POST['cphone'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Add customer</title>
</head>
<body>
<style>
.error{color:red;}
</style>
<?php include('../view/header.php'); ?>
<h1>Add Customer</h1>
<form action="../controller/action_addCustomer.php" method="POST" >
	<label for="cfname"> First Name </label>
	<input type="text" name="cfname" id="cfname" placeholder="Enter Customer Name" required >
	<span class="error" ><?php if(isset($cfnameErr)){echo $cfnameErr;} ?></span>
	<br>
	<br>
	<label for="clname"> Last Name </label>
	<input type="text" name="clname" id="clname" placeholder="Enter Customer Name" required >
	<span class="error" ><?php if(isset($clnameErr)){echo $clnameErr;} ?></span>
	<br>
	<br>
	<label for="cgender"> Gender</label>
	<input type="radio" name="cgender" id="male" value="male" required>
	<label for="male"> Male </label>
	<input type="radio" name="cgender" id="female" value="Female" >
	<label for="female"> Female </label>
	<input type="radio" name="cgender" id="other" value="other" >
	<label for="other"> Other </label>
	<span class="error" ><?php if(isset($cgenderErr)){echo $cgenderErr;} ?></span>
	<br>
	<br>
	<label for="email" > Email Address  </label>
	<input type="email" name="cemail" id="email" placeholder="Enter Customer Email Address " required>
	<span class="error" ><?php if(isset($cemailErr)){echo $cemailErr;} ?></span>
	<br>
	<br>
	<label for="cphone" > Phone Number </label>
	<input type="tel" name="cphone" id="cphone" value="" placeholder="Enter Phone Number " pattern="[0]{1}[1]{1}[3-9]{1}[0-9]{8}" required>
	<span class="error" ><?php if(isset($cfnameErr)){echo $cfnameErr;} ?></span>
	<br>
	<br>
	<label for="cItemName" > Item Name </label><br>
	<input type="checkbox" id="cItemName1" name="cItemName1" value="rice">
	<label for="cItemName1"> Rice</label><br>
	<input type="checkbox" id="cItemName2" name="cItemName2" value="Drink">
	<label for="cItemName2"> Drink</label><br>
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
<?php include('../view/footer.php'); ?>
</body>
</html>