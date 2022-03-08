<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('../class/account.php');


$jobseekerID = $_GET['js_id'];

$cngPass = new Account();

// echo "<script>alert('$retunrnedPassword');</script>";


if(isset($_POST['changePass'])){
    $oldPassword = password_hash($_POST['oldPass'],PASSWORD_DEFAULT );
    $newPassword = password_hash($_POST['newPass'],PASSWORD_DEFAULT );
    
    $retunrnedPassword =  $cngPass->changePassword($jobseekerID);
    

    echo "<script>alert('$oldPassword     ');</script>";
    echo "<script>alert('$retunrnedPassword     ');</script>";

    
   
    if($oldPassword == $retunrnedPassword){

        $cngPass->changePasswordInsert($newPassword, $jobseekerID);
    }else{
        echo "<script>alert('your current password is not right ');</script>";
    }



}

?>




<link rel="stylesheet" href="kotetDash/css/style.css"> <!-- Dashboard CSS -->
<!-- <link rel="stylesheet" href="CSSJSFONT/Job applied/plugins/css/plugins.css"> -->
<link href="CSSJSFONT/Job applied/css/style.css" rel="stylesheet">

<!-- Content Wrap -->
<div class="container-fluid">
    <div class="dashboard-body">
        <div class="dashboard-caption">

            <div class="dashboard-caption-header">
                <h4><i class="ti-briefcase"></i>Change Your password</h4>
            </div>
        </div>

    </div>
    <div class="row-fluid">
        <div class="container">


                <form role="form" action="" name="form" method="post">
        <div class="form-group">
            <label for="passwordOLD">current password:</label>
            <input type="passwordOLD" name="oldPass" class="form-control" >
        </div>
        <div class="form-group">
            <label for="passwordNew">New password:</label>
            <input type="passwordNew" name="newPass" class="form-control" >
        </div>
       
        <button type="submit" name="changePass" class="btn btn-default">Change password</button>
        </form>

        </div>
    </div>
</div>
</div>

</div>
</div>
</section>

<!-- Page Content  -->


<script src="kotetDash/js/jquery.min.js"></script>
<script src="kotetDash/js/popper.js"></script>
<script src="kotetDash/js/bootstrap.min.js"></script>
<script src="kotetDash/js/main.js"></script>
<!-- slider Area Start-->

</main><?php

include('includes/footer.php');

?>



</body>

</html>