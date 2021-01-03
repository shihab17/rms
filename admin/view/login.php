<!DOCTYPE html>
<html>
<title>Login</title>
<link rel="stylesheet" href="login.css">
<body>
<div class="lgCss">
<h1>Login with Admin</h1>
<h4 style="color:red;"><?php if(isset($error)){ echo $error; }  ?></h4>
<form action="../controller/action_login.php" method="POST" >
  <label for="uname">Username: </label>
  <input type="text" class="inputStyle" id="uname" name="uname" placeholder="Enter Your Unsername" >
  <span class="error"><?php if(isset($unameErr)) { echo $unameErr; }  ?></span><br><br>
  <label for="pwd">Password: </label>
  <input type="password" class="inputStyle" id="pwd" name="pwd" placeholder="Enter Your Password" >
  <span class="error"><?php if(isset($passwordErr)){ echo $passwordErr; }  ?></span>
  <br><br>
  <input type="submit" class="styleSubmit" name="formLogin" value="Login" >
</form>
</div>
</body>
</html>