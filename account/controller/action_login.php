<?php
if($_SERVER["REQUEST_METHOD"] == "post") {
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
			
			if($uname=$user && $pass=$pas)
			{
				echo "Login";
				
			}
			else {
				echo "invalid";
			}
			
		} 
		?>