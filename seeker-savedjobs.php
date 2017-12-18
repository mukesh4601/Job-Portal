<?php include('header.php'); ?>



                <div class="row" id="header">

               <div class="container">
               
                 <div class="row">
                   
             <div class="col-md-4">
             

                 <div class="row">

                     
                 
                     <div class="col-md-12"><img src="img/88.png" alt="banner" height="60px" width="60px;" class="img-circle pull-left" id="account">


                     
                         <div id="company-pro-name"><h3 class="pull-left"><img src="img/24.png" alt="banner" id="org"><a href="employer-profile.html" id="brand">       <?php  echo $row2['organisationname']; ?></a>
                         
                          
                         </h3>
                             <div class="btn-group">
  <i role="button" class="btn glyphicon glyphicon-menu-down dropdown-toggle text-muted" data-toggle="dropdown" >
     
  </i>
  <ul class="dropdown-menu">
    <li><a href="organisation-changepassword.php">Change Password</a></li>
    <li><a href="organisation-edit-profile.php">Edit Profile</a></li>
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


                                    <div class="well"><h3 class="text-capitalize text-muted">Jobs (7) 
                                        
                                    
                                    <a type="button"  class="btn btn-danger   pull-right">Saved Jobs</a>

                                    
                                    
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
                                            

<tr>
                                                
<td data-title="Job Title" class="text-capitalize"><a type="button"  data-toggle="modal" href="#previewjob"></a>

<!-- Modal -->
                                                       
    
<div id="previewjob" class="modal fade" role="dialog"> 
  <div class="modal-dialog">
     
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
          <div>
                        <h3 class="text-danger"><a href="modifyjob.php" class="pull-right"><i class="glyphicon glyphicon-pencil glyphicon-sm"></i></a></h3>

             
                     </div>   
      </div>
      <div class="modal-body">
         
                                <form action="employer-profile.html">
                                    <div class="form-group">
                                <span class="text-uppercase text-danger">pba</span>
                                <span class="text-capitalize" id="grey">| </span><br>

                                <div id="description">
                                    <span class="text-caplitalize" id="dark"></span>
                                </div>

                               <div>
                            
                                <div class="text-capitalize" id="dark"><b>Job Type : </b><span class="text-capitalize"></span></div>

                                <div class="text-capitalize" id="dark"><b>salary : </b><span class="text-capitalize"> </span></div>

                              </div>
                            <div id="reqire">
                                <div class="text-capitalize" id="dark"><b>education : </b><span class="text-capitalize"></span></div>

                                <div class="text-capitalize" id="dark"><b>experience : </b><span class="text-capitalize"></span></div>
                            </div>
                            <div>
                                <div class="text-capitalize" id="dark"><b>communiction email id : </b><span class="text-capitalize"></span></div>
                                
                                <div class="text-capitalize" id="dark"><b>communiction contact no. : </b><span class="text-capitalize"></span></div>
                            </div>
                                        </div>

                                    
                                    </form>      </div>
      
    </div>

  </div>
</div></td>

                                                    <td data-title="Location" class="text-capitalize" ><span id="grey"></span></td>

                                                    <td data-title="Created on" class="text-capitalize"><span id="grey"></span></td>

                                                    
                                                    <td data-title="Credits" class="text-capitalize"  ><span id="grey"><img src="img/3.png" alt="banner"> 1000</span></td>

                                                    <td data-title="Cost per view" class="text-capitalize"><span id="grey"><img src="img/3.png" alt="banner"> 10</span></td>

                                                    <td data-title="Views" class="text-capitalize"><span id="grey">50</span></td>

                                                    <td data-title="Balance" class="text-capitalize"><span id="grey"><img src="img/3.png" alt="banner"> 500</span></td>


    <td data-title="Candidates" class="text-capitalize"><a href="shortlisted-candidate.php"> candidates</a>
                                                    
                                                    
                                                        <div class="btn-group pull-right">
  <i role="button" class=" glyphicon glyphicon-menu-down dropdown-toggle media-left" id="grey" data-toggle="dropdown" >
     
  </i>
  <ul class="dropdown-menu">
    <li><a href="shortlisted-candidate.php">View shortlisted candidates</a></li>
    <li><a href="search-candidate.php">Search candidates</a></li>
    <li><a href="suggested-candidate.php">View suggested candidates</a></li>
    
  </ul>
</div>
                                                    
                                                    </td>


                                                     <td data-title="Status" class="text-capitalize" id="grey">
                                                        <a type="button"  data-toggle="modal" href="#changestatus">Change</a>

<!-- Modal -->
<div id="changestatus" class="modal fade" role="dialog">
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
                                        
                                            <option >Open</option>

                                            <option >Pause</option>

                                            <option >Close</option>
                                        
                                        </select>

                                        </div>
                                    <input value="" name="jobid" class="hide">
                                    <button type="submit" class="btn btn-danger btn-sm">Save</button>
                                    
                                    </form>      </div>
      
    </div>

  </div>
</div>
                                                        
                                                                                                 </td>

                                                    <td data-title="Option" class="text-capitalize" >
                                                        
                                                        <a href="modifyjob.php">Edit Job</a>
                                                    
                                                    </td>
                                
                                                </tr>

                                      </tbody>
                                        
                                        </table>
                                    
                                    </div>

                                    <div class="row-fliud">

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
            
<?php include('footer.php'); ?>