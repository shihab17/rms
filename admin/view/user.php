<?php
	ob_start();
	session_start();
	if($_SESSION['name']!='resdnt'){
		header("location: login.php");
	}
	else{
	$uname= $_SESSION['uname'];
	}
?>
<!DOCTYPE html>
<html>
<title>User</title>
<link rel="stylesheet" href="style.css">

<body>
<?php include('header.php'); ?>

<h1 class="headStyle"><a class="anchorStyle" href="../view/employee.php">Employee</a></h1>
<h1 class="headStyle"><a class="anchorStyle" href="../view/customer.php">Customer</a></h1>

<br>
<br>
<?php include('footer.php'); ?>
</body>

</html>