<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Commodity Edit Page </title>
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


    <h3> </h3>
    <br>
</center>
<!-- Page Content -->
<div  >
    <?php
    include("dbconnect.php");
    ?>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project9";
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT regid,coi1, total FROM test1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h4 align='center'>Total Records In Database</h4><table align='center' border='3|2'><tr><th>Commodity ID &nbsp&nbsp</th><th>Commodity Price &nbsp&nbsp</th><th>Total&nbsp&nbsp</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo " <tr><td>".$row["regid"]."</td><td>".$row["coi1"]."</td><td>".$row["total"]."</td></tr>";
        }
        echo "</table><br><br>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

    <h3 align="center">Enter Commodity ID and the Data to Edit/Update Commodity Items</h3>
    <form  class="form-group" action='doedit.php' method='post'>

        <div class='mydiv container-fluid col-md-6 bg-light   border border-info rounded'   >
            <table align='center'>



                <tr><td>
                        Enter Commodity ID </td> <td><input name='regid' class="form-control col-18" align='center' type='text'  required  placeholder="Enter Commodity ID">
                    </td></tr>
                <td><br></td>


                <tr><td>
                        Commodity Price </td> <td><input name='coi1' class="form-control col-18" align='center' type='text'  required  placeholder="">
                    </td></tr>
                <td><br></td>

                <tr><td>
                        
                <td><br></td>

                <tr><td>
                        
                <td><br></td>
                <br>
                <td><br></td>
                <br>
                <tr><td> </td><td>
                        <div class='btn-group-md'>
                            <button class=' btn btn-primary' type="submit"  value='submit'>Do EDIT</button>
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
