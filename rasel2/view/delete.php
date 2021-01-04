<?php
include ("../Controller/connection.php");

$id = $_POST['id'];

$query = "DELETE FROM FASTCODE WHERE  id = '$_POST[id]' ";
$data = mysqli_query($conn , $query);

if($data)
{
    header("Location: ../view/success.php");;
}
else
{
    echo"not  ";
}
?>