            
<?php 
 
 include ('header.php');
 include('connection.php');
 
 session_start();
$seekerid=$_GET['seekerid'];

$query  = "select * from postjob
inner join organisation on postjob.organisationid = organisation.organisationid";
$result  = mysql_query($query);
$row=mysql_fetch_array($result);

$query2="select * from seekers where seekerid=$seekerid";
$records=mysql_query($query2);
$rec=mysql_fetch_array($records);

  ?>


 <div class="section" id="preview-job">

                 <div class="container-fluid">

               <div class="row">

                   <div class="col-md-8 col-md-offset-2"></div>
                
                    <div class="col-md-4 col-md-offset-4 form-box-lg">

                        

                        <h3 class="text-danger">Preview Job</h3>
                    

                        <div class="row">
                        
                            <div class="col-md-12 text-left" id="preview">
                             <form action="seeker-applyjob.php">
                               
                                <input type="hidden" value="<?php echo $row['jobid'];?>" name="jobid" id="jobid">
                                <input type="hidden" value="<?php echo $seekerid;?>" name="seekerid" id="seekerid">
                        
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
                                    
                                        <button type="submit" class="btn btn-danger">Confirm</button>
                                        <a href="list.php?seekerid=<?php $seekerid?>" class="text-capitalize pull-right" id="cancel">cancel</a>
                                    
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