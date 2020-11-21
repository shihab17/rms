<!DOCTYPE Html>
<html>

<head>

<title>PAYMENT SLIP</title>

</head>


<body>
<?php include('header.php'); ?>
<center><h1>PAYMENT SLIP</h1></center>
<center><h1><a style="text-decoration: none;" href="addItems.php" >Food Order Bill &nbsp &nbsp &nbsp Date:</a></h1>
<table  border= "01"  cellpadding= "" >
<tr>
    <th width=20>Srial No</th>
	<th width=150>Food name</th>
	<th width=80>Quantity</th>
	<th width=100>Price</th>
	<th width=100>Total price</th>
	<td> <a href="../controller/action_itemUpdate.php?itemId=1" style="text-decoration:none;" >ADD||REMOVE </a>
	

</tr>
<tr>
<td>1</td>
<td>Butter Fry</td>
<td>1</td>
<td>2</td>
<td></td>
</tr>
	<tr>
	<td>2</td>
	<td>franch fry</td>
	<td>2</td>
	
	<td>120$</td>
	<td></td>
	<td></td>
	</tr>
	<tr>
	<td>3</td>
	<td>burger</td>
	<td>3</td>
	
	<td>80</td>
	<td></td>
	<td></td>
	</tr>
	<tr>
	<td>4</td>
	<td>pizza</td>
	<td>4</td>
	
	<td>120</td>
	<td></td>
	<td></td>
	</tr>
	<tr>
	<td>5</td>
	<td>plater 1</td>
	<td>2</td>
	
	<td>750</td>
	<td></td>
	<td></td>
	</tr>
	
	
	<tr>
	<td></td>
	<td></td>
	<td></td>

	<td style="background-color:yellow;text-align:left">Subtotal $:</td>
	<td style="backgroung-color:yellow;">
	<?php
	echo "";
	?>
	</td>
	</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td style="background-color:blue;text-align:left">Tax</td>
	<td style="backgroung-color:blue">5%</td>
	<?php
	echo "";
	?>
	</td>
	</tr>
	<tr>
	<td></td>
	<td></td>
		<td></td>
	<td style="background-color:light blue;text-align:left">Tax Amounnt</td>
	<td style="backgroung-color:light blue"></td>
	<?php
	echo "";
	?>
	</td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td></td>
	<td style="background-color:green;text-align:left">Total Amount $</td>
	<td style="backgroung-color:green"></td>
	<?php
	echo "";
	?>
	</td>
	</tr>
</table>
</center>
<br>
<br>
<?php include('footer.php'); ?>
</body>



</html>
