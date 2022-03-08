<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('../class/view.php');


$messageID = $_GET['messageId'];

// echo "<script>alert('$messageID')</script>";
$viewFullEmail = new view();
$resultViewFullEmail = $viewFullEmail->viewMessageDescription($messageID);
$resultFullAgain = mysqli_fetch_array($resultViewFullEmail);
$subjectFull = $resultFullAgain['subject'];
$messageFull = $resultFullAgain['message'];

// echo "<script>alert('$messageFull')</script>";

?>



           
           


           <link rel="stylesheet" href="kotetDash/css/style.css">  <!-- Dashboard CSS --> 
           <!-- <link rel="stylesheet" href="CSSJSFONT/Job applied/plugins/css/plugins.css"> -->
            <link href="CSSJSFONT/Job applied/css/style.css" rel="stylesheet">
        	
						<!-- Content Wrap -->
						<div class="container-fluid">
							<div class="dashboard-body">
                                    <div class="dashboard-caption">
                                        
                                        <div class="dashboard-caption-header">
                                            <h4><i class="ti-envelope"></i>View Message</h4>
                                        </div>
                                        
                                                <div class="dashboard-caption-wrap">
                                                <h2 class="detail-title">Subject: <b><?php echo $subjectFull?></b></h2> 
                                                 <br>
                                                 <br>
                                                 
                                                <h2 class="detail-title">Message: <br>  <?php echo $messageFull?> </h2> 
                                                            
                                                
                                                </div>
                                    </div>
									
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</section>

   
</main><?php

include('includes/footer.php');

?>

  
        
    </body>
</html>