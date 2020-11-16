<!DOCTYPE html>
<html>
    <head>
        
        <title>Your profile</title>

        <style>
.error {color: red;}
</style>
    </head>
    <body>

    <?php

$name = $email = $pass= $confpass = $gender = $dateofbirth = $About = $bloodgrp = "";
$nameErr = $emailErr = $passErr= $confpassErr = $genderErr = $dateofbirthErr =  $AboutErr = $bloodgrpErr= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["pass"])) {
    $passErr = "Password is required ";
  } else {
    $pass = test_input($_POST["pass"]);
  }

  if (empty($_POST["confpass"])) {
    $confpassErr = "Confirm Password is required ";
  } else {
    $confpass = test_input($_POST["confpass"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["dateofbirth"])) {
    $dateofbirthErr = "Date of Birth is required";
  } else {
    $dateofbirth = test_input($_POST["dateofbirth"]);
  }
  if (empty($_POST["About"])) {
    $dateofbirthErr = "About is  required";
  } else {
    $dateofbirth = test_input($_POST["About"]);
  }
  if (empty($_POST["bloodgrp"])) {
    $dateofbirthErr = "bloodgrp is required";
  } else {
    $dateofbirth = test_input($_POST["bloodgrp"]);
  }
}




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
        
         

             <fieldset>
    <legend align="center" style="font-size: 2.0em">Update profile</legend>
             <form action="home.php" method="post" align="center">

               

   <table cellpadding="2" width="50%" bgcolor="E0E0E0" align="center"cellspacing="2">
  Name: <input type="text" name="name" required>
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" required>
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  contact no: <input type="number_format" name="contact no" required>
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>

  PASSWORD: <input type="password" name="pass" required >
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>
  CONFIRM PASSWORD: <input type="password" name="confpass" required>
  <span class="error">* <?php echo $confpassErr;?></span>
  <br><br>
  GENDER:
  <input type="radio" name="gender" value="female" required>Female
  <input type="radio" name="gender" value="male" required>Male
  <input type="radio" name="gender" value="other" required>Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  BLOOD GROUP:
<input type="radio" name="bloodgrp" value="+" required>positive
  <input type="radio" name="bloodgrp" value="-" required>negative
  <input type="radio" name="bloodgrp" value="other" required>Other
  <span class="error">* <?php echo $bloodgrpErr;?></span>  
  <br><br> 
   DATE OF BIRTH: <input type="Date" name="dateofbirth" min="1953-01-01" max="1998-01-01" required>
   <span class="error">* <?php echo $dateofbirthErr;?></span>
  <br><br>
  ABOUT: <input type="text" name="About box" >
   <span class="error">* <?php echo $AboutErr;?></span>
  <br><br>
  <input type="submit" name="SET Account" value="SET Account">  
  <form action="home.php" method="post" align="center">
    
</form>

       
  </table>
  </fieldset>
   

    
</html>
