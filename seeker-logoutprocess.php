<?php
    
include('connection.php');

session_destroy();

header ("Location: seeeker-logout.php");

?>

