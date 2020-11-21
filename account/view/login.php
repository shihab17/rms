<?php
  	$unameErr = "";
	  	$uname = "";
?>
<!DOCTYPE html>
<html>

 <head>
 <title>Login Form</title>
 
 
 </head>
 <body>
     <h1>Login Here</h1>
	 <form action = "../controller/action_login.php" method = "post">
	 <label for="uname">USER NAME:</label><br><?php echo $unameErr; ?><br/>
  <input type="text" id="uname" name="uname" value=""><br><br>
  <label for="password">PASSWORD:</label><br>
  <?php echo $unameErr; ?><br/>
  <input type="text" id="password" name="password" value=""><br><br>
  
  <input type="Submit" value="Login">
	 
 </form>
 
 </body>
 </html>