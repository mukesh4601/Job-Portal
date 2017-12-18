<?php
include('connection.php');    
session_start();   




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
$createdon= date('Y-m-d');
$status=$_POST['status'];
$organisationid=$_POST['organisationid'];



$query="insert into postjob(designation,description,city,jobtype,salary,salarytype,education,candidatetype,experience,emailid,mobilenumber,createdon,status,organisationid) values ('".$designation."','".$description."','".$city."','".$jobtype."','".$salary."','".$salarytype."','".$education."','".$candidatetype."','".$experience."','".$emailid."','".$mobilenumber."','".$createdon."','".$status."','".$organisationid."')";
echo $query;
echo "<br>";
 
mysql_query($query);


header('location:employer-profile.php?organisationid='.$organisationid); 

?>
