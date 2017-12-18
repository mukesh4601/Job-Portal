<?php


include('connection.php');

$jobid= $_GET['jobid'];
$seekerid= $_GET['seekerid'];
$shortlistedcandidatestatus=$_GET['shortlistedcandidatestatus'];
$organisationid= $_GET['organisationid'];
   
$query="select  * from shortlistedcandidates where seekerid=$seekerid AND jobid=$jobid and organisationid=$organisationid";


$query1="insert into shortlistedcandidates(jobid,seekerid,shortlistedcandidatestatus,organisationid) values ('".$jobid."','".$seekerid."','".$shortlistedcandidatestatus."','".$organisationid."')"; 

mysql_query($query1);

    echo $query;
    echo $query1;
$records=mysql_query($query,$connection);

$row=mysql_fetch_array($records);

 
$num_rows = mysql_num_rows($records);



   if ($num_rows > 0) {

  echo $row['shortlistedcandidatestatus']; 

}

else {

  echo "";
  
}

//header('location:suggested-candidate.php?jobid='.$jobid);

?>

