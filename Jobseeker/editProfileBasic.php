<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('../class/account.php');
include('../class/view.php');

$jobseekerID = $_GET['js_id'];


$js_id = $_SESSION['JS']['js_id'];

$email = $_SESSION['email'];
$firstName =$_SESSION['JS']['firstName'];
$lastName =  $_SESSION['JS']['lastName'];
$profilePicture = $_SESSION['JS']['profilePicture'];
$DOB = $_SESSION['JS']['DOB'];
$Phone = $_SESSION['JS']['Phone'];
$username =  $_SESSION['JS']['username'];
$Country = $_SESSION['JS']['Country'];
$City =  $_SESSION['JS']['City'];


if(isset($_POST['submit'])){


    


    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $dob = $_POST['date_of_birth'];
    $Phone = $_POST['phone'];
    $Country = $_POST['country'];
    $City = $_POST['city'];

    $acc = new Account();
    $acc->updateJsProfile($firstName,$lastName,$username,$email,$dob,$Phone,$Country,$City,$js_id);
    

}

?>




<link rel="stylesheet" href="kotetDash/css/style.css"> <!-- Dashboard CSS -->
<!-- <link rel="stylesheet" href="CSSJSFONT/Job applied/plugins/css/plugins.css"> -->
<link href="CSSJSFONT/Job applied/css/style.css" rel="stylesheet">

<!-- Content Wrap -->
<div class="container-fluid">
    <div class="dashboard-body">
        <div class="dashboard-caption">

            <div class="dashboard-caption-header">
                <h4><i class="ti-briefcase"></i>Update Your Profile</h4>
            </div>
        </div>

    </div>
    <div class="row-fluid">
        <div class="container">


        <form action="" enctype="multipart/form-data" class="container" method="post">
                <br>
              
                <label for="photo"><b>Profile Picture</b></label>
                <input type="file" name="file" id="photo" required>
<br>
                <label for="First_name"><b>First name</b></label>
                <input type="text" placeholder="Enter First_name" value="<?php echo $firstName; ?>" name="first_name" id="first_name" required>

                <label for="Last_name"><b>Last name</b></label>
                <input type="text" placeholder="Enter Last_name" value="<?php echo $lastName; ?>" name="last_name" id="last_name" required>

                <label for="username"><b>username</b></label>
                <input type="text" placeholder="username" value="<?php echo $username; ?>" name="username" id="username" required>

                
                <label for="Email"><b>Email</b></label>
                <input type="email" class="form-control" value="<?php echo $email; ?>"  placeholder="email" name="email" id="email" required>
<br>
                <label for="date"><b>Date of birth</b></label>
                <input type="date" class="form-control" value="<?php echo $DOB; ?>" placeholder="Enter date of birth" name="date_of_birth" id="date_of_birth" required>
                <br>

                
     
                <label for="Phone number"><b>Phone Number</b></label>
                <input type="text" placeholder="Enter Phone_number" value="<?php echo $Phone; ?>" name="phone" id="phone" required>

                <label for="country"><b>Country</b></label>
                <input type="text" placeholder="Enter country" value="<?php echo $Country; ?>" name="country" id="country" required>

                <label for="city"><b>City</b></label>
                <input type="text" placeholder="city" value="<?php echo $City; ?>" name="city" id="city" required>

            
                <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="sign Up">
              </form>

        </div>
    </div>
</div>
</div>

</div>
</div>
</section>

<!-- Page Content  -->


<script src="kotetDash/js/jquery.min.js"></script>
<script src="kotetDash/js/popper.js"></script>
<script src="kotetDash/js/bootstrap.min.js"></script>
<script src="kotetDash/js/main.js"></script>
<!-- slider Area Start-->

</main><?php

include('includes/footer.php');

?>



</body>

</html>