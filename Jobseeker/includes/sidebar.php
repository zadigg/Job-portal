<main>
  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
        </button>
      </div>
      <div class="img bg-wrap text-center py-4" style="background-image: url(kotetDash/images/bg_1.jpg);">
        <div class="user-logo">
          <div class="img" style="background-image: url(images/logo.jpg);"></div>
          <h3><?php echo  $_SESSION['JS']['firstName'] ?></h3>
        </div>
      </div>
      <ul class="list-unstyled components mb-5">
        
        <li>
          <a href="EditProfile.php"><span class="fa fa-user mr-3 notif"></span> My Profile</a>
        </li>
        <li>
          <a href="savedCV.php"><span class="fa fa-save mr-3 notif"></span> Saved CV's</a>
        </li>

        <li>
          <a href="buildcv.php"><span class="fa fa-building mr-3 notif"></span> Build New CV's</a>
        </li>

        <li>


        </li>
        <li>
          <a href="jobsapplied.php"><span class="fa fa-trophy mr-3"></span> Job Applied</a>
        </li>
        <li>

          <a href="exam.php"> <i class="fa fa-envelope mr-3"></i> <span>Exam</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li>

          <a href="message.php"> <i class="fa fa-envelope mr-3"></i> <span>Mailbox</span>
            <span class="pull-right-container">
           
            </span>
          </a>
        </li>
        <li>
          <a href="savedjobs.php"><span class="fa fa-save mr-3"></span> My Saved Jobs</a>
        </li>
      

        <li>
        </li>


      </ul>

    </nav>

    <!-- Page Content  -->



    <!-- slider Area Start-->