<?php

if(empty($_SESSION["username"]))
{
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>you are in</title>
</head>
<?
echo $_SESSION["user"] ;
echo $_SESSION["pass"] ;
?>
<body>
    You Are In ..
</body>
</html>