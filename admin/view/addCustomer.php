<!DOCTYPE html>
<html>
<head>
<title>Add customer</title>
</head>
<body>

<h1>Add Customer</h1>
<form action="" method="POST" >
	<label for="cfname"> First Name </label>
	<input type="text" name="cfname" id="cfname" placeholder="Enter Customer Name"  >
	<br>
	<br>
	<label for="clname"> Last Name </label>
	<input type="text" name="clname" id="clname" placeholder="Enter Customer Name"  >
	<br>
	<br>
	<label for="cgender"> Gender</label>
	<input type="radio" name="cgender" id="male" value="male" >
	<label for="male"> Male </label>
	<input type="radio" name="cgender" id="female" value="Female" >
	<label for="female"> Female </label>
	<input type="radio" name="cgender" id="other" value="other" >
	<label for="other"> Other </label>
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
	<input type="submit" name="addCustomer" value="Add Customer" >
</form>


</body>
</html>