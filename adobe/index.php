<?php require "login/loginheader.php"; ?>


<!DOCTYPE html>
<html>
	  <head>
		<meta charset="utf-8">
		<title>Menu</title>
		<link rel="icon" href="cc.png" sizes="32x32" type="image/png">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav nav-right">
    <a class="nav-item nav-link" href="index.php">Home</a>
      <a class="nav-item nav-link" href="search.php">Search</a>
	  <a class="nav-item nav-link" href="login/logout.php">Logout</a>
    </div>
  </div>
</nav>	
		<br>
		<?php
    include("dbconnect.php");
    ?>
     
		<div class="loginBox">
		<center>
		<h3>Welcome to Commodity Search System</h3>
					<br> <br> <br>
					<a href="index1.php"><button type="button" class="btn btn-primary btn-lg">Entry of Commodity</button></a>
					<a href="edit.php"> <button type="button" class="btn btn-secondary btn-lg">Edit</button></a>	<br><br>				
		</center>
		</div>
	<footer class="footer">
    <div class="footerContainer">
	<hr size="1px"><center>
        <p class="copyright">Copyright © 2017 Adobe Project. All rights reserved.</p></center>
    </hr>
	</div>
	</footer>
	</body>
</html>
