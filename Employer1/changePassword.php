<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');

include('../class/Account.php');


$em_id = $_GET['em_id'];

$cngPass = new Account();
$retunrnedPassword =  $cngPass->passwordCheckForEmployer($em_id);
// echo "<script>alert('$retunrnedPassword');</script>";


if(isset($_POST['changePass'])){
    $oldPassword = $_POST['oldPass'];
    $newPassword = $_POST['newPass'];
    
    if($oldPassword == $retunrnedPassword){
    // echo "<script>alert('password is the same ');</script>";
    $cngPass->changePassworEmployerInsert($newPassword, $em_id);
        
    }else{
    echo "<script>alert('your current password is not right ');</script>";
        
    }
}

?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Password

        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item active">Password</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <!-- Basic Forms -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Change Password</h3>


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
    </section>
    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


<?php

include('includes/scripts.php');




?>


</body>

</html>