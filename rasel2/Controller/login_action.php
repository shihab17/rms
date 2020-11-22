<?php

session_start();
$user = $pass = "";


if(isset($_POST['submit'])){
 $user = $_POST['username'];
 $pass = $_POST['password'];

 if($user == "admin" && $pass=="admin"){
     echo("Username and password matched");
 }
 else{
     echo(" Sorry");
 }
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;




}



?>

