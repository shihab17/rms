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
<head>
<title>Owner</title>
</head>
<body>
<center><?php include('Header.php'); ?></center>

<center><?php include('Footer.php'); ?></center>

</body>
</html>