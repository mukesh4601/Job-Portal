<?php
include("connection.php");

$result=mysql_query("select * from shorlistedcandidates",$connection);


while($data = mysql_fetch_row($result))
{   
   <td data-title="Status" class="text-capitalize" id="grey"> echo $data['shortlistedcanidatestatus']; </td> 
                                                        
                                                                                                
}

?>