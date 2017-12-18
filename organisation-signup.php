<?php include('connection.php'); 
include('header.php'); ?>

<script>

    function checkemail2()
 {
	// alert('test');
	
	   var pattern =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	   var email=document.getElementById("email").value;
	   
	
	   if(email != '' && email != null)
		{
	
			if(pattern.test(email)) 
			{
	
				$.ajax(
				{
				   type: 'post',
				   url: 'checkemail1.php',
				   data: {
				   organisation_email:email,
				   },
				   success: function (response) 
				   {
					   
					   if(response.trim() == 'no')	
					   {
						  $('#error_email').html("Email Available");
						 
					   }
					   else
					   {
						  $('#error_email').html("Email Already Exists");
						 
					   }
				   
				  }
           
               });
       
		   }

	    }
	    
}



</script>


<div class="row">

<div class="col-md-10 col-md-offset-1">

<div class="col-md-4 col-md-offset-4 form-box">

<h3 class="text-primary">Signup</h3>

<form role="form" action="organisation-signup-processor.php" method="post" onsubmit="return employer_signup_validate();">


<div class="form-group">

	<label for="inputname" class="sr-only" >Org-Name<span class="red"> *</span></label>

	<input type="text" class="form-control"  placeholder="Organisation Name" id="orgname" maxlength="30" name="orgname">
	<div id="error_orgname" class="red"></div>
</div>

<div class="form-group ">

	<label for="type"  class="sr-only">Org-type<span class="red"> *</span></label>

	<select class="form-control" id="orgtype" name="orgtype">

	<option value="0"  class="grey">Organisation Type</option>
    <?php
    
    $result = mysql_query("select * from organisationtypes");
    while($row = mysql_fetch_array($result))
    {
	   echo '<option value='.$row['organisationtypeid'].'>'.$row['organisationtypename'].'</option>';
		
	}
    ?>
  
	</select>
<div id="error_orgtype" class="red"></div>
</div>

<div class="form-group">

	<label for="city" class="sr-only" >City<span class="red"> *</span></label>

	<input type="text" class="form-control"  placeholder="City" id="city" name="city">
	<div id="error_city" class="red"></div>
</div>


<div class="form-group">

	<label for="contact_person" class="sr-only" >Contact person Name<span class="red"> *</span></label>

	<input type="text" class="form-control"  placeholder="Contact Person Name" id="contact_person" maxlength="30" name="contact_person">
	<div id="error_contact_person" class="red"></div>
</div>

<div class="form-group">

	<label for="designation" class="sr-only" >Designation<span class="red"> *</span></label>

	<input type="text" class="form-control"  placeholder="Designation" id="designation" maxlength="40" name="designation">
<div id="error_designation" class="red"></div>
</div>

<div class="form-group">

	<label for="number"  class="sr-only">Mobile Number<span class="red"> *</span></label>

	<input type="number" class="form-control" placeholder="Mobile Number" id="mobileno" name="mobileno">
    <div id="error_mobileno" class="red"></div>
</div>



<div class="form-group">

	<label for="email"  class="sr-only">Email<span class="red"> *</span></label>

	<input type="email" class="form-control" placeholder="Email (This will be username)" id="email" name="email" onblur="checkemail2();">
	<div id="error_email" class="black"></div>
	
</div>


<div class="form-group">

	<label for="password"  class="sr-only">Password<span class="red"> *</span></label>

	<input type="password" class="form-control" placeholder="Password" id="password" name="password">
    <div id="error_password" class="red"></div>
</div>

<div class="form-group">

	<label for="cpassword"  class="sr-only">Confirm Password<span class="red"> *</span></label>

	<input type="password" class="form-control" placeholder="Confirm Password" id="cpassword" name="cpassword">
    <div id="error_cpassword" class="red"></div>
</div>





<div class="input-group">

<label>

I agree <a href="#">terms & conditions</a>.

</label>

</div>

<button type="submit" class="btn btn-primary  " name="login_btn">Signup</button><br>

<span>Already have an account?<a href="organisation-login.php"> login</a></span>

</form>

</div>

</div>

</div>



</div>
</div>
<?php include('footer.php'); ?> 


