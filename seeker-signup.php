<?php include('connection.php'); 
include('header.php'); ?>


               <div class="row">
                    <div class="col-md-10 col-md-offset-1">

                        <div class="col-md-4 col-md-offset-4">

                        <h3 class="text-danger">Signup</h3>
                           <form role="form" action="seeker-signupprocess.php" method="post" onsubmit="return validatesignup();">

                        
                            <div class="form-group">
                            
                               <label for="inputname" class="sr-only" >Name<span class="red"> *</span></label>

                                <input type="text" class="form-control"  placeholder="Name" id="name" name="name" maxlength="30">
                                <div id="error_name" class="black"></div>
                            
                            </div>

                            <div class="form-group">
                            
                               <label for="inputemail"  class="sr-only">Email<span class="red"> *</span></label>

                                <input type="email" class="form-control" placeholder="Emailid" id="emailid" name="emailid">
                            <div id="error_emailid" class="black"></div>
                            </div>
                            <div class="form-group">
                            
                               <label for="password"  class="sr-only">Password<span class="red"> *</span></label>

                                <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                            <div id="error_password" class="black"></div>
                            </div>

                             <div class="form-group">
                            
                               <label for="confirmpassword"  class="sr-only">Confirm Password<span class="red"> *</span></label>

                                <input type="password" class="form-control" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword">
                            <div id="error_confirmpassword" class="black"></div>
                            </div>

                            <div class="form-group">
                            
                               <label for="mobilenumber"  class="sr-only">Mobile Number<span class="red"> *</span></label>

                                <input type="number" class="form-control" placeholder="Mobile Number" id="mobilenumber"  name="mobilenumber" >
                            <div id="error_mobilenumber" class="black"></div>
                            </div>

                            <div class="form-group ">
                            
                               <label for="gender" class="sr-only">Gender<span class="red"> *</span></label>

                                <select class="form-control placeholder"  id="gender" name="gender">
                                
                                    <option selected="selected" disabled="disabled" class="grey" value="0">Gender</option>

                                    <option>Male</option>

                                    <option>Female</option>
                                
                                </select>
                                <div id="error_gender" class="black"></div>
                            
                            </div>

                            
                            

                            <div class="form-group">
                            
                               <label for="location"  class="sr-only">City<span class="red"> *</span></label>

                                <input type="text" class="form-control" placeholder="City" id="city" name="city">
                                 <div id="error_city" class="black"></div>
                            </div>

                            <div class="form-group ">
                            
                               <label for="qualification"  class="sr-only">Qualification<span class="red"> *</span></label>

                                <select class="form-control" id="education" name="education">
                                <option selected="selected" disabled="disabled" class="grey" value="0">Education</option>
                                   
                                     <option>High School or Equilent</option>
                                     <option>Diploma</option>
                                     <option>Graduation</option>
                                     <option>Masters</option>


                                </select>
                                <div id="error_education" class="black"></div>
                            
                            </div>

                            <div class="form-group">
                            
                               <label for="degree"  class="sr-only">degree<span class="red"> *</span></label>

                                <input type="text" class="form-control" placeholder="Any Degree/Certification in Retail" id="degree" name="degree">
                            <div id="error_degree" class="black"></div>
                            </div>

                                <div class="form-group">
                            
                               <label for="designation"  class="sr-only">Designation<span class="red"> *</span></label>

                                <input type="text" class="form-control" placeholder="Designation" id="designation" name="designation">
                            <div id="error_designation" class="black"></div>
                            </div>


                            <div class="form-group form-inline">

                                 <div>

                                 <select class="form-control" id="candidatetype" name="candidatetype">
                                <option selected="selected" disabled="disabled" class="grey" value="0">candidatetype</option>
                                    <option>Experience</option>
                                     <option>Fresher</option>
                                </select>
                                     </div>
                                <div id="error_candidatetype" class="black"></div>
                                 <div>

                                    <label for="experience" class="sr-only">Experience-time<span class="red"> *</span></label>

                                     <select class="form-control " id="experience" name="experience">
                                
                                        <option selected="selected" disabled="disabled" class="grey" value="0">0</option>

                                        <option>1 year</option>

                                        <option>2 Year</option>

                                        <option>3 Year</option>

                                        <option>4 Year</option>

                                        <option>5 Year</option>

                                        <option>6 Year</option>

                                        <option>7 Year</option>

                                         <option>8 year</option>

                                        <option>9 Year</option>

                                        <option>10 Year</option>

                                        <option>11 Year</option>

                                        <option>12 Year</option>

                                        <option>13 Year</option>

                                        <option>14 Year</option>

                                         <option>15 Year</option>

                                         <option>16 year</option>

                                        <option>17 Year</option>

                                        <option>18 Year</option>

                                        <option>19 Year</option>

                                        <option>20 Year</option>

                                        <option>25 Year</option>

                                        <option>30 Year</option>

                                        <option>35 Year</option>

                                        <option>40 Year</option>
                                
                                     </select>
                                     <div id="error_experience" class="black"></div>
                            
                                   </div>
                                     
                                 </div>

                            <div class="input-group">
                            
                                <label>
                                
                                    I agree <a href="#">terms & conditions</a>.
                                
                                </label>
                            
                            </div>

                            <button type="submit" class="btn btn-danger  " name="login_btn">Signup</button><br>

                            <span>Already have an account?<a href="seeker-login.php"> login</a></span>
		           
                      </form>

</div>

</div>

</div>



</div>
</div>
<?php include('footer.php'); ?> 


