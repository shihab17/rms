
<?php

include 'header.php';

include("../Controller/connection.php");
?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Form</title>
  <script defer scr="script.js"></script>
  <style>
    .regc::before{ 
    content: "";
    position: absolute;
    background: url('sin.jpg') no-repeat center center/cover;
    height: 642px;
    top:0px;
    left:0px;
    width: 100%;
    z-index: -1;
    opacity:0.89;
}

  </style>
</head>
<body class = "regc">
<div id = "error"></div>
<form id="form" action="../Controller/action.php" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="GET">
<?php

$usernameErr = "";
$username = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["username"]);
   
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
}
  ?>
  <center>
   <p><span class="error">* required field</span></p>
     <h3>Name : </h3>
     <input type="text" name="username" > <br>
     <span class="error">* <?php echo $usernameErr;?></span>
    
    
    <br>
    <h3>Password : </h3>
     <input type="password" name="password" > <br>
    <br>
    
    <h3>Gender : </h3>
     
     <input type="text" placeholder="Mail/Femail" name="gender" > <br>
     
    
    <br>
    <h3>Email : </h3>
     <input type="email" placeholder="abcd@abd.abc" name="email" > <br><br>
     
    
     <h3>Date of Birth : </h3>
     <input type="text" placeholder="dd/MM/YYYY" name="birth" > <br><br>
    
    <tr>
      <td>

      <input type="submit" name = " submit" value="submit">
      </td>
    </tr>
     
    


</center>
</form>
</body>
</html>