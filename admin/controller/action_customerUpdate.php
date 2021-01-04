<?php 
    include('../data/dbConnection.php');
    $counter=0;
    if(isset ($_REQUEST['customerId']) )
	{
		$customerId= $_REQUEST['customerId'];
	}
	else
	{
		header('location: ../view/customer.php');
    }
    if(isset($_POST['formUpdateCustomer'])){
        if(empty($_POST['cfname'])){
            $cfnameErr="First Name is not empty";
            $counter = $counter + 1;
        }
        else{
            if (!preg_match("/^[a-zA-Z ]*$/",$_POST['cfname'])){
                $cfnameErr = "Only letters and white space allowed";//First name is Invaild.
                $counter = $counter + 1;
            }
            else{
            $cfname=$_POST['cfname'];
            }
        }
        if(empty($_POST['clname'])){
            $clnameErr="Last Name is not empty";
            $counter = $counter + 1;
        }
        else{
            if (!preg_match("/^[a-zA-Z ]*$/",$_POST['clname'])){
            $clnameErr = "Only letters and white space allowed";//Last name is Invaild.
            $counter = $counter + 1;
            }
            else{
            $clname=$_POST['clname'];
            }
        }
        if (empty($_POST['cUname'])) {
            $cUnameErr="User Name is empty";
        }
        else {
            $cUname=$_POST['cUname'];
        }
        if(empty($_POST['cgender'])){
            $cgenderErr="Gender is not empty";
            $counter = $counter + 1;
        }
        else{
            $cgender=$_POST['cgender'];
        }
        if(empty($_POST['cemail'])){
            $cemailErr="Email is not empty";
            $counter = $counter + 1;
        }
        else{
            if (!filter_var($_POST['cemail'], FILTER_VALIDATE_EMAIL)){
                $cemailErr ="Email Address is invalid";
                $counter = $counter + 1;
            }
            else{
            $cemail=$_POST['cemail'];
            }
        }
        if(empty($_POST['cphone'])){
            $cphoneErr="Phone Number is not empty";
            $counter = $counter + 1;
        }
        else{
            if (!preg_match (" /(^(\+8801|8801|01|008801))[1|5-9]{1}(\d){8}$/",$_POST['cphone']) )
                {
                    $cphoneErr="Invaild Phone Number";
                    $counter = $counter + 1;
                }
            else{
                $cphone=$_POST['cphone'];
            }
        }
        if(empty($_POST['cItemName1'])){
            $cItemName1="";
        }
        else{
            $cItemName1=$_POST['cItemName1'];
        }
        if(empty($_POST['cItemName2'])){
            $cItemName2="";
        }
        else{
            $cItemName2=$_POST['cItemName2'];
        }
        $itemName=$cItemName1." ".$cItemName2;
        if(empty($_POST['cQuantity'])){
            $cQntyErr="Quantity not empty";
            $counter = $counter + 1;
        }
        else{
            $cQnty=$_POST['cQuantity'];
        }
       // $username="Customer";
        $pass="1234";
        if($counter == 0){
            $statement = $db->prepare("update tbl_customer set fname = ?,lname = ?,username = ?, gender=? , email =?, phoneNumber =?, itemName =?, quantity =?,password=? where customerId =?");
            $statement->execute(array ($cfname,$clname,$cUname,$cgender,$cemail,$cphone,$itemName,$cQnty,$pass,$customerId) );
            $sucess="Succsessfully Update Customer";
        }
        else{
            $error="Faild! Update Customer";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upadte Cutomer </title>
    <link rel="stylesheet" href="../view/style.css">
</head>
<body>
<?php
    include('../view/header.php'); 
    $stmt = $db-> prepare("SELECT * FROM tbl_customer where customerId =?");
    $stmt->execute(array($customerId));
    $result = $stmt-> fetchAll (PDO::FETCH_ASSOC);
    foreach($result as $row)
    {
        $fnameOld=$row['fname'];
        $lnameOld=$row['lname'];
        $usernameOld=$row['username'];
        $genderOld=$row['gender'];
        $emailOld=$row['email'];
        $phoneOld=$row['phoneNumber'];
        $itemNameOld=$row['itemName'];
        $quantityOld=$row['quantity'];
        
    }
 ?>
<h1 class="headStyle">Update Customer</h1>
<h3 style="color:green;" ><?php if(isset($sucess)){echo $sucess;} ?></h3>
<h3 style="color:red;" ><?php if(isset($error)){echo $error;} ?></h3>
<form action="" method="POST" >
	<label for="cfname"> First Name </label>
	<input type="text" name="cfname" id="cfname" value= "<?php echo $fnameOld?>" placeholder="Enter Customer Name" required >
	<span class="error" ><?php if(isset($cfnameErr)){echo $cfnameErr;} ?></span>
	<br>
	<br>
	<label for="clname"> Last Name </label>
	<input type="text" name="clname" id="clname" placeholder="Enter Customer Name" value= "<?php echo $lnameOld?>" required >
	<span class="error" ><?php if(isset($clnameErr)){echo $clnameErr;} ?></span>
	<br>
	<br>
    <label for="cUname">User Name</label>
    <input type="text" name="cUname" id="cUname" value="<?php echo $usernameOld;?>">
    <span class="error" ><?php if(isset($cUnameErr)){echo $cUnameErr;} ?></span>
    <br>
    <br>
	<label for="cgender"> Gender</label>
	<input type="radio" name="cgender" id="male" value="male" required><span class="styleGenderInput">Male</span>
	<input type="radio" name="cgender" id="female" value="Female" ><span class="styleGenderInput">Female</span>
	<input type="radio" name="cgender" id="other" value="other" ><span class="styleGenderInput">Orther</span>
	<span class="error" ><?php if(isset($cgenderErr)){echo $cgenderErr;} ?></span>
	<br>
	<br>
	<label for="email" > Email Address  </label>
	<input type="email" name="cemail" id="email" placeholder="Enter Customer Email Address " value= "<?php echo $emailOld?>" required>
	<span class="error" ><?php if(isset($cemailErr)){echo $cemailErr;} ?></span>
	<br>
	<br>
	<label for="cphone" > Phone Number </label>
	<input type="tel" name="cphone" id="cphone"  value= "<?php echo $phoneOld?>"   pattern="[0]{1}[1]{1}[3-9]{1}[0-9]{8}" required>
	<span class="error" ><?php if(isset($cfnameErr)){echo $cfnameErr;} ?></span>
	<br>
	<br>
	<label for="cItemName" > Item Name </label><br>
	<input type="checkbox" class="checkStyleInput" id="cItemName1" name="cItemName1" value="rice">
	<span class="checkStyle" for="cItemName1"> Rice</span>
	<input type="checkbox" class="checkStyleInput" id="cItemName2" name="cItemName2" value="Drink">
	<span class="checkStyle" for="cItemName2"> Drink</span><br>
	<br>
	<br>
	<label for="cQuantity" >Quantity</label>
	<input type="text" name="cQuantity" id="cQuantity" value= "<?php echo $quantityOld?>"placeholder="enter number of item" >
	<br>
	<br>
	<input type="submit" name="formUpdateCustomer" value="Add Customer" >
</form>
<br>
<br>
<?php include('../view/footer.php'); ?>
</body>
</html>