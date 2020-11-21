
<!DOCTYPE html>
<html>
<title>CHANGE E-MAIL ID</title>
<body>
<style>
.error{
	color:red;
}
</style>
<?php include('../view/Header.php'); ?>
<center>
<h1>CHANGE E-MAIL ID</h1>
<?php
$oldid=$newid=$reenterid="";?>
<span class= "success" ><?php if (isset($success)){echo $success;} ?></span><br>
<span class="error" ><?php if(isset($error_message)){echo $error_message;} ?></span>
<form action="" method="POST" >
	<label for="oldid" >Old EMAIL:</label>
	<input type="email" name="oldmail" id="oldmail" placeholder="Type your current mail id">
	<span class="error" ><?php if(isset($oldmailErr)){echo $oldmailErr;} ?></span>
	<br>
	<br>
	<label for="newid" >New EMAIL:</label>
	<input type="email" name="newmail" id="newmail" placeholder="Type New mail id">
	<span class="error" ><?php if(isset($newmailErr)){echo $newmailErr;} ?></span>
	<br>
	<br>
	<label for="reid" >Confirm EMAIL:</label>
	<input type="mail" name="remail" id="remail" placeholder="Repeat mail">
	<span class="error" ><?php if(isset($remailErr)){echo $remailErr;} ?></span>
	<br>
	<br>
	<input type="submit" name="formCngid" value="Change mail" >
	<br>
	<br>
</form>
<br>
<br>
<?php include('../view/Footer.php'); ?>
</center>
</body>
</html>