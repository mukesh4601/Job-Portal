<?php include('header.php'); ?>
               <div class="row">
                
                    <div class="col-md-10 col-md-offset-1">

                        <div class="col-md-4 col-md-offset-4  form-box">

                        <h3 class="text-primary">Login</h3>
                    
                        <form role="form" method="post" action="organisation-login-processor.php" onsubmit="return employer_login_validate();">

                        
                            <div class="form-group">
                            
                               <label for="email" class="sr-only" >Email<span class="red"> *</span></label>

                                <input type="text" class="form-control"  placeholder="Email" id="email" name="email" value=
"<?php  if (isset($_COOKIE['email'])) {
    $useremail = $_COOKIE['email'];
    echo  $useremail;
  }  ?>">
                            <div id="error_email" class="red"></div>
                            </div>

                            <div class="form-group">
                            
                               <label for="password"  class="sr-only">Password<span class="red"> *</span></label>

                                <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                            <div id="error_password" class="red"></div>
                            </div>

                            <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox"  value="1" name="remember"><span class="remember-me">Remember me</span>
                                
                                </label>
                            
                            </div>

                            

                           <button type="submit" class="btn btn-primary  " name="login_btn">Login</button>
		            <div class="form-group">
		             <span class="mem">Not registered yet?</span>&nbsp;&nbsp;<a href="organisation-signup.php">Create an Account</a><br>
		             <a href="organisation-forgotpassword.php">Forgot Password </a>
		            
		            </div>
		           
                        </form>

                            </div>
                    
                    </div>

                </div>

                  
		
	    </div>
     </div>

        <?php include('footer.php'); ?>
