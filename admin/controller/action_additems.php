<?php
include('../data/dbConnection.php');
$itemName=$itemDescription=$itemCat=$itemSubCat=$itemQty=$itemPrice="";
ob_start();
	session_start();
	if($_SESSION['name']!='resdnt'){
		header("location: ../view/login.php");
	}
	else{
	$uname= $_SESSION['uname'];
	}
	$counter = 0;
if(isset($_POST['formAddItems']))
{
	if(empty($_POST['iname']))
	{
		$itemNameErr="Please Enter Item Name";
		$counter = $counter + 1;
	}
	else{
		$itemName=$_POST['iname'];
	}
	if(empty($_POST['idescription']))
	{
		$itemDescriptionErr="Please Enter Item Description";
		$counter = $counter + 1;
	}
	else{
		$itemDescription=$_POST['idescription'];
	}
	if(empty($_POST['icat']))
	{
		$itemCatErr="Select a Cetagory";
	}
	else{
		$itemCat=$_POST['icat'];
	}
	if(empty($_POST['isubcat']))
	{
		$itemSubCatErr="Select a Sub-Cetagory";
		$counter = $counter + 1;
	}
	else{
		$itemSubCat=$_POST['isubcat'];
	}
	if(empty($_POST['iQty']))
	{
		$itemQtyErr="Select a Cetagory";
	}
	else{
		$itemQty=$_POST['iQty'];
	}
	if(empty($_POST['iprice']))
	{
		$itemPriceErr="Select a Cetagory";
		$counter = $counter + 1;
	}
	else{
		$itemPrice=$_POST['iprice'];
	}
	if($counter == 0){
		$stmt= $db->prepare("INSERT INTO tbl_items (item_name,item_description,item_cetagory,item_subCetagory,item_quantity,price) values (?,?,?,?,?,?)");
		$stmt->execute(array($itemName,$itemDescription,$itemCat,$itemSubCat,$itemQty,$itemPrice));
		$sucess="Succsessfully Updated your profile information";
	}
	else{
		$error="Faild! please try again";
	}
	$myfile= fopen("../data/item.txt","a") or die("Unable to open the file");
	fwrite($myfile,$itemName);
	fwrite($myfile,$itemDescription);
	fwrite($myfile,$itemCat);
	fwrite($myfile,$itemSubCat);
	fwrite($myfile,$itemQty);
	fwrite($myfile,$itemPrice);
	fclose($myfile);
}
?>
<style>
.error{color:red;}
</style>
<!DOCTYPE html>
<html>
<title>Items</title>
<link rel="stylesheet" href="../view/style.css">
<script>
	function validate()
	{
		var iname = document.getElementById('iname').value;
		var idescription = document.getElementById('idescription').value;
		var icat = document.getElementById('icat').value;
		var isubcat = document.getElementById('isubcat').value;
		var iQty = document.getElementById('iQty').value;
		var iprice = document.getElementById('iprice').value;
		// console.log(x);
		if(iname == "") {
			document.getElementById('errorMsg').innerHTML = "Item is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		if(idescription == "") {
			document.getElementById('errorMsg').innerHTML = "Description is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		if(icat == "") {
			document.getElementById('errorMsg').innerHTML = "Category is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		if(isubcat == "") {
			document.getElementById('errorMsg').innerHTML = "Sub Category is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		if(iQty == "") {
			document.getElementById('errorMsg').innerHTML = "Quantity is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
		if(iprice == "") {
			document.getElementById('errorMsg').innerHTML = "Price is empty";
			document.getElementById('errorMsg').style.color = "red";
			return false;	
		}
	}
</script>
<body>
<?php include('../view/header.php'); ?>
<h1 class="headStyle">Add items</h1>
<h3 style="color:green;" ><?php if(isset($sucess)){echo $sucess;} ?></h3>
<h3 style="color:red;" ><?php if(isset($error)){echo $error;} ?></h3>
<form action="../controller/action_additems.php" method="POST" onsubmit="return validate()">
	<label for="iname" >Items Name</label>
	<input type="text" name="iname" id="iname" value="" placeholder="Enter Item Name" >
	<span class="error" ><?php if(isset($itemNameErr)){echo $itemNameErr;} ?></span>
	<br>
	<br>
	<label for="idescription" >Description</label>
	<textarea name="idescription" id="idescription" cols="30" rows="5" ></textarea>
	<span class="error" ><?php if(isset($itemDescriptionErr)){echo $itemDescriptionErr;} ?></span>
	<br>
	<br>
	<label for="icat" >Cetagory</label>
	<select name="icat" id="icat" >
		<option selected disabled>Choose...</option>
		<option value="salads" >Salads</option>
		<option value="desserts" >Desserts</option>
		<option value="drinks" >Drinks</option>
	</select><span class="error" >
	<?php if(isset($itemCatErr)){echo $itemCatErr;} ?></span>
	<br>
	<br>
	<label for="isubcat" >Sub Cetagory</label>
	<select name="isubcat" id="isubcat" >
		<option selected disabled >Choose...</option>
		<option value="salads" >Salads</option>
		<option value="desserts" >Desserts</option>
		<option value="drinks" >Drinks</option>
	</select>
	<span class="error" ><?php if(isset($itemSubCatErr)){echo $itemSubCatErr;} ?></span>
	<br>
	<br>
	<label for="iQty" >Quantity: </label>
	<input type="number" name="iQty" id="iQty" min="1" max="100"  >
	<span class="error" ><?php if(isset($itemQtyErr)){echo $itemQtyErr;} ?></span>
	<br>
	<br>
	<label for="iprice" >Price</label>
	<input type="text" name="iprice" id="iprice" placeholder="Enter Price" >
	<span class="error" ><?php if(isset($itemPriceErr)){echo $itemPriceErr;} ?></span>
	<br>
	<br>
 <input type="Submit" name="formAddItems" value="Add Items" >
 <input type="reset" >

	
</form>
<br>
<br>
<?php include('../view/footer.php'); ?>
</body>
</html>