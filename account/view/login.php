<?php
  	$unameErr = "";
	  	$uname = "";
?>
<style>
.error{
	color:red;
}
</style>
<!DOCTYPE html>
<html>

 <head>
 <title>Login Form</title>
 
 
 </head>
 <body>
 <center>
     <h1>Login Here</h1>
	 <h4 style="color:red;"><?php if(isset($error)){ echo $error; }  ?></h4>
	 <form action = "../controller/action_login.php" method = "post">
	 <label for="uname">USER NAME:</label><br><?php echo $unameErr; ?><br/>
  <input type="text" id="uname" name="username" value=""><br><br>
  <label for="password">PASSWORD:</label><br>
  <?php echo $unameErr; ?><br/>
  <input type="text" id="password" name="password" value=""><br><br>
  
  <input type="Submit" value="Login">
	 
 </form>
 </center>
 </body>
 </html>