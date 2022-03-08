<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('../class/job.php');
include('../class/view.php');


$em_id = $_GET['em_id'];
// echo "<script>alert('$em_id');</script>";
$viewProfileQuery = new view();
$returnedViewProfileQuery = $viewProfileQuery->companyProfile($em_id);
$fetchedProfile = mysqli_fetch_array($returnedViewProfileQuery);

$Company_profilePicture = $fetchedProfile['company_image'];
$Company_name = $fetchedProfile['company_name'];
$owner_name = $fetchedProfile['owner_name'];
$phone = $fetchedProfile['phone_number'];
$email = $fetchedProfile['email'];
$address = $fetchedProfile['address'];
$noe = $fetchedProfile['numberofemployees'];
$established = $fetchedProfile['Established'];

$aboutComp = $fetchedProfile['about_company'];

$wrappedCompanyDescription = wordwrap($aboutComp, 22, "\n", true);


$returnedViewComemnt = $viewProfileQuery->companyViewComments($em_id);

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
												
<div class="Loader"></div>
<div class="wrapper">
    <div class="clearfix"></div>
    <section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">

    </section>
    <div class="clearfix"></div>
    <section class="detail-desc">
        <div class="container">
            <div class="ur-detail-wrap top-lay">
                <div class="ur-detail-box">
                    <div class="ur-thumb">
                        <img src="../resource/employerPicture/<?php echo $Company_profilePicture;?>" class="img-responsive" alt="" />
                    </div>
                    <div class="ur-caption">
                        <h4 class="ur-title"><?php  echo $Company_name;?></h4>
                        <p class="ur-location"><i class="ti-location-pin mrg-r-5"></i><?php  echo $address;?></p>
                        <span class="ur-designation">Web Designer</span>
                        <div class="rateing">
                            <i class="fa fa-star filled"></i>
                            <i class="fa fa-star filled"></i>
                            <i class="fa fa-star filled"></i>
                            <i class="fa fa-star filled"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>

                </div>

                <div class="ur-detail-btn">
                    <a href="editemployer.php" > <button name="editEmployer" class="btn btn-primary mrg-bot-10 full-width">Edit</button> </a><br>
                    <a href="changepassword.php?em_id=<?php echo $em_id; ?>" > <button name="changePassword" class="btn btn-primary mrg-bot-10 full-width">Change Password</button> </a><br>

                </div>

            </div>

        </div>
    </section>
    <section class="full-detail-description full-detail">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-8">

                    <div class="row-bottom">
                        <h2 class="detail-title">About Company</h2>
                        <p><?php  echo $wrappedCompanyDescription;?></p>
                    </div>


                    <h2 class="detail-title">Comments</h2>
                    <section class="comments">
                        <article class="comment">
                         
                            <div class="comment-body">

                           


                            <?php

                                while($rowComments = mysqli_fetch_array($returnedViewComemnt)){
                                 
                                   
                                $profilePictureForComment = $rowComments['profilePicture'];
                            ?>
                            
                                <article class="comment">
                                    <a class="comment-img" href="#non">
                                        <img src="../resource/jobseekerPicture/<?php echo $profilePictureForComment;?>" alt="" width="50" height="50">
                                    </a>
                                    <div class="comment-body">
                                        <div class="text">
                                        <p><?php  echo $rowComments['comment'];?></p>
                                       
                                        </div>
                                        <p class="attribution">by 
                                            <a href="#non">  <?php  echo $rowComments['fname'];?> <?php  echo $rowComments['lname'];?></a> 
                                        at <?php  echo $rowComments['commented_Hour'];?>, 
                                           <?php  echo $rowComments['commented_Date'];?>
                                        </p>
                                    </div>
                                </article>

                               <?php
                                }
                               ?>
                    </section>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="full-sidebar-wrap">
                        <div class="sidebar-widgets">
                            <div class="ur-detail-wrap">
                                <div class="ur-detail-wrap-header">
                                    <h4>Company Overview</h4>
                                </div>
                                <div class="ur-detail-wrap-body">
                                    <ul class="ove-detail-list">

                                        <li>
                                            <i class="ti-ruler-pencil"></i>
                                            <h5>Established</h5>
                                            <span><?php  echo $established;?></span>
                                        </li>

                                        <li>
                                            <i class="ti-user"></i>
                                            <h5>Employees</h5>
                                            <span><?php  echo $noe;?></span>
                                        </li>

                                        <li>
                                            <i class="ti-face-smile"></i>
                                            <h5>Owner Name</h5>
                                            <span><?php  echo $owner_name;?></span>
                                        </li>

                                        <li>
                                            <i class="ti-email"></i>
                                            <h5>Email</h5>
                                            <span><?php  echo $email;?></span>
                                        </li>

                                        <li>
                                            <i class="ti-mobile"></i>
                                            <h5>Call</h5>
                                            <span><?php  echo $phone;?></span>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </div>
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
