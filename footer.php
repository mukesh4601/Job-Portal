</div>
            
        <footer class="footer">
            
                    <h5 class="footer-color text-center pull-left media-right">© 2016 Retalis Limited <a href="#" class="color">Terms</a> & <a href="#" class="color">Privacy</a> </h5>

           </footer>
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/validation.js"></script>
        <script src="search.js"></script>
     




<script>

 $("document").ready(function() {


    $('#dateofbirth').datepicker({

         dateFormat: "dd/mm/yy"
        }).on('change', function (ev) {
                    var selectDate = $('#dateofbirth').val().split("/");

                    var todayDate = new Date();
                    var selectedDate = new Date(selectDate[2], selectDate[1], selectDate[0]);
                    var firstDate = new Date(todayDate.getFullYear(), todayDate.getMonth() + 1, todayDate.getDate());
                    var diff = Math.floor(firstDate.getTime() - selectedDate.getTime());
                    var day = 1000 * 60 * 60 * 24;

                    var days = Math.floor(diff / day);
                    var months = Math.floor(days / 31);
                    var years = Math.floor(months / 12);

                    if (years > 0) {
                        $('#age').val(years);
                    } else {
                        $('#age').val('');
                    }


                    if (days <= -1) {
                        alert("Please select valid date of birth.")
                        $('#dateofbirth').val("");
                    }
                })   
                });

</script>






<script>

    $("document").ready(function() {
    
    $("#resetpassword").on('submit', function (e) {

        e.preventDefault();

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
						  window.location.href='organisation-resetpassword.php?email='+email;
						 
					   }
				   
				  }
           
               });
       
		   }

	    }
	    



    });

       });



</script>






    <script>

    $(function() {
            $('#city').autocomplete({
		      	source: function( request, response ) {
		      		$.ajax({
		      			url : 'city.php',
		      			dataType: "json",
						data: {
						   term : request.term,
						   
						},
						 success: function( data ) {
							 response( $.map( data, function( item ) {
								return {
									label: item,
									value: item
								}
							}));
						}
		      		});
		      	},
		      	
            	autoFocus: true,
		      	minLength: 0      	
		      });

});

$(function() {
            $('#designation').autocomplete({
		      	source: function( request, response ) {
		      		$.ajax({
		      			url : 'designation.php',
		      			dataType: "json",
						data: {
						   term : request.term,
						   
						},
						 success: function( data ) {
							 response( $.map( data, function( item ) {
								return {
									label: item,
									value: item
								}
							}));
						}
		      		});
		      	},
		      	
		
		      	
		      	
		      	autoFocus: true,
		      	minLength: 0      	
		      });

});
</script>
<script>

    $("document").ready(function () {
        
        $('#company-pro-name .btn-group i.btn').click(function () {
           
            $('.btn-group').addClass('open');
           
        });
    });



</script>
<script>

    $("document").ready(function () {
        
        $('#no-more-tables .btn-group i.glyphicon').click(function () {
           
            $('.btn-group').addClass('open');
           
        });
    });



</script>



<script>


    /* Autocomplete for Locality  */

$(function() { 

var cid  =  $("#cityname").val();

$( "#locality" ).autocomplete({

	source: function( request, response ) {
		jQuery.ajax({

		url : 'locality.php',
		dataType: "json",
		data : { term : request.term , cid: cid , },
		success : function(data){
		response(data);

		}

		});
}
});

});
	



</script>



    </body>
</html>