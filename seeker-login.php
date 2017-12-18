<?php include('header.php'); ?>

               <div class="row">
                
                    <div class="col-md-10 col-md-offset-1">

                        <div class="col-md-4 col-md-offset-4 form-box">

                        <h3 class="text-danger">Login</h3>
                         <form role="form" action="seeker-loginprocess.php"  onsubmit="return validatelogin();" method="post">
                            <div class="form-group">
                            
                               <label for="emailid" class="sr-only" >Email<span class="red"> *</span></label>

                                <input type="text" class="form-control"  placeholder="EmailId" id="emailid" name="emailid" value="<?php if(isset($_COOKIE['emailid'] )) { echo $_COOKIE['emailid'];  } ?>">
                     <div id="error_emailid" class="black"></div>
                            </div>

                            <div class="form-group">
                            
                               <label for="password"  class="sr-only">Password<span class="red"> *</span></label>

                                <input type="password" class="form-control" placeholder="Password" id="password" name="password" value="<?php if(isset($_COOKIE['cookiepassword'] )) { echo $_COOKIE['cookiepassword'];  } ?>">
                            <div id="error_password" class="black"></div>
                            </div>

                            <div class="checkbox">
                            
                                <label>
                                
                                    <input type="checkbox" name="rememberme" value="1" ><span class="remember-me">Remember me</span>
                                
                                </label>
                            
                            </div>

                            

                           <button type="submit" class="btn btn-danger  " name="login_btn">Login</button>
		            <div class="form-group">
		             <span class="mem">Not registered yet?</span>&nbsp;&nbsp;<a href="seeker-signup.php">Create an Account</a><br>
		             <a href="forgotpassword.php">Forgot Password </a>
		            
		            </div>
		           
                        </form>

                            </div>
                    </div>

                </div>
	    </div>
     </div>

      
        <?php include('footer.php'); ?>
