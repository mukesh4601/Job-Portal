<?php
session_start();    
include('connection.php');
include('header.php');
$seekerid=$_SESSION['seekerid'];

$query="select  * from seekers where seekerid=$seekerid";
$records=mysql_query($query);
$rec=mysql_fetch_array($records);


//$query1="select  * from seekersavedjobs
//INNER JOIN postjob
//ON seekersavedjobs.jobid=postjob.jobid  where seekerid=$seekerid";
//$results=mysql_query($query1);





?>


           <div class="row" id="header">

               <div class="container">
               
                 <div class="row">
                   
             <div class="col-md-4">
             

                 <div class="row">

                     
                 
                     <div class="col-md-12"><img src="img/88.png" alt="banner" height="60px" width="60px;" class="img-circle pull-left" id="account">


                     
                         <div id="company-pro-name"><h3 class="pull-left"><img src="img/24.png" alt="banner" id="org"><a href="employer-profile.html" id="brand"> <?php echo $rec['name'];?></a>
                         
                          
                         </h3>
                             <div class="btn-group">
  <i role="button" class="btn glyphicon glyphicon-menu-down dropdown-toggle text-muted" data-toggle="dropdown" >
     
  </i>
  <ul class="dropdown-menu">
    <li><a href="changepassword.php?seekerid=<?php echo $rec['seekerid'];?>">Change Password</a></li>
    <li><a href="editprofile.php?seekerid=<?php echo $rec['seekerid'];?>">Edit Profile</a></li>
    <li><a href="seeker-logout.php">Logout</a></li>
    
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
                                
                                    

                                    
                                    <li class="pull-right"><a type="button" href="postjob.html" class="btn btn-success  pull-right">Post a Job</a></li>
                                    
                                
                                </ul>
                            
                            </div>
                        
              
          

                        <div class="panel-body">
                        
                            <div>
                            
                                
                                <div id="job">


                                    <div class="well"><h3 class="text-capitalize text-muted">Jobs (<?php echo $total_pages.'';?>)
                                        
                                    
                                    <a type="button" href="list.php?seekerid=<?php echo $rec['seekerid'];?>" class="btn btn-danger   pull-right">Browse Jobs</a>

                                    
                                    
                                    </h3>

                                       
                                    </div>
                                 
                                    <div class="col-md-12" id="no-more-tables">


                                    
                                        <table class="table table-striped table-bordered">
                                        


                                            <thead>

                                                <tr>
                                                
                                                    <th class="text-capitalize">job title</th>

                                                    <th class="text-capitalize">location</th>

                                                    <th class="text-capitalize">created on</th>

                                                    <th class="text-capitalize">salary</th>
                                                    
                                                    <th class="text-capitalize">Education</th>

                                                    <th class="text-capitalize">Candidate Type</th>

                                                    <th class="text-capitalize">Experience</th>

                                                    <th class="text-capitalize">status</th>

                                                    <th class="text-capitalize">Remove | Apply</th>
    

                                                </tr>
                                            
                                                
                                            
                                            </thead>
  <?php  
        
include('savedjobs-pagination.php');
while($row=mysql_fetch_array($results))

{


  ?>
                                            <tbody>


                                                
<tr>
                                                
      <td data-title="Job Title" class="text-capitalize"><a type="button"  data-toggle="modal" href="#previewjob<?php  echo $row['jobid'];?>"><?php echo $row['designation'];?></a>

<!-- Modal -->
<div id="previewjob<?php  echo $row['jobid']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
          <div>
                        <h3 class="text-danger"> <?php  echo $row['designation']; ?></h3>

             
                     </div>   
      </div>
      <div class="modal-body">
         
                                <form action="employer-profile.html">
                                    <div class="form-group">
                                <span class="text-uppercase text-danger">pba</span>
                                <span class="text-capitalize" id="grey">| <?php  echo $row['city']; ?></span><br>

                                <div id="description">
                                    <span class="text-caplitalize" id="dark"><?php  echo $row['description']; ?></span>
                                </div>

                               <div>
                            
                                <div class="text-capitalize" id="dark"><b>Job Type : </b><span class="text-capitalize"> <?php  echo $row['jobtype']; ?></span></div>

                                <div class="text-capitalize" id="dark"><b>salary : </b><span class="text-capitalize"> <?php  echo $row['salary']; ?> <?php  echo $row['salarytype']; ?></span></div>

                              </div>
                            <div id="reqire">
                                <div class="text-capitalize" id="dark"><b>education : </b><span class="text-capitalize"> <?php  echo $row['education']; ?></span></div>

                                <div class="text-capitalize" id="dark"><b>experience : </b><span class="text-capitalize"> <?php  echo $row['experience']; ?> Year</span></div>
                            </div>
                            <div>
                                <div class="text-capitalize" id="dark"><b>communiction email id : </b><span class="text-capitalize"> <?php  echo $row['emailid']; ?></span></div>
                                
                                <div class="text-capitalize" id="dark"><b>communiction contact no. : </b><span class="text-capitalize"> <?php  echo $row['mobilenumber']; ?></span></div>
                            </div>
                                        </div>

                                    
                                    </form>      </div>
      
    </div>

  </div>
</div></td>

                                                    <td data-title="Location" class="text-capitalize" ><span id="grey"><?php echo $row['city'];?></span></td>

                                                    <td data-title="Created on" class="text-capitalize"><span id="grey"><?php echo $row['createdon'];?></span></td>

                                                    
                                                    <td data-title="Credits" class="text-capitalize"  ><span id="grey"><img src="img/3.png" alt="banner"> <?php  echo $row['salary'] ['salarytpe']; ?></span></td>

                                                  

                                                    <td data-title="Views" class="text-capitalize"><span id="grey"><?php  echo $row['education']; ?></span></td>

                                                    <td data-title="Balance" class="text-capitalize"><span id="grey"> <?php  echo $row['candidatetype']; ?></span></td>

                                                     <td data-title="Candidates" class="text-capitalize"><span id="grey"><?php  echo $row['experience'];  ?> Year</span></td>


                                                     <td data-title="Status" class="text-capitalize" id="grey"><?php  echo $row['status']; ?></td>

                                                     <td data-title="Status" class="text-capitalize" id="grey"><a href="seeker-deletejob.php?jobid=<?php echo $row['jobid'];?>"> Remove </a>
                                                     
                                                                                                               |
                                                                                                                   <a href="seeker-applyjob.php?seekerid=<?php echo $rec['seekerid']?>&jobid=<?php echo $row['jobid'];?>"> Apply </a>
                                                     </td>
                                                     
                                                </tr>

                                            




 <?php
                                                

   }
                                                
                                                
  ?>
                                                                                   
                                            </tbody>
                                        
                                        </table>
                                    
                                    </div>

                                    <div class="row-fliud">

<div class="col-md-12 ">
<?php echo $paginate;?>
</div>

</div>

                                
                                </div>




                            
                                

      </div>
        
           
                  

                




                
                
                
            
            
        </div>

           
        

                            
                        
                        </div>
                    </div>
                    </div>
                
                </div>
            
            
        
        </section>

            
<?php include('footer.php');?>



