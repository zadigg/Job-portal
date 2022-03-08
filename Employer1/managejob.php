<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('../class/job.php');

$companyPicture = $_SESSION['emp']['profilePicture'];
?>

  
<link href="CSSJSFONT/Managejobs 2/css/style.css" rel="stylesheet">

    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Jobs
   
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
							<div class="dashboard-body">
								
									
										<!-- row -->
										<div class="row">
											
											<div class="col-lg-4 col-md-6 col-sm-12">
												<div class="form-group">
												<form action="searchManageJob.php" method="POST">
													<input type="text" name="searchName" class="form-control" placeholder="Search Name">
												</div>
											</div>
											
											
											<div class="col-lg-4 col-md-6 col-sm-12">
												<div  class="form-group">
												
												<button type="submit" name="searchJob" type="button" class="btn btn-link">Search</button>
												</form>
												</div>
											</div>
											
										
											
										</div>
										<!-- row -->
										<?php 
													
													$em_id =$_SESSION['emp']['id'];
													
													$mgeCandidate = new Job();
													$manageCandidateReturned = $mgeCandidate->viewJobAppliers($em_id);
												
													
													while ($manageCandidateList = mysqli_fetch_array($manageCandidateReturned)) { 
													
														$jobIdFetched = $manageCandidateList['job_id'];
														$GLOBALS['JobId'] = $jobIdFetched;
// echo "<script>alert($jobIdFetched);</script>"; 
													?>
								
				
							

										<ul class="list">
											<li class="manage-list-row clearfix">
												<div class="job-info premium-job">
													<div class="job-img">
														<img src="../resource/employerPicture/<?php echo $companyPicture; ?>" class="attachment-thumbnail" alt="Academy Pro Theme">
													</div>
													<div class="job-details"> 
														<h3 class="job-name" > <a href="managejobdelete.php?job_id=<?php echo $JobId; ?>"><?php echo $manageCandidateList['job_name']; ?></a> </h3>
														<small class="job-company"><i class="ti-home"></i><a href="#"><?php echo $manageCandidateList['role_catagory']; ?></a></small>
														<small class="job-sallery"><i class="ti-credit-card"></i>Salary: <?php echo $manageCandidateList['salary']; ?></small>
														<small class="job-update"><i class="ti-time"></i>Expired: <?php echo $manageCandidateList['deadline']; ?> </small>
														<span class="j-type full-time">Full Time</span>
													</div>
												</div>
												<div class="job-buttons">
													<a href="managejobEdit.php?job_id=<?php echo $manageCandidateList['job_id']; ?>" class="btn btn-gary manage-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a> 
												
														 <!-- <i class="fa fa-times-circle"></i> -->
													
												</div>
											</li>
										<?php }
										
									
										?>
									
											
											<li class="manage-list-row clearfix">
										
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
