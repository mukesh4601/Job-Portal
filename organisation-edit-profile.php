<?php
include('connection.php'); 
include('header.php');
session_start();

$organisationid=$_SESSION['organisationid']; 
 
$query="select * from organisation INNER JOIN organisationtypes on organisation.organisationtype=organisationtypes.organisationtypeid where organisation.organisationid=".$organisationid; 
$records=mysql_query($query);
$row1=mysql_fetch_array($records);


?>



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

<h3 class="text-primary">Edit Profile</h3>
     
    
   
<form role="form" action="organisation-edit-processor.php" onsubmit="return edit();" method="post" enctype="multipart/form-data">

    <input type="file" name="images" id="images">
     <?php if($row2['images'] == ''){ echo '<img src="img/88.png" width="60px" height="60px" class="img-circle" id="images" alt="6">'; } else { ?> <img src="upload/<?php echo $row2 ['images'];?>" width='60px' height='60px' class="img-circle" id="images" alt="6">
                        <?php } ?>
   
                         <div id="error_images" class="black"></div>

    <br>
<div class="form-group">
    <input type="hidden" class="form-control"   id="organisationid"  name="organisationid" class="hidden" value="<?php echo $row1['organisationid'];?>">
	
	<label for="inputname" class="sr-only" >Org-Name<span class="red"> *</span></label>

	<input type="text" class="form-control"  placeholder="Organisation Name" id="organisationname" maxlength="30" name="organisationname" value="<?php echo $row1['organisationname'] ?>">
	<div id="error_organisationname" class="red"></div>
</div>

<div class="form-group ">

	<label for="type"  class="sr-only">Org-type<span class="red"> *</span></label>

	<select class="form-control" id="organisationtype" name="organisationtype" >

	<option value="0"  class="grey"><?php  echo $row1['organisationtype'] ?></option>
    <?php
    
    $result = mysql_query("select * from organisationtypes");
    while($row = mysql_fetch_array($result))
    {
	   echo '<option value='.$row['organisationtypeid'].'>'.$row['organisationtype'].'</option>';
		
	}
    ?>
  
	</select>
<div id="error_organisationtype" class="red"></div>
</div>

<div class="form-group">

	<label for="city" class="sr-only" >City<span class="red"> *</span></label>

	<input type="text" class="form-control"  placeholder="City" id="city" name="cityname" value="<?php echo $row1['cityname'] ?>">
	<div id="error_city" class="red"></div>
</div>


<div class="form-group">

	<label for="contact_person" class="sr-only" >Contact person Name<span class="red"> *</span></label>

	<input type="text" class="form-control"  placeholder="Contact Person Name" id="contactpersonname" maxlength="30" name="contactpersonname" value="<?php echo $row1['contactpersonname'] ?>">
	<div id="error_contactpersonname" class="red"></div>
</div>

<div class="form-group">

	<label for="designation" class="sr-only" >Designation<span class="red"> *</span></label>

	<input type="text" class="form-control"  placeholder="Designation" id="designation" maxlength="40" name="designation1" value="<?php echo $row1['designation1'] ?>">
<div id="error_designation" class="red"></div>
</div>


<div class="form-group">

	<label for="email"  class="sr-only">Email<span class="red"> *</span></label>

	<input type="text" class="form-control" placeholder="Email (This will be username)" id="email" name="email" value="<?php echo $row1['email'] ?>"   onblur="checkemail2();">
	<div id="error_email" class="red"></div>
	
</div>
<div>
		           
		           <input type="hidden" name="check_email" id="check_email" ></input>
		           </div>




<div class="form-group">

	<label for="number"  class="sr-only">Mobile Number<span class="red"> *</span></label>

	<input type="text" class="form-control" placeholder="Mobile Number" id="mobileno" name="mobileno" value="<?php echo $row1['mobileno'] ?>">
<div id="error_mobileno" class="red"></div>
</div>








                  <button type="submit" class="btn btn-primary  " name="login_btn">Done</button><br>


</form>

</div>

</div>

</div>



</div>
</div>
<?php include('footer.php'); ?> 


