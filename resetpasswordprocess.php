
<?php
    

 include('connection.php');

 session_start();

$emailid=$_POST['emailid'];
$confrmnewpassword= md5($_POST['confirmnewpassword']);


$query="update seekers set password='$confirmnewpassword' where emailid='.$emailid'";
                                                                           
mysql_query($query);

echo $query;

header('Location:seeker-login.php');
     
  
?>
