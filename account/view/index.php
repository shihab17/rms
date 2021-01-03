<?php
ob_start();
session_start();
if($_SESSION['name']=="name")
{
  $username = $_SESSION['username'];
}
else
{
	header("location: login.php");
}


$cookie_value= date("Y-m-d",time());
    setcookie($username, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    if(!isset($_COOKIE[$username])) {​​​​​
      echo "Cookie named" . $username . "is not set!";
    }​​​​​
    else {​​​​​
      $myfile = fopen("../data/cookies.txt", "a") or die("Unable to open file!");
      $txt="Username: ".$username." ". "Time: ".$_COOKIE[$username]."<br>";
      fwrite($myfile, $txt);
      fclose($myfile);
    }​​​​​
?>
<!DOCTYPE html>
<html>

<head>
<title>Account</title>
<style>
body{
	font-family:latha;
	color:white;
	background:url(foodeee.jpg)no-repeat;
	background-size:cover;
}

.box{width:900px;
float:right;
border:10px black;}

.box ul li{ width:120px;
float:left;
margin:10px auto;
text-align: center;
}
.box ul li a {text-decoration:none;
color:black;}

.box ul li :hover{backgroung-color:black;}
.box ul li a:hover{ color:green;}

.wd{
	width:300px;
	height:550px;
	background-color:black;
	opacity:0.9;
	padding:55px;
}

.wd h1{
	text-align:center;
	text-transform:uppercase;
	font-weight:100px;
	
}

.wd h4{
	text-align:justify;
	color:darkgray;
	font-weight:75px;
}

.wd h2{
	text-align:center;
	text-tansform:uppercase;
	font-weight:normal;
	margin:40px auto;
}

.opt form ,input[type="button"]{
	backgroung-color:black;
	color:purple;
	padding:10px;
	round:14px auto;
	padding-left:50px;
	padding-right:50px;
	text-align:center;
}

form,input[type="button"]:hover{background-color:green;}

</style>
</head>
<body>
<?php  include('header.php');?>
<div class="wd">

   <h1>welcome To RMS!<h1/>
   
   <h4>If you want food captions that are specific to food types, scroll down to the bottom of the page to see the dozens of food-specific captions we’ve written for you. </h4>
   <h2>Reservation</h2>
 <div class="opt">
   <form action=""method="post">
   <input type="button" value="Booking Now">
   </form>
   </div>
</div>

</body>
</html>