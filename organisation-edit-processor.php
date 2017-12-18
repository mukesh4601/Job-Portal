<?php
       session_start();
      include('connection.php'); 



   $images=$_POST['images'];
   $organisationname=$_POST['organisationname'];
   $organisationtype= $_POST['organisationtype'];
   $cityname=$_POST['cityname'];
   $contactpersonname=$_POST['contactpersonname'];
   $designation1=$_POST['designation1'];
   $mobileno=$_POST['mobileno'];
   $email=$_POST['email'];
   $organisationid=$_SESSION['organisationid'];


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
  
   $query= "update organisation set images='".$filename."',organisationname='".$organisationname."',organisationtype='".$organisationtype."',cityname='".$cityname."',contactpersonname='".$contactpersonname."',designation1='".$designation1."',mobileno='".$mobileno."',email='".$email."' where organisationid=".$_SESSION['organisationid']."";

                                                                                                                                                                                  
   echo $query;
   mysql_query($query);


   header('location:employer-profile.php?organisationid='.$organisationid);

    ?>
 
 
 
 
 
 
 




 
 
 



