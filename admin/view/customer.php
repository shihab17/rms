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
<link rel="stylesheet" href="style.css">
<script>
	function confirm_delete() {
		return confirm("are you want to delete this data?");
	}
</script>
<body>
<?php include('header.php'); ?>
<center><h1 class="headStyle"><a class="anchorStyle" href="addCustomer.php" >Add Customer</a></h1>
<table  border= "1"  cellpadding= "25" >
<tr>
	<th>#</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Gender</th>
	<th>Email</th>
	<th>Phone Number</th>
	<th>Item Name</th>
	<th>Quantity</th>
	<th>Time</th>
	<th>Action</th>
</tr>
<?php
include('../data/dbConnection.php');
$i=0;
$stmt = $db-> prepare("SELECT * FROM tbl_customer");
$stmt->execute(array());
$result = $stmt-> fetchAll (PDO::FETCH_ASSOC);
	foreach($result as $row)
	{
	$i++;
	
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['fname'];?></td>
<td><?php echo $row['lname'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['phoneNumber'];?></td>
<td><?php echo $row['itemName'];?></td>
<td><?php echo $row['quantity'];?></td>
<td><?php echo $row['datetime'];?></td>
<td> <a href="../controller/action_customerUpdate.php?customerId=<?php echo $row['customerId']; ?>" style="text-decoration:none;" >EDIT </a> ||
<a onclick= "return confirm_delete();" href="../controller/action_customerRemove.php?customerId=<?php echo $row['customerId']; ?>" style="text-decoration:none;" >REMOVE</a></td>
</tr>
<?php
	}
?>
</table>
</center>
<br>
<br>
<?php include('footer.php'); ?>
</body>
</html>