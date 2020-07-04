<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Commodity Search Page</title>
    <link rel="icon" href="ccc.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    

</head>

<body>

<!-- Navigation -->
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
<center>


    <h3>Search Page  </h3>
    <br>
    <br>
</center>
<!-- Page Content -->
<div align="center">
    <?php
    include("dbconnect.php");
    ?>
<div align="center" class="container-box col-md-6 bg-light border border-primary rounded">
    <br>
    <br>
    <form align="center" action="dosearch.php" method="post" class="form-group"   >
        <p><b>Enter Commodity ID to Search:</b></p>
       <p align='center'> <input  class=" form-control col-8" type="text" name="search" placeholder="" required></p>

        <br>
                <button class="btn btn-group-lg btn-primary" type="submit" value="Search">
                  Search
                </button>

    </form>
    <br>

</div>

</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>



</body>
<footer>
    <center>
        &copy; Adobe project 2017
    </center>
</footer>
</html>
