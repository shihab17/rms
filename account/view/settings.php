
<!DOCTYPE html>
<html>
<title>Password Reset</title>
<body>
<style>
.error{
	color:red;
}
</style>
<?php include('../view/Header.php'); ?>
<center>
<h1>Change Password</h1>
<?php
$oldPsw=$newPsw=$rePsw="";?>
<span class= "success" ><?php if (isset($success)){echo $success;} ?></span><br>
<span class="error" ><?php if(isset($error_message)){echo $error_message;} ?></span>
<form action="" method="POST" >
	<label for="oldPsw" >Old Password:</label>
	<input type="password" name="oldPsw" id="oldPsw" placeholder="Type your current Password">
	<span class="error" ><?php if(isset($oldPswErr)){echo $oldPswErr;} ?></span>
	<br>
	<br>
	<label for="newPsw" >New Password:</label>
	<input type="password" name="newPsw" id="newPsw" placeholder="Type New Password">
	<span class="error" ><?php if(isset($newPswErr)){echo $newPswErr;} ?></span>
	<br>
	<br>
	<label for="rePsw" >Confirm Password:</label>
	<input type="password" name="rePsw" id="rePsw" placeholder="Repeat Password">
	<span class="error" ><?php if(isset($rePswErr)){echo $rePswErr;} ?></span>
	<br>
	<br>
	<input type="submit" name="formCngPass" value="Change Password" >
	<br>
	<br>
</form>
<br>
<br>
<?php include('../view/Footer.php'); ?>
</center>
</body>
</html>