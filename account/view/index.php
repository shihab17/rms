<?php
ob_start();
session_start();
if($_SESSION['name']=="name")
{
	//echo $_SESSION['uname'];
}
else
{
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Account</title>
</head>
<body>

<center><h1>Welcome To RMS Account</h1></center>
<?php include('header.php'); ?>

</body>
</html>