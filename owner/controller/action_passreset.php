<?php
$oldPsw=$newPsw=$rePsw="";
if(isset($_POST['Passreset']))
{
	try{
		if(empty($_POST['oldPsw'])){
		throw new Exception ('! Please enter Your Old Password..');
		}
		if(empty($_POST['newPsw']))
		{
			throw new Exception ('! Please enter password..');
		}
		if(empty($_POST['rePsw']))
		{
			throw new Exception ('! Please Enter  password..');
		}
		else{
			if($_POST['newPsw']!=$_POST['rePsw']){
				throw new Exception ('Do not match password');
			}
		}
		$myfile = fopen("../data/ownerinfo.txt", "r") or die("Unable to open file!");
	while( $line=fgets($myfile))
	{
		$words = explode(",",$line);
		$pass=$words[2];
	}
	fclose($myfile);
	if($pass!=$_POST['oldPsw']){
		throw new Exception ('Your Old Password is Wrong');
	}
	$success= "Change Your Password Successfully";
	}
	catch (Exception $e){
			$error_message = $e->getMessage();
		}
}
?>
