
<?php

include("../Controller/connection.php");

$username = $_GET['username'];
$password = $_GET['password'];
$gender = $_GET['gender'];
$email = $_GET['email'];
$birth = $_GET['birth'];

$query = "INSERT INTO FASTCODE (username, password, gender, email, birth) VALUES ('$username','$password','$gender','$email','$birth')";
$data = mysqli_query($conn, $query);

if($conn->query($query) === TRUE){
    header("Location: ../view/display.php");
}
else{
    echo "Error: " . $query . "<br>" . $conn->error;
}

?>
<?php
/*
include('connection.php');
session_start(); 
$username = $email = " ";
$usernameError=  $emailError=" ";

function test_input($data) {​​​​​$data = trim($data);$data = stripslashes($data);$data = htmlspecialchars($data);
return $data; }​​​​​
if(isset($_POST["submit"])){​​​​​
$username = test_input($_POST["username"]);
$email = test_input($_POST["email"]);



if ( (empty($_POST['email'])) || (!filter_var($email, FILTER_VALIDATE_EMAIL ,$_POST['email'] )) || (empty($_POST['username']))
 )
 {​​​​​
   
    $emailError = " Please Fill iut this field "; $usernameError =  " Please Fill iut this field ";
    
}​​​​​ else{​​​​​
 
$email = $_POST['email'];
$username = $_POST['username'];
$query = "INSERT INTO FASTCODE (username, password, gender, email, birth) VALUES ('$username','$password','$gender','$email','$birth')";
$data = mysqli_query($conn, $query);

if($conn->query($query) === TRUE){
    header("Location: display.php");
}
else{
    echo "Error: " . $query . "<br>" . $conn->error;
}



$_SESSION["email"]=$email;
$_SESSION["username"]=$username;
}
}

?>