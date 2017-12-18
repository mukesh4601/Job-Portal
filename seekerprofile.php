<?php include('connection.php'); 
include('header.php'); ?>
        
         <?php
             session_start();


    include('connection.php');

    $query="select * from seekers WHERE seekerid=".$_SESSION[seekerid];
    $records=mysql_query($query,$connection);
    $rec=mysql_fetch_array($records);

        
    ?>






          <div class="row" id="header">

               <div class="container">
               
                 <div class="row">
                   
             <div class="col-md-4">

                 <div class="row">
                 
                     <div class="col-md-4">
                        
      <?php if($rec['images'] == ''){ echo '<img src="img/88.png" width="90px" height="100px" class="img-circle" id="images" alt="6">'; } else { ?> <img src="upload/<?php echo $rec ['images'];?>" width='90px' height='100px' class="img-circle" id="images" alt="6">
                        <?php } ?>
     
                         <div class="media-btn pull-right">
                         
                             <a href="editprofile.php" class="red">Edit Profile</a><br>
                             <a href="changepassword.php" class="red"> Change Password</a><br>
                             <a href="seeker-logout.php" class="red"> logout</a>
                         
                         </div>
                         
                     
                     </div>

                     <div class="col-md-8"><h3><?php echo $rec['name'];?></h3>
                         
                         <h6><?php echo $rec['emailid'];?></h6>
                         <h6><?php echo $rec['mobilenumber'];?></h6>
                     

                         <h6><img src="img/21.png" alt="banner"></h6>

                     </div>
                 
                 </div>
             
             </div>

                     <div class="col-md-2 col-md-offset-6 text-right ">
                         <a href="editprofile.php" class="red">Edit Profile</a><br>
                         <a href="changepassword.php" class="red"> Change Password</a><br>
                         <a href="seeker-logout.php" class="red"> logout</a>
                     
                     </div>
                   
                   </div>
               
               </div>
           

           </div>

            <div class="container" id="seeker">
            <div class="row " >

                <div class="col-md-6">
                    <div class="row " >
                        
                        <div class="container-fluid">
                        
                        <div class="row">
                             <a type="button" class="btn btn-danger pull-right" href="editprofile.php">Edit</a>

                            <h2 class="page-header "><small>Personal Information</small></h2>

                           

                    <div class="row-fluid">

                        <div class="col-md-12">

                            <table class="table">

                                <tbody>
                            
                                <tr id="first-row">
                                
                                    <td class="text-capitalize col-md-4"><span>name :</span></td>
                                    <td class="text-capitalize col-md-7 col-md-offset-1"><span><?php echo $rec['name'];?></span></td>
                                
                                </tr>

                                <tr>
                                
                                    <td class="text-capitalize"><span>email :</span></td>
                                    <td class="text-lowercase"><span><?php echo $rec['emailid'];?></span></td>
                                
                                </tr>

                                <tr>
                                
                                    <td class="text-capitalize"><span>mobile no. :</span></td>
                                    <td class="text-capitalize"><span><?php echo $rec['mobilenumber'];?></span></td>
                                
                                </tr>

                                <tr>
                                
                                    <td class="text-capitalize"><span>gender :</span></td>
                                    <td class="text-capitalize"><span><?php echo $rec['gender'];?></span></td>
                                
                                </tr>
                            
                          
                            
                                <tr>
                                
                                    <td class="text-capitalize"><span>Date Of Birth :</span></td>
                                    <td class="text-capitalize"><span><?php echo $rec['dateofbirth'];?></span></td>
                                
                                </tr>

                                <tr>
                                
                                    <td class="text-capitalize"><span>age :</span></td>
                                    <td class="text-lowercase"><span><?php echo $rec['age'];?></span></td>
                                
                                </tr>

                                <tr>
                                
                                    <td class="text-capitalize"><span>address :</span></td>
                                    <td class="text-capitalize"><span><?php echo $rec['address'];?></span></td>
                                
                                </tr>

                                <tr>
                                
                                    <td class="text-capitalize"><span>city :</span></td>
                                    <td class="text-capitalize"><span><?php echo $rec['city'];?></span></td>
                                
                                </tr>
                            </tbody>
                            </table>
                        </div>

                    </div>
                         </div>
                            </div>
                        </div>
                
                
                    
                </div>
            
            </div>

            <div class="row " id="seeker-details">

                <div class="col-md-6" id="second">
                    <div class="row " >
                        
                        <div class="container-fluid">
                        
                        <div class="row">
                             <a type="button" class="btn btn-danger pull-right" href="editprofile.php">Edit</a>

                            <h2 class="page-header" id="professionalinformation"><small>Professional Information</small></h2>

                           

                    <div class="row-fluid">

                        <div class="col-md-12">

                            <table class="table">

                                <tbody>
                            
                                <tr id="first-row">
                                
                                    <td class="text-capitalize col-md-4" id="education"><span>educational qualification :</span></td>
                                    <td class="text-capitalize col-md-7 col-md-offset-1"><span><?php echo $rec['education'];?></span></td>
                                                                                            
                                
                                </tr>

                                <tr>
                                
                                    <td class="text-capitalize" id="degree"><span>any degree/certification in retail :</span></td>
                                    <td class="text-lowercase"><span><?php echo $rec['degree'];?></span></td>
                                
                                </tr>
                        
                                <tr>
                                
                                    <td class="text-capitalize" id="skills"><span>skills :</span></td>
                                    <td class="text-capitalize"><span><?php echo $rec['skills'];?></span></td>
                                
                                </tr>

                                <tr>
                                
                                    <td class="text-capitalize" id="expectedsalary"><span>expected-salary :</span></td>
                                    <td class="text-capitalize"><span><?php echo $rec['expectedsalary'];?></span></td>
                                
                                </tr>
                            
                          
                            
                                <tr>
                                
                                    <td class="text-capitalize" id="experience"><span>experience :</span></td>
                                    <td class="text-capitalize"><span><?php echo $rec['experience'];?></span></td>
                                
                                </tr>

                                <tr>
                                
                                    <td class="text-capitalize" id="age"><span>age :</span></td>
                                    <td class="text-lowercase"><span><?php echo $rec['age'];?></span></td>
                                
                                </tr>

                                <tr>
                                
                                    <td class="text-capitalize" id="designation"><span>designation :</span></td>
                                    <td class="text-capitalize"><span><?php echo $rec['designation'];?></span></td>
                                
                                </tr>

                                
                            </tbody>
                            </table>
                        </div>

                    </div>
                         </div>
                            </div>
                        </div>
                
                
                    
                </div>
            
            </div>

                </div>

            </div>

          <?php include('footer.php');?>