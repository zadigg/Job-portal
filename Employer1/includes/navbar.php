<header class="main-header">
<a href="index.html" class="logo">
      <span class="logo-mini"><b>F</b></span>
      <span class="logo-lg"><b>Fox</b>Admin</span>
    <nav class="navbar navbar-static-top">
      <a href="mailbox.php" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">		 
           
          <li class="dropdown notifications-menu">
            <a href="mailbox.php" class="dropdown-toggle" >
              <i class="fa fa-bell"></i>
              <span class="label label-warning">7</span>
            </a>
            <ul class="dropdown-menu scale-up">
              <li class="header"></li>
              <li>
            
                
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->

          <?php
            include('../connection/db.php');
            
            $email = $_SESSION['email'];
            $em_id =  $_SESSION['emp']['id'];
            $query = mysqli_query($con,"select * from employer WHERE email = '$email'");
            while($row=mysqli_fetch_array($query)){
                      
              $name = $row['company_name'];
              $profilePictureheader = $row['company_image'];


          ?>

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../resource/employerPicture/<?php echo $profilePictureheader; ?>" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="../resource/employerPicture/<?php echo $profilePictureheader; ?>" class="rounded float-left" alt="User Image">
				
                <p>
                  <?php echo $name; ?>
                  <small>Member since April . 2016</small>
                </p>
              </li>

              <?php  } ?>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php?em_id=<?php echo $em_id;  ?>" class="btn btn-block btn-primary">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-block btn-danger">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>