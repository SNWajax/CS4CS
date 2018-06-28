<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>CS4CS</title>
		<link rel="stylesheet" href="bootstrap.css">
		<link rel="icon" href="ying.ico" type="image/x-icon">
	</head>
	<body >
<!-- 		<h1 style="text-align: center;">CS4CS</h1> -->
	<?php	

	//echo "Inside PHP";

		echo '<div class="jumbotron-yolo jumbotron-fluid">
		  <div class="container">
		    <h1 class="display-4">Computer Science 4 Cyber Security</h1>
		    <p class="lead">Learn. Explore. Implement.</p>
		  </div>
		</div>';

		if (isset($_POST['login'])) {

			//echo "Inside Login";

			require_once('server.php');

			//echo "After Server PHP";

			$query1 = "SELECT name FROM users WHERE uname = '".$_POST['username']."' and psw = '".$_POST['psw']."'";

			/*$query1 = "SELECT name FROM users WHERE uname = ".$_POST['username']." and psw = ".$_POST['psw'];*/
			$response1 = @mysqli_query($dbc, $query1);
        	//$row = mysqli_fetch_array($response1);

        	if($response1){
// mysqli_fetch_array will return a row of data from the query
// until no further data is available

        	 	//echo $response1;

	            while($row = mysqli_fetch_array($response1)){
	            	if (!empty($row)) {
	            		echo '<table align="left" cellspacing="5" cellpadding="8">
	                    <tr>
	                        <td align="left"><b>NAME</b></td>
	                    </tr>';
	            		echo '<tr>
		                    <td align="left">' . 
		                        $row['name'] . 
		                    '</td>';
		                echo '</tr>';
	            	}else if (empty($row)){
	            		echo 'Incorrect Password!';
	            	}
	                
	            }
	            echo '</table>';
	        }
	        else {
	            echo "Couldn't issue database query<br />";
	            echo mysqli_error($dbc);
	        }
		}

		echo '<br><br><br><br><div class="container">
		  <div class="row">
		    <div class="col-lg-6">
		    	<img src="cs.jpg" class="yolo-col-img" style="width:match-parent;">
		    </div>
		    <div class="col-sm-6 text-pad-top">
		      Placeholder text, a hint towards the desired answer that sits within a field, may appear an attractive and helpful addition to a form. However it should be used with caution; more often than not it hinders user experience and significantly affects the overall usability of a form.
		    </div>
		  </div>
		  <div class="row">
		    <div class="col-sm-6 text-pad-top">
		      Placeholder text, a hint towards the desired answer that sits within a field, may appear an attractive and helpful addition to a form. However it should be used with caution; more often than not it hinders user experience and significantly affects the overall usability of a form.
		    </div>
		    <div class="col-lg-6">
		    	<img src="cs.jpg" class="yolo-col-img" style="width:match-parent;">
		    </div>
		  </div>
		</div>
		<div class="jumbotron-yolo-2 jumbotron-fluid">
		  <div class="container">
		    <h1 class="display-4">You Only Live Once</h1>
		    <p class="lead">Whatever!!!</p>
		  </div>
		</div>
		<div class="container">
		  <div class="row">
		    <div class="col-lg-6">
		    	<img src="cs.jpg" class="yolo-col-img" style="width:match-parent;">
		    </div>
		    <div class="col-sm-6 text-pad-top">
		      Placeholder text, a hint towards the desired answer that sits within a field, may appear an attractive and helpful addition to a form. However it should be used with caution; more often than not it hinders user experience and significantly affects the overall usability of a form.
		    </div>
		  </div>
		  <div class="row">
		    <div class="col-sm-6 text-pad-top">
		      Placeholder text, a hint towards the desired answer that sits within a field, may appear an attractive and helpful addition to a form. However it should be used with caution; more often than not it hinders user experience and significantly affects the overall usability of a form.
		    </div>
		    <div class="col-lg-6">
		    	<img src="cs.jpg" class="yolo-col-img" style="width:match-parent;">
		    </div>
		  </div>
		</div>'
	?>
		<!-- Footer -->
		<footer class="page-footer pad-side-footer font-small blue pt-4 mt-4">
		  <div class="container-fluid text-center text-md-left">
		    <div class="row">
		      <div class="col-md-6 mt-md-0 mt-3">
				  <h5 class="text-uppercase">Footer Content</h5>
				  <p>Blah Blah</p>
		      </div>
		      <hr class="clearfix w-100 d-md-none pb-3">
		      <div class="col-md-6 mb-md-0 mb-3">
		        <h5 class="text-uppercase">Links</h5>
		        <ul class="list-unstyled">
		          <li>
		            <a href="#!">Link 1</a>
		          </li>
		          <li>
		            <a href="#!">Link 2</a>
		          </li>
		          <li>
		            <a href="#!">Link 3</a>
		          </li>
		          <li>
		            <a href="#!">Link 4</a>
		          </li>
		        </ul>		
		      </div>
		    </div>
		  </div>
		</footer>
	</body>
</html>