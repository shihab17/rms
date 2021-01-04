<!DOCTYPE html>
<html>
<title>Login</title>
<link rel="stylesheet" href="login.css">
<style>
.styleSubmit1{
    width: 18%;
    background-color: green;
    color: white;
    font-size: xx-large;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}</style>
<body>
<div class="lgCss">
<form action="../controller/action_login.php" method="POST">
<input type="submit" class="styleSubmit1" name="formAccountLogin" value=" Account Login" >
<input type="submit" class="styleSubmit1" name="formOwnerLogin" value=" Owner Login" >
<input type="submit" class="styleSubmit1" name="formUserLogin" value=" User Login" >
</form>
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