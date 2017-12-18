<?php
include('connection.php');


	$emailid  = $_POST['seekers_emailid'];
	$query = "select * from seekers where emailid= '$emailid'";
	$result = mysql_query($query);
    $row=mysql_fetch_array($result);
    $email=$row['emailid'];
   


    if($email==$emailid){
        echo 'yes';

    }
	else{
	     echo 'no';
	}



?>

