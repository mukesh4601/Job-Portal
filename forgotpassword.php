 <?php
    include('connection.php');
    include('header.php');

    session_start();
    $seekerid=$_SESSION['seekerid'];

    echo $seekerid;
    $query="select  * from seekers where seekerid=".$_SESSION['seekerid']."";
    $records=mysql_query($query, $connection);
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

 <script>
     function validateforgotpassword() {

          var emailid = document.getElementById('emailid').value;
                 var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/


                           document.getElementById('error_emailid').innerHTML = '';
                            

                 var count = 0;


                 if (emailid == '' || emailid == null) {
                     document.getElementById('error_emailid').innerHTML = 'Enter Email address';
                     document.getElementById('emailid').focus();
                     count++;
                 }
                else if (!regex.test(emailid)) {
                    document.getElementById('error_emailid').innerHTML = 'Enter Valid Email Address';
                    document.getElementById('emailid').focus();
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
             

<script type="text/javascript">

          function checkemail()
 {
	 //alert('test');
	
	   var pattern =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	   var emailid=document.getElementById( "emailid" ).value;
	   
	
           
	   
	   if(emailid != '' && emailid != null)
		{
	
			if(pattern.test(emailid)) 
			{
	
				$.ajax(
				{
				   type: 'post',
				   url: 'checkemail.php',
				   data: {
				   seekers_emailid:emailid,
				   },
				   success: function (response) 
				   {
					   
					   if(responce.trim() == 'no')	
					   {
						  $('#error_emailid').html("Email Does Not Exist");
						 
					   }
					   else
					   {
						 $('#error_emailid').html("");
						 
					   }
				   
				  }
           
               });
       
		   }
           }
          
}
        </script>

   
   
               <div class="row">
                
                   <div class="col-md-10 col-md-offset-1">

                        <div class="col-md-4 col-md-offset-4">

                        <h3 class="text-danger">Forgot Password</h3>
                    
                        <form role="form" action="forgotpasswordprocess.php" method="post" id="resetpassword" onsubmit="return validateforgotpassword();"id="resetpassword">

                        
                            <div class="form-group">

                            
                               <label for="email" class="sr-only">Email<span class="red"> *</span></label>

                                <input type="text" class="form-control"  placeholder="singh******25@gmail.com" id="emailid" name="emailid" onsubmit="checkemail();"/>
                             <div id="error_emailid" class="black"></div>
                              
                              
                                </div>
                                
                           <button type="submit" class="btn btn-danger  " name="login_btn">Submit</button>
		           
		           
                        </form>

                            </div>
                    
                    </div>

                </div>

                  
		
	    </div>
     </div>

        <?php include('footer.php');?>