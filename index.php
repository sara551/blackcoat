<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
	</head>
	<link rel="stylesheet" href="css//login.css">
	<body style="background-image: url(images/pexels-brand-&-palms-768975.jpg);">
		<form action="checklog.php" class="login-form" method="post">
			<div class="logo">
				<img style="width: 60%;margin-left:19%;" src="images/finalblackcoatlogo.png"/>
			</div>
			<h1>Login</h1>
			<div class="txtb">
				<input type="text" placeholder="email" name="email" id="email" required/>
			</div>
			<div class="txtb">
				<input type="password" placeholder="password" name="password" id="password" required/>
			</div>
			<input type="submit" class="logbtn" value="Login"/>
			<div class="bottom-text">
				Don't hava account?<a href="signup.php">Sign up</a>	
			</div>
		</form>
	</body>
</html>