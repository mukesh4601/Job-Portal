<?php
include('connection.php'); 



   $status=$_POST['status'];
   $jobid= $_POST['jobid'];
      
   $query="update postjob set status='".$status."' where jobid=".$jobid.""; 
   
   mysql_query($query);


   header('location:employer-profile.php');

    ?>
 
 
 
 
 
 
 




 
 
 



