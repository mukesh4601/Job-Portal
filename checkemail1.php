<?php
    include('connection.php');
    session_start();


    $email = $_POST['organisation_email'];
	$query = "select * from organisation where email='$email'";
	$result = mysql_query($query,$connection);
    $num_rows = mysql_num_rows($result);
 

   if ($num_rows > 0)
   {
        echo 'yes';
       
       }
       
        else
       
         {
              echo  'no'; 
       
              }                                       
              



?>

