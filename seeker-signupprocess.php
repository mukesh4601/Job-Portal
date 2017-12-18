<?php
    include('connection.php');
$name= $_POST['name'];
$emailid= $_POST['emailid'];
$password= md5($_POST['password']);
$mobilenumber= $_POST['mobilenumber'];
$gender= $_POST['gender'];
$city= $_POST['city'];
$education= $_POST['education'];
$degree= $_POST['degree'];
$designation= $_POST['designation'];
$candidatetype= $_POST['candidatetype'];
$experience= $_POST['experience'];

echo $name;
 
$query="insert into seekers(name,emailid,password,mobilenumber,gender,city,education,degree,designation,candidatetype,experience) values ('".$name."','".$emailid."','".$password."','".$mobilenumber."','".$gender."','".$city."','".$education."','".$degree."','".$designation."','".$candidatetype."','".$experience."')";

echo "<br>";
 
mysql_query($query);
 
echo "Record inserted";
 

header('location:seeker-login.php');
?>

