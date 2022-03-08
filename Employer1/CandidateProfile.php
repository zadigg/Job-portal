<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('../class/Employer.php');
include('../class/view.php');

?>
     <link rel="stylesheet" href="CSSJSFONT/CandidateProfile/css/style.css">
     <link rel="stylesheet" href="CSSJSFONT/CandidateProfile/css/responsive.css">

<?php

$js_id = $_GET['jsid'];
$viewcandidate = new Employer();
$returnedCandiateProfile = $viewcandidate->viewCandidateProfile($js_id);
$fetchedProfile = mysqli_fetch_array($returnedCandiateProfile);
$ProfilePic = $fetchedProfile['profilePicture'];
echo "<script>alert($ProfilePic);</script>";
$firstName = $fetchedProfile['fname'];
$lastName = $fetchedProfile['lname'];
$description = $fetchedProfile['description'];
$phone = $fetchedProfile['phone_number'];
$email = $fetchedProfile['email'];
$phone = $fetchedProfile['phone_number'];
$country = $fetchedProfile['Country'];
$city = $fetchedProfile['City'];

$wordwrapdescription = wordwrap($description, 18, "\n", true);


$viewCV = new view();
$returnedViewCV = $viewCV->candidateProfileViewCv($js_id);
$fetchedViewCV = mysqli_fetch_array($returnedViewCV);
$filename = $fetchedViewCV['filename'];

    // echo "<script>alert('$filename');</script>";



?>


<div class="content-wrapper">

    <section class="content-header">
    <div id="content" class="p-4 p-md-5 pt-5">
        <div >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="single-profile-item">
                            <img src="../resource/jobseekerPicture/<?php echo $ProfilePic; ?>"  width="30px" height="300px" alt="Profile">
                            <div class="single-profile-left">
                                <div class="single-profile-contact">
                                    <h3>Contact Info</h3>
                                    <ul>
                                        <li>
                                            <i class="icofont-ui-call"></i>
                                            <a href="tel:+07554332322">phone: &nbsp;<?php echo $phone?></a>
                                        </li>
                                        <li>
                                            <i class="icofont-email"></i>
                                            <a href="mailto:hello@gable.com">Email: &nbsp;   <?php  echo $email?></a>
                                        </li>
                                        <li>
                                            <i class="icofont-email"></i>
                                            <a href="mailto:hello@gable.com">Country: &nbsp; <?php echo $country?></a>
                                        </li>
                                        <li>
                                            <i class="icofont-email"></i>
                                            <a href="mailto:hello@gable.com">Town: &nbsp;<?php echo $city?></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="single-profile-social">
                                    <h3>Social Links</h3>
                                    <ul>
                                        <li>
                                            <i class="icofont-facebook"></i>
                                            <a href="https://www.facebook.com" target="_blank">https://www.facebook.com</a>
                                        </li>
                                        <li>
                                            <i class="icofont-instagram"></i>
                                            <a href="https://www.instagram.com" target="_blank">https://www.instagram.com</a>
                                        </li>
                                      
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="single-profile-item">
                            <div class="single-profile-right">
                                <div class="single-profile-name">
                                    <h2><?php echo $firstName?> <?php echo $lastName?></h2>
                                    <span>Web Consultant</span>
                                    <p>Bachelor of Business Administation university of Gable</p>
                                   
                                    

                                    <button  class="alert-success" name="viewCV"><a href="message.php?jsid=<?php echo $js_id; ?>"
                                    >Send Message</a></button>

                                   
                                    
                             

                                    <button class="alert-success">
                                <a download="<?php echo $filename; ?>" href="../resource/CV/<?php echo $filename; ?>">Download</a>
                            </button>

                            
                         
                                   
                                </div>
                                <div class="single-profile-textarea">
                                    <div class="single-profile-heading">
                                        <span></span>
                                        <h3>Description</h3>
                                    </div>
                                    <div class="single-profile-paragraph">
                                        <p class="single-profile-p"><?php echo $wordwrapdescription?>
                                        <p>Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                    <div class="single-profile-heading">
                                        <span></span>
                                        <h3>Education</h3>
                                    </div>
                                    <div class="single-profile-paragraph">
                                        <ul>
                                            <li>PHD degree in Criminal Law at University of Gable Internatinal (2006)</li>
                                            <li>Master of Family Law  at University of Gable International  (2002)</li>
                                            <li>MBBS LLB (Hon’s) in  at University of Gable International (2002)</li>
                                            <li>Higher Secondary Certificate at Gable International collage  (1991)</li>
                                        </ul>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		</div>

    </section>

  <div class="control-sidebar-bg"></div>

</div>











<?php
include('includes/scripts.php');
?>


</body>

</html>