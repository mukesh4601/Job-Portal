            
<?php 
 
 include ('header.php');
 include('connection.php');
 
session_start();
$jobid=$_GET['jobid'];
$organisationid=$_GET['organisationid'];

$query  = "select * from postjob
inner join organisation on postjob.organisationid = organisation.organisationid where jobid=$jobid";

$result  = mysql_query($query);
$row=mysql_fetch_array($result);


  ?>


 <div class="section" id="preview-job">

                 <div class="container-fluid">

               <div class="row">

                   <div class="col-md-8 col-md-offset-2"></div>
                
                    <div class="col-md-4 col-md-offset-4 form-box-lg">

                        

                        <h3 class="text-danger">Preview Job</h3>
                    

                        <div class="row">
                        
                            <div class="col-md-12 text-left" id="preview">
                             <form action="">
                               
                                <input type="hidden" value="<?php echo $row['jobid'];?>" name="jobid" id="jobid">
                                <input type="hidden" value="<?php echo $organisationid;?>" name="seekerid" id="seekerid">
                        
                                <h3 id="job-title"><?php echo $row('designation');?></h3>

                                    <div class="form-group">
                                <span class="text-uppercase text-danger"><?php echo $row('organisationname');?></span>
                                <span class="text-capitalize" id="grey">| <?php echo $row('city');?></span><br>

                                <div id="description">
                                    <span class="text-caplitalize" id="dark"><?php echo $row('description');?></span>
                                </div>
                            
                                <div class="text-capitalize" id="dark"><b>Job Type : </b><span class="text-capitalize"> <?php echo $row('jobtype');?></span></div>

                                <div class="text-capitalize" id="dark"><b>salary : </b><span class="text-capitalize"> <?php echo $row('salary')('salarytype');?></span></div>


                                <div class="text-capitalize" id="dark"><b>education : </b><span class="text-capitalize"> <?php echo $row('education');?></span></div>

                                <div class="text-capitalize" id="dark"><b>candidate type : </b><span class="text-capitalize"> <?php echo $row('candidatetype');?></span></div>

                                <div class="text-capitalize" id="dark"><b>experience : </b><span class="text-capitalize"> <?php echo $row('experience');?></span></div>

                                


                                        </div>

                                    <div class="text-capitalize" id="dark"><b>communiction email id : </b><span class="text-capitalize"> <?php echo $row('emailid');?></span></div>
                                
                                <div class="text-capitalize" id="dark"><b>communiction contact no. : </b><span class="text-capitalize"> <?php echo $row('mobilenumber');?></span></div>

                                    <div class="form-group">
                                    
                                        <a href="employer-profile.php?organisationid=<?php echo $organisationid; ?>"><button class="btn btn-danger">Continue</button></a>
                                        <button class="btn btn-danger" type="submit">Cancel</button>
                                    
                                    </div>
                                    </form>
                            </div>
                        
                        </div>
                        

                            </div>
                    
                    </div>

                </div>
                </div>
               </div>   
		
	    </div>
<?php include('footer.php');?>