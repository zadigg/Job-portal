<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');

include('../class/Employer.php');


if(isset($_POST["submit"])){
     

    $job_type = $_POST['jobtype'];

    // $job_type = 1;
  
    $job_name = $_POST['job_name'];
    $role_catagory = $_POST['role_catagory'];
   
    $salary = $_POST['salary'];
  
    $gender = $_POST['gender'];
  
    $address = $_POST['address'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    
   
    $phone = $_POST['phone'];
    $Educational_Level = $_POST['Educational_Level'];  
    $experiance = $_POST['experiance'];  
    $job_description = $_POST['job_description'];  
    $keyword = $job_name;
    $deadline = $_POST['deadline'];  

    $jobposted = date('Y-m-d');
  
  $login= $_SESSION['email'];

  
  $query=mysqli_query($con,"SELECT id FROM employer WHERE email = '$login'");



  
  while($row=mysqli_fetch_array($query)){
	
	$GLOBALS['emp_id']=  $row['id']; 


  }

    $query1=mysqli_query($con,"SELECT jobtype_id FROM job_type WHERE job_type_name = '$job_type'");

  while($row=mysqli_fetch_array($query1)){
	
	$GLOBALS['job_type']=  $row['jobtype_id']; 


  }

  $query2=mysqli_query($con,"SELECT role_id FROM role_catagory WHERE role_cata = '$role_catagory'");

  while($row=mysqli_fetch_array($query2)){
	
	$GLOBALS['role_cata']=  $row['role_id']; 


  }
 
  $query3=mysqli_query($con,"SELECT region_id FROM region WHERE region_name = '$region'");

  while($row=mysqli_fetch_array($query3)){
	
	$GLOBALS['regionFK']=  $row['region_id']; 


  }

  $employerJobadd = new Employer();
    $employerJobadd->employerPostJob($job_name,$login,$role_catagory,
    $salary,$gender,$address,$city,$region,$phone,$Educational_Level,$experiance,$job_description,$keyword,$job_type,$deadline,$jobposted, $role_cata, $regionFK, $emp_id);//-> this helps to call a class function using an that classes object
  
}



?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Post a Job

		</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="breadcrumb-item active">Dashboard</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<!-- Basic Forms -->
		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Default Basic Forms</h3>


			</div>
			<!-- /.box-header -->
			<form action=""  name = "jobpost" onsubmit = "return validateform()" method="post" >
			<div class="box-body">
				<div class="row">
					<div class="col-12">
						<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Job name</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="job_name" id="job_name"
									placeholder="Managment" id="example-text-input">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-search-input" class="col-sm-2 col-form-label">Role catagory</label>
							<div class="col-sm-10">
								<select id="jb-category" name="role_catagory" id="role_catagory" class="form-control">

									<option>Choose Category</option>
									<?php 
													include('connection/db.php');
													$sql=mysqli_query($con,"SELECT role_cata FROM role_catagory");
													
													while ($row=mysqli_fetch_array($sql)) { ?>
									<option value="<?php echo $row['role_cata']; ?>"><?php echo $row['role_cata']; ?>
									</option>

									<?php    }   ?>

								</select>
							</div>
						</div>

						<div class="form-group row">
							<label for="example-search-input" class="col-sm-2 col-form-label">Job type</label>
							<div class="col-sm-10">
								<select id="jb-type" name="jobtype" id="jobtype" class="form-control">
									<option>Choose job type</option>
									<?php 
                                                        include('connection/db.php');
                                                        $sql=mysqli_query($con,"SELECT job_type_name FROM job_type");
                                                        
                                                        while ($row=mysqli_fetch_array($sql)) { ?>
									<option value="<?php echo $row['job_type_name']; ?>">
										<?php echo $row['job_type_name']; ?> </option>

									<?php    }   ?>
								</select>
							</div>
						</div>


						<div class="form-group row">
							<label for="salary" class="col-sm-2 col-form-label">salary</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="salary" id="salary"
									placeholder="5454 - 5656">
							</div>
						</div>
						<div class="form-group row">
							<label for="gender" class="col-sm-2 col-form-label">gender</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="gender" id="gender"
									placeholder="Male / Female">
							</div>
						</div>
						<div class="form-group row">
							<label for="address" class="col-sm-2 col-form-label">address</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="address" id="address"
									placeholder="Wossen">
							</div>
						</div>
						<div class="form-group row">
							<label for="City" class="col-sm-2 col-form-label">city</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="city" id="city" placeholder="hunter2"
									id="example-password-input">
							</div>
						</div>

						<div class="form-group row">
							<label for="Region" class="col-sm-2 col-form-label">Region</label>
							<div class="col-sm-10">
								<select name="region" id="region" class="form-control">

									<option>Choose Region</option>
									<?php 
												include('connection/db.php');
												$sql=mysqli_query($con,"SELECT region_name FROM region");
												
												while ($row=mysqli_fetch_array($sql)) { ?>
									<option value="<?php echo $row['region_name']; ?>">
										<?php echo $row['region_name']; ?> </option>

									<?php    }   ?>

								</select>
							</div>
						</div>

						<div class="form-group row">
							<label for="phone" class="col-sm-2 col-form-label">phone</label>
							<div class="col-sm-10">
								<input class="form-control" type="number" name="phone" id="phone"
									placeholder="0924029960">
							</div>
						</div>


						<div class="form-group row">
							<label for="Region" class="col-sm-2 col-form-label">Education level</label>
							<div class="col-sm-10">
								<select name="Educational_Level" id="Educational_Level" class="form-control">
									<option>Choose Education Level</option>
									<?php 
                                                        include('connection/db.php');
                                                        $sql=mysqli_query($con,"SELECT edlvl FROM educational_level");
                                                        
                                                        while ($row=mysqli_fetch_array($sql)) { ?>
									<option value="<?php echo $row['edlvl']; ?>"><?php echo $row['edlvl']; ?> </option>

									<?php    }   ?>
								</select>
							</div>
						</div>


						<div class="form-group row">
							<label for="example-month-input" class="col-sm-2 col-form-label">experiance</label>
							<div class="col-sm-10">
								<input class="form-control" type="text" name="experiance" id="experiance"
									placeholder="5years">
							</div>
						</div>
						<div class="form-group row">
							<label for="example-month-input" class="col-sm-2 col-form-label">Job description</label>
							<div class="col-sm-10">
								<textarea name="job_description" id="job_description" cols="100%" rows="10"></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label for="example-week-input" class="col-sm-2 col-form-label">deadline</label>
							<div class="col-sm-10">
								<input class="form-control" type="datetime-local" name="deadline" id="deadline"
									placeholder="2011-W33" id="example-week-input">
							</div>
						</div>
					

						
                                       
                                            <div class="form-group text-center">
                                                
                                            <input type="submit" class="btn btn-block btn-success" class="btn-savepreview" value="Publish & Preview" placeholder="Save" name="submit" id="submit">
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