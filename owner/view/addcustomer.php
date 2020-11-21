<!DOCTYPE html>
<html>
<head>
<title>Add customer</title>
</head>
<body>
<?php include('../view/Header.php'); ?>

<h1>Add Customer</h1>
<form action="" method="POST" >
	<label for="fname"> Full Name </label>
	<input type="text" name="fname" id="fname" placeholder="Enter Customer full Name"  >
	
	<br>
	<br>
	<label for="gender"> Gender</label>
	<input type="radio" name="gender" id="male" value="male" >
	<label for="male"> Male </label>
	<input type="radio" name="gender" id="female" value="Female" >
	<label for="female"> Female </label>
	<input type="radio" name="gender" id="other" value="other" >
	<label for="other"> Other </label>
	<br>
	<br>
	<label for="email" > Email Address  </label>
	<input type="email" name="email" id="email" placeholder="Enter Customer Email Address " >
	<br>
	<br>
	<label for="phone" > Phone Number </label>
	<input type="tel" name="phone" id="phone" value="" placeholder="Enter Phone Number " pattern="[0]{1}[1]{1}[3-9]{1}[0-9]{8}" >
	<br>
	<br>
	<label for="address">Address</label>
	<input type="text" name="address" id="address" placeholder="Enter Address">
	<br>
	<br>
	<input type="submit" name="addCustomer" value="Add Customer" >
	
	<br>
	<br>
	<?php include('../view/Footer.php'); ?>
	
</form>


</body>
</html>