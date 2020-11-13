<?php
$myfile = fopen("test.txt", "r") or die("Unable to open file!");
//echo fread($myfile, filesize("test.txt"));
while( $line= fgets($myfile))
{
	$word = explode(",",$line);
	echo $word[0]."<br>";
	echo $word[1]."<br>";
	echo $word[2]."<br>";
	//echo $line."<br>";
}
fclose($myfile);
?>