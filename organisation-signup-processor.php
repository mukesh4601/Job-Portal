<?php
include('connection.php');
	$orgname = $_POST['orgname'];
	$orgtype = $_POST['orgtype'];
	$city = $_POST['city'];
	$contact_person = $_POST['contact_person'];
	$designation = $_POST['designation'];
	$mobileno = $_POST['mobileno'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
    $query = "insert into organisation(organisationname,organisationtype,cityname,contactpersonname,
    designation1,mobileno,email,password) 
    values ('$orgname','$orgtype',
	'$city','$contact_person','$designation',$mobileno,'$email','$password')";
	$result = mysql_query($query);
    
if(mysql_affected_rows() == 1)
	{ ?>
		<script>
		window.location.href = 'organisation-login.php';
		</script>
	<?php
	}
	else { ?>
		<script> alert('Something went wrong!');
		window.location.href = 'organisation-signup.php';
		
		</script>
	<?php
	   
	
	 }
     
?>
