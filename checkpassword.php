<?php
include('connection.php');
session_start();

	$pswd  = md5($_POST['seekers_password']);
    $emailid=$_POST['emailid'];
	$query = "select * from seekers where emailid= '$emailid'";
	$result = mysql_query($query);
    $row=mysql_fetch_array($result);
    $password=$row['password'];
    



    if($password == $pswd){

        echo 'yes';

    }
	else{
	     echo 'no';
	}





?>

