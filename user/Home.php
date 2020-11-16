<?php
session_start();
if(empty($_SESSION["username"]))
{
  header("location: StaffLogin.php");
}
?> 
<!DOCTYPE html>
<html>
<body>
<h1> Welcome to Staff </h1>
<a href="CreateCourse.php"> CreateCourse </a><br><br><br>
<a href="AssignCourse.php"> Assign Course and Section </a><br><br><br>
<a href="StaffProfile.php"> My Profile </a><br><br><br>
<h5>Do you want to <a href="session/logoutcheck.php">logout</a></h5>
</body>
</html>