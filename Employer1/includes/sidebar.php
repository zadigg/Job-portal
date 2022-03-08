
  <aside class="main-sidebar">

      <?php
            include('../connection/db.php');
            $email = $_SESSION['email'];
            $query = mysqli_query($con,"select * from employer WHERE email = '$email'");
            while($row=mysqli_fetch_array($query)){
                      
              $name = $row['company_name'];
              $profilePicturesidebar = $row['company_image'];


          ?>

      <div class="user-panel">
        <div class="image float-left">
          <img src="../resource/employerPicture/<?php echo $profilePicturesidebar; ?>" class="rounded" alt="User Image">
        </div>
        <div class="info float-left">
          <p><?php echo $name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

         
          <?php  } ?>
        </div>
		
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">        
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
   
         <li>
          <a href="postjob.php">
            <i class="fa fa-plus"></i> <span>Post a new Job</span>
            </a>
        </li>

        <li>
          <a href="managejob.php">
            <i class="fa fa-edit"></i> <span>Manage Job</span>
            </a>
        </li>

        <li>
          <a href="managecandidate.php">
            <i class="fa fa-edit"></i> <span>Manage Candidate</span>
            </a>
        </li>
        
        

        <li>
          <a href="mailbox.php">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            
          </a>
        </li>
       
        <li>
          <a href="exam.php">
            <i class="fa fa-edit"></i> <span>Exam</span>
            </a>
        </li>
               
        
      </ul>
    </section>
    <!-- /.sidebar -->
    <div class="sidebar-footer">
		<!-- item-->
		<a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cog fa-spin"></i></a>
		<!-- item-->
		<a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope"></i></a>
		<!-- item-->
		<a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
	</div>
  </aside>









<!-- 
  <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/cards.html"><i class="fa fa-circle-o"></i> User Cards</a></li>
            <li><a href="pages/UI/tab.html"><i class="fa fa-circle-o"></i> Tab</a></li>
            <li><a href="pages/UI/notification.html"><i class="fa fa-circle-o"></i> Notification</a></li>
            <li><a href="pages/UI/sweatalert.html"><i class="fa fa-circle-o"></i> Sweatalert</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li> -->