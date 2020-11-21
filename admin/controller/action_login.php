<?php
if (isset ($_POST['form1']) )
{
	if(empty($_POST['uname']))
	{
		$unameErr = "User Name is Requierd";
	}
	else{
		$uname=$_POST['uname'];
	}
	if(empty($_POST['psw']))
	{
		$passwordErr = "Password is Requierd";
	}
	else{
		$password=$_POST['psw'];
	}
	$myfile = fopen("../data/owner.txt", "r") or die("Unable to open file!");
	while( $line=fgets($myfile))
	{
		$words = explode(",",$line);
		$user=$words[1];
		$pass=$words[2];
		
	}
	fclose($myfile);
	if ($uname==$user && $password=$pass){
		session_start();
		$_SESSION['name'] = "resdnt";
		$_SESSION['uname'] =$uname;
		header ("location: ../view/home.php");
	}
	else{
		echo $error = "Invaild Username or password";
	}
	


}
else{
	echo "Can no found";
}

?>