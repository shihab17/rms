<!DOCTYPE html>
<html>
<head>


<title>VIEW SELF INFORMATION</title>


</head>

<body>
<?php include('header.php'); ?>
<center><h1>SELF INFORMATION</h1></center>
<div class="INFROMATION">
<form action = "" method = "post">
<h2>Please Fill In All Details in Block Letters</h2>
<label>First Name:</label>
<input type="text" name="firstname" required><br><br>
<label>Last Name:</label>
<input type="text" name="lname" required><br><br>
<label>Email Id:</label>
<input type="mail" name="email" required><br><br>

<label>Present Address:</label>
<input type="text" name="Padd" required><br><br>
<label>Road no:</label>
<input type="text" name="roadno" required><br><br>
<label>Area:</label>
<input type="text" name="area" required><br><br>

<label>Occupation:</label>
<input type="text" name="Occupation" required><br><br>
<label>Phone Number:</label>
<select>
<option>+088</option>
<option>+971</option>
<option>+978</option>
<option>+988</option>
<option>+561</option>
<option>+766</option>
<option>+443</option>
<option>+778</option>
<input type="" name="Number" required>
</select><br><br>
<label>city:</label>
<select>
<option>CTG</option>
<option>dhaka</option>
<option>barisal</option>
<option>khulna</option>
<option>cumilla</option>
<option>ragpur</option>
<option>sylhet</option>
<option>cox'x bazar</option>

</select><br>
<label>Gender:</label>

    <input type="radio" name="Gender">Male
    <input type="radio" name="Gender">Female
	<input type="radio" name="Gender">Other<br><br>
<label></label><br>
<input type="Submit" value="submit" name="submit"></td><br>
<label></label><br>
<input type="submit" value="Update" name="Update data"></td>
<?php include('footer.php');?>
</body>





</html>

