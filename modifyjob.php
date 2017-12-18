<?php
include('connection.php');
include('header.php');
$jobid=$_GET['jobid'];
 
 
 
$query="select * from postjob where jobid=".$jobid; 
$records=mysql_query($query, $connection);
$row=mysql_fetch_array($records);
 

?>


                <div class="section" id="post-job">

                 <div class="container-fluid">

               <div class="row">

                   <div class="col-md-8 col-md-offset-2"></div>
                
                    <div class="col-md-4 col-md-offset-4 ">

                        

                        <h3 class="text-danger">Modify Job</h3>
                    
                        <form role="form" action="modifyjob-proccessor.php" method="post" onsubmit="return validatemodifyjob();">

                        
                            <div class="form-group">
                                <input type="hidden" id="jobid" name="jobid" value="<?php echo $row['jobid'];?>">
                            
                               <label for="jobtitle" class="sr-only" >Job designation<span class="red"> *</span></label>

                                <input type="text" class="form-control"  placeholder="Job designation" id="designation"  name="designation" value="<?php echo $row['designation'];?>"></input>
                                <div id="error_designation" class="black"></div>

                            </div>

                            <div class="form-group">
                            
                               <label for="jobdescription" class="sr-only" >Job Description<span class="red"> *</span></label>

                                <textarea class="form-control text-left"   placeholder="Job Description

