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
                                            <h4><i class="ti-envelope"></i>View Exam List</h4>
                                        </div>
                                        
                                                <div class="dashboard-caption-wrap">
                                                    
                                            
                                                <div class="container-fluid">
    
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Job Name</th>
                                                        <th>Employer</th>
                                                        <th>test</th>
                                                        <th>Dateline</th>
                                                    

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>John</td>
                                                        <td>Doe</td>
                                                        <td>john@example.com</td>
                                                    </tr>
                                                   
                                                    </tbody>
                                                </table>
                                                </div>   `  
                                                            
                                                
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