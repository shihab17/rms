<?php
include('../data/dbConnection.php');
$counter = 0;
$itemName=$itemDescription=$itemCat=$itemSubCat=$itemQty=$itemPrice="";
if(isset ($_REQUEST['itemId']) )
	{
		$itemId= $_REQUEST['itemId'];
	}
	else
	{
		header('location: ../view/item.php');
	}
	//echo $itemId;
	if(isset($_POST['formUpdateItems']))
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
		$counter = $counter + 1;
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
		$counter = $counter + 1;
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
	// $myfile= fopen("../data/item.txt","a") or die("Unable to open the file");
	// fwrite($myfile,$itemName);
	// fwrite($myfile,$itemDescription);
	// fwrite($myfile,$itemCat);
	// fwrite($myfile,$itemSubCat);
	// fwrite($myfile,$itemQty);
	// fwrite($myfile,$itemPrice);
	// fclose($myfile);
	if($counter == 0){
		$statement = $db->prepare("update tbl_items set item_name = ?,item_description = ?,item_cetagory = ?, item_subCetagory=? , item_quantity =?, price =? where itemId=?");
		$statement->execute(array ($itemName,$itemDescription,$itemCat,$itemSubCat,$itemQty,$itemPrice,$itemId) );
		$sucess="  Successfully Update";
	}
	else{
		
	}
}
?>
<style>
.error{color:red;}
</style>
<!DOCTYPE html>
<html>
<title>Items</title>
<link rel="stylesheet" href="../view/style.css">
<body>
<?php include('../view/header.php'); 

$stmt = $db-> prepare("SELECT * FROM tbl_items where itemId=?");
$stmt->execute(array($itemId));
$result = $stmt-> fetchAll (PDO::FETCH_ASSOC);
foreach($result as $row){
$itemNameOld=$row['item_name'];
$itemDescriptionOld=$row['item_description'];
$itemCetagoryOld=$row['item_cetagory'];
$itemSubCetagoryOld=$row['item_subCetagory'];
$itemQuantityOld=$row['item_quantity'];
$priceOld=$row['price'];
}
?>
<h1>Add items</h1>
<h3 style="color:green;" ><?php if(isset($sucess)){echo $sucess;} ?></h3>
<h3 style="color:red;" ><?php if(isset($error)){echo $error;} ?></h3>
<form action="" method="POST" >
	<label for="iname" >Items Name</label>
	<input type="text" name="iname" id="iname" value="<?php echo $itemNameOld; ?>" placeholder="Enter Item Name" >
	<span class="error" ><?php if(isset($itemNameErr)){echo $itemNameErr;} ?></span>
	<br>
	<br>
	<label for="idescription" >Description</label>
	<textarea name="idescription" id="idescription" cols="30" rows="5" ><?php echo $itemDescriptionOld; ?></textarea>
	<span class="error" ><?php if(isset($itemDescriptionErr)){echo $itemDescriptionErr;} ?></span>
	<br>
	<br>
	<label for="icat" >Cetagory</label>
	<select name="icat" id="icat" >
		<option disabled>Choose...</option>
		<option selected value="salads" >Salads</option>
		<option value="desserts" >Desserts</option>
		<option value="drinks" >Drinks</option>
	</select><span class="error" >
	<?php if(isset($itemCatErr)){echo $itemCatErr;} ?></span>
	<br>
	<br>
	<label for="isubcat" >Sub Cetagory</label>
	<select name="isubcat" id="isubcat" >
		<option disabled >Choose...</option>
		<option selected value="salads" >Salads</option>
		<option value="desserts" >Desserts</option>
		<option value="drinks" >Drinks</option>
	</select>
	<span class="error" ><?php if(isset($itemSubCatErr)){echo $itemSubCatErr;} ?></span>
	<br>
	<br>
	<label for="iQty" >Quantity: </label>
	<input type="number" name="iQty" id="iQty" value="<?php echo $itemQuantityOld; ?>" min="1" max="100"  >
	<span class="error" ><?php if(isset($itemQtyErr)){echo $itemQtyErr;} ?></span>
	<br>
	<br>
	<label for="iprice" >Price</label>
	<input type="text" name="iprice" id="iprice" value="<?php echo $priceOld; ?>" placeholder="Enter Price" >
	<span class="error" ><?php if(isset($itemPriceErr)){echo $itemPriceErr;} ?></span>
	<br>
	<br>
 <input type="Submit" name="formUpdateItems" value="Update" >

	
</form>
<br>
<br>
<?php include('../view/footer.php'); ?>
</body>
</html>