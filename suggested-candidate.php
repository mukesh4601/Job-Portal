<?php

session_start();    
include('connection.php');
include('header.php'); 

?>




<?php


$jobid= $_GET['jobid'];
$query1="select * from postjob where jobid=".$jobid;
$records1=mysql_query($query1,$connection);
$row1=mysql_fetch_array($records1);



$designation=$row1['designation'];
$query="select  * from seekers where designation= '$designation' ORDER BY experience DESC";
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
     

                     
                         <div id="company-pro-name"><h3 class="pull-left"><img src="img/24.png" alt="banner" id="org"><a href="employer-profile.html"id="brand">       <?php  echo $row2['organisationname']; ?></a>
                         
                          
                         </h3>
                             <div class="btn-group">
  <i role="button" class="btn glyphicon glyphicon-menu-down dropdown-toggle text-muted" data-toggle="dropdown" >
     
  </i>
  <ul class="dropdown-menu">
    <li><a href="changepassword.html">Change Password</a></li>
    <li><a href="employer-editprofile.html">Edit Profile</a></li>
    <li><a href="employer-logout.html">Logout</a></li>
    
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



<input type="text" value="<?php echo $row1['jobid']; ?>" id="jobid" class="hidden">


<input type="text" value="<?php echo $row2['organisationid']; ?>" id="organisationid" class="hidden">




        <section class="wrapper">
        
            <div class="container">
            
                <div class="row">
                
                    <div class="col-md-12">
                    
                        <div class="panel panel-default">
                        
                            <div class="panel-heading hide">
                            
                                <ul class="nav">
                                
                                    

                                    
                                    <li class="pull-right"><a type="button" href="postjob.html" class="btn btn-success  pull-right">Post a Job</a></li>
                                    
                                
                                </ul>
                            
                            </div>
                        
                        

                        <div class="panel-body">
                        
                            <div>
                            
                                
                               <div id="candidates1">

                                    
                                    <div class="well"><h3 class="text-capitalize text-muted"><?php echo $row1['designation']; ?><br> <small class="text-danger">Full Time</small> 
                                        
                                    
                                    

                                    <a type="button" href="employer-profile.php" class="btn btn-danger pull-right">Back to Jobs</a>
                                    
                                    </h3>

                                       
                                    </div> 

                                    <div class="well">
                                    
                                        <h3 class="text-muted">You don'nt have candidates for this job.<a href="search-candidate.html">Search Here</a>.</span></h3>
                                    
                                    </div>
                                    
                                    

                                    <div class="col-md-12" id="no-more-tables">

                                        <div class="row">

                                            <div class="col-md-9">

                                   <h3 class="text-capitalize">suggested Candidates</h3>

                                                </div>

                                            
                                            </div>
                                        <table class="table table-striped table-bordered">
                                        


                                            <thead>

                                                <tr>
                                                
                                                    <th class="text-capitalize">name</th>

                                                    <th class="text-capitalize">gender</th>

                                                    <th class="text-capitalize">city</th>

                                                    <th class="text-capitalize">qualification</th>

                                                    <th class="text-capitalize">another degree/certification</th>
                                                
                                                    <th class="text-capitalize">experience</th>

                                                    <th class="text-capitalize">status</th>

                                                    <th class="text-capitalize">options</th>
                                                </tr>
                                            
                                                
                                            
                                            </thead>

                                            <tbody>
        
                                                
                                                
                                                                                    
                                                <?php  
        

//include('pagination-suggested.php');

while($rec=mysql_fetch_array($records))

{
                  ?>  




                                            <tr>
                                                   <input type="text" value="<?php echo $rec['seekerid']; ?>" id="seekerid" class="hidden">

                                                    <td data-title="Name" class="text-capitalize" ><b id="grey"><?php echo $rec['name'];?></b></td>

                                                    <td data-title="Gender" class="text-capitalize" ><span id="grey"><?php echo $rec['gender'];?></span></td>

                                                    <td data-title="Location" class="text-capitalize" ><span id="grey"><?php echo $rec['city'];?></span></td>

                                                    <td data-title="Qualification" class="text-capitalize"><span id="grey"><?php echo $rec['candidatetype'];?></span></td>

                                                    <td data-title="Any Degree/Certification" class="text-capitalize"><span id="grey"><?php echo $rec['degree'];?></span></td>

                                                    <td data-title="Experience" class="text-capitalize"><span id="grey"><?php echo $rec['experience'];?></span></td>

                                                    <td data-title="Status" class="text-capitalize" id="grey">
                                                        <?php 
$seekerid=$rec['seekerid'];
$jobid=$row1['jobid'];
                                                        
$query3="select  * from shortlistedcandidates where seekerid= $seekerid and jobid=$jobid";
$records3=mysql_query($query3, $connection);
$row3=mysql_fetch_array($records3);
$num_rows = mysql_num_rows($records3);


   if ($num_rows > 0)
   {
   echo "<p class='black'>".$row3['shortlistedcandidatestatus']."</p>";
       
       }
       
        else
       
         {
              echo  'New'; 
       
              }                                       
              
            ?>
                                                        
                                                                                                 </td>
                                                
                                                


                                                    <td data-title="Option" class="text-capitalize">
                                                        
                                                        <a type="button"  data-toggle="modal" href="#searchcandidate<?php echo $rec['seekerid'];?>">View</a>

<!-- Modal -->
<div id="searchcandidate<?php echo $rec['seekerid'];?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
          <div>
                        <h3 class="text-danger"><img src="img/88.png" alt="banner" height="120px" width="120px" class="img-circle"><span id="candidate-name"><?php echo $rec['name'];?></span></h3>
              <div class="row" id="candidate-status">
                        <div class="dropdown pull-right">
                                                
                                                    
                                                      <button type="button" class="pull-right btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown" data-target="status" value="shorlist" ><?php echo $rec['status'];?></button>
                                                    
                                                        
                            </div>
                                                            </div>
                     </div>   
      </div>
      <div class="modal-body">
         <form  action="shortlistedcandidatesprocessor.php" method="post">
                                    <div class="form-group">
                                <span class="text-uppercase text-danger"><?php echo $rec['designation'];?></span>
                                <span class="text-capitalize" id="grey">| <?php echo $rec['city'];?></span><br>

                                <div id="description"></div>

                               <div>
                            
                                <div class="text-capitalize" id="dark"><b>gender : </b><span class="text-capitalize"><?php echo $rec['gender'];?></span></div>

                                <div class="text-capitalize" id="dark"><b>date of birth : </b><span class="text-capitalize"><?php echo $rec['dateofbirth'];?></span></div>

                                <div class="text-capitalize" id="dark"><b>age : </b><span class="text-capitalize"><?php echo $rec['age'];?></span></div>

                              </div>
                            <div id="reqire">
                                <div class="text-capitalize" id="dark"><b>qualification : </b><span class="text-capitalize"><?php echo $rec['candidatetype'];?></span></div>

                                <div class="text-capitalize" id="dark"><b>any degree/Certification in retail : </b><span class="text-capitalize"><?php echo $rec['degree'];?></span></div>

                                <div class="text-capitalize" id="dark"><b>experience : </b><span class="text-capitalize"><?php echo $rec['experience'];?></span></div>

                                <div class="text-capitalize" id="dark"><b>skills : </b><span class="text-capitalize"><?php echo $rec['skills'];?></span></div>

                                <div class="text-capitalize" id="dark"><b>expected salary : </b><span class="text-capitalize"><?php echo $rec['expectedsalary'];?></span></div>
                            </div>
                            <div>
                                <div class="text-capitalize" id="dark"><b>email id : </b><span class="text-capitalize"><?php echo $rec['emailid'];?></span></div>
                                
                                <div class="text-capitalize" id="dark"><b>contact no. : </b><span class="text-capitalize"><?php echo $rec['mobilenumber'];?></span></div>
                            </div>
                                        </div>
                                    <input value="shortlisted" name="shortlistedcandidatestatus"  type="hidden">
                                    <input value="<?php  echo $rec['seekerid'];?>" name="seekerid" class="hide">
                                    <input value="<?php  echo $row1['jobid'];?>" name="jobid"  type="hidden">
                                    <input value="<?php  echo $row2['organisationid'];?>" name="organisationid"  type="hidden">

                                    <button type="submit" class="btn btn-danger">Shortlist</button>
                                    
                                    </form>
      </div>
      
    </div>

  </div>
</div>
                                                        
                                                            
                                                    </td>
                                                
                                                </tr>







                                            <?php
                                                

                                                }
                                                
                                                
                                                 ?>
                                        
                                            </tbody>
                                        
                                        </table>
                          
                                    </div>

                                    <a href="search-candidate.php">Search more</a>
                                
                                </div>

      </div>
        </div>
                        </div>
                    </div>
                    </div>
                </div>
        </section>

        </div>


          

            
       <?php  include('footer.php');  ?>