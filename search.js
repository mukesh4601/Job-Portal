$("document").ready(function () {
    //jQuery("form#search").on('submit',function() {
   
    
    $("#searchbtn").click(function(e) {
    e.preventDefault();
  
   
    var designation = $("#designation").val();
    var city  = $("#city").val();
    var experience = $("#experience").val();
    var jobid = $("#jobid").val();
    var seekerid = $("#seekerid").val();

    $.ajax(
    {
    type: 'POST',
    url: 'searchdata.php',
    data: {
    designation:designation,city : city,experience: experience,jobid:jobid,seekerid:seekerid
    },

    beforeSend  :  function () {
    $("#searched-data").show("<img src=img/loading.gif>");  
			   
    },
    success: function (data) 
    {
			   
    $("#searched-data").html(data);
    if(data.trim() == '')
    {
    //alert('No Record Found');
    $("#searched-data").html('No Record Found');
    }

    }
    
    }); 
  
    e.preventDefault();
    });
    
    
}); 
 
