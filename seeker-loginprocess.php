<?php
include('connection.php');



$emailid= $_POST['emailid'];
$password= md5($_POST['password']);
$cookie_password= $_POST['password'];

if (isset($_POST['rememberme']) && $_POST['rememberme']=='1'){
    setcookie("emailid",$emailid,time()+(365*24*60*60));
    setcookie("cookiepassword",$cookie_password,time()+(365*24*60*60));
}


$query= "select * from seekers where emailid='$emailid' && password='$password'";

 
$records=mysql_query($query, $connection);
$rec=mysql_fetch_array($records);
if(!empty($rec))
{
    
   
        session_start();
        $_SESSION['emailid']=$rec['emailid'];
        $_SESSION['seekerid']=$rec['seekerid'];
       
 //     header('Location: seekerprofile.php');
         header('Location: seeker-profile.php');  
   }
     
else { 

    ?>

     
   <script>

       alert('Incorrect Email Or Password');

       window.location.href = 'seeker-login.php'

   </script>


 <?php 
}
     ?>

