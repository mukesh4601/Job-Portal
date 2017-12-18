 <?php

include('connection.php');

   $jobid= $_POST['jobid'];
   $status=$_POST['status'];
   $seekerid= $_POST['seekerid'];
      
   $query="update seekers set status='".$status."' where seekerid=".$seekerid.""; 
  
   mysql_query($query);


  header('location:suggested-candidate.php');

    ?>
 