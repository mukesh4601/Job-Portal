<?php

include('connection.php');    





$designation= $_POST['designation'];
$description= $_POST['description'];
$city= $_POST['city'];
$jobtype= $_POST['jobtype'];
$salary= $_POST['salary'];
$salarytype= $_POST['salarytype'];
$education= $_POST['education'];
$candidatetype= $_POST['candidatetype'];
$experience= $_POST['experience'];
$emailid= $_POST['emailid'];
$mobilenumber= $_POST['mobilenumber'];
$jobid=$_POST['jobid'];

$query="update postjob set designation='".$designation."',description='".$description."',city='".$city."',jobtype='".$jobtype."',salary='".$salary."',salarytype='".$salarytype."',education='".$education."',candidatetype='".$candidatetype."',experience='".$experience."',emailid='".$emailid."',mobilenumber='".$mobilenumber."' where jobid=".$jobid.""; 
echo $query;
echo "<br>";




mysql_query($query);

header('location:employer-profile.php');
?>

