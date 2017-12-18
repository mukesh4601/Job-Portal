<?php 

include('connection.php');

$jobid=$_GET['jobid'];

$query="DELETE from seekersavedjobs where jobid=$jobid";


$records=mysql_query($query,$connection);
mysql_query($query);



header('location:seeker-profile.php');

?>