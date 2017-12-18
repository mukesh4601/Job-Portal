<?php 
 
 include ('header.php');
 
 session_start();
$seekerid=$_GET['seekerid'];

include('connection.php');
//$query  = "select * from postjob
//inner join organisation on postjob.organisationid = organisation.organisationid";
//$result  = mysql_query($query);


$query2="select * from seekers where seekerid=$seekerid";
$records=mysql_query($query2);
$rec=mysql_fetch_array($records);

  ?>
              




    
        <div class="section">
        <div class="contianer-fliud">

            <div class="row">
            
                <div class="col-md-12">
                
                    <div class=" row jumbotron text-center"><h1><small>It's time to start living the life we've imagined.</small></h1>
                 
                     <form class="form-inline" id="search" method="post">
                         <div class="container">
                     <div class="row-fliud">
                         
                          <div class="col-md-8 text-right">
                           <div class="form-group">
                         
                             <label class="sr-only" for="inputneed">what?</label>
                             <input type="text" id="designation" class="form-control " placeholder=" Job Title " name="designation">
                         <div id="error_designation" class="black"></div>
                         
                         </div>
                        <div class="form-group">
                         
                             <label class="sr-only" for="inputlocation">where</label>
                             <input type="text" id="city" class="form-control " placeholder="Location" name="city">
                         <div id="error_city" class="black"></div>
                         
                         </div>
                        <div class="form-group ">
                         
                             <label class="sr-only" for="inputexperience">where</label>
                             <select class="form-control" id="experience" name="experience">
                             
                                 <option >Experience</option>
                             
                                 <option  class="grey" value="0">0 year</option>

                                        <option >1 year</option>

                                        <option >2 Years</option>

                                        <option >3 Years</option>

                                        <option >4 Years</option>

                                        <option >5 Years</option>

                                        <option >6 Years</option>

                                        <option >7 Years</option>
                                
                                        <option >8 Years</option>

                                        <option >9 Years</option>

                                         <option >10 Years</option>

                                         <option >11 Years</option>

                                         <option >12 Years</option>

                                         <option >13 Years</option>

                                         <option >14 Years</option>

                                         <option >15 Years</option>

                                         <option >16 Years</option>

                                         <option >17 Years</option>

                                         <option >18 Years</option>

                                         <option >19 Years</option>

                                         <option >20 Years</option>

                                         <option >25 Years</option>

                                         <option >30 Years</option>

                                         <option >35 Years</option>
                                     

                             </select>
                         <div id="error_experience" class="black"></div>
                         </div>
                          
                        </div>
                        <div class="col-md-3 col-md-1-offset">

                         <div class="form-group">
                         
                       <button type="submit" class="btn btn-danger" id="searchbtn" >Search</button>

                         </div>
                        </div>
                       </div>
                     </div>
                     
                     </form>
                 </div>
                
                </div>
            
            </div>

            <div class="container" id="job-list">
        
            <div class="row-fliud">
            
                <div class="col-md-2" >
                
                    <h2>Job List</span></h2>
                
                    <div class="row-fliud">
                    
                        <div class="panel-group">

                        
                            <div  class="panel panel-header panel-default" data-toggle="collapse" data-target=".filter" >
                            <span>Filter By</span><b class="caret"></b></div>

                            <div class="collapse filter">

                                <div  class="panel panel-header panel-default" data-toggle="collapse" data-target=".filte"  >
                            <b>Location</b><span class="caret" ></span></div>

                     

                            <div class="collapse-in filte "  >

                                <form>

                                    <div class="form-group">

                                        <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" id="checkbox1" value="option1">Amritsar(129)
                                
                                </label>
                                      
                                        </div>

                                        <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" id="checkbox1" value="option1">Ludhiana(200)
                                
                                </label>
                                      
                                        </div>

                                        <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" id="checkbox1" value="option1">Batala(70)
                                
                                </label>
                                      
                                        </div>

                                        <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" id="checkbox1" value="option1">Patti(30)
                                
                                </label>
                                      
                                        </div>

                                        <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" id="checkbox1" value="option1">Tarn-Taran(40)
                                
                                </label>
                                      
                                        </div>

                                        <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" id="checkbox1" value="option1">Manawala(10)
                                
                                </label>
                                      
                                        </div>

                                       
                                    </div>
                                </form>

                                
                            </div>

                                <div  class="panel panel-header panel-default" data-toggle="collapse" data-target=".filt">
                            <b>Top Companies</b><span class="caret"></span></div>

                            <div class="collapse filt" id="collapse" >

                                 <form>

                                    <div class="form-group">

                                        <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" id="checkbox1" value="option1">KFC
                                
                                </label>
                                      
                                        </div>

                                        <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" id="checkbox1" value="option1">Dominos(100)
                                
                                </label>
                                      
                                        </div>

                                        <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" id="checkbox1" value="option1">Pizza Hut(129)
                                
                                </label>
                                      
                                        </div>

                                        <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" id="checkbox1" value="option1">Burger King(40)
                                
                                </label>
                                      
                                        </div>

                                        <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" id="checkbox1" value="option1">Hayat(80)
                                
                                </label>
                                      
                                        </div>

                                        <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" id="checkbox1" value="option1">CCD(60)
                                
                                </label>
                                      
                                        </div>

                                       
                                    </div>
                                </form>


                                
                            </div>

                                <div  class="panel panel-header panel-default" data-toggle="collapse" data-target=".fil" >
                            <b>Salary</b><span class="caret" ></span></div>

                            <div class="collapse border-danger fil filter-con" id="collapse">

                                 <form>

                                    <div class="form-group">

                                        <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" id="checkbox1" value="option1">0-3Lakhs(150)
                                
                                </label>
                                      
                                        </div>

                                        <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" id="checkbox1" value="option1">3-6Lakhs(100)
                                
                                </label>
                                      
                                        </div>

                                        <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" id="checkbox1" value="option1">6-10Lakhs(129)
                                
                                </label>
                                      
                                        </div>

                                        <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" id="checkbox1" value="option1">10-15Lakhs(40)
                                
                                </label>
                                      
                                        </div>

                                        <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" id="checkbox1" value="option1">15-25Lakhs(80)
                                
                                </label>
                                      
                                        </div>

                                        <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" id="checkbox1" value="option1">25lakhs +
                                
                                </label>
                                      
                                        </div>

                                       
                                    </div>
                                </form>

                                
                            </div>

                            </div>

                        
                        </div>
                    
                    </div>

                </div>

                                <div class="col-md-10" id="searched-data">

<?php 

include('list-pagination.php');
while($row1=mysql_fetch_array($results))


{
    
 ?>
    
 <div class="row">

                <form class="form-controls" action="seekersavedjobs.php" method="post" >
                    <div class="col-md-12">
                        
                        <input type="hidden" value="<?php echo $row1['jobid'];?>" name="jobid" id="jobid">
                        <input type="hidden" value="<?php echo $seekerid;?>" name="seekerid" id="seekerid">
                        <div class="row-fluid"><span id="designation"><?php echo $row1['designation'];?></span>

                            <div id="details"> <span class="text-danger"> <?php echo $row1['organisationname'];?></span>
                                <span id="grey">| <?php echo $row1['city'];?></span>
                                <div class="button-group">
                                
                                <span id="dark">Salary: <img src="img/6.png" alt="banner" height="13.5px" width="13.5px"> <?php echo $row1['salary'];?></span> 
                                     <br>
                                    <span id="dark">Experience:<?php echo $row1['experience'];?></span>
                                <div class="pull-right">                         
                                   <a href="preview-job.php?seekerid=<?php echo $seekerid ?>"><button class="btn btn-danger">Apply</button></a>
                                <button class="btn btn-success" type="submit" >Save</button>
                                    <div id="m"></div>
                               </div>
                                </div>
                                 <span id="grey">Posted on: <?php echo $row1['createdon'];?></span>
                                 <input type="hidden" value="<?php echo $rec['name'];?>" name="name" id="name">
                                 <input type="hidden" value="<?php echo $rec['emailid'];?>" name="emailid" id="emailid">
                                 <input type="hidden" value="<?php echo $rec['mobilenumber'];?>" name="mobilenumber" id="mobilenumber">
                                 <input type="hidden" value="<?php echo $rec['expectedsalary'];?>" name="expectedsalary" id="expectedsalary">
                                 <input type="hidden" value="<?php echo $rec['experience'];?>" name="experience" id="experience">
                                 <input type="hidden" value="<?php echo $rec['education'];?>" name="education" id="education">
                                 <input type="hidden" value="<?php echo $rec['gender'];?>" name="gender" id="gender">
                                 <input type="hidden" value="<?php echo $rec['candidatetype'];?>" name="candidatetype" id="candidatetype">
                                 <input type="hidden" value="<?php echo $rec['designation'];?>" name="designation" id="designation">
                                
                        </div>

                        </div>
                        <div class="new-btn">
                                   <div class="col-md-10 col-md-offset-1 text-center">
                                    
                                        
                                    
                                        <button type="button" class="btn btn-success btn-sm" type="submit">Save</button>
                                        <a href="preview-job.php?seekerid=<?php echo $seekerid ?>"><button class="btn btn-danger">Apply</button></a>     
                                   </div>
                            </div>
                      </div>
               </form>
     </div>


    

<?php

}

 
?>
                
                </div>

                </div>
                </div>
               
            <div class="row">
                
                     <div class="col-md-12 text-center ">
   
                          <?php echo $paginate;?>

            </div>

               </div>

    </div>
            </div>
        

<?php include('footer.php');?>