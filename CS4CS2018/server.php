<?php
 //    define ('db_user', 'root');
 //    define ('db_password','');
 //    define ('db_host','localhost');
 //    define ('db_name','k12web');
 //	   $dbc = mysqli_connect(db_host, db_user, db_password, db_name)
 //    or die ('Could not connect to MySQL ' . mysqli_connect_error());

	session_start();

	// initializing variables
	$username = "";
	$email    = "";
	$errors = array(); 

	// connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'k12web');

	// LOGIN USER
	if (isset($_POST['login'])) {
	  $username = mysqli_real_escape_string($db, $_POST['username']);
	  $password = mysqli_real_escape_string($db, $_POST['psw']);

	  // if (empty($username)) {
	  // 	array_push($errors, "Username is required");
	  // }
	  // if (empty($password)) {
	  // 	array_push($errors, "Password is required");
	  // }

	  if (count($errors) == 0) {
	  	$password = md5($password);
	  	$query = "SELECT * FROM users WHERE uname='$username' AND psw='$password'";
	  	$results = mysqli_query($db, $query);
	  	if (mysqli_num_rows($results) == 1) {
	  	  $_SESSION['username'] = $username;
	  	  $_SESSION['success'] = "You are now logged in";
	  	  console.log($_SESSION['success']);
	  	  header('location: meh.php');
	  	}else {
	  		array_push($errors, "Wrong username/password combination");
	  	}
	  }
	}
?>