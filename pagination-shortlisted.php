<?php
//session_start();
error_reporting(0);
	include('connection.php');


    $jobid= $_GET['jobid'];
	$tableName="shortlistedcandidates";		
	$targetpage = "shortlisted-candidate.php"; 	
	$limit = 6; 
	
	
	$query = "SELECT COUNT(*) as num  FROM $tableName INNER JOIN seekers   ON shortlistedcandidates.seekerid=seekers.seekerid where shortlistedcandidates.jobid=$jobid ";

	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages[num];
	
	$stages = 3;
	$page = mysql_escape_string($_GET['page']);
	if($page){
		$start = ($page - 1) * $limit; 
	}else{
		$start = 0;	
		}	
	
    // Get page data
	$query1 = "SELECT shortlistedcandidates.shortlistedcandidatestatus,seekers.name,seekers.gender,seekers.city,seekers.education,seekers.degree,seekers.experience,seekers.seekerid FROM $tableName INNER JOIN seekers   ON shortlistedcandidates.seekerid=seekers.seekerid where shortlistedcandidates.jobid=$jobid  LIMIT $start, $limit";
	$results = mysql_query($query1);
	
	// Initial page num setup
	if ($page == 0){$page = 1;}
	$prev = $page - 1;	
	$next = $page + 1;							
	$lastpage = ceil($total_pages/$limit);		
	$LastPagem1 = $lastpage - 1;					
	
	
	$paginate = '';
	if($lastpage > 1)
	{	
	

	
	
		$paginate .= "<div class=col-md-12><ul class=pagination><li>";
		// Previous
		if ($page > 1){
			$paginate.= "<a href='$targetpage?page=$prev&jobid=$jobid'>previous</a>";
		}else{
			$paginate.= "<span class=enabled>previous</span>";	
			}
			

		
		// Pages	
		if ($lastpage < 7 + ($stages * 2))	// Not enough pages to breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page){
					$paginate.= "<span class=current>$counter</span>";
				}else{
					$paginate.= "<a href='$targetpage?page=$counter&jobid=$jobid'>$counter</a>";}					
			}
		}
		elseif($lastpage > 5 + ($stages * 2))	// Enough pages to hide a few?
		{
			// Beginning only hide later pages
			if($page < 1 + ($stages * 2))		
			{
				for ($counter = 1; $counter < 4 + ($stages * 2); $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class=current>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
				}
				$paginate.= "...";
				$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
				$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";		
			}
			// Middle hide some front and some back
			elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
			{
				$paginate.= "<a href='$targetpage?page=1'>1</a>";
				$paginate.= "<a href='$targetpage?page=2'>2</a>";
				$paginate.= "...";
				for ($counter = $page - $stages; $counter <= $page + $stages; $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class=current>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
				}
				$paginate.= "...";
				$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
				$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";		
			}
			// End only hide early pages
			else
			{
				$paginate.= "<a href='$targetpage?page=1'>1</a>";
				$paginate.= "<a href='$targetpage?page=2'>2</a>";
				$paginate.= "...";
				for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class=current>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
				}
			}
		}
					
				// Next
		if ($page < $counter - 1){ 
			$paginate.= "<a href='$targetpage?page=$next&jobid=$jobid'>next</a>";
		}else{
			$paginate.= "<span class=enabled>next</span>";
			}
			
		$paginate.= "</li></ul></div>";		
	
	
}

 //echo $total_pages.' Results';
 // pagination
 
// echo $jobid;

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <script src="js/validation.js"></script>
    </head>
    <body>
        
    </body>
</html>
