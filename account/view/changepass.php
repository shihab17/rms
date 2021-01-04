
<!DOCTYPE html>
<html>
<title>Password Reset</title>
<body>
<style>
.error{
	color:red;
}
</style>
<script>
	function validate() {
		var oldPsw = document.getElementById('oldPsw').value;
		var newPsw = document.getElementById('newPsw').value;
		var rePsw = document.getElementById('rePsw').value;
		// console.log(x);
		if(oldPsw == "") {
			document.getElementById('errorMsg').innerHTML = "oldPsw is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		if(newPsw == "") {
			document.getElementById('errorMsg').innerHTML = "newPsw is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		if(rePsw == "") {
			document.getElementById('errorMsg').innerHTML = "rePsw is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		
	}
</script>
<?php include('../view/Header.php'); ?>
<center>
<h1>Change Password</h1>
<?php
$oldPsw=$newPsw=$rePsw="";?>
<span class= "success" ><?php if (isset($success)){echo $success;} ?></span><br>
<span class="error" ><?php if(isset($error_message)){echo $error_message;} ?></span>
<form action="" method="POST" onsubmit=" return validate()" >
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