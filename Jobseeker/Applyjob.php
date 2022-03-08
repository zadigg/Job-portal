<?php
session_start();
include('includes/headeraffected.php');
include('includes/navbar.php');


include('../class/job.php');
include('../class/File.php');


?>
<?php 
                
              

                $js_id = $_SESSION['JS']['js_id'];
                $job_id=$_GET['id'];

                $vJob = new Job();
                $query = $vJob->viewJob($job_id);

                $checkCV = new File();
                $checkedCV = $checkCV->applyWithCV($js_id);
                $checkCVOut = mysqli_fetch_array($checkedCV);
                $cvid = $checkCVOut['cv_id']; 

              
                while ($row=mysqli_fetch_array($query)) {

               $profilePicture = $row['company_image'];
                $job_name=$row['job_name'];
                $address=$row['address'];
                $city=$row['city'];
                $region=$row['region'];
                $cm_name=$row['company_name'];
                $salary=$row['salary'];
                $role_catagory = $row['role_catagory'];
                // $job_type=$row['jobtype_id']; jobtype_id a Fk on a job and i dont know how to call the value
                $address=$row['address'];
                $city=$row['city']; 
                $gender=$row['gender']; 
                
                $region=$row['region'];
                $phone=$row['phone']; 
                $degreelvl=$row['degreelvl']; 
               

                
                $experiance=$row['experiance'];
                $job_description=$row['job_description']; 


                $wrappedJobDescription = wordwrap($job_description, 8, "\n", true);


                
                   


             
              //employer job post meserat alebet miknyatum hule admin post silemiyareg eyetegachew nw

                }

                if(isset($_POST["applyjob"])){


                    //i get the the 3 variables value from the viewJob object
                    $jobposted = date('Y-m-d');
                    $cm_name =  $cm_name;
                   
                    $email = $_SESSION['email'];
                    $job_id = $job_id;

                


                    $appJob = new Job();
                    $appJob->applyJob($cm_name,$email,$job_id, $jobposted);//
                
                }
                
                //
                //


               
                if(isset($_POST["applyWithCv"])){

                    
               
                        
                   
                        // echo "<script>alert('$cvid');</script>";
                    $jobposted = date('Y-m-d');
                    $cm_name =  $cm_name;
                   
                    $email = $_SESSION['email'];
                    $job_id = $job_id;

                


                    $appJob = new Job();
                    $appJob->applyJobWithCV($cm_name,$email,$job_id, $jobposted,$cvid);
                    
                
                }
                //
                //

                if(isset($_POST["savejob"])){


                    //i get the the 3 variables value from the viewJob object
                 
                    $js_id = $_SESSION['JS']['js_id'];
                    $job_id = $job_id;

                    $dateSaved = date('Y-m-d');
                  


                    $saveJob = new Job();
                    $saveJob->SaveJobs($js_id,$job_id,$dateSaved);//
                
                }
      ?>


<link rel="stylesheet"         href="CSSJSFONT/CandidateList2/plugins/css/plugins.css">
<link rel="stylesheet"         href="CSSJSFONT/CandidateList2/css/style.css">
<script type="text/javascript" src="CSSJSFONT/CandidateList2/plugins/js/jquery.min.js"></script>
<script type="text/javascript" src="CSSJSFONT/CandidateList2/plugins/js/bootstrap.min.js"></script>
<style>
    .btn-primary {
        -moz-transition-duration: 0.4s;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }

    .btn-primary:hover {
        background-color: #4CAF50;
        /* Green */
        color: white;
    }
</style>

</head>


<div class="Loader"></div>
<div class="wrapper">

    <!-- Start Navigation -->

    <!-- End Navigation -->
    <div class="clearfix"></div>

    <!-- Title Header Start -->
    <section class="inner-header-title">
        <div class="container">
            <h1>Job Detail</h1>
        </div>
    </section>
    <div class="clearfix"></div>

   
<form method="post" >
    <section class="detail-desc">
        <div class="container">

            <div class="ur-detail-wrap top-lay">

                <div class="ur-detail-box">

                    <div class="ur-thumb">
                        <img src="../resource/employerPicture/<?php echo $profilePicture;?>" class="img-responsive" alt="" />
                    </div>
                    <div class="ur-caption">
                        <h4 class="ur-title"><?php echo $job_name; ?></h4>
                        <p class="ur-location"><i
                                class="ti-location-pin mrg-r-5"></i><?php echo "$city; &nbsp  $address; &nbsp   $region;"  ?>
                        </p>
                        <span class="ur-designation"><i class="ti-home mrg-r-5"></i><?php echo $cm_name; ?></span>
                    </div>

                </div>

                

                <div class="ur-detail-btn">
                    <button type="submit" name="applyjob" id="applyjob" href="javascript:void(0)" data-toggle="modal" data-target="#apply-job"
                        class="btn btn-warning mrg-bot-10 full-width"><i class="ti-plus mrg-r-5"></i>Apply This
                        Job</button>

                        <button type="submit" name="applyWithCv" id="applyWithCv" href="javascript:void(0)" data-toggle="modal" data-target="#apply-job"
                        class="btn btn-warning mrg-bot-10 full-width"><i class="ti-plus mrg-r-5"></i>Apply With CV</button>


                       

                        <br>
                        <button type="submit" name="savejob" id="savejob" href="javascript:void(0)" data-toggle="modal" data-target="#save-job"
                        class="btn btn-primary mrg-bot-10 full-width"><i class="ti-save mrg-r-5"></i>Save This
                        Job</button>

                        
                </div>
                

            </div>

        </div>
    </section>

    <!-- Job full detail Start -->
    <section class="full-detail-description full-detail">
        <div class="container">
            <!-- Job Description -->
            <div class="col-md-8 col-sm-12">
                <div class="full-card">

                    <div class="row row-bottom mrg-0">
                        <h2 class="detail-title">Job Detail</h2>
                        <ul class="job-detail-des">
                            <li><span>Salary:</span><?php echo $salary; ?></li>
                            <li><span>Company:</span><?php echo $cm_name; ?></li>
                            <li><span>Role Category:</span><?php echo $role_catagory; ?></li>
                            <li><span>Role:</span>Product Designer</li>
                            <li><span>Job Type:</span>Full Time</li>
                        </ul>
                    </div>

                    <div class="row row-bottom mrg-0">
                        <h2 class="detail-title">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</h2>
                        <ul class="job-detail-des">
                            <li><span>Address:</span><?php echo $address; ?></li>
                            <li><span>City:</span><?php echo $city; ?></li>
                            <li><span>Gender:</span><?php echo $gender; ?></li>
                            <li><span>Region:</span><?php echo $region; ?></li>
                            <li><span>Degree Level:</span><?php echo $degreelvl; ?></li>
                            <li><span>Telephone:</span><?php echo $phone; ?></li>
                            <li><span>Experiance:</span><?php echo $experiance; ?></li>

                        </ul>
                    </div>

                    <div class="row row-bottom mrg-0">
                        <h2 class="detail-title">Job Description</h2>
                        <br>
                        
                        <p><?php echo $wrappedJobDescription; ?> </p>
                    </div>
                </div>
            </div>
            <!-- End Job Description -->

            <!-- Start Sidebar -->
            <div class="col-md-4 col-sm-12">
                <div class="sidebar right-sidebar">

                    <!-- Job Alert -->
                    <!-- <a href="javascript:void(0)" class="btn btn-info full-width mrg-bot-20" data-toggle="modal" data-target="#job-alert">Get Job Alert!</a> -->
                    <!-- /Job Alert -->

                    <div class="side-widget">
                        <h2 class="side-widget-title">Job Overview</h2>
                        <div class="widget-text padd-0">
                            <div class="ur-detail-wrap">
                                <div class="ur-detail-wrap-body padd-top-20">
                                    <ul class="ove-detail-list">

                                        <li>
                                            <i class="ti-wallet"></i>
                                            <h5>Offerd Salary</h5>
                                            <span><?php echo $salary?></span>
                                        </li>

                                        <li>
                                            <i class="ti-user"></i>
                                            <h5>Gender</h5>
                                            <span><?php echo $gender?></span>
                                        </li>

                                        <li>
                                            <i class="ti-ink-pen"></i>
                                            <h5>Degree Level</h5>
                                            <span><?php echo $degreelvl?></span>
                                        </li>

                                        <li>
                                            <i class="ti-home"></i>
                                            <h5>company name</h5>
                                            <span><?php echo $cm_name?></span>
                                        </li>

                                        <li>
                                            <i class="ti-shield"></i>
                                            <h5>Experience</h5>
                                            <span><?php echo $experiance?></span>
                                        </li>

                                        <li>
                                            <i class="ti-book"></i>
                                            <h5>Qualification</h5>
                                            <span>Master Degree</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="statistic-item flex-middle">
                        <div class="icon text-theme">
                            <i class="ti-time theme-cl"></i>
                        </div>
                        <span class="text"><span class="number">2 months</span> ago</span>
                    </div>

                    <div class="statistic-item flex-middle">
                        <div class="icon text-theme">
                            <i class="ti-zoom-in theme-cl"></i>
                        </div>
                        <span class="text"><span class="number">1742</span> Views</span>
                    </div>

                    <div class="statistic-item flex-middle">
                        <div class="icon text-theme">
                            <i class="ti-write theme-cl"></i>
                        </div>
                        <span class="text"><span class="number">17</span> Applicants</span>
                    </div>

                    <!-- Say Hello -->


                </div>
                <!-- /Say Hello -->

            </div>
        </div>
        <!-- End Sidebar -->
    </div>
    </section>
  </form>

  <!-- modal start -->
 
    <!-- <div id="chooseCV" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="Applyjob.php?id=<?php echo $job_id; ?>">
                    <div class="modal-header theme-bg">
                        <h4 class="modal-title">Choose CV</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div >
                            <select class="form-group" name="cvName" id="cvName">
                            <option>Choose CV</option>
									<?php 
												
													
								while ($cvList=mysqli_fetch_array($listedCV)) { ?>
									<option value="<?php echo $cvList['filename']; ?>"><?php echo $cvList['filename']; ?></option>

								<?php    }   ?>

                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" name="applyWithCv" id="applyWithCv" class="btn btn-success" value="Apply With CV">
                    </div>
                </form>
            </div>
        </div>
    </div> -->
    </div>

    <!-- modal end -->
</main><?php
include('includes/footer.php');
include('includes/scripts.php');


?>
 
 <script>  
 $(document).ready(function(){  
      $('#applyWithCv').click(function(){  
           var cvName = $('#cvName').val();  
        
           if(cvName != '')  
           {  
                $.ajax({  
                     url:"Applyjob.php",  
                     method:"POST",  
                     data: {cvName:cvName},  
                     success:function(data)  
                     {  
                          //alert(data);  
                          if(data == 'No')  
                          {  
                               alert("You have to select a CV");  
                          }  
                          else  
                          {  
                               $('#chooseCV').hide();  
                               location.reload();  
                          }  
                     }  
                });  
           }  
           else  
           {  
                alert("CV is required");  
           }  
      });  
     
 });  
 </script>  
