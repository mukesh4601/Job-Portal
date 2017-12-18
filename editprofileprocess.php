<?php
  
session_start();
include('connection.php');

$images= $_POST['images'];
$name= $_POST['name'];
$emailid= $_POST['emailid'];
$mobilenumber= $_POST['mobilenumber'];
$gender= $_POST['gender'];
$dateofbirth= $_POST['dateofbirth'];
$age= $_POST['age'];
$address= $_POST['address'];
$city= $_POST['city'];
$education= $_POST['education'];
$degree= $_POST['degree'];
$skills= $_POST['skills'];
$expectedsalary= $_POST['expectedsalary'];
$experience= $_POST['experience'];
$seekerid=$_SESSION['seekerid'];

$filename=$_FILES['images']['name'];
$filesize=$_FILES['images']['size'];
$filetype=$_FILES['images']['type'];
$filepath=$_FILES['images']['tmp_name'];

echo "file name of image  ".$filename;
echo "file size of image  ".$filesize;
echo "file type of image  ".$filetype;
echo "file path of image  ".$filepath;


if($filetype != "image/jpeg" && $filetype != "image/png" && $filetype != "image/jpg ") {
   echo "Sorry, only JPG, JPEG, PNG  files are allowed.";
    
}

else if($_FILES['images']['size'] >2000000) {
    echo "Sorry, your file is too large.";
    
}

else if(file_exists('upload/'.$filename)) {
   echo "Sorry,file already exists.";
   
}


move_uploaded_file($_FILES['images']['tmp_name'],"upload/".$_FILES['images']['name']);
$query= "update seekers set images='".$images."',name='".$name."',emailid='".$emailid."',mobilenumber='".$mobilenumber."',gender='".$gender."',dateofbirth='".$dateofbirth."',age='".$age."',address='".$address."',city='".$city."',education='".$education."',degree='".$degree."',skills='".$skills."',expectedsalary='".$expectedsalary."',experience='".$experience."',images='".$filename."' where seekerid=".$_SESSION['seekerid']."";
 mysql_query($query);
 
 
header('location:seekerprofile.php');


     ?>