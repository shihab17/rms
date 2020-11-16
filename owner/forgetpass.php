<!DOCTYPE html>
<html>
    <head>
        
        <title>Forgot password</title>

        <style>
.error {color: red;}
</style>
    </head>
    <body>

    <?php
// define variables and set to empty values



$name = $email = $pass= $confpass = $gender = $dateofbirth= "";
$nameErr = $emailErr = $passErr= $confpassErr = $genderErr = $dateofbirthErr= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  
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

}




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
        
         

             <fieldset>
    <legend align="center" style="font-size: 2.0em">Reset password</legend>
	
             <form action="login.php" method="post" align="center">

               

   <table cellpadding="2" width="50%" bgcolor="E0E0E0" align="center"cellspacing="2">
 
  E-MAIL: <input type="text" name="email" required>
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  

  NEW PASSWORD: <input type="password" name="pass" required >
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>
  CONFIRM PASSWORD: <input type="password" name="confpass" required>
  <span class="error">* <?php echo $confpassErr;?></span>
  <br><br>

  <br><br>
  <br><br>

  <input type="submit" name="set" value="Set">  
  
    
</form>

       
  </table>
  </fieldset>
   

    
</html>
