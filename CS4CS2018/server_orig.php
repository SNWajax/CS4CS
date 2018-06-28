<?php
    define ('db_user', 'TA');
    define ('db_password','AlanTuring');
    define ('db_host','localhost:3306');
    define ('db_name','ps31');
$dbc = mysqli_connect(db_host, db_user, db_password, db_name)
    or die ('Could not connect to MySQL ' . mysqli_connect_error());
?>


<?php

	$uname = "";
	$email = "";

	$db = mysqli_connect('localhost', 'root', '', 'k12web')
		or die ('Could not connect to MySQL'. mysqli_connect_error());

	// if (isset($_POST['login'])){
	// 	$uname = mysql_real_escape_string($_POST['uname']);
	// 	$psw = mysql_real_escape_string($_POST['psw']);
	// 	if(empty($uname)){
	// 		array_push($errors, "Username required!");
	// 	}

	// 	if(empty($psw)){
	// 		array_push($errors, "Password required!");
	// 	}
	// 	if(count($errors)==0){
	// 		$sql = "SELECT name, uname FROM users";
	// 		mysqli_query($db, $sql);
	// 	}
	// }

?>