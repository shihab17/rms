


<?php
include 'header.php';

$cookie_name = "Rasel";
$cookie_value = "Increasing";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>


<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is  set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
  color: black;
  font-family: verdana;
  content: "";
    position: absolute;
    background: url('info.jpg') no-repeat center center/cover;
    height: 100%;
    top:0px;
    left:0px;
    width: 100%;
    z-index: -1;
    opacity:0.89;
 
}

</style>
</head>
<body class = "info1">
    <table>
        <thead>
        <tr>
    <th>Id </th>
    <th>User Name </th>
    <th>Password </th>
    <th>Gender </th>
    <th>E-mail</th>
    <th>Date Of Birth </th>
    <th>Delete</th>
    <th>Update</th>
    </tr>
    </thead>
    <tbody>
        
    
    <?php
include '../Controller/connection.php';


$selectquery = " select * from fastcode ";

$query = mysqli_query($conn , $selectquery);

$nums = mysqli_num_rows($query);
while($res = mysqli_fetch_array($query)){

?>
 
<tr>
<td> <?php  echo $res['id']; ?> </td>
<td> <?php  echo $res['username']; ?> </td>
<td> <?php  echo $res['password']; ?> </td>
<td> <?php  echo $res['gender']; ?> </td>
<td> <?php  echo $res['email']; ?> </td>
<td> <?php  echo $res['birth']; ?> </td>
<td> <a href='delete.php?id=$result[id]'>Delect</a> </td>
<td> <a href='update.php?id=$result[id]& username = $result[username]
&email=$result[result]'>Edit</a> </td>



</tr>

<?php
}
?>
</tbody>
   </table> 
</body>
<?php
include 'footer.php';
?>


