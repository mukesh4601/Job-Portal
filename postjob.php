<?php 
include('connection.php');
include('header.php');
 

session_start(); 


$organisationid= $_GET['organisationid'];


$query2="select  * from organisation where organisationid=".$_SESSION['organisationid']."";
$records2=mysql_query($query2, $connection);
$row2=mysql_fetch_array($records2);


 
 
 ?>



                <div class="section" id="post-job">

                 <div class="container-fluid">

               <div class="row">

                   <div class="col-md-8 col-md-offset-2"></div>
                
                    <div class="col-md-4 col-md-offset-4 form-box-lg">

                        

                        <h3 class="text-danger">Post a Job</h3>
                    
                        <form role="form" action="postjob-proccessor.php" onsubmit="return validate();" method="post">

                        
                            <div class="form-group">
                            
                               <label for="jobtitle" class="sr-only" >Job designation<span class="red"> *</span></label>

                                <input type="text" class="form-control"  placeholder="Job designation" id="designation" name="designation" maxlength="20">
                                <div id="error_designation" class="black"></div>
                            </div>

                            <div class="form-group">
                            
                               <label for="jobdescription" class="sr-only" >Job Description<span class="red"> *</span></label>

                                <textarea class="form-control"   placeholder="Job Description  (Describe the responsibilities of this job, required work experience, skills, or education.)" id="description" name="description"></textarea>
                            
                                <div id="error_description" class="black"></div>
                            </div>

                            <div class="form-group">
                            
                               <label for="location"  class="sr-only">City<span class="red"> *</span></label>

                                <input type="text" class="form-control" placeholder="City" id="city" name="city">
                                <div id="error_city" class="black"></div>
                            </div>

                            <div class="form-group ">
                            
                               <label for="jobtype"  class="sr-only">Job-type<span class="red"> *</span></label>

                                <select class="form-control" id="jobtype" name="jobtype">
                                
                                    <option disabled="disabled" class="grey" value="0">job Type</option>

                                    <option> Full-time</option>

                                    <option>Part-time</option>
                                
                                </select>
                                <div id="error_jobtype" class="black"></div>
                            </div>
                             <div class="form-group form-inline">

                                 <div id="jobsalary">

                                      <label for="Salary" class="sr-only">Salary</label>

                                      <input type="text" id="salary" class="form-control pull-left" placeholder="Salary (Ex: 50000)" name="salary" maxlength="10">
                                </div>

                                 <div>
                            
                                    <label for="salarytype"  class="sr-only">Salary Type<span class="red"> *</span></label>

                                     <select class="form-control " id="salarytype" name="salarytype">
                                        <option disabled="disabled" class="grey" value="0">Salary Type</option>
                                        <option>Per Month</option>
                                        <option>Per Year</option>

                                        
                                     </select>
                            
                                   </div>
                                 <div><div id="error_salary" class="black"></div></div>
                                 </div>


                            
                            <div class="form-group ">
                            
                               <label for="educationlevel"  class="sr-only">Education Level<span class="red"> *</span></label>

                                <select class="form-control " id="education" name="education">
                                
                                    <option  disabled="disabled" class="grey" value="0">Education Level</option>

                                    <option >High-school or equivalent</option>

                                    <option>Diploma</option>

                                    <option >Graduate</option>

                                    <option >Masters</option>
                                
                                </select>
                               <div id="error_education" class="black"></div>
                            </div>
                             <div class="form-group form-inline">

                                 <div id="experience">

                                      <label for="jobexperience" class="sr-only">Experience</label>

                                      <select class="form-control " id="candidatetype" name="candidatetype" >
                                
                                        <option  class="grey" value="0">Select Candidate Type</option>

                                        <option >Experienced</option>
                                        <option >Fresher</option>

                                        
                                     </select>
                                    
                                
                                </div>

                                 <div>
                            
                                    <label for="experiencetime"  class="sr-only">Experience-time<span class="red"> *</span></label>

                                     <select class="form-control " id="experience" name="experience">
                                
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
                            
                                   </div>

                                 
                                 <div><div id="error_candidatetype" class="black"></div></div>
                                 </div>
                                        
                            <div class="form-group">
                            
                               <label for="comm-email"  class="sr-only">Comm-Email<span class="red"> *</span></label>

                                <input type="email" class="form-control" placeholder="Communication Email ID" id="emailid" name="emailid">
                                <div id="error_emailid" class="black"></div>
                            </div>

                            <div class="form-group">
                            
                               <label for="comm-contact"  class="sr-only">Comm-contact<span class="red"> *</span></label>

                                <input type="number" class="form-control" placeholder="Communication Contact No." id="mobilenumber" name="mobilenumber">
                                <div id="error_mobilenumber" class="black"></div>
                            </div>

                            
                            <input type="text" class="form-control hide"  id="status" name="status" value="New"></input>
                                
                             <input type="text" class="form-control hide"  id="organisationid" name="organisationid" value="<?php echo $row2['organisationid']; ?>"></input>


                            <button type="submit" class="btn btn-danger  " name="login_btn">Subit</button>

                            <a class="link-item pull-right" href="employer-profile.php" id="cancel">  <u>Cancel</u></a>
		           
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