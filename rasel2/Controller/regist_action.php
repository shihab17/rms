<?php
    $name = $_GET['name'];
    $username = $_GET['Username'];
    $Mail = $_GET['Email'];
    $password = $_GET['Password'];
    $filename = '../data/accounts.txt';
    $fp = fopen($filename, 'a+') or die("Unable to open file!");
    fwrite ($fp, $username . "," . $password . "," . $name . "," . $Mail . "," . "\n");
   
    echo ("account created");
    

?>