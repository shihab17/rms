	<?php
	 include('../data/dbCon.php'); 
 $num_rows=0;
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
			// $myfile=fopen("../data/user.txt","r") or die("Unable to open file!");
			// while($line=fgets($myfile))
			// {
				// $words=explode(",",$line);
			// $user=$words[1];
			// $pas=$words[2];
			// }
			// fclose($myfile);
			
			// if($uname==$user && $pass==$pas)
			// {
				// session_start();
				// $_SESSION['name']="name";
			// $_SESSION['uname']=$user;
			// header("location: ../view/index.php");
				
			// }
			// else {
				// echo "invalid &nbsp";
				// echo "<a href='../view/login.php'>try again </a>";
			// }
			$stmt = $db-> prepare("SELECT * FROM tbl_login where username=? and password=?");
			$stmt->execute(array($uname,$pass));
			$num_rows = $stmt->rowcount();
			if($num_rows>0){
				session_start();
				$_SESSION['name']="name";
				$_SESSION['uname']=$user;
				header("location: ../view/index.php");
			}
			else{
				echo "invalid &nbsp";
				echo "<a href='../view/login.php'>try again </a>";
			}
		} 
		
	?>
