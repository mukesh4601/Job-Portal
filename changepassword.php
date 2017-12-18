
         <?php
    include('connection.php');
    include('header.php');
    session_start();
    $seekerid=$_SESSION['seekerid'];


    $query="select * from seekers where seekerid=".$seekerid;
    $records=mysql_query($query,$connection);
    $rec=mysql_fetch_array($records);


    ?>
         <script type="text/javascript">
            function matchpassword() {
                if (document.getElementById('newpassword').value != document.getElementById('confirmpassword').value) {
                    document.getElementById("confirmpassword").innerHTML = "Password Miss-Match";

                }
                else {
                    document.getElementById("confirmpassword").innerHTML = "";
                }

            }
        </script>

        <script type="text/javascript">

            function checkpassword() {
                //alert('test');

                var emailid = document.getElementById("emailid").value;
                var password = document.getElementById("password").value;

                if (password != '' && password != null) {

                    {
                        $.ajax(
                       {
                           type: 'post',
                           url: 'checkpassword.php',
                           data: {
                               seekers_password: password, emailid: emailid
                           },
                           success: function (data) {

                               if (data.trim() == 'no') {
                                   $('#check').html("you have entered an wrong password");

                               }
                               else {
                                   $('#check').html("");

                               }

                           }

                       });

                    }

                }
            }



    </script>


    </head>



               <div class="row">
                
                    <div class="col-md-10 col-md-offset-1">

                        <div class="col-md-4 col-md-offset-4">

                        <h3 class="text-danger">Change Password</h3>
                    
                      <form role="form" action="changepasswordprocess.php" method="post" onsubmit="return changepassword();">
               
                            <div class="form-group">
                            
                               <label for="oldpassword"  class="sr-only">Old Password<span class="red"> *</span></label>

                                <input type="password" class="form-control" placeholder="Old Password" id="password" name="password" onblur="checkpassword();"/>
                                <div id="error_password" class="black"></div>
                                <input type="hidden"   id="emailid" name="emailid" value="<?php echo $rec['emailid'];?>">
                             
                                <div id="check" class="black"></div>
                                </div>
                            <div class="form-group">
                            
                               <label for="newpassword"  class="sr-only">New Password<span class="red"> *</span></label>

                                <input type="password" class="form-control" placeholder="New Password" id="newpassword" name="newpassword">
                             <div id="error_newpassword" class="black"></div>
                            </div>

                             <div class="form-group">
                            
                               <label for="cpassword"  class="sr-only">Confirm New Password<span class="red"> *</span></label>

                                <input type="password" class="form-control" placeholder="Confirm New Password" id="confirmpassword" name="confirmpassword" value="<?php echo $rec['confirmpassword'];?>">
                             <div id="error_confirmpassword" class="black"></div>
                            </div>

                            
                            <button type="submit" class="btn btn-danger  " name="login_btn">Save</button><br>

                            
		           
                        </form>

                            </div>
                    
                    </div>

                </div>

                  
		
	    </div>
     </div>
     
   <?php include('footer.php');?>