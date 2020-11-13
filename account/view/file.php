<?php
$myfile=fopen("../data/user.txt","r") or die("Unable to open file!");
			while($line=fgets($myfile))
			{
				$words=explode(",",$line);
			$user=$words[1];
			$pass=$words[2];
			}
			fclose($myfile);
			
			echo $user;
			echo $pass;
			?>