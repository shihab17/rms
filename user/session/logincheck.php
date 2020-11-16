<?php
include('db.php');
session_start(); 
$username=$password="";
$usernameerror=$passworderror="";

function test_input($data) { $data = trim($data);$data = stripslashes($data);$data = htmlspecialchars($data);
   return $data;}
if(isset($_POST["submit"])){
$username=test_input($_POST["username"]);
$password=test_input($_POST["password"]);

if (empty($username) || !preg_match("/^[a-zA-Z-' ]*$/",$username) && empty($password))
{  $passworderror="Please enter password!"; $usernameerror="Please enter username!";}
else{// $_SESSION["username"]=$username; $_SESSION["password"]=$password; 
$username=$_POST['username'];
$password=$_POST['password'];

$connection = new db();
$con=$connection->OpenCon();
$userQuery=$connection->CheckUser($con,"StaffReg",$username,$password);

if ($userQuery->num_rows > 0) {
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
   }
 else {
    $passworderror="Wrong password!"; $usernameerror="Wrong username!";
}
$connection->CloseCon($con);

}
}

?>