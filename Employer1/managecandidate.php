<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');

include('../class/Employer.php');
include('../class/view.php');



$em_id =  $_SESSION['emp']['id'];

$viewcand = new Employer();
$manageCandidate = $viewcand->employerManageCandidatetwo($em_id);


?>



<link rel="stylesheet" href="CSSJSFONT/CandidateList2/css/style.css">

<style>
    .pagination li{
        display: inline;
    }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Candidates
       
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Manage Candidate</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div id="content" class="p-4 p-md-5 pt-5">
        <div class="Loader"></div>
		<div class="wrapper">  
			
		
						
						<!-- Content Wrap -->
						<div class="Container-fluid">
							<div class="dashboard-body">
								
									
										


											

<?php
		
		while($candidates = mysqli_fetch_array($manageCandidate)){

			
			$jsemail = $candidates['email'];
			$jsProfilePicture = $candidates['profilePicture'];
			
			$getJsId = new Employer();
			$jjid = $getJsId->receieveJsIdForMsg($jsemail);
			$jsIdforMsg = mysqli_fetch_array($jjid);
			

			$GLOBALS['jsIDOutput']= $jsIdforMsg['js_id'];
			$_SESSION['em']['jsIDView'] = $jsIDOutput;
			
			$viewCandidateProfile  = new Employer();
			$returnedPicture = $viewCandidateProfile->viewCandidateProfile($jsIDOutput);
			$fetchedPicture = mysqli_fetch_array($returnedPicture);
			$picturePreview = $fetchedPicture['profilePicture'];
			
		
			

		?>
		<?php
											if(isset($_POST['submitMsg']))
											{

												if($jsIDOutput)
												$subject = $_POST['subjectMsg'];
												$message = $_POST['message'];
										
											
												$emp = new Employer();
												$emp->sendMsg($subject, $message, $em_id, $jsIDOutput);
												// echo "<script>alert('$subject');</script>";
											}
											?>
											

	
										<ul class="list">
											<li class="manage-list-row clearfix">
												<div class="job-info">
													<div class="job-img">
												
														<img src="../resource/jobseekerPicture/<?php echo $picturePreview; ?>"  class="attachment-thumbnail" alt="No Profile Picture">
													</div>
													<div class="job-details">
														<h3 class="job-name"><a class="job_name_tag" href="CandidateProfile.php?jsid=<?php echo $jsIDOutput?>"><?php echo $candidates['fname'];?> <?php echo $candidates['lname'];?></h3>
														<small class="job-company"><i class="ti-home"></i><?php echo $jsemail ?></small>
														<small class="job-sallery"><i class="ti-time"></i><?php echo $jsIDOutput ?>.</small>
														<small class="job-sallery"><i class="ti-location-pin"></i>London</small>
														<div class="shortlisted-can"><?php echo $candidates['job_name']?></div>
														<div class="candi-skill">
															<span class="skill-tag">css</span>
															<span class="skill-tag">HTML</span>
															<span class="skill-tag">Photoshop</span>
														</div>
													</div>
												</div>
												<div class="job-buttons">
													<button><a href="CandidateProfile.php?jsid=<?php echo $jsIDOutput?>"><i class="fa fa-download"></i></a></button>
													
													
													<!-- <button ><a  data-id="<?php echo $jsIDOutput?>" data-toggle="modal" class="btn btn-blue manage-btn" data-placement="top" title="Message"><i class="fa fa-envelope"></i></a>	</button>											
													<a href="#" class="btn btn-cancel manage-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="fa fa-trash"></i></a> -->
												</div>
											</li>
											
										</ul>
								
										<?php

										}
										
	
	
										?>

									</div>
									
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</section>
			

			
			<div id="SendMessage" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<form action="managecandidate.php" name="sendMsg" onsubmit = "return validateform()" method="POST">
							<div class="modal-header theme-bg">						
								<h4 class="modal-title">Send Message</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">					
								<div class="form-group">
									<label>Subject</label>
									<input type="text" class="form-control" name="subjectMsg">
								</div>
								<div class="form-group">
									<label>Message</label>
									<textarea class="form-control big-height" name="message"></textarea>
								</div>					
							</div>
							<div class="modal-footer">
								<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
								<input type="submit" class="btn btn-success" value="Send" name="submitMsg">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

    </section>

  
</div>
<!-- ./wrapper -->
  	
<?php

include('includes/scripts.php');




?>
	
	
</body>
</html>
