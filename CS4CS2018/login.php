<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="icon" href="ying.ico" type="image/x-icon">
</head>
<body style="text-align: center;">
  <div background="aj.jpg">
    <div class="header">
    	<h2>Login</h2>
    </div>
  	 
    <form method="post" action="login.php">
    	<?php include('errors.php'); ?>
      <div class="imgcontainer">
        <img src="img_avatar2.png" alt="Avatar" class="avatar">
      </div>
    	<div class="input-group">
    		<label>Username</label>
    		<input type="text" name="username" >
    	</div>
    	<div class="input-group">
    		<label>Password</label>
    		<input type="password" name="password">
    	</div>
    	<div class="input-group">
    		<button type="submit" class="btn" name="login_user">Login</button>
    	</div>
    	<p>
    		Not yet a member? <a href="register.php">Sign up</a>
    	</p>
    </form>
  </div>
</body>
</html>