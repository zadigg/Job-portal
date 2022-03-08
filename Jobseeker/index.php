<?php
session_start();
// if(!isset($_SESSION['email']))
// die("<script>alert('data has been Deleted');</script>");

include('includes/header.php');
include('includes/navbar.php');
include('../connection/db.php');
include_once('../class/job.php');



?>

<!-- Search Query is in the Form -->
<link rel="stylesheet" href="../CSSJSFONT/style.css" href="./CSSJSFONT/style.css">


<!-- Custom style -->
<link href="CSSJSFONT/JOb list/css/style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" id="jssDefault" href="CSSJSFONT/JOb list/css/colors/green-style.css">
<style>
    .selectedit{
      width: 88.5%;
      height: 60px;
    }
    .selectedit option{
        width: 50%;
    }
    .button{
        background-color: #4CAF50;
        border: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }

    
   
</style>
    <main >

<section style="background-image: url('new.jpg'); " class="full-content">           <!-- -->
						<div class="ftco-search">
						
		            <div class="col-md-12 nav-link-wrap">
			            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			              <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find a Job</a>

			              

			            </div>
			          </div>
			          <div class="col-md-12 tab-wrap">
			            
			            <div class="tab-content p-4" id="v-pills-tabContent">

			              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
			              	<form action="index.php"  method="post" class="search-job">
			              		<div class="row">
			              			<div class="col-md">
			              				<div class="form-group">
				              				<div class="form-field">
				              					<div class="icon"><span class="icon-briefcase"></span></div>
								                <input type="text" name="key" id="key"  class="form-control" placeholder="eg. Garphic. Web Developer">
								              </div>
							              </div>
			              			</div>
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
				              					<div class="select-wrap">
						                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
						                      <select name="catagory" id="catagory" class="form-control" >
                                              <option  value=""> Select Catagory</option>

                                   <?php
                                   

                                        $role_catagory = new Job();
                                        $query = $role_catagory->roleCatagoryJobseekerSearchList();

                                    while ($row = mysqli_fetch_array($query)){
                                     ?>   
                                    <option  value="<?php $row['role_id']; ?>"> <?php echo $row['role_cata']; ?></option>
                                <?php    
                                }
                                ?>
						                   
						                        
						                      </select>
						                    </div>
								              </div>
							              </div>
			              			</div>
			              		
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
								                <input type="submit" value="Search" name="search" id="search" class="form-control btn btn-primary">
								              </div>
							              </div>
                                      </div>
                                      
                                      
			              		</div>
                              </form>
                            
                           <?php 
                                    

                                    if (isset($_POST['search'])) {
                                      $keyword=$_POST['key'];
                                      $catagory=$_POST['catagory'];
                                     
                                    
                                      $jobsearch = new Job();
                                      $searchquery = $jobsearch->jobSearch($keyword,$catagory);

                                  ?>
                                  <?php 

                              while ($row=mysqli_fetch_array($searchquery)) {  ?>
                              <form method="POST" action="Applyjob.php?id=<?php echo $row['job_id'];?>"> <!-- the "job_id" is from job keza it redirected it to Applyjob.php so i can compare the empl id and job id when the jobid = kezi value gar-->
                    
                                
                              <div class="item-click"  id="id_all_jobs">
                        <article>
                            <div class="brows-job-list" >
                                <div class="col-md-6 col-sm-6">
                                    <div class="item-fl-box">
                                        <div class="brows-job-company-img">
                                            <a href="job-detail.html"><img src="../resource/employerPicture/<?php echo $row['company_image']?>"
                                                    class="img-responsive" alt="" /></a>
                                        </div>
                                        <div class="brows-job-position">
                                            <h3><?php echo $row['job_name'] ; ?></h3>
                                            <p> 
                                                <span><a href="CheckCompanyProfile.php?company_name=<?php echo $row['company_name'];?>"> <?php echo $row['company_name'] ; ?> </a></span><span class="brows-job-sallery"><i
                                                        class="fa fa-money"></i><?php echo $row['salary'] ; ?></span>
                                                <span class="job-type cl-success bg-trans-success">Full Time</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="brows-job-location">
                                        <p><i class="fa fa-map-marker"></i><?php echo $row['address'] ; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="brows-job-link">

                                        <button type="submit" class="btn btn-default">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                            <span class="tg-themetag tg-featuretag">Premium</span>
                        </article>
                    </div>
                              </form>
                    <?php }  ?>
                    
                    <!-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
      </div>
      <br>
                        
    </section>

    </div>
<?php } ?>
 
                   
                </div>
            </div>
        </div>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
      
    



    </main>

 
</body>


</html>
<?php

include('../includes/footer.php');
include('includes/scripts.php');

?>
