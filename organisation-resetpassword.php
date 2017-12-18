<?php
    include('connection.php');
    include('header.php');
    session_start();

    $email=$_REQUEST['email'];

    
    $query= "select * from organisation where email=".$email;
    $records=mysql_query($query, $connection);
    $row=mysql_fetch_array($records);


?>


<script type="text/javascript">
        function matchpassword() {
            if (document.getElementById('newpassword').value != document.getElementById('confirmpassword').value) {
              document.getElementById("confirmpassword").innerHTML = "Password Mis-Match";
               
            }
            else{
                 document.getElementById("confirmpassword").innerHTML = "";
            }
        }

    </script>


<script>

      function changepassword1() {
                 var newpassword = document.getElementById('newpassword').value;
                 var confirmpassword = document.getElementById('confirmpassword').value;
                 var pattern = /^[0-9]+$/;
    

                 var count = 0;
                
                           document.getElementById('error_newpassword').innerHTML = '';
                           document.getElementById('error_confirmpassword').innerHTML = '';
                            

                 

               
                 if (newpassword == '' || newpassword == null) {
                     document.getElementById('error_newpassword').innerHTML = 'Enter New Password';
                     document.getElementById('newpassword').focus();
                     count++;
                 }
                  else if (newpassword.length < 5) {
                    document.getElementById('error_newpassword').innerHTML = 'Enter New Password Should Be 5 Digits';
                    document.getElementById('newpassword').focus();
                    count++;
                }


                 if (confirmpassword == '' || confirmpassword == null) {
                     document.getElementById('error_confirmpassword').innerHTML = 'Enter Confirm Password';
                     document.getElementById('confirmpassword').focus();
                     count++;
                 }

                 else if (newpassword != confirmpassword) {
                     document.getElementById('error_confirmpassword').innerHTML = 'Passwords do not match';
                     document.getElementById('confirmpassword').focus();
                     count++;
                 }
               


                 if (count > 0) {
                     return false;
                 }
                 else {
                     return true;
                 }
             }



</script>

               <div class="row">
                
                    <div class="col-md-10 col-md-offset-1">

                        <div class="col-md-4 col-md-offset-4">

                        <h3 class="text-danger">Change Password</h3>
                    
                      <form role="form" action="reset-passwordprocess.php" method="post" onsubmit="return changepassword1();">
               
                             
                            <div class="form-group">
                            
                               <label for="newpassword"  class="sr-only">New Password<span class="red"> *</span></label>

                                <input type="password" class="form-control" placeholder="New Password" id="newpassword" name="newpassword" value="<?php echo $rec['newpassword'];?>">
                             <div id="error_newpassword" class="black"></div>
                            </div>

                             <div class="form-group">
                            
                               <label for="cpassword"  class="sr-only">Confirm New Password<span class="red"> *</span></label>

                                <input type="password" class="form-control" placeholder="Confirm New Password" id="confirmpassword" name="confirmpassword" value="<?php echo $rec['confirmpassword'];?>">
                             <div id="error_confirmpassword" class="black"></div>
                            </div>
                              <input type="hidden"  id="email" name="email" value="<?php echo $email;?>">
                             
                            
                            <button type="submit" class="btn btn-danger  " name="login_btn">Save</button><br>

                            
		           
                        </form>

                            </div>
                    
                    </div>

                </div>

                  
		
	    </div>
     </div>

        <!-- Trigger the modal with a button -->


        <?php include('footer.php');?>