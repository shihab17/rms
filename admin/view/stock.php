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
<title>Stock</title>
<body>
<?php include('../view/header.php'); ?>
<link rel="stylesheet" href="style.css">
<center><h1><a style="text-decoration: none;" href="addStock.php" >Add Stock</a></h1>
<table  border= "1"  cellpadding= "25" >
<tr>
	<th>#</th>
	<th>Item name</th>
	<th>Quantity</th>
	<th>Rate</th>
	<th>Amount</th>
</tr>
<?php
include('../data/dbConnection.php');
$i=0;
$stmt = $db-> prepare("SELECT * FROM tbl_stock");
$stmt->execute(array());
$result = $stmt-> fetchAll (PDO::FETCH_ASSOC);
	foreach($result as $row)
	{
	$i++;
	
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['itemName'];?></td>
<td><?php echo $row['quantity'];?></td>
<td><?php echo $row['rate'];?></td>
<td><?php echo $row['amount'];?></td>

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