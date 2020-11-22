<?php
    $newname = $_GET['newname'];
    $oldname = $_GET['oldname'];
    $oldusername = $_GET['oldusername'];
    $newusername = $_GET['newusername'];
    $newaddress = $_GET['newAddress'];
    $oldaddress = $_GET['oldAddress'];

    $filename = '../data/changeinfo.txt';
    $fp = fopen($filename, 'a+') or die or die("Unable to open file!");
    fwrite ($fp, $newname . "," . $oldname . "," . $oldusername. "," . $newusername . "," . $newaddress ."," . $oldaddress . "\n");
   
    echo ("account created");
    

?>