<?php
class db{
function OpenCon(){
$servername = "localhost";
$username = "root";
$password = "";
$dbName= "ariful";
$conn = mysqli_connect($servername, $username, $password,$dbName) or die("Connect failed: %s\n". $conn -> error);
return $conn;}

function CheckUser($conn,$table,$username,$password){
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
return $result; }

function insertUser($conn,$fname, $lname, $email, $username, $password ,$cpassword , $gender, $DOB){
$result=$conn->query("insert into StaffReg(fname,lname,email,username,password,cpassword,gender,DOB) values('$fname','$lname','$email','$username','$password','$cpassword','$gender','$DOB')") or die(mysqli_error($conn));
    return $result;
    echo "<h3>Registration Successful!</h3>";
}
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>