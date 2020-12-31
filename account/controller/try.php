<?php
 include('../data/dbCon.php'); 
 $username="a";
 $password="1234";
 // $num_rows=0;
 // $uname="admin";
 // $pass="1234";
// $stmt = $db-> prepare("SELECT * FROM tbl_login where username=? and password=?");
// $stmt->execute(array($uname,$pass));
// $num_rows = $stmt->rowcount();
// if($num_rows>0){
	// echo "find";
// }
// else{
	// echo "not find";
// }
$query = $db->prepare("INSERT INTO tbl_login (username,password) values (?,?)");
$query->execute(array($username,$password));
?>