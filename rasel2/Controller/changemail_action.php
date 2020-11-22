<?php
    $Oldmail = $_GET['oldmail'];
    $newmail = $_GET['newmail'];

    $filename = '../data/mailchange.txt';
    $fp = fopen($filename, 'a+') or die("Unable to open file!");


    echo ("Your mail Has Been Change ");
    

?>