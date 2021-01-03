<?php
	ob_start();
	session_start();
	if($_SESSION['name']!='resdnt'){
		header("location: login.php");
	}
	else{
	$uname= $_SESSION['uname'];
	
	}
	$cookie_value= date("Y-m-d",time());
	setcookie($uname, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	if(!isset($_COOKIE[$uname])) {
	  echo "Cookie named" . $uname . " is not set!";
	}
	else {
	  $myfile = fopen("../data/cookies.txt", "a") or die("Unable to open file!");
	  $txt="Username: ".$uname." ". "Time: ".$_COOKIE[$uname]."<br>";
	  fwrite($myfile, $txt);
	  fclose($myfile);
	}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Admin</title>

</head>
<body id="homePage">
<center><?php include('header.php'); ?></center>
<br>
<center><h1 id="wc">Welcome to Admin Homepage</h1></center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center><?php include('footer.php'); ?></center>

</body>
</html>