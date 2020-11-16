
<!DOCTYPE html>
<html>
    <head>
        
        <title>Login</title>
    </head>
    <body>
             
             <form action="home.php" method="post" align="center">
                <fieldset>
    <legend align="center" style="font-size: 2.0em">Login Here</legend>
                
  
    <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
	<br>
	<br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
     <br>
    <button type="submit">Login</button>
    <label>
	
      <input type="checkbox" checked="checked" name="remember" required> Remember me<br>
    </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
    <br>
    <span class="psw">Forgot <a href="forgetpass.php"> <span style="color: #ff0000">password?</span></a></span>
	 <form action="forgetpass.php" method="post" align="center">
   </div>
   

   </fieldset>
   </form>

</body>
   
   </html>
