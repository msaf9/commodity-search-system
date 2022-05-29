<?php
include("dbconnect.php");
$regid=$_REQUEST['regid'];
$coi1=$_REQUEST['coi1'];
$total=$coi1;
$regidid=$_REQUEST['regid'];

$query=mysqli_query($db_connect," UPDATE test1 SET regid='$regid',coi1='$coi1',total='$total' WHERE regid='$regid'");
mysqli_close($db_connect);
echo "<script type='text/javascript'>alert('Succesfully Editted! ');

  window.location = 'edit.php';

</script>";

?>