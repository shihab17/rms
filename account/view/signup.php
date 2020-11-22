<!DOCTYPE html>
<html>
<head></head>

<body>
<?php include('../view/Header.php'); ?>
<?php
$fnameErr="";
$firstname=$lastname=$PhoneNum=$Email=$Password=$Address=$NIDNum="";



	
	?>

<center><h1>SignUp Form</h1><center>

<div class="form">
<form action = "../controller/action_signup.php" method = "post">
<center>
<table>
<tr>
<th></th>
<th>SignUp Form</th>
</tr>
<tr>
<td>First name:</td>
<td><input type="text" name="firstname" required></td><?php echo $fnameErr;?>

</tr>


<tr>
<td>Last name:</td>
<td><input type="text" name="lastname" required></td>
</tr>

<tr>
<td>Phone Num:</td>
<td>
<select>
<option>+088</option>
<option>+971</option>
<option>+978</option>
<option>+988</option>
<option>+561</option>
<option>+766</option>
<option>+443</option>
<option>+778</option>

<input type="phone" name="phonenum" name>
</select>
</td>
</tr>



<tr>
<td>Email:</td>
<td><input type="email" name="emailid" required></td>
</tr>


<tr>
<td>Address:</td>
<td><input type="Address" name="Address" required></td>
</tr>

<tr>
<td>NID Num:</td>
<td><input type="NID" name="NID" required></td>
</tr>

<tr>
<td>Gender:</td>
<td><input type="radio" name="Gender">Male
    <input type="radio" name="Gender">Female
	<input type="radio" name="Gender">Other
   </td>
</tr>

<tr>
<td>Password:</td>
<td><input type="pass" name="password" required></td>
</tr>


<tr>
<td></td>
<td><input type="Submit" value="submit" name="submit"></td>
</tr>

</table>


</center>

</form>


<?php include('../view/Footer.php'); ?>
</body>




</html>