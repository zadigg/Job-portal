<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('../class/Exam.php');
?>


<?php

   $em_id =  $_SESSION['emp']['id'];
   
   $examKotet = new Exam();
   $resultQuestionNumber = $examKotet->NumberOfPostedQuestionRows($em_id);
   $total = $resultQuestionNumber + 1;
//    echo "<script>alert('$total');</script>";

//exam beselecet option yawetal 

$resultPostedJobs = $examKotet->chooseAJob($em_id);

   if(isset($_POST["addQuestion"])){

	$question = $_POST['question'];
	$choose1 = $_POST['choose1'];
	$choose2 = $_POST['choose2'];
	$choose3 = $_POST['choose3'];
	$choose4 = $_POST['choose4'];

	$answer = $_POST['answer'];
	$jobName = $_POST['jobName'];

	$seeJobId = new Exam();
	$returnedJobId = $seeJobId->findJobID($em_id,$jobName);
	$resultFetched = mysqli_fetch_array($returnedJobId);
	$jobIdResult = $resultFetched['job_id'];

// echo"<script>alert('$jobIdResult');</script>";
	$examKotet->postAQuestion($question,$choose1,$choose2,$choose3,$choose4, $answer, $em_id,$jobIdResult);
	}
?>
<link rel="stylesheet" href="CSSJSFONT/CandidateList2/css/style.css">

<div class="content-wrapper">
	<section class="content-header">
		<section class="content-header">
			<h1>
				Exam
			</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="breadcrumb-item active">Exam</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-lg-3 col-12">
					<!-- <a href="compose.html" class="btn btn-success btn-block btn-shadow margin-bottom">Compose</a> -->

					<div class="box box-solid">
						<div class="box-header with-border">
							<h3 class="box-title">Question Tab</h3>

							<div class="box-tools">
								<button type="button" class="btn btn-box-tool" data-widget="collapse"><i
										class="fa fa-minus"></i>
								</button>
							</div>
						</div>
						<div class="box-body no-padding mailbox-nav">
							<ul class="nav nav-pills flex-column">
							<li class="nav-item">
									<a class="nav-link active" href="examcatagory.php"><iclass="ion ion-ios-email-outline"></iclass=> Exam Catagory Per Job</a>
								</li>
							<li class="nav-item">
									<a class="nav-link active" href="exam.php"><iclass="ion ion-ios-email-outline"></iclass=> Add Question</a>
								</li>

								<li class="nav-item">
									<a class="nav-link active" href="questionlist.php"><iclass="ion ion-ios-email-outline"></iclass=> Question List</a>
								</li>
							</ul>
						</div>
					</div>

				</div>
				<div class="col-lg-9 col-12">
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Question</h3>
						</div>

						<div class="box-body no-padding">
							<div >

								<div class="btn-group">
								</div>

							</div>
							<div class="mailbox-messages">
							<form method="POST">
							
							<div class="form-group">
										<label >Choose a Job</label>
										<select class="form-control" name="jobName" id="jobName">
											
											<?php
											while($loopedPostedJob = mysqli_fetch_array($resultPostedJobs)){
												$job_name = $loopedPostedJob['job_name'];?>
											<option value="<?php echo $job_name?>" ><?php echo $job_name?></option>
											<?php } ?>
										</select>

									
									</div>
									<div class="form-group">
										<label >Question <?php echo $total?></label>
										<input type="text" class="form-control" name="question"  placeholder="Write a Question">
										
									</div>
									

									


									<div class="form-group">
										<label >Choose 1</label>
										<input type="text" class="form-control" name="choose1" placeholder="Choose1"required>
									</div>
									<div class="form-group">
										<label >Choose 2</label>
										<input type="text" class="form-control" name="choose2" placeholder="Choose2"required>
									</div>
									<div class="form-group">
										<label >Choose 3</label>
										<input type="text" class="form-control" name="choose3"  placeholder="Choose3">
									</div>
									<div class="form-group">
										<label >Choose 4</label>
										<input type="text" class="form-control" name="choose4" placeholder="Choose4">
									</div>

									<div class="form-group">
										<label >Answer</label>
										<input type="text" class="form-control" name="answer" placeholder="Write the Answer"required>
									</div>
									
									<button type="submit" name="addQuestion" class="btn btn-primary">Add a question</button>
							</form>
							</div>
						</div>
						<div class="box-footer no-padding">
							<div class="mailbox-controls">

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
</div>
</section>

<div class="control-sidebar-bg"></div>

</section>

<section class="content">
	<div id="content" class="p-4 p-md-5 pt-5">
		<div class="Loader"></div>
		<div class="wrapper">
			<div class="Container-fluid">
				<div class="dashboard-body">
				
				</div>
			</div>
		</div>

	</div>
	</div>
</section>
</div>
</section>


</div>
<?php
include('includes/scripts.php');
?>
</body>

</html>