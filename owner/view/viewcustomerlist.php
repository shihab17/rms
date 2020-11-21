<!DOCTYPE html>
<html>
<title>Customer List</title>
<body>
<?php include('Header.php'); ?>
<center>
<h1> Customer List </h1>

<table  border= "1"  cellpadding= "25" >
<tr>
	<th>Customer No</th>
	<th>Customer Name</th>
	<th>E-mail</th>
	<th>Phone no</th>
	<th>Date of Birth</th>
	<th>Address</th>
	<th>Action</th>
	
</tr>
<tr>
<td>1</td>
<td>Masudur Rahman</td>
<td>masud@gmail.com</td>
<td>017########</td>
<td>16-11-1988</td>
<td>Gazipur</td>

<td>
<a href="../view/addcustomer.php">ADD</a></td>
</tr>
</table>
</center>
<br>
<br>
<?php include('Footer.php'); ?>
</body>
</html>