<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');

include('../class/Account.php');
include('../class/job.php');



$job_id = $_GET['job_id'];

$vJob = new Job();
$query = $vJob->viewJob($job_id);
// echo "<script>alert('$retunrnedPassword');</script>";
while ($row=mysqli_fetch_array($query)) {

    $profilePicture = $row['company_image'];
     $job_name=$row['job_name'];
     $address=$row['address'];
     $city=$row['city'];
     $region=$row['region'];
     $cm_name=$row['company_name'];
     $salary=$row['salary'];
     $role_catagory = $row['role_catagory'];
     // $job_type=$row['jobtype_id']; jobtype_id a Fk on a job and i dont know how to call the value
     $address=$row['address'];
     $city=$row['city']; 
     $gender=$row['gender']; 
     
     $region=$row['region'];
     $phone=$row['phone']; 
     $degreelvl=$row['degreelvl']; 
    

     
     $experiance=$row['experiance'];
     $job_description=$row['job_description']; 


     $wrappedJobDescription = wordwrap($job_description, 8, "\n", true);

   //employer job post meserat alebet miknyatum hule admin post silemiyareg eyetegachew nw

     }

     if(isset($_POST['deleteJob'])){
        //  echo "<script>alert('$job_id')</script>";
        $job =new Job();
        $job->deleteManageJob($job_id);
     }

?>

    
    <!-- Custom style -->
<link href="CSSJSFONT/Apply job/css/style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" id="jssDefault" href="CSSJSFONT/Apply job/css/colors/green-style.css">


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Password

        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="breadcrumb-item active">Detail</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <!-- Basic Forms -->
        <div class="box box-default">
            <div class="box-header with-border">
               


            </div>
            <div class="row-fluid">
        <div class="container">


        <div class="Loader"></div>
<div class="wrapper">

    <!-- Start Navigation -->

    <!-- End Navigation -->
    <div class="clearfix"></div>
<br>


    <div class="clearfix"></div>

   
<form method="post" >
    <section class="detail-desc">
        <div class="container">

            <div class="ur-detail-wrap top-lay">

                <div class="ur-detail-box">

                    <div class="ur-thumb">
                        <img src="../resource/employerPicture/<?php echo $profilePicture;?>" class="img-responsive" alt="" />
                    </div>
                    <div class="ur-caption">
                        <h4 class="ur-title"><?php echo $job_name; ?></h4>
                        <p class="ur-location"><i
                                class="ti-location-pin mrg-r-5"></i><?php echo "$city; &nbsp  $address; &nbsp   $region;"  ?>
                        </p>
                        <span class="ur-designation"><i class="ti-home mrg-r-5"></i><?php echo $cm_name; ?></span>
                    </div>

                </div>

                

                <div class="ur-detail-btn">
                    <button type="submit" class="btn btn-block btn-primary  ><i class="ti-plus mrg-r-5"></i>
                        <a href="managejobEdit.php?job_id=<?php echo $job_id; ?>">Update</a>
                    </button>

                    <form action="" method="POST">
                    <button type="submit" name="deleteJob" class="btn btn-block btn-warning  ><i class="ti-plus mrg-r-5"></i>
                       Delete
                    </button>

                    </form>
                    
                       

                        
                </div>
                

            </div>

        </div>
    </section>

    <!-- Job full detail Start -->
    <section class="full-detail-description full-detail">
        <div class="container">
            <!-- Job Description -->
            <div class="col-md-12 col-sm-12">
                <div class="full-card">

                    <div class="row row-bottom mrg-0">
                        <h2 class="detail-title">Job Detail</h2>
                        <ul class="job-detail-des">
                            <li><span>Salary:</span><?php echo $salary; ?></li>
                            <li><span>Company:</span><?php echo $cm_name; ?></li>
                            <li><span>Role Category:</span><?php echo $role_catagory; ?></li>
                            <li><span>Role:</span>Product Designer</li>
                            <li><span>Job Type:</span>Full Time</li>
                        </ul>
                    </div>

                    <div class="row row-bottom mrg-0">
                        <h2 class="detail-title">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</h2>
                        <ul class="job-detail-des">
                            <li><span>Address:</span><?php echo $address; ?></li>
                            <li><span>City:</span><?php echo $city; ?></li>
                            <li><span>Gender:</span><?php echo $gender; ?></li>
                            <li><span>Region:</span><?php echo $region; ?></li>
                            <li><span>Degree Level:</span><?php echo $degreelvl; ?></li>
                            <li><span>Telephone:</span><?php echo $phone; ?></li>
                            <li><span>Experiance:</span><?php echo $experiance; ?></li>

                        </ul>
                    </div>

                    <div class="row row-bottom mrg-0">
                        <h2 class="detail-title">Job Description</h2>
                        <br>
                        
                        <p><?php echo $wrappedJobDescription; ?> </p>
                    </div>
                </div>
            </div>
            <!-- End Job Description -->

            <!-- Start Sidebar -->
            <div class="col-md-4 col-sm-12">
                <div class="sidebar right-sidebar">

                    <!-- Job Alert -->
                    <!-- <a href="javascript:void(0)" class="btn btn-info full-width mrg-bot-20" data-toggle="modal" data-target="#job-alert">Get Job Alert!</a> -->
                    <!-- /Job Alert -->

                    

                   

                </div>
                <!-- /Say Hello -->

            </div>
        </div>
        <!-- End Sidebar -->
    </div>
    </section>
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