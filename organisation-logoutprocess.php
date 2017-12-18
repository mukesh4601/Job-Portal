<?php
    
include('connection.php');

session_destroy();

header ("Location: organisation-logout.php");

?>



