<?php include('server.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>CS4CS</title>
		<link rel="stylesheet" href="bootstrap.css">
		<link rel="icon" href="ying.ico" type="image/x-icon">
	</head>
	<body style="text-align: center;">
		<div class="index-main">
		<h2 style="text-align:center;">Login Form</h2>
			<div background="aj.jpg">
				<form action="index.php" method="post">

				  <div class="imgcontainer">
				    <img src="img_avatar2.png" alt="Avatar" class="avatar">
				  </div>
				
				  <div class="container">
				    <label for="uname"><b>Username</b></label>
				    <input type="text" placeholder="Enter Username" name="username" required>
				
				    <label for="psw"><b>Password</b></label>
				    <input type="password" placeholder="Enter Password" name="psw" required>
				    <button type="submit" name="login">Login</button>
				  </div>
				
				  <!--
					  <div class="container" style="background-color:#f1f1f1">
				    <button type="buttobootstrap.cssn" class="cancelbtn">Cancel</button>
				    <span class="psw">Forgot <a href="#">password?</a></span>
				  </div>
		-->
				</form>
			</div>
		</div>
	</body>
</html>