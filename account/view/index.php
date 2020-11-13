<?php
ob_start();
session_start();
if($_SESSION['name']=="name")
{
	echo $_SESSION['uname'];
}
else
{
	header("location: login.php");
}
?>