<?php
include('session/regcheck.php');

if(isset($_SESSION['fname'])){
header("location: Registered.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<h2>Staff Registration Form</h2>
<form action="  " method="POST" >

<label for="fname">First Name:</label>
 <input type="text" id="fname" name="fname"><?php echo $fnameError; ?><br><br>
 <label for="lname">Last Name:</label>
 <input type="text" id="lname" name="lname"><?php echo $lnameError; ?><br><br>
 <label for="email">Email:</label>
 <input type="text" id="email" name="email"><?php echo $emailError; ?><br><br>
 <label for="username">User Name:</label>
 <input type="text" id="username" name="username"><?php echo $usernameError; ?><br><br>
 <label for="password">Password:</label>
 <input type="password" id="password" name="password"><?php echo $passwordError; ?><br><br>
 <label for="cpassword">Confirm Password:</label>
 <input type="password" id="cpassword" name="cpassword"><?php echo $cpasswordError; ?><br><br>
 

 


  
 <input name="submit" type="submit" value="Submit">
<input type="reset">
</form>



<a href="Account.php">Back to Account</a><br>
</body>
</html>