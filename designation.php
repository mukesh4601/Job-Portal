<?php


include('connection.php');
$designation = $_GET['term'];

//$query  = "SELECT * FROM cities WHERE name LIKE '%".$city."%' ORDER BY name ASC";

$query  = "SELECT * FROM designation WHERE designationname LIKE '%".$designation."%'  ORDER BY designationname";

$result  = mysql_query($query);

$data = array();

while($row  = mysql_fetch_assoc($result))
{
	//$data[] =  $row['cityname'].','.$row['statename'];
	//$data[] .= '<input type="hidden" value="'.$row['id'].'">';
	array_push($data, $row['designationname']);	
	
	
}
echo json_encode($data);

?>

