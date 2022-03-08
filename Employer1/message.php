<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');

include('../class/Employer.php');




if(isset($_POST['submit'])){
    $jobseekerID = $_GET['jsid'];
    $employerID =  $_SESSION['emp']['id'];
    // echo "<script>alert('$employerID')</script>";
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $employer = new Employer();
    $employer->sendMsg($subject,$message, $employerID,$jobseekerID);
    
}

?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Message

        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item active">Message</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <!-- Basic Forms -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Message</h3>


            </div>
            <!-- /.box-header -->
            <form action="" onsubmit="return validateform()" method="post">
                <div class="box-body">
                    <div class="row">
                        <div class="col-12">


                            <div class="form-group row">
                                <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="subject" id="subject">
                                </div>
                                <br>
                                <br>
                                <br>


                                <label for="Message" class="col-sm-2 col-form-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="message" id="message" cols="30"
                                        rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group text-center">

                                <input type="submit" class="btn  btn-success" class="btn-savepreview" value="Send"
                                    placeholder="Save" name="submit" id="submit">
                            </div>


                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </form>
            <!-- /.box-body -->
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