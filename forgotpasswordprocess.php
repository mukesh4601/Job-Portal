<?php
    
session_start();
include('connection.php');

/* header('seeker-login.php');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent!'
	);

    $emailid = @trim(stripslashes($_POST['emailid'])); 
    
    $emailid_from = $emailid;
    $emailid_to = 'harpreet988871@gmail.com';

    $body = 'emailid: ' . $emailid;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;

*/

$emailid=$_POST['emailid'];
$password= md5($_POST['password']);
$seekerid=$_SESSION['seekerid'];



     $query= "select * from  seekers  where emailid='".$emailid."'";
     echo $query;
     
     header("location:resetpassword.php?emailid:".$emailid);
     

     ?>


