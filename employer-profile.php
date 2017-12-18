<?php
session_start();    
include('connection.php');
include('header.php');
$query="select  * from postjob ";
$records=mysql_query($query, $connection);


$query2="select  * from organisation where organisationid=".$_SESSION['organisationid']."";
$records2=mysql_query($query2, $connection);
$row2=mysql_fetch_array($records2);




?>







         
           <div class="row" id="header">

               <div class="container">
               
                 <div class="row">
                   
             <div class="col-md-4">
             

                 <div class="row">

                     
                 
                     <div class="col-md-12"> <?php if($row2['images'] == ''){ echo '<img src="img/88.png" width="60px" height="60px" class="img-circle" id="images" alt="6">'; } else { ?> <img src="upload/<?php echo $row2 ['images'];?>" width='60px' height='60px' class="img-circle" id="images" alt="6">
                        <?php } ?>
     

                     
                         <div id="company-pro-name"><h3 class="pull-left"><img src="img/24.png" alt="banner" id="org"><a href="employer-profile.html" id="brand">       <?php  echo $row2['organisationname']; ?></a>
                         
                          
                         </h3>
                             <div class="btn-group">
  <i role="button" class="btn glyphicon glyphicon-menu-down dropdown-toggle text-muted" data-toggle="dropdown" >
     
  </i>
  <ul class="dropdown-menu">
    <li><a href="organisation-changepassword.php?organisationid=<?php echo $row2['organisationid'];?>">Change Password</a></li>
    <li><a href="organisation-edit-profile.php?organisationid=<?php echo $row2['organisationid'];?>">Edit Profile</a></li>
    <li><a href="organisation-logout.php">Logout</a></li>
    
  </ul>
</div>
                         

                         
                     
                     </div>
                     
                         
                         
                     
                     </div>

                     
                 
                 </div>
             
             </div>

                     
<div class="col-md-7 " id="banner">

<div class="row-fluid">

    <h2>Retalis.com</h2>

</div>

</div>
                    
                   
                   </div>
               
               </div>
           
           </div>
            </div>

        <section class="wrapper">
        
            <div class="container">
            
                <div class="row">
                
                    <div class="col-md-12">
                    
                        <div class="panel panel-default">
                        
                            <div class="panel-heading hide">
                            
                                <ul class="nav">
                                
                                    

                                    
                                    <li class="pull-right"><a type="button"  href="postjob.php" class="btn btn-success  pull-right">Post a Job</a></li>
                                    
                                </ul>
                            
                            </div>
                        
                        

                        <div class="panel-body">
                        
                            <div>
                            
                                
                                <div id="job">


                                    <div class="well"><h3 class="text-capitalize text-muted">Jobs  
                                        
                                    
                                    <a type="button" href="postjob.php?organisationid=<?php echo $row2['organisationid'];?>" class="btn btn-danger   pull-right">Post a Job</a>

                                    
                                    
                                    </h3>

                                       
                                    </div>
                                 
                                    <div class="col-md-12" id="no-more-tables">


                                    
                                        <table class="table table-striped table-bordered">
                                        

                    

                                            <thead>

                                                <tr>
                                                
                                                    <th class="text-capitalize">job title</th>

                                                    <th class="text-capitalize">location</th>

                                                    <th class="text-capitalize">created on</th>

                                                    <th class="text-capitalize">credits</th>
                                                
                                                    <th class="text-capitalize">cost per view</th>

                                                    <th class="text-capitalize">views</th>

                                                    <th class="text-capitalize">balance</th>

                                                    <th class="text-capitalize">candidates</th>

                                                    <th class="text-capitalize">status</th>

                                                    <th class="text-capitalize">Options</th>

                                                    

                                                </tr>
                                            
                                                
                                            
                                            </thead>

                             
                                            <tbody>
                              <?php  
        

include('test.php');

while($rec=mysql_fetch_array($result))

