<?php

   include('connection.php');

   $shortlistedcandidatestatus=$_POST['shortlistedcandidatestatus'];
   $jobid= $_POST['jobid'];
   $seekerid= $_POST['seekerid'];
   $organisationid=$_POST['organisationid'];
  
   $check="SELECT * FROM shortlistedcandidates WHERE seekerid =$seekerid and jobid=$jobid and organisationid=$organisationid";
   $records = mysql_query($check,$connection);
   $num_rows = mysql_fetch_array($records);
   
   if($num_rows > 0) {

    echo "User Already shortlisted";
    
    }
   


      else
   {

    
    $newUser="insert into shortlistedcandidates(jobid,seekerid,shortlistedcandidatestatus,organisationid) values ('".$jobid."','".$seekerid."','".$shortlistedcandidatestatus."','".$organisationid."')";
    
    if (mysql_query($newUser,$connection))
    {
        echo "You are now registered";
    }
    else
    {
        echo "Error adding user in database";
    }
   }
  
   
   

  header('location:suggested-candidate.php?jobid='.$jobid);

?>
 