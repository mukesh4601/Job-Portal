<?php


include('connection.php');

$email=$_POST['email'];
$newpassword= md5($_POST['newpassword']);

$query="update organisation set password='$newpassword' where email= '$email'";

mysql_query($query);

echo $query;


header('location:organisation-login.php');

    ?>


