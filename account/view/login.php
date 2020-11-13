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
			$myfile=fopen("../data/user.txt","r") or die("Unable to open file!");
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
			header("location: index.php");
				
			}
			else {
				echo "invalid";
			}
			
		} 
		
	?>


<!DOCTYPE html>
<html>

 <head>
 <title>Login Form</title>
 
 
 </head>
 <body>
     <h1>Login Here</h1>
	 <form action = "" method = "post">
	 <label for="uname">USER NAME:</label><br><?php echo $unameErr; ?><br/>
  <input type="text" id="uname" name="uname" value=""><br><br>
  <label for="password">PASSWORD:</label><br>
  <?php echo $unameErr; ?><br/>
  <input type="text" id="password" name="password" value=""><br><br>
  
  <input type="Submit" value="Login">
	 
 </form>
 
 </body>
 </html>