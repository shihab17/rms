	<?php
	  	$unameErr = "";
	  	$uname = "";
	  	 
if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["uname"])) {
				$unameErr= "Name is required";
				
			}
			else{
				$uname= $_REQUEST["uname"];
				
			}
			if(empty($_REQUEST["password"])) {
				$passErr= "password is required";
			}
			else{
				$pass= $_REQUEST["password"];
			}
			$myfile=fopen("../data/owner.txt","r") or die("Unable to open file!");
			while($line=fgets($myfile))
			{
				$words=explode(",",$line);
			$user=$words[1];
			$pas=$words[2];
			}
			fclose($myfile);
			
			if($uname==$user && $pass==$pas)
			{
				session_start();
				$_SESSION['name']="name";
			$_SESSION['uname']=$user;
			header("location: ../view/home.php");
				
			}
			else {
				echo "invalid &nbsp";
				echo "<a href='../view/login.php'>try again </a>";
			}
			
		} 
		
	?>
