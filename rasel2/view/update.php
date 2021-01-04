<?php
include("../Controller/connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="form" action="../Controller/actioninfo.php" method="post">
     ID : 
     <input type="text" name="id" > <br>
    
    Name : 
     <input type="text" name="username" > <br>
     
Email : 
<input type="email" placeholder="abcd@abd.abc" name="email" required> <br>

<input type="submit" name = "submit" value="Submit">
</form>
</body>
</html>





