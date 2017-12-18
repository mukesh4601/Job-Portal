 <?php
   
    include('connection.php');
    include('header.php');
    session_start();
    $seekerid=$_SESSION['seekerid'];

    $query="select * from seekers WHERE seekerid=".$seekerid;
     $records=mysql_query($query,$connection);
    $rec=mysql_fetch_array($records);
    
 
    ?>
        <script>
             
  $( function() {
    $( "#dateofbirth" ).datepicker();
  } );
  </script>

        


    </head>

  
                    <div class="row">
                    <div class="col-md-10 col-md-offset-1">

                        <div class="col-md-4 col-md-offset-4 form-box">

                             

                        <h3 class="text-danger">Edit Profile</h3>
                           
                             

                                <form role="form" action="editprofileprocess.php"  onsubmit="return editprofile();" method="post" enctype="multipart/form-data">

                         
                            <br>
                             
                            <div class="row">
                            
                            <div class="col-md-5">

                            <div class="form-group">

                          <?php if($rec['images'] == ''){ echo '<img src="img/88.png" width="90px" height="90px" class="img-circle" id="images" alt="6">'; } else { ?> <img src="upload/<?php echo $rec ['images'];?>" width='90px' height='90px' class="img-circle" id="images" alt="6">
                        <?php } ?>
                            
                            </div>

                                </div>

                            <div class="col-md-7">

                            <div class="form-group">
                                 
                                <label for="co-name"  id="co-name"><?php echo $rec['name'];?></label>
                                  <input type="file" name="images" id="images"/>
                       <div id="error_images" class="black"></div>
                                   

                            </div>

                                </div>

                           </div>

                           

                            <div class="form-group">
                           
                               <label for="inputname"  class="sr-only">Name<span class="red"> *</span></label>

                                <input type="text" class="form-control" id="name" name="name" maxlength="30" placeholder="Name" value="<?php echo $rec['name'];?>">
                            <div id="error_name" class="black"></div>
                            </div>

                            <div class="form-group">
                            
                               <label for="email"  class="sr-only">Email<span class="red"> *</span></label>

                                <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email" value="<?php echo $rec['emailid'];?>">
                            <div id="error_emailid" class="black"></div>
                            </div>

                            <div class="form-group">
                            
                               <label for="Mobilenumber"  class="sr-only">Mobile Number<span class="red"> *</span></label>

                                <input type="number" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number" value="<?php echo $rec['mobilenumber'];?>">
                            <div id="error_mobilenumber" class="black"></div>
                            </div>
                            <div class="form-group ">
                            
                               <label for="gender"  class="sr-only">Gender<span class="red"></span></label>
                             <select class="form-control placeholder"  id="gender" name="gender">
                                
                                    <option disabled="disabled" class="grey" value="0">Gender</option>

                                    
                                    <option <?php if($rec['gender'] == 'Male') {  echo 'selected'; } else { echo  ''; }  ?>>Male</option>
                                    <option <?php if($rec['gender'] == 'Female') {  echo 'selected'; } else { echo  ''; }   ?>>Female</option>
                                
                                </select>
                               <div id="error_gender" class="black"></div>

                            </div>
                                
                            
                        <div class="form-group">
                            
                               <label for="DOB" class="sr-only" >Date Of Birth<span class="red"> *</span></label>

                                <input type="date" class="form-control"  id="dateofbirth" name="dateofbirth" placeholder="Date Of Birth" value="<?php echo $rec['dateofbirth'];?>">
                            <div id="error_dateofbirth" class="black"></div>
                            </div>

                            <div class="form-group">
                            
                               <label for="age"  class="sr-only">Age<span class="red"> *</span></label>

                                <input type="text" class="form-control" id="age" name="age"  placeholder="Age" value="<?php echo $rec['age'];?>">
                            <div id="error_age" class="black"></div>
                            </div>

                           <div class="form-group">
                            
                               <label for="address"  class="sr-only">Address<span class="red"> *</span></label>

                                
                                    <textarea class="form-control" id="address" name="address" placeholder="Address"><?php echo $rec['address'];?></textarea>
                            <div id="error_address" class="black"></div>
                            </div>

                           <div class="form-group">
                            
                               <label for="location"  class="sr-only">City<span class="red"> *</span></label>

                                <input type="text" class="form-control" placeholder="City" id="city" name="city" value="<?php echo $rec['city'];?>">
                               <div id="error_city" class="black"></div>
                            </div>

                            
                            <div class="header"><h4>Professional Information</h4></div>


                            

                            <div class="form-group ">
                            
                               <label for="qualification"  class="sr-only">Qualificaton<span class="red"> *</span></label>

                               <select class="form-control" id="education" name="education">
                                <option disabled="disabled" class="grey" value="0">Education</option>

                                   <option <?php if($rec['education'] == 'High School or Equilent') {  echo 'selected'; } else { echo  ''; }  ?>>High School or Equilent</option>
                                    <option <?php if($rec['education'] == 'Diploma') {  echo 'selected'; } else { echo  ''; }   ?>>Diploma</option>
                                   <option <?php if($rec['education'] == 'Graduation') {  echo 'selected'; } else { echo  ''; }  ?>>Graduation</option>
                                    <option <?php if($rec['education'] == 'Masters') {  echo 'selected'; } else { echo  ''; }   ?>>Masters</option>
                                </select>
                                
                                <div id="error_education" class="black"></div>
                            </div>


                            <div class="form-group">
                            
                               <label for="degree"  class="sr-only">Any degree/certificate in Retails<span class="red"> *</span></label>

                                <input type="text" class="form-control" id="degree" name="degree" placeholder="Any Degree/Certification in Retail" value="<?php echo $rec['degree'];?>">
                                <div id="error_degree" class="black"></div>
                            </div>

                            <div class="form-group">
                            
                               <label for="skills"  class="sr-only">Skills<span class="red"> *</span></label>

                                <input type="text" class="form-control" id="skills" name="skills" placeholder="Skills" value="<?php echo $rec['skills'];?>">
                            <div id="error_skills" class="black"></div>
                            </div>

                            <div class="form-group ">
                            
                               <label for="exp-salary"  class="sr-only">Exp-salary<span class="red"> *</span></label>
                                <select class="form-control" id="expectedsalary" name="expectedsalary">
                          
                               <option selected="selected" disabled="disabled" class="grey" value="0">Expected Salary</option>

                                    <option <?php if($rec['expectedsalary'] == '1,00,000-2,00,000 Lac') {  echo 'selected'; } else { echo  ''; }  ?>>1,00,000-2,00,000 Lac</option>
                                    <option <?php if($rec['expectedsalary'] == '2,00,000-3,00,000 Lac') {  echo 'selected'; } else { echo  ''; }   ?>>2,00,000-3,00,000 Lac</option>
                                    <option <?php if($rec['expectedsalary'] == '3,00,000-4,00,000 Lac') {  echo 'selected'; } else { echo  ''; }  ?>>3,00,000-4,00,000 Lac</option>
                                    <option <?php if($rec['expectedsalary'] == '4,00,000-5,00,000 Lac') {  echo 'selected'; } else { echo  ''; }   ?>>4,00,000-5,00,000 Lac</option>
                                    <option <?php if($rec['expectedsalary'] == '5,00,000-6,00,000 Lac') {  echo 'selected'; } else { echo  ''; }   ?>>5,00,000-6,00,000 Lac</option>
                                    <option <?php if($rec['expectedsalary'] == '6,00,000-7,00,000 Lac') {  echo 'selected'; } else { echo  ''; }  ?>>6,00,000-7,00,000 Lac</option>
                                    <option <?php if($rec['expectedsalary'] == '7,00,000-8,00,000 Lac') {  echo 'selected'; } else { echo  ''; }   ?>>7,00,000-8,00,000 Lac</option>
                                
                                
                                </select>
                                <div id="error_expectedsalary" class="black"></div>
                            </div>
                            

                            <div class="form-group ">
                            
                               <label for="experience"  class="sr-only">Candidatetype<span class="red"> *</span></label>
                                <select class="form-control" id="candidatetype" name="candidatetype">
                          
                               <option disabled="disabled" class="grey" value="0">Candidatetype</option>
                           
                       <option <?php if($rec['candidatetype'] == 'Experience') {  echo 'selected'; } else { echo  ''; }  ?>>Experience</option>
                       <option <?php if($rec['candidatetype'] == 'Fresher') {  echo 'selected'; } else { echo  ''; }   ?>>Fresher</option>
                                </select>
                                

                                 <div id="error_candidatetype" class="black"></div>
                            </div>

                            <button type="submit" class="btn btn-danger btn-margin-bottom " name="login_btn">Done</button>
		           
                        </form>

                            </div>
                    
                    </div>

                </div>

                  
		
	    </div>
     </div>
            </div>

         <?php include('footer.php');?>