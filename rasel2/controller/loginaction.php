<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "youtube";


$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['submit'])){
    
    $username=$_POST['text'];
    $password=$_POST['password'];
    $uname=stripcslashes($uname);
    $password=stripcslashes($password);



    
    $sql="select * from FASTCODE where username='".$username."'AND password='".$password."' limit 1 ";
    
    $result= mysqli_fetch_array($sql);

    
    if($result['text']==$username && $result['password'] == $password){
        echo " You Have Successfully Logged in";
     
    }
    else{
        echo " You Have Entered Incorrect Password";
     
    }
        
}
?>