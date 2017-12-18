<?php
    
session_start();
 include('connection.php');

/* header('organisation-login.php');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent!'
	);

    $email = @trim(stripslashes($_POST['email'])); 
    
    $email_from = $email;
    $email_to = 'bhardwaj.mukesh91@gmail.com';

    $body = 'email: ' . $email;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;

*/
   $email=$_POST['email'];
   $query= "select * from  organisation  where email=$email";
   $records=mysql_query($query,$connection);
   $rec=mysql_fetch_array($records);

   echo $email;


   header("location:organisation-resetpassword.php?email=".$email);







     ?>




