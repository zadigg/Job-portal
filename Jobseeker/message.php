<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('../class/view.php');


$jsid = $_SESSION['JS']['js_id'];


$viewEmail = new view();
$returnedViewEmail = $viewEmail->viewEmail($jsid);

?>



           
           


           <link rel="stylesheet" href="kotetDash/css/style.css">  <!-- Dashboard CSS --> 
           <!-- <link rel="stylesheet" href="CSSJSFONT/Job applied/plugins/css/plugins.css"> -->
            <link href="CSSJSFONT/Job applied/css/style.css" rel="stylesheet">
        	
						<!-- Content Wrap -->
						<div class="container-fluid">
							<div class="dashboard-body">
								<div class="dashboard-caption">
									
									<div class="dashboard-caption-header">
										<h4><i class="ti-briefcase"></i>Mailebox</h4>
									</div>
									
									<div class="dashboard-caption-wrap">
										
								
										<div class="table-responsive">
											<table class="table table-hover table-striped ">
											  <thead>
												<tr>
												  <th scope="col"></th>
                                                
												  <th scope="col">Sender</th>
												  <th scope="col">Subject</th>
											
												 
												  <th scope="col">Date Messaged</th>
												</tr>
											  </thead>
											  <tbody>
											  <?php
		
               while($whiledEmail = mysqli_fetch_array($returnedViewEmail)){

                $message = $whiledEmail['message'];
                $js_id = $whiledEmail['js_id'];
                $emp_id = $whiledEmail['emp_id'];
                $subject = $whiledEmail['subject'];
                $messageID = $whiledEmail['message_id'];


                // echo "<script> alert('$message')</script>";
             
              $knowSenderName = new view();
              $returnedCompanyName = $knowSenderName->knowSenderName($emp_id);
              $abina = mysqli_fetch_array($returnedCompanyName);
              $company_name = $abina['company_name'];

            ?>
              <tr>
                <td><input type="checkbox"></td>
               
                <td class="mailbox-name"><a href="CheckCompanyProfile.php?company_name=<?php echo $company_name; ?>"><?php echo $company_name ?> </a></td>
                <td class="mailbox-subject"><a href="viewmessage.php?messageId=<?php echo $messageID ?>"><b><?php echo $subject ?></b>&nbsp&nbsp&nbsp <?php echo $message ?></a>
                </td>
               
                <td class="mailbox-date">14 mins ago</td>
              </tr>
             
              <?php 
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