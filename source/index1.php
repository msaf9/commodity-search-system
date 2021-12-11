<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Entry of Commodity</title>
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
  </nav></br>	
    <center>
     <h3 >Entry of Commodity</h3>
     <br>
     </center>
    <!-- Page Content -->
    <div  >
	<?php
    include("dbconnect.php");
	?>


<form  class="form-group" action='submit.php' method='post'>
<table align='center'>
      <tr><td>
      Commodity ID:</td> <td><input name='regid' class="form-control col-18" align='center' type='text'  required>
	  </td></tr>
	  <td><br></td>

	  <tr><td>
      Commodity Price:</td> <td><input name='coi1' class="form-control" align='center' type='text' required >
	  </td></tr>
	  <td><br></td>
      <br>
	
			 <br>
			 <tr><td> </td><td>
			 <div class='btn-group-md'>
             <button class=' btn btn-primary' type="submit"  value='submit'>submit</button>
			 <button class=' btn btn-danger'  type="reset" value='reset'>Reset</button>
			 <br>
			 <br>
			 </div>

			 </td></tr>
	 </table> </div>
	  </form>
        <script>
            function myfunction(){
                alert("Data Submitted Succesfully");
            }
        </script>


      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>



</body>
<footer>
<center>
&copy; Adobe Project 2017
</center>
</footer>
</html>
