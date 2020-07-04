<?php
include("dbconnect.php");
$regid=$_REQUEST['regid'];
$coi1=$_REQUEST['coi1'];
$total=$coi1;

$query=mysqli_query($db_connect,"INSERT INTO test1(regid,coi1,total) VALUES('$regid','$coi1','$total')");
mysqli_close($db_connect);

echo "<script type='text/javascript'>alert('Succesfully Submitted! ');

  window.location = 'index1.php';

</script>";
?>
