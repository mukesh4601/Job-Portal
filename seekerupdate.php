<?php
include('connection.php'); 



   $status=$_POST['status'];
   $seekerid= $_POST['seekerid'];
   $jobid=$_POST['jobid'];
   $organisationid=$_POST['organisationid'];   
   $query="update shortlistedcandidates set shortlistedcandidatestatus='".$status."' where seekerid=".$seekerid." and jobid=$jobid and organisationid=$organisationid"; 
   echo $query;
   mysql_query($query);


   header('location:shortlisted-candidate.php?jobid='.$jobid);

    ?>
 
 
 
 
 
 
 




 
 
 



