<?php
    include('connection.php');
    session_start();


    $pswd=md5($_POST['organisation_password']);
    $email = $_POST['email'];
	$query = "select * from organisation where email= '$email'";
	$result = mysql_query($query,$connection);
    $row = mysql_fetch_array($result);
    $password=$row['password'];

     if($password == $pswd){

           echo 'yes';
          
       }
        else{

            echo 'no';
        }
    


?>