(Describe the responsibilities of this job, required work experience, skills, or education.)" id="description" name="description">
                                    <?php  echo $row['description'];?>
                                
                                </textarea>
                            <div id="error_description" class="black"></div>
                                
                            </div>

                            <div class="form-group">
                            
                               <label for="location"  class="sr-only">City<span class="red"> *</span></label>

                                <input type="text" class="form-control" placeholder="City" id="city" value="<?php echo $row['city'];?>" name="city">
                                <div id="error_city" class="black"></div>

                            </div>

                            <div class="form-group ">
                            
                               <label for="jobtype"  class="sr-only">Job-type<span class="red"> *</span></label>

                                <select class="form-control " id="jobtype" name="jobtype">
                                
                                    <option  disabled="disabled" class="grey" value="0" >job Type</option>

                                    <option <?php if($row['jobtype'] == 'Full-time') {  echo 'selected'; } else { echo  ''; }  ?>>Full-time</option>

                                    <option <?php if($row['jobtype'] == 'Part-time') {  echo 'selected'; } else { echo  ''; }  ?>>Part-time</option>
                                
                                </select>
                            <div id="error_jobtype" class="black"></div>
                            </div>
                             <div class="form-group form-inline">

                                 <div id="jobsalary">

                                      <label for="Salary" class="sr-only">Salary</label>

                                      <input type="text" id="salary"  name="salary" class="form-control pull-left" placeholder="Salary (Ex: 50000)" value="<?php echo $row['salary'];?>">
                                </div>

                                 <div>
                            
                                    <label for="salarytype"  class="sr-only">Salary Type<span class="red"> *</span></label>

                                     <select class="form-control " id="salarytype" name="salarytype">
                                          <option  disabled="disabled" class="grey" value="0" >salary Type</option>
                                
                                        <option  <?php if($row['salarytype'] == 'Per Month') {  echo 'selected'; } else { echo  ''; }  ?>>Per Month</option>

                                        <option <?php if($row['salarytype'] == 'Per Year') {  echo 'selected'; } else { echo  ''; }  ?>>Per Year</option>

                                        
                                     </select>
                            
                                   </div>
                                 <div><div id="error_salary" class="black"></div></div>
                                 </div>


                            
                            <div class="form-group ">
                            
                               <label for="educationlevel"  class="sr-only">Education Level<span class="red"> *</span></label>

                                <select class="form-control " id="education" name="education">
                                
                                    <option  disabled="disabled" class="grey" value="0">Education Level</option>

                                    <option <?php if($row['education'] == 'High-school or equivalent') {  echo 'selected'; } else { echo  ''; }  ?>>High-school or equivalent</option>

                                    <option <?php if($row['education'] == 'Diploma') {  echo 'selected'; } else { echo  ''; }  ?>>Diploma</option>

                                    <option <?php if($row['education'] == 'Graduate') {  echo 'selected'; } else { echo  ''; }  ?>>Graduate</option>

                                    <option <?php if($row['education'] == 'Masters') {  echo 'selected'; } else { echo  ''; }  ?>>Masters</option>
                                
                                </select>
                            <div id="error_education" class="black"></div>
                            </div>
                             <div class="form-group form-inline">

                                 <div id="experience">

                                      <label for="jobexperience" class="sr-only">Experience</label>

                                      <select class="form-control " id="candidatetype" name="candidatetype" >
                                
                                        <option  class="grey" value="0">Select Candidate Type</option>

                                        <option <?php if($row['candidatetype'] == 'Experienced') {  echo 'selected'; } else { echo  ''; }  ?>>Experienced</option>
                                        <option <?php if($row['candidatetype'] == 'Fresher') {  echo 'selected'; } else { echo  ''; }  ?>>Fresher</option>

                                        
                                     </select>
                                    
                                
                                </div>

                                 <div>
                            
                                    <label for="experiencetime"  class="sr-only">Experience-time<span class="red"> *</span></label>

                                     <select class="form-control " id="experience" name="experience">
                                        
                                         <option  class="grey" value="0">Select Experience-time</option>

                                        <option <?php if($row['experience'] == '0 year') {  echo 'selected'; } else { echo  ''; }  ?>>0 year</option>

                                        <option <?php if($row['experience'] == '1 year') {  echo 'selected'; } else { echo  ''; }  ?>>1 year</option>

                                        <option <?php if($row['experience'] == '2 Year') {  echo 'selected'; } else { echo  ''; }  ?>>2 Year</option>

                                        <option <?php if($row['experience'] == '3 Year') {  echo 'selected'; } else { echo  ''; }  ?>>3 Year</option>

                                        <option <?php if($row['experience'] == '4 Year') {  echo 'selected'; } else { echo  ''; }  ?>>4 Year</option>

                                        <option <?php if($row['experience'] == '5 Year') {  echo 'selected'; } else { echo  ''; }  ?>>5 Year</option>

                                        <option <?php if($row['experience'] == '6 Year') {  echo 'selected'; } else { echo  ''; }  ?>>6 Year</option>

                                        <option <?php if($row['experience'] == '7 Year') {  echo 'selected'; } else { echo  ''; }  ?>>7 Year</option>
                                
                                         <option <?php if($row['experience'] == '8 Years') {  echo 'selected'; } else { echo  ''; }  ?>>8 Years</option>

                                        <option <?php if($row['experience'] == '9 Years') {  echo 'selected'; } else { echo  ''; }  ?>>9 Years</option>

                                         <option <?php if($row['experience'] == '10 Years') {  echo 'selected'; } else { echo  ''; }  ?>>10 Years</option>

                                         <option <?php if($row['experience'] == '11 Years') {  echo 'selected'; } else { echo  ''; }  ?>>11 Years</option>

                                         <option <?php if($row['experience'] == '12 Years') {  echo 'selected'; } else { echo  ''; }  ?>>12 Years</option>

                                         <option <?php if($row['experience'] == '13 Years') {  echo 'selected'; } else { echo  ''; }  ?>>13 Years</option>

                                         <option <?php if($row['experience'] == '14 Years') {  echo 'selected'; } else { echo  ''; }  ?>>14 Years</option>

                                         <option <?php if($row['experience'] == '15 Years') {  echo 'selected'; } else { echo  ''; }  ?>>15 Years</option>

                                         <option <?php if($row['experience'] == '16 Years') {  echo 'selected'; } else { echo  ''; }  ?>>16 Years</option>

                                         <option <?php if($row['experience'] == '17 Years') {  echo 'selected'; } else { echo  ''; }  ?>>17 Years</option>

                                         <option <?php if($row['experience'] == '18 Years') {  echo 'selected'; } else { echo  ''; }  ?>>18 Years</option>

                                         <option <?php if($row['experience'] == '19 Years') {  echo 'selected'; } else { echo  ''; }  ?>>19 Years</option>

                                         <option <?php if($row['experience'] == '20 Years') {  echo 'selected'; } else { echo  ''; }  ?>>20 Years</option>

                                         <option <?php if($row['experience'] == '25 Years') {  echo 'selected'; } else { echo  ''; }  ?>>25 Years</option>

                                         <option <?php if($row['experience'] == '30 Years') {  echo 'selected'; } else { echo  ''; }  ?>>30 Years</option>

                                         <option <?php if($row['experience'] == '35 Years') {  echo 'selected'; } else { echo  ''; }  ?>>35 Years</option>

                                     </select>
                            <div id="error_candidatetype" class="black"></div>
                                   </div>

                                 

                                 </div>

                             

                            <div class="form-group">
                            
                               <label for="comm-email"  class="sr-only">Comm-Email<span class="red"> *</span></label>

                                <input type="text" class="form-control" placeholder="Job communication Email ID" id="emailid" name="emailid" value="<?php echo $row['emailid'];?>">
                                <div id="error_emailid" class="black"></div>
                            </div>

                            <div class="form-group">
                            
                               <label for="comm-contact"  class="sr-only">Comm-contact<span class="red"> *</span></label>

                                <input type="text" class="form-control" placeholder="Job communication Contact No." id="mobilenumber" value="<?php echo $row['mobilenumber'];?>" name="mobilenumber">
                                <div id="error_mobilenumber" class="black"></div>
                            </div>

                            

                            <button type="submit" class="btn btn-danger  " name="login_btn">save</button>

                            <a class="link-item pull-right" href="#">  <u>Cancel</u></a>
		           
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