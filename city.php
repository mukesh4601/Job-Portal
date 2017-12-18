<?php


include('connection.php');
$city = $_GET['term'];

//$query  = "SELECT * FROM cities WHERE name LIKE '%".$city."%' ORDER BY name ASC";

$query  = "SELECT cities.cityname,states.statename,cities.cityid FROM cities INNER JOIN states on 

cities.stateid = states.stateid WHERE cities.cityname LIKE '%".$city."%' or states.statename LIKE '%".$city."%' ORDER BY cities.cityname ASC";

$result  = mysql_query($query);

$data = array();

while($row  = mysql_fetch_assoc($result))
{
	//$data[] =  $row['cityname'].','.$row['statename'];
	//$data[] .= '<input type="hidden" value="'.$row['id'].'">';
	array_push($data, $row['cityname'] . ",".$row['statename']);	
	
	
}
echo json_encode($data);

?>

