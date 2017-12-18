<?php

 session_start();
 include('connection.php');


$password=$_POST['password'];
$newpassword= md5($_POST['newpassword']);
$organisationid=$_SESSION['organisationid'];

$query="update organisation set password='".$newpassword."' where organisationid='".$_SESSION['organisationid']."'";
 mysql_query($query);
 echo $query;

header('location:employer-profile.php');

    ?>


