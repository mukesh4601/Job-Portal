<?php
include('connection.php');
//include('header.php');
$designation  = $_POST['designation'];
$city  = $_POST['city'];
$experience = $_POST['experience'];
$jobid = $_POST['jobid'];
$seekerid = $_POST['seekerid'];
//$query  = "select * from postjob 
//inner join organisation on postjob.organisationid = organisation.organisationid 
//where postjob.designation = '$designation' and city = '$city' and postjob.experience= '$experience'";
//$result  = mysql_query($query);
include('searchdata-pagination.php');
while( $row=mysql_fetch_array($results))

{
    
 ?>
    
 <div class="row">

                <form class="form-controls" action="seekersavedjobs.php" method="post">
                    <div class="col-md-12">
                    
                          <input type="hidden" value="<?php echo $jobid;?>">
                          <input type="hidden" value="<?php echo $seekerid;?>">
                      
                          <div class="row-fluid"><span id="designation"><?php echo $row['designation'];?></span>

                            <div id="details"> <span class="text-danger"> <?php echo $row['organisationname']; ?></span>
                                <span id="grey">| <?php echo $row['city'];?></span>
                                <div class="button-group">
                                
                                <span id="dark">Salary: <img src="img/6.png" alt="banner" height="13.5px" width="13.5px"> <?php echo $row['salary'];?></span> 
                                     <br>
                                    <span id="dark">Experience:<?php echo $row['experience'];?></span>
                              <div class="pull-right">                         
                                <button class="btn btn-danger">Apply</button>
                                <button class="btn btn-success">Save</button>
                               </div>
                                </div>
                                <span id="grey">Posted on: <?php echo $row['createdon'];?></span>

                                
                        </div>

                        </div>
                        <div class="new-btn">
                                   <div class="col-md-10 col-md-offset-1 text-center">
                                    
                                        
                                    
                                        <button type="button" class="btn btn-success btn-sm ">Save</button>
                                        <button type="button" class="btn btn-danger btn-sm ">apply</button>
                                    </div>
                            </div>
                      </div>
               </form>
     </div>


     <div class="col-md-12 ">
   
                          <?php echo $paginate;?>

            </div>

<?php

}




 
?>
