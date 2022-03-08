<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('../class/job.php');
include('../class/account.php');
include('../class/Employer.php');



$em_id = $_SESSION['emp']['id'];
$editEmQuery = new Account();
$returnedQuery = $editEmQuery->employerEdit($em_id);

while($row=mysqli_fetch_array($returnedQuery)){
    $company_name = $row['company_name'];
    $oname = $row['owner_name'];
    $phone = $row['phone_number'];
    $email = $row['email'];
    $address = $row['address'];
    $nemployee = $row['numberofemployees'];
    $ABout_company = $row['about_company'];
    
  }

  if(isset($_POST['updateEmployer'])){
      
    $company_name = $_POST['company_name'];
    $oname = $_POST['owner_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $nemployee = $_POST['Number_of_employees'];
    $ABout_company = $_POST['aboutcompany'];


    $emp = new Employer();
    $emp->updateEmployerDetail($company_name,$oname,$phone,$email,$address,$nemployee,$ABout_company,$em_id);

  }

?>

  
<link href="CSSJSFONT/Managejobs 2/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="./CSSJSFONT/comment.css">
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
   
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
			<ul class="list">
				<li class="manage-list-row clearfix">
                <form action="" method="post" name="employer_form" id="employer_form">

                 <div class="form-group">
                    <label for="Company name">Company name</label>          
                    <input type="text" name="company_name" id="company_name"  value=" <?php echo $company_name; ?>" class="form-control" placeholder="Enter Company Name">
                 </div>
                 <div class="form-group">
                    <label for="owner name">owner name</label>
                    <input type="" name="owner_name" id="owner_name" value=" <?php echo $oname; ?>" class="form-control" placeholder="Enter Owner Name">
                 </div>
                  <div class="form-group">
                    <label for="tel">phone</label>
                    <input type="tel"  name="phone" id="phone" value=" <?php echo $phone; ?>" class="form-control" placeholder="0924029960"  > 
                 </div>
               
                  <div class="form-group">
                    <label for="email">Enter email</label>
                    <input type="email" name="email" id="email" value=" <?php echo $email; ?>" class="form-control" placeholder="Enter email">
                 </div>
                  <div class="form-group">
                    <label for="address">Enter address</label>
                    <input type="text"  name="address" id="address" value=" <?php echo $address; ?>" class="form-control" placeholder="Enter address">
                 </div>
                
                 <div class="form-group">
                    <label for="Numberofemployees">Number of employees</label>
                    <input type="text"  name="Number_of_employees" id="Number_of_employees" value=" <?php echo $nemployee; ?>"  class="form-control" placeholder="Number_of_employees?">
                 </div>
                 <div class="form-group">
                    <label for="about company">about company</label>
                    
                    <textarea name="aboutcompany" class="form-control" id="aboutcompany" cols="30" rows="10"><?php echo $ABout_company; ?></textarea>
                 </div>
                      <div class="form-group">
                   
                      <input type="hidden" name="id" id="id" value= " <?php echo $_GET['edit']; ?>">
                      <div class="form-group">

                      <input type="submit" class="btn btn-block btn-success" placeholder="Update" name="updateEmployer" id="updateEmployer">
                 </div>
           


             </form>
											</li>			
    </section>
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->

  	
<?php

include('includes/scripts.php');




?>
	
	
</body>
</html>
