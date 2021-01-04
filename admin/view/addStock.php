<?php
ob_start();
	session_start();
	if($_SESSION['name']!='resdnt'){
		header("location: login.php");
	}
	else{
	$uname= $_SESSION['uname'];
	}
	include('../data/dbConnection.php');
	if(isset($_POST['formAddStock'])){
		$itemName=$_POST['stkName'];
		$stkQty=$_POST['stkQty'];
		$stkRate=$_POST['stkRate'];
		$stkAmount=$_POST['stkAmount'];
		$stmt= $db->prepare("INSERT INTO tbl_stock (itemName,quantity,rate,amount) values (?,?,?,?)");
		$stmt->execute(array($itemName,$stkQty,$stkRate,$stkAmount));
		$sucess="Succsessfully Added";
	}
	
?>
<!DOCTYPE html>
<html>
<title>Add Stock</title>
<link rel="stylesheet" href="style.css">
<body>
<?php include('../view/header.php'); ?>
<h1 class="headStyle">Add Stock</h1>
<form action="" method="POST">
	<label for="stkName">Item Name</label>
	<input type="text" name="stkName" id="stkName" value=""  >
	<br>
	<br>
	<label for="stkQty">Quantity</label>
	<input type="number" name="stkQty" id="stkQty" value=""  >
	<br>
	<br>
	<label for="stkRate">Rate</label>
	<input type="text" name="stkRate" id="stkRate" value=""  >
	<br>
	<br>
	<label for="stkAmount">Amount</label>
	<input type="text" name="stkAmount" id="stkAmount" value=""  >
	<br>
	<br>
	<input type="submit" name="formAddStock" value="Add" >
</form>

</body>
</html>