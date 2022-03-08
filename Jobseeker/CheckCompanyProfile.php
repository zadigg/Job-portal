<?php
session_start();
// if(!isset($_SESSION['email']))
// die("<script>alert('data has been Deleted');</script>");

include('includes/header.php');
include('includes/navbar.php');
include('../connection/db.php');
include_once('../class/view.php');
include_once('../class/comment.php');



?>

<?php

$comapnyName =  $_GET['company_name'];

$jobseekerId = $_SESSION['JS']['profilePicture'];

$checkCOmpanyProfile  = new view();
$company_profile = $checkCOmpanyProfile-> checkCompanyProfile($comapnyName);

while($rowCompanyProfile = mysqli_fetch_array($company_profile)){

     //image is not loading so maybe i would do it as Jo says 
     $Company_profilePicture = $rowCompanyProfile['company_image'];
     $Company_name = $rowCompanyProfile['company_name'];
     $owner_name = $rowCompanyProfile['owner_name'];
     $phone = $rowCompanyProfile['phone_number'];
     $email = $rowCompanyProfile['email'];
     $address = $rowCompanyProfile['address'];
     $noe = $rowCompanyProfile['numberofemployees'];
     $established = $rowCompanyProfile['Established'];

     $aboutComp = $rowCompanyProfile['about_company'];

     $wrappedCompanyDescription = wordwrap($aboutComp, 22, "\n", true);  // about company kedatabase fetch karege behuala lelaw content lay eyeweta so wordwrap fuction solved it


}

?>


<?php

    $cname = new Comment();
    $companyIdFromDatabase = $cname->checkEmployerIDforthePostedComment($Company_name);
    $em_id = $companyIdFromDatabase;
if(isset($_POST["postcomment"])){


    

    $js_id = $_SESSION['JS']['js_id'];
  
    $comment = $_POST["commentText"];
   
    $jobcommentedDate = date('Y-m-d');

    $jobcommentedHour = date('H:i:A');


    $commentPost = new Comment();
    $commentPost->postComment($js_id,$em_id,$comment,$jobcommentedDate,$jobcommentedHour);
 
  
}



$viewComment = new Comment();
$comments = $viewComment->viewCommentPerCompany($em_id);
?>


<!--CHeck company profile-->
<link rel="stylesheet" href="CSSJSFONT/Check company  profile/plugins/css/plugins.css">
<link rel="stylesheet" href="CSSJSFONT/Check company  profile/css/style.css">
<link rel="stylesheet" href="CSSJSFONT/Check company  profile/css/colors/green-style.css">

<link rel="stylesheet" href="./csskotet/comment.css">



<script src="../jquery-3.5.1.js"></script>




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
                            <a class="comment-img" href="#non">
                                <img src="../resource/employerPicture/<?php echo $Company_profilePicture;?>"  alt="" width="50" height="50">
                            </a>
                            <div class="comment-body">

                            <form action=""  name = "jobpost" onsubmit = "return validateform()" method="post" >
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <input type="text" name="commentText" id="commentText" class="form-control">
                                    </div>
                                    <div class="btn-group ">
                                        <button type="submit" name="postcomment" id="postcomment" href="#"  class="btn btn-primary">POST</button>

                                    </div>

                                </div>
                            </form>


                            <?php

                                while($rowComments = mysqli_fetch_array($comments)){
                                 
                                  
                                
                            ?>
                            
                                <article class="comment">
                                    <a class="comment-img" href="#non">
                                        <img src="../resource/jobseekerPicture/<?php echo $jobseekerId?>" alt="" width="50" height="50">
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
    </section>


    </main>


    </body>


    </html>
    <?php

include('../includes/footer.php');
include('includes/scripts.php');

?>