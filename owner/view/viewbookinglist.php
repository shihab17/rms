<!DOCTYPE html>
<html>
<title>Customer booking</title>
<body>
<?php include('Header.php'); ?>
<center>
<h1> Booking List </h1>

<table  border= "1"  cellpadding= "25" >
<tr>
	<th>Customer No</th>
	<th>Customer Name</th>
	<th>E-mail</th>
	<th>Phone no</th>
	<th>Booking Date</th>
	<th>Booking Time</th>
	<th>Action</th>
	
</tr>
<tr>
<td>1</td>
<td>Masudur Rahman</td>
<td>masud@gmail.com</td>
<td>017########</td>
<td>16-11-2020</td>
<td>10 pm</td>

<td>
<a href="../controller/action_requesttoremovebook.php">REMOVE</a></td>
</tr>
</table>
</center>
<br>
<br>
<?php include('Footer.php'); ?>
</body>
</html>