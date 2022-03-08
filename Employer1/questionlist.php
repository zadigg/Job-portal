<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('../class/Exam.php');
?>


<?php
   $em_id =  $_SESSION['emp']['id'];
  $viewExamQuestions = new Exam();
  $returnedExamQUestion = $viewExamQuestions->viewQuestions($em_id);
  
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
							<h3 class="box-title">Question list</h3>
						</div>

						<div class="box-body no-padding">
							<div >

								<div class="btn-group">
								</div>

							</div>
							<div class="mailbox-messages">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Number</th>
										<th>Question</th>
										<th>Action</th>
										
									</tr>
								</thead>
								<tbody>
									<?php 
									 $roll = 1;
									while($queryResult = mysqli_fetch_array($returnedExamQUestion)){
										$user = 0;
										$user++;
									
									?>
									<tr>
										<td><?php echo $roll; ?></td>
										<td><?php echo $queryResult['question'];?></td>
										<td>Remove</td>
									
									</tr>
									<?php $roll++; } ?>
									          
								</tbody>
							</table>
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