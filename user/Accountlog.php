<?php
include('session/logincheck.php');

if(isset($_SESSION['username'])){
header("location: Home.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<h1>Staff Login</h1>
<form action="" method="post">
<input type="text" name="username" placeholder="Enter your username!"><?php echo $usernameerror; ?><br><br>
<input type="password" name="password" placeholder="Enter your password!" ><?php echo $passworderror; ?><br><br>
<input name="submit" type="submit" value="Login"><br>
<input type="reset"><br><br>
<a href="Account.php">Back to Account</a><br>
</form>
<br>
</body>
</html>