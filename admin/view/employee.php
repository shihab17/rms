<?php
	ob_start();
	session_start();
	if($_SESSION['name']!='resdnt'){
		header("location: login.php");
	}
	else{
	$uname= $_SESSION['uname'];
	}
?>
<!DOCTYPE html>
<html>
<title>Employee</title>
<body>
<?php include('header.php'); ?>
<center><h1><a style="text-decoration: none;" href="addEmployee.php" >Add Employee</a></h1>
<table  border= "1"  cellpadding= "25" >
<tr>
	<th>#</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Username</th>
	<th>Gender</th>
	<th>Birthday</th>
	<th>Address</th>
	<th>Email</th>
	<th>Phone Number</th>
	<th>Designation</th>
	<th>Salary</th>
	<th>Action</th>
</tr>
<?php
include('../data/dbConnection.php');
$i=0;
$stmt = $db-> prepare("SELECT * FROM tbl_emp");
$stmt->execute(array());
$result = $stmt-> fetchAll (PDO::FETCH_ASSOC);
	foreach($result as $row)
	{
	$i++;
	
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['lanme'];?></td>
<td><?php echo $row['username'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['phnNumber'];?></td>
<td><?php echo $row['designation'];?></td>
<td><?php echo $row['salary'];?></td>
<td> <a href="../controller/action_employeeUpdate.php?empId=<?php echo $row['empId']; ?>" style="text-decoration:none;" >EDIT </a> ||
<a href="../controller/action_employeeRemove.php?empId=<?php echo $row['empId']; ?>" style="text-decoration:none;" >REMOVE</a></td>
</tr>
<?php 
	}
?>
</tr>
</table>
</center>
<br>
<br>
<?php include('footer.php'); ?>
</body>
</html>