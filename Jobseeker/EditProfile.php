<?php
session_start();

include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('../class/view.php');

$profilePicture = $_SESSION['JS']['profilePicture'];
$js_id = $_SESSION['JS']['js_id'];
// echo "<script>alert('$profilePicture');</script>";

$viewProfile = new view();
$returnedProfileName = $viewProfile->viewProfilePicture($profilePicture);
?>

           <link rel="stylesheet" href="kotetDash/css/style.css">  <!-- Dashboard CSS --> 
           <!-- <link rel="stylesheet" href="CSSJSFONT/Job applied/plugins/css/plugins.css"> -->
            <link href="CSSJSFONT/Job applied/css/style.css" rel="stylesheet">
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <div>
            <div >
                <div class="row">
                    <div class="col-md-3"><img class="img-fluid" src="../resource/jobseekerPicture/<?php echo $returnedProfileName?>"><h1><?php echo  $_SESSION['JS']['firstName'] ,'   ',$_SESSION['JS']['lastName'] ?></h1></div>
                    <div class="col">
                        <ul class="nav nav-tabs align-items-end">
                            <h3><li class="nav-item"><a class="nav-link active" href="#"><i class="fa fa-star"></i>About</a></li> </h3>
                            <li class="nav-item ml-auto"><a class="nav-link" href="editProfileBasic.php?js_id=<?php echo $js_id; ?>"><button class="btn btn-primary" type="button">Edit</button></a></li>
                        </ul> 
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                    <tr></tr>
                                    <tr></tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                               
                                <tbody>
                                    <tr>
                                        <td>First Name</td>
                                        <td><?php echo  $_SESSION['JS']['firstName'] ?></td>
                                        <td>Last Name</td>
                                        <td><?php echo  $_SESSION['JS']['lastName'] ?></td>
                                      
                                       
                                    </tr>
                                    <tr>
                                        
                                        <td>User Name</td>
                                        <td><?php echo  $_SESSION['JS']['username'] ?></td>
                                        <td>Email</td>
                                        <td><?php echo  $_SESSION['email'] ?></td>
                                        
                                        
                                      
                                    </tr>
                                    <tr>
                                        <td>City</td>
                                        <td><?php echo  $_SESSION['JS']['City'] ?></td>
                                        <td>Country</td>
                                        <td><?php echo  $_SESSION['JS']['Country'] ?></td>
                                  
                                    </tr>
                                    <tr>
                                        <td>Birthday</td>
                                        <td><?php echo  $_SESSION['JS']['DOB'] ?></td>
                                        <td>Phone</td>
                                        <td><?php echo  $_SESSION['JS']['Phone'] ?></td>
                                  
                                    </tr>
                                </tbody>
                            </table>

                            <a class="nav-link" href="changePassword.php?js_id=<?php echo $js_id; ?>"><button class="btn btn-primary" type="button">
                                Change Password 
                            </button>
                            </a>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
		</div>

 
        <!-- slider Area Start-->
        
</main><?php

include('includes/footer.php');

?>

  
        
    </body>
</html>