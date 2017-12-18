<?php 

include('connection.php');
$jobid=$_GET['jobid'];
$seekerid=$_GET['seekerid'];
echo $seekerid;
echo $jobid;
$query="select * from seekers where seekerid=$seekerid";
$records=mysql_query($query);
$rec=mysql_fetch_array($records);

$query1="select * from postjob where jobid=$jobid";
$records1=mysql_query($query1);
$rec1=mysql_fetch_array($records1);


echo $name=$rec['name'];
echo $emailid=$rec['emailid'];
echo $emailid1=$rec1['emailid'];
echo $mobilenumber=$rec['mobilenumber'];
echo $expectedsalary=$rec['expectedsalary'];
echo $experience=$rec['experience'];
echo $gender=$rec['gender'];
echo $candidatetype=$rec['candidatetype'];




 
$from=$emailid;
 
$to=$emailid1;
$headers="From :".$from;
 
mail($to,$name,$emailid,$mobilenumber,$mobilenumber,$expectedsalary,$experience,$experience,$candidatetype,$headers);
echo "Mail Sent";


$query3="insert into seekerappliedjobs(jobid,seekerid) values('".$jobid."','".$seekerid."')";
mysql_query($query3);
echo $query3;



 
?>





