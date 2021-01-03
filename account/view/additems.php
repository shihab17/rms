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
<title>Items</title>
<body>
<?php include('header.php'); ?>
<center><h1><a style="text-decoration: none;" href="addItems.php" >Add items</a></h1>
<table  border= "1"  cellpadding= "25" >
<tr>
	<th>#</th>
	<th>Item Name</th>
	<th>Item Description</th>
	<th>Cetagory</th>
	<th>Sub-Cetagory</th>
	<th>Quantity</th>
	<th>Price</th>
	<th>Action</th>
</tr>
<?php
include('../data/dbConnection.php');
$i=0;
$stmt = $db-> prepare("SELECT * FROM tbl_items");
$stmt->execute(array());
$result = $stmt-> fetchAll (PDO::FETCH_ASSOC);
	foreach($result as $row)
	{
	$i++;
	
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['item_name'];?></td>
<td><?php echo $row['item_description'];?></td>
<td><?php echo $row['item_cetagory'];?></td>
<td><?php echo $row['item_subCetagory'];?></td>
<td><?php echo $row['item_quantity'];?></td>
<td><?php echo $row['price'];?></td>
<td> <a href="../controller/action_itemUpdate.php?itemId=<?php echo $row['itemId']; ?>" style="text-decoration:none;" >EDIT </a> ||
<a href="../controller/action_itemRemove.php?itemId=<?php echo $row['itemId']; ?>" style="text-decoration:none;" >REMOVE</a></td>
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