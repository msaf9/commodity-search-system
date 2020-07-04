<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>List of Gender Equity Promotion programs held in KLUniversity </title>

    <!-- Bootstrap core CSS -->
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


    <h3>Search Results </h3>

</center>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<?php
include ('dbconnect.php');
$search_value=$_POST["search"];
if($db_connect->connect_error){
    echo 'Connection Faild: '.$db_connect->connect_error;
}else{
    $sql="select * from test1 where regid like '%$search_value%'";

    $res=$db_connect->query($sql);


    if ($res->num_rows > 0) {
        echo "<table  align='center'  class='table-sm  table-success '><br><tr><th>Item</th><th>Commodity ID</th><th>Price</th><th>Total</th></tr>";
        // output data of each row
        while($row = $res->fetch_assoc()) {
            echo "<tr><td>Commodity</td><td>".$row["regid"]."</td><td>".$row["coi1"]." </td><td>".$row["total"]."</td></tr>";
        }
		echo "</table> <br> ";
    }
    else {
        echo "<h4 align='center'>Results are not present</h4><br>";
    }

   
        
    } 
    






?>


</body>
<footer>
    <center>
        &copy; Adobe Project 2017
    </center>
</footer>
</html>