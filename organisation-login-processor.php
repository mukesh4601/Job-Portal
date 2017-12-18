<?php

include('connection.php');

$email = $_POST['email'];
$password = md5($_POST['password']);

if (isset($_POST['remember']) && $_POST['remember'] == '1') {
    
 setcookie("email", $email, time()+(365 * 24 * 60 * 60));
 setcookie("password", $password, time()+(365 * 24 * 60 * 60));  /* expire in 1 Year */
}


$query = "select * from organisation where email ='".$email."' and password='".$password."'";
$res = mysql_query($query);


$result = mysql_fetch_array($res);

if(!empty($res))
{
	if($result['email'] == $email && $result['password'] == $password )
	
	{
	session_start();
	$_SESSION['organisationid'] = $result['organisationid'];
	$_SESSION['organisationname'] = $result['organisationname'];
    $_SESSION['email']=$rec['email'];
    $_SESSION['password']=$rec['password'];
	
	header('Location: employer-profile.php');
}
	else {
		?>
	<script> alert('Incorrect username or Password');
	window.location.href= 'organisation-login.php';
	
	</script>
	<?php
	
	
}
}



?>

