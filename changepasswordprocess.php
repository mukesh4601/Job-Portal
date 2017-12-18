<?php

 session_start();
 include('connection.php');


$password=$_POST['password'];
$newpassword= md5($_POST['newpassword']);
$seekerid=$_SESSION['seekerid'];

$query="update seekers set password='".$newpassword."' where seekerid='".$_SESSION['seekerid']."'";
 mysql_query($query);


header('location:seeker-login.php');
    ?>
