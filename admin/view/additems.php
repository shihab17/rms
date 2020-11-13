<!DOCTYPE html>
<html>
<title>Items</title>
<body>

<h1>Add items</h1>
<form action="../controller/action_additems.php" method="POST" >
	<label for="iname" >Items Name</label>
	<input type="text" name="iname" id="iname" placeholder="Enter Item Name" >
	<br>
	<br>
	<label for="iprice" >Price</label>
	<input type="text" name="iprice" id="iprice" placeholder="Enter Price" >
	<br>
	<br>
	<label for="idescription" >Description</label>
	<textarea name="idescription" id="idescription" cols="30" rows="5" ></textarea>
	<br>
	<br>
	<label for="icat" >Cetagory</label>
	<select name="icat" id="icat" >
		<option value="salads" >Salads</option>
		<option value="desserts" >Desserts</option>
		<option value="drinks" >Drinks</option>
	</select>
	<br>
	<br>
 <input type="Submit" name="formAddItems" value="Add Items" >
 <input type="reset" >

	
</form>

</body>
</html>