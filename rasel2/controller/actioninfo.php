<?php
include("connection.php");
?>

<?php
if ($_POST['submit'])
{
    $id =$_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

     $query = "UPDATE FASTCODE SET username = '$_POST[username]',email ='$_POST[email] ' WHERE id = '$_POST[id]' ";

     $data = mysqli_query($conn , $query);
     if($data)
     {
         header("Location: ../view/success.php");

     }
     else {
         echo "Not";
     }

}

?>