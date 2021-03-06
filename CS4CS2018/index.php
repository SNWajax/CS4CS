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
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="icon" href="ying.ico" type="image/x-icon">
</head>
<body>

  <div class="jumbotron-yolo jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Computer Science 4 Cyber Security</h1>
          <p class="lead">Learn. Explore. Implement.</p>
        </div>
      </div>

       <!-- logged in user information -->
    <div class="index-main">
      <?php  if (isset($_SESSION['username'])) : ?>
        Welcome <strong style="padding-right: 100px;"><?php echo $_SESSION['username']; ?></strong>
        <a href="index.php?logout='1'" style="color: red;">logout</a> 
      <?php endif ?>
    </div>

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
    </div>

    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>  
           <div class="error success" >
            <h3>
              <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
              ?>
            </h3>
          </div>  
        <?php endif ?>
    </div>

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

<!-- <div class="header">
	<h2>Home Page</h2>
</div> -->

		
</body>
</html>