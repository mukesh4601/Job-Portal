
         <?php
             
  include('connection.php');
    include('header.php');

    session_start();
    
    $emailid=$_REQUEST['emailid'];

    $query="select * from seekers where emailid=".$emailid;
    $records=mysql_query($query,$connection);
    $rec=mysql_fetch_array($records);


    ?>
        
<script type="text/javascript">
            function macthpassword() {
                if (document.getElementById('password').value != document.getElementById('confirmnewpassword').value) {
                    document.getElementById("confirmnewpassword").innerHTML = "Password Miss-Match";

                }
                else {
                    document.getElementById("confirmnewpassword").innerHTML = "";
                }

            }
        </script>

                

    </head>


   

               <div class="row">
                
                   <div class="col-md-10 col-md-offset-1">

                        <div class="col-md-4 col-md-offset-4">

                        <h3 class="text-danger">Reset Password</h3>
                    
                        <form role="form" action="resetpasswordprocess.php" method="post" onsubmit="return validateresetpassword();">

                        
                            <div class="form-group">
                            
                               <label for="password" class="sr-only" >New Password<span class="red"> *</span></label>

                                <input type="password" class="form-control"  placeholder="New Password" id="password" name="password" value="<?php echo $rec['password'];?>">
                                <div id="error_password" class="black"></div>
                            
                            </div>


                            <div class="form-group">
                            
                               <label for="confirmnewpassword" class="sr-only" >ConfirmNewpassword<span class="red"> *</span></label>

                               <input type="password" class="form-control"  placeholder=" Confirm New Password" id="confirmnewpassword" name="confirmnewpassword" value="<?php echo $rec['confirmnewpassword'];?>">
                            <div id="error_confirmnewpassword" class="black"></div>
                            </div>

                           <input type="hidden" id="emailid" name="emailid" value="<?php echo $rec['emailid'];?>">
                            

                           <button type="submit" class="btn btn-danger  " name="login_btn">Submit</button>
		           
		           
                        </form>

                            </div>
                    
                    </div>

                </div>

                  
		
	    </div>
     </div>

           <?php include('footer.php');?>