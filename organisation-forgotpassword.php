  <?php
    include('connection.php');
    include('header.php');

    session_start();
    $organisationid=$_SESSION['organisationid'];

    echo $organisationid;
    $query="select  * from organisation where organisationid=".$_SESSION['organisationid']."";
    $records=mysql_query($query, $connection);
    $rec=mysql_fetch_array($records);



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

         function forgotpassword() {


                 var email = document.getElementById('email').value;
                 var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/


                           document.getElementById('error_email').innerHTML = '';
                            

                 var count = 0;


                 if (email == '' || email == null) {
                     document.getElementById('error_email').innerHTML = 'Enter Email address';
                     document.getElementById('email').focus();
                     count++;
                 }
                else if (!regex.test(email)) {
                    document.getElementById('error_email').innerHTML = 'Enter Valid Email Address';
                    document.getElementById('email').focus();
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
           
        function checkemail1()
 {
	 //alert('test');
	
	   var pattern =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	   var email=document.getElementById( "email" ).value;
	   
	
	   if(email != '' && email != null)
		{
	
			if(pattern.test(email)) 
			{
	
				$.ajax(
				{
				   type: 'post',
				   url: 'organisation-checkemail.php',
				   data: {
				   organisation_email:email,
				   },
				   success: function (response) 
				   {
					   
					   if(response.trim() == 'no')	
					   {
						  $('#error_email').html("Email Does Not Exists");
						 
					   }
					   else
					   {
						  $('#error_email').html("");
						 
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
                    
                        <form role="form" action="organisation-forgotpassword-processor.php" method="post" onsubmit="return forgotpassword();" id="resetpassword">

                        
                            <div class="form-group">
                            
                               <label for="inputemail" class="sr-only" >Email<span class="red"> *</span></label>

                                <input type="text" class="form-control"  placeholder="singh******25@gmail.com" id="email" name="email" >
                                <div id="error_email" class="black"></div>

                            </div>

                           
                            

                           <button type="submit" class="btn btn-danger" name="login_btn" >Submit</button>
		           
		           
                        </form>

                            </div>
                    
                    </div>

                </div>

                  
		
	    </div>
     </div>

<?php     include('footer.php');?>