<?php
	ob_start();
	session_start();
	if($_SESSION['name']!='resdnt'){
		header("location: login.php");
	}
	else{
	$uname= $_SESSION['uname'];
	
	}
	//echo $uname;
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
</head>
<body>
<center><?php include('header.php'); ?></center>

<center><?php include('footer.php'); ?></center>

</body>
</html>