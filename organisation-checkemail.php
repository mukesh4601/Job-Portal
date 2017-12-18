<?php
    include('connection.php');
    session_start();


    $email = $_POST['organisation_email'];
	$query = "select * from organisation where email= '$email'";
	$result = mysql_query($query,$connection);
    $row = mysql_fetch_array($result);
    $emailid=$row['email'];
    echo $emailid;

     if($email == $emailid){

           echo 'yes';
          
       }
        else{

            echo 'no';
        }
    


?>

