<?php

   include('connection.php');

   $jobid= $_POST['jobid'];
   $seekerid= $_POST['seekerid'];
   
   if(isset($_SESSION['seekerid']))
   
   {
    
   $check="SELECT * FROM seekersavedjobs WHERE seekerid =$seekerid and jobid=$jobid";
   $records = mysql_query($check,$connection);
   $num_rows = mysql_fetch_array($records);
   
   if($num_rows > 0) {

    echo "Job Already Saved";
    
    }
   
   }

      else if
   
   {

    
    $newUser="insert into seekersavedjobs(jobid,seekerid) values ('".$jobid."','".$seekerid."')";
    
    if (mysql_query($newUser,$connection))
    {
        echo  "Job Saved Successfully";
    }
    else
    {
        echo "Error Saving Job";
    }

   
   } 
 
      header('location:list.php?seekerid='.$seekerid);

  

else
{

 header('location:seeker-login.php');

}
   
   

  
?>
 