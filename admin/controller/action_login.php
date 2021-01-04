<?php
include('../data/dbConnection.php');
$uname=$password=$txt="";
if (isset($_POST['formAccountLogin'])) {
	header("Location: ../../account/view/login.php");
}
if (isset($_POST['formOwnerLogin'])) {
	header("Location: ../../owner/view/login.php");
}

if (isset($_POST['formUserLogin'])) {
	header("Location: ../../rasel2/view/login.php");
}
if (isset ($_POST['formLogin']) )
{
	if(empty($_POST['uname']))
	{
		$unameErr = "User Name is Requierd";
	}
	else{
		$uname=$_POST['uname'];
	}
	if(empty($_POST['pwd']))
	{
		$passwordErr = "Password is Requierd";
	}
	else{
		$password=$_POST['pwd'];
	}
	/*$myfile = fopen("../data/admininfo.txt", "r") or die("Unable to open file!");
	while( $line=fgets($myfile))
	{
		$words = explode(",",$line);
		$user=$words[1];
		$pass=$words[2];
		
	}
	fclose($myfile);
	setcookie($user, $pass, time() + (86400), "/"); 
	if(isset($_COOKIE[$user])){
		$myfile = fopen("../data/cookies.txt", "a") or die("Unable to open file!");
		$txt=$_COOKIE[$user].$_COOKIE[$pass];
		fwrite($myfile, $txt);
		fclose($myfile);
	}
	if ($uname==$user && $password=$pass){
		session_start();
		$_SESSION['name'] = "resdnt";
		$_SESSION['uname'] =$uname;
		header ("location: ../view/index.php");
	}
	else{
		 $error = "Invaild Username or password";
	}*/
	
	$num_rows =0;
	$stmt = $db-> prepare("SELECT * FROM tbl_login where username=? and password=?");
	$stmt->execute(array($uname,$password));
	$num_rows = $stmt->rowcount();
	if($num_rows >0){
		session_start();
		$_SESSION['name'] = "resdnt";
		$_SESSION['uname'] =$uname;
		header ("location: ../view/index.php");
	}
	else{
		$error = "Invaild Username or password";
	}
	


}

?>

<!DOCTYPE html>
<html>
<title>Login</title>
<link rel="stylesheet" href="../view/login.css">
<style>
.error{
	color:red;
}
.styleSubmit1{
    width: 18%;
    background-color: green;
    color: white;
    font-size: xx-large;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
</style>
<script>
	function validate() {
		
		var a = document.getElementById('uname').value;
		var b = document.getElementById('pwd').value;
		// console.log(x);
		if(a == "") {
			document.getElementById('errorMsg').innerHTML = "Username is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		if(b == "") {
			document.getElementById('errorMsg').innerHTML = "Password is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		
	}
</script>
<body>
<div class="lgCss">
<form action="../controller/action_login.php" method="POST">
<input type="submit" class="styleSubmit1" name="formAccountLogin" value=" Account Login" >
<input type="submit" class="styleSubmit1" name="formOwnerLogin" value=" Owner Login" >
<input type="submit" class="styleSubmit1" name="formUserLogin" value=" User Login" >
</form>
<h1 class="headStyle">Login</h1>
<h4 style="color:red;"><?php if(isset($error)){ echo $error; }  ?>
</h4>

<form action="" onsubmit="return validate()" method="POST"  >
  <label for="uname">Username: </label>
  <input type="text" class="inputStyle" id="uname" name="uname" placeholder="Enter Your Username" required >
  <br><br>
  <label for="pwd">Password: </label>
  <input type="password" class="inputStyle" id="pwd" name="pwd" placeholder="Enter Your Password" required >
  <br><br>
  <input type="submit" class="styleSubmit" name="formLogin" value="Login" >
</form>
</div>
</body>
</html>
