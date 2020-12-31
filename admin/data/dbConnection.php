<?php
$dbhost = 'localhost';
$dbname = 'rms';
$dbuser = 'rms';
$dbpass = '1234';
	
	try{
		$db = new PDO ("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
		$db->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo "Connection Error.".$e->getMessage();
	}


?>