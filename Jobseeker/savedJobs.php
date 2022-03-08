<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('../class/view.php');
include('connection/db.php');




$job_id = $_SESSION['JS']['js_id'];
$saveJob = new view();
$resultSaved = $saveJob->viewSavedJob($job_id);

?>
           
           


           <link rel="stylesheet" href="kotetDash/css/style.css">  <!-- Dashboard CSS --> 
           <!-- <link rel="stylesheet" href="CSSJSFONT/Job applied/plugins/css/plugins.css"> -->
            <link href="CSSJSFONT/Job applied/css/style.css" rel="stylesheet">
        	
						<!-- Content Wrap -->
						<div class="container-fluid">
							<div class="dashboard-body">
								<div class="dashboard-caption">
									
									<div class="dashboard-caption-header">
										<h4><i class="ti-briefcase"></i>Saved Jobs</h4>
									</div>
									
									<div class="dashboard-caption-wrap">
									
										<div class="table-responsive">
											<table class="table">
											  <thead>
												<tr>
												  <th scope="col"></th>
                                                
												  <th scope="col">Saved Jobs</th>
												  <th scope="col">Employer</th>
												  
												  <th scope="col">Saved Date</th>
												  <th scope="col">Action</th>
												</tr>
											  </thead>
											  <tbody>

											  
											  <?php
											  $roll = 1;
                                              while($rowJobSaved = mysqli_fetch_array($resultSaved)) { ?>
                                              
                                       
												<tr>
													
                                                    <th scope="row"><?php echo $roll; ?></th>
                                                    <td><a href="applyjob.php?id=<?php echo $rowJobSaved['job_id'];?>"><?php echo $rowJobSaved['job_name']; ?></a></td>
                                                    <td><?php echo $rowJobSaved['company_name']; ?></td>
                                                    
                                                    <td><?php echo $rowJobSaved['saved_date']; ?></td>
                                                 
                                                    <td>
                                                      <div class="job-buttons">
                                                          <a href="#" class="btn btn-cancel manage-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="ti-close"></i></a>
                                                      </div>
                                                  </td>
												  </tr>

                                                  <?php $roll++;
                                                  
											  }
											  ?>
										
											  
									
											  </tbody>
											</table>
										</div>
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