{
                  ?>               
                            

<?php
    

$query1 = "SELECT *  FROM shortlistedcandidates where jobid=". $rec['jobid'];
$total_candidates = mysql_query($query1);
$finl = mysql_num_rows($total_candidates);
 

?>

<tr>
                                                
<td data-title="Job Title" class="text-capitalize"><a type="button"  data-toggle="modal" href="#previewjob<?php  echo $rec['jobid']; 
  ?>"><?php echo $rec['designation']; ?></a>

<!-- Modal -->
                                                       
    
<div id="previewjob<?php  echo $rec['jobid'];?>" class="modal fade" role="dialog"> 
  <div class="modal-dialog">
     
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
          <div>
                        <h3 class="text-danger"><?php echo $rec['designation']; ?><a href="modifyjob.php?jobid=<?php echo $rec['jobid'];?>" class="pull-right"><i class="glyphicon glyphicon-pencil glyphicon-sm"></i></a></h3>

             
                     </div>   
      </div>
      <div class="modal-body">
         
                                <form action="employer-profile.html">
                                    <div class="form-group">
                                <span class="text-uppercase text-danger"><?php echo $rec['organisationname']; ?></span>
                                <span class="text-capitalize" id="grey">| <?php echo $rec['city']; ?></span><br>

                                <div id="description">
                                    <span class="text-caplitalize" id="dark"><?php echo $rec['description']; ?></span>
                                </div>

                               <div>
                            
                                <div class="text-capitalize" id="dark"><b>Job Type : </b><span class="text-capitalize"><?php echo $rec['jobtype']; ?></span></div>

                                <div class="text-capitalize" id="dark"><b>salary : </b><span class="text-capitalize"> <?php echo $rec['salary']['salarytype']; ?></span></div>

                              </div>
                            <div id="reqire">
                                <div class="text-capitalize" id="dark"><b>education : </b><span class="text-capitalize"><?php echo $rec['education']; ?></span></div>

                                <div class="text-capitalize" id="dark"><b>experience : </b><span class="text-capitalize"><?php echo $rec['experiencetime']; ?></span></div>
                            </div>
                            <div>
                                <div class="text-capitalize" id="dark"><b>communiction email id : </b><span class="text-capitalize"><?php echo $rec['emailid']; ?></span></div>
                                
                                <div class="text-capitalize" id="dark"><b>communiction contact no. : </b><span class="text-capitalize"><?php echo $rec['mobilenumber']; ?></span></div>
                            </div>
                                        </div>

                                    
                                    </form>      </div>
      
    </div>

  </div>
</div></td>

                                                    <td data-title="Location" class="text-capitalize" ><span id="grey"><?php echo $rec['city']; ?></span></td>

                                                    <td data-title="Created on" class="text-capitalize"><span id="grey"><?php echo date('j,M Y',strtotime($rec['createdon'])); ?></span></td>

                                                    
                                                    <td data-title="Credits" class="text-capitalize"  ><span id="grey"><img src="img/3.png" alt="banner"> 1000</span></td>

                                                    <td data-title="Cost per view" class="text-capitalize"><span id="grey"><img src="img/3.png" alt="banner"> 10</span></td>

                                                    <td data-title="Views" class="text-capitalize"><span id="grey">50</span></td>

                                                    <td data-title="Balance" class="text-capitalize"><span id="grey"><img src="img/3.png" alt="banner"> 500</span></td>


    <td data-title="Candidates" class="text-capitalize"><a href="shortlisted-candidate.php?jobid=<?php echo $rec['jobid'];?>"><?php echo $finl;?> candidates</a>
                                                    
                                                    
                                                        <div class="btn-group pull-right">
  <i role="button" class=" glyphicon glyphicon-menu-down dropdown-toggle media-left" id="grey" data-toggle="dropdown" >
     
  </i>
  <ul class="dropdown-menu">
    <li><a href="shortlisted-candidate.php?jobid=<?php echo $rec['jobid'];?>">View shortlisted candidates</a></li>
    <li><a href="search-candidate.php">Search candidates</a></li>
    <li><a href="suggested-candidate.php?jobid=<?php echo $rec['jobid'];?>">View suggested candidates</a></li>
    
  </ul>
</div>
                                                    
                                                    </td>


                                                     <td data-title="Status" class="text-capitalize" id="grey"><?php echo $rec['status']; ?>
                                                        
                                                        
                                                        <a type="button"  data-toggle="modal" href="#changestatus<?php  echo $rec['jobid']; 
  ?>">Change</a>

<!-- Modal -->
<div id="changestatus<?php  echo $rec['jobid']; 
  ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
          <div>
                        <h3 class="text-danger">Change Your Job Status </h3>

             
                     </div>   
      </div>
      <div class="modal-body space-left">
          <span class="pull-left ">Change your job status to :</span>
         
                                <form role="form" class="form-inline" action="update.php" method="post" >
                                    <div class="form-group">
                                
                                        <select name="status" class="form-control ">
                                        
                                            <option <?php if($rec['status'] == 'Open') {  echo 'selected'; } else { echo  ''; }  ?>>Open</option>

                                            <option <?php if($rec['status'] == 'Pause') {  echo 'selected'; } else { echo  ''; }  ?>>Pause</option>

                                            <option <?php if($rec['status'] == 'Close') {  echo 'selected'; } else { echo  ''; }  ?>>Close</option>
                                        
                                        </select>

                                        </div>
                                    <input value="<?php  echo $rec['jobid'];?>" name="jobid" class="hide">
                                    <button type="submit" class="btn btn-danger btn-sm">Save</button>
                                    
                                    </form>      </div>
      
    </div>

  </div>
</div>
                                                        
                                                                                                 </td>

                                                    <td data-title="Option" class="text-capitalize" >
                                                        
                                                        <a href="modifyjob.php?jobid=<?php echo $rec['jobid'];?>">Edit Job</a>
                                                    
                                                    </td>
                                
                                                </tr>

                                              <?php
                                                

                                                }
                                                
                                                
                                                 ?>
                                      </tbody>
                                        
                                        </table>
                                    
                                    </div>

                                    <div class="row-fliud">

<?php echo $paginate; ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
            
<?php include('footer.php');?>



