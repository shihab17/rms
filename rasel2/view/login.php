<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <style>

.regc::before{ 
    content: "";
    position: absolute;
    background: url('sin.jpg') no-repeat center center/cover;
    height: 642px;
    top:0px;
    left:0px;
    width: 100%;
    z-index: -1;
    opacity:0.89;
}
        *{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Jost', sans-serif;
	outline: none;
	color: #5c4b51;
}

.wrapper{
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
}

.form{
	width: 425px;
	height: auto;
	background: #fff;
	padding: 35px 50px;
	border-radius: 2px;
}

.form .title{
	text-align: center;
	margin-bottom: 20px;
	font-weight: 700;
	font-size: 24px;
}



.form .input_wrap .btn{
	text-transform: uppercase;
	letter-spacing: 3px;
	color: red;
}



    </style>
    <script defer src="js/svript.js"></script>
</head>
<body class="regc">
<div class="wrapper">
	<div class="form">
		<div class="title">
			Login In Your Account 
		</div>
		<form method="post" action="../Controller/loginaction.php" onsubmit="return validation();">
			<div class="input_wrap">
				<label for="input_text"> Username</label>
				<div class="input_field">
					<input type="text" class="input" id="input_text">
				</div>
			</div>
			<div class="input_wrap">
				<label for="input_password">Password</label>
				<div class="input_field">
					<input type="password" class="input" id="input_password">
				</div>
			</div>
			<div class="input_wrap">
				
				<input type="submit" id="login_btn" class="btn disabled" value="Login" disabled="true">
			</div>
		</form>
	</div>
</div>
    
</body>
</html>
