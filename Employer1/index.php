<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('../class/view.php');


$profilePicture = $_SESSION['emp']['profilePicture'];
$em_id = $_SESSION['emp']['id'];
$commentView = new view();
$resultQuery = $commentView->viewCommentOnEmployer($em_id);


$countedjobs = $commentView->countPostedjobs($em_id);

$countedAppliedjobs = $commentView->countTotalJobAppliers($em_id);



?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-6 col-xl-3">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <h3><?php echo $countedjobs ?></h3>

            <p>Number of Posted Jobs</p>
          </div>
          <div class="icon">
            <i class="fa fa-shopping-bag"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-6 col-xl-3">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3><?php echo $countedAppliedjobs; ?></h3>

            <p>number of applied user</p>
          </div>
          <div class="icon">
            <i class="fa fa-bar-chart"></i>
          </div>
          
        </div>
      </div>
      <!-- ./col -->
     
      <!-- ./col -->
      
      <!-- ./col -->
    </div>
  </section>

  <section class="content">


    <div>


      <div class="row">
        <div class="col-xl-4 col-lg-5">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img rounded-circle img-fluid mx-auto d-block"
                src="../resource/employerPicture/<?php echo $profilePicture; ?>" alt="User profile picture">



              <h3 class="profile-username text-center"><?php echo $_SESSION['emp']['cm_name'] ?></h3>

              <!-- <p class="text-muted text-center">Accoubts Manager Jindal Cop.</p>
				
              <div class="row social-states">
				  <div class="col-6 text-right"><a href="#" class="link"><i class="ion ion-ios-people-outline"></i> 254</a></div>
				  <div class="col-6 text-left"><a href="#" class="link"><i class="ion ion-images"></i> 54</a></div>
			  </div> -->

              <div class="row">
                <div class="col-12">
                  <div class="profile-user-info">
                    <p>Email address </p>
                    <h6 class="margin-bottom"><?php echo $_SESSION['email'] ?></h6>
                    <p>Phone</p>
                    <h6 class="margin-bottom"><?php echo $_SESSION['emp']['phone']; ?></h6>
                    <p>Address</p>
                    <h6 class="margin-bottom"><?php echo $_SESSION['emp']['address']; ?></h6>

                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-8 col-lg-7">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">

              <li><a class="active" href="#timeline" data-toggle="tab">Comment</a></li>
            </ul>

            <div class="tab-content">
<?php
while($whiledComment = mysqli_fetch_array($resultQuery)){


?>
              <div class="active tab-pane" id="timeline">
                <ul class="timeline">
                  <li class="time-label">
                    <span class="bg-green">
                      <?php echo $whiledComment['commented_Date']; ?>
                    </span>
                  </li>
                 
                  <li>
                    <i class="ion ion-chatbubble-working bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 55 mins ago</span>

                      <h3 class="timeline-header"><a href="#"><?php echo $whiledComment['fname']; ?> <?php echo " ",$whiledComment['lname']; ?></a> commented on your post</h3>

                      <div class="timeline-body">
                      <?php echo $whiledComment['comment']; ?>
                      </div>
                      <div class="timeline-footer text-right">
                        <a class="btn bg-purple btn-flat btn-sm">View comment</a>
                      </div>
                    </div>
                  </li>
<?php } ?>

  </section>


</div>
<!-- ./wrapper -->

<?php

include('includes/scripts.php');




?>


</body>

</html>