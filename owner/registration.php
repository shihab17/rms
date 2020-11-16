<!DOCTYPE html>
<html>
    <head>
        
        <title>SIGNUP</title>

        <style>
.error {color: red;}
</style>
    </head>
    <body>

    <?php

$fullname = $email = $contactno = $createpass= $confpass = "";
$fullnameErr = $emailErr = $contactnoErr = $createpassErr= $confpassErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["fullname"])) {
    $fullnameErr = "Full-Name is required";
  } else {
    $fullname = test_input($_POST["fullname"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
   if (empty($_POST["contactno"])) {
    $contactnoErr = " contact no is required ";
  } else {
    $contactno = test_input($_POST["contactno"]);
  }
    
  if (empty($_POST["createpass"])) {
    $createpassErr = " create Password is required ";
  } else {
    $createpass = test_input($_POST["createpass"]);
  }

  if (empty($_POST["confpass"])) {
    $confpassErr = "Confirm Password is required ";
  } else {
    $confpass = test_input($_POST["confpass"]);
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
    <legend align="center" style="font-size: 2.0em">Register here</legend>
	
             <form action="profile.php" method="post" align="center">

               

   <table cellpadding="2" width="50%" bgcolor="E0E0E0" align="center"cellspacing="2">
 
  FULL-NAME: <input type="text" name="name" required>
  <span class="error">* <?php echo $fullnameErr;?></span>
  <br><br>
  E-MAIL: <input type="text" name="email" required>
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  CONTACT NO: <input type="number_format" name="contact no" required >
  <span class="error">* <?php echo $contactnoErr;?></span>
  <br><br>

  CREATE PASSWORD: <input type="password" name="pass" required >
  <span class="error">* <?php echo $createpassErr;?></span>
  <br><br>
  CONFIRM PASSWORD: <input type="password" name="confpass" required>
  <span class="error">* <?php echo $confpassErr;?></span>
  <br><br>

  <br><br>
  <br><br>

  <input type="submit" name="CREATE ACCOUNT" value="CREATE ACCOUNT">  
 
  
    
</form>

       
  </table>
  </fieldset>
   

    
</html>
