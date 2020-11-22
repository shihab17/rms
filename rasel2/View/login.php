<?php

include '../Controller/login_action.php';

if(isset($_SESSION['username'])){
header("location: home.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Login From</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Username :</td>
                    <td> <input type="text" name="username" placeholder="Username Please"> </td>
                </tr>
                <tr>
                <td>password :</td>
                    <td> <input type="text" name="password" placeholder="password Please"> </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name=" submit" value="submit">
                    </td>
                </tr>
            </table>
        </form>

    </center>
    
</body>
</html>