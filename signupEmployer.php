<?php
include('includes/headeremployer.php');


include_once('class/account.php');

if(isset($_POST["submit"])){

    $temp = explode(".", $_FILES["file"]["name"]);
    $newFileName = round(microtime(true)) . '.' . end($temp);
    move_uploaded_file($_FILES["file"]["tmp_name"], "resource/employerPicture/" . $newFileName);
    $company_image = $newFileName;


  $company_name = $_POST['company_name'];
  $owner_name = $_POST['owner_name'];
  $phone_number = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $numberofemployees = $_POST['Number_of_employees'];
  $est = $_POST['established']; 

  $about_company = $_POST['aboutcompany']; 
     
  $password = $_POST['password'];    

  $hashedPwdInDb = password_hash($password,PASSWORD_DEFAULT);

$signupemployer = new Account();
  $signupemployer->employerSignUp($company_image, $company_name, $owner_name,$phone_number,$email,$address,$numberofemployees, $est, $about_company, $hashedPwdInDb);//-> this helps to call a class function using an that classes object
}


?>

<main>

    <style>
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
    <!-- slider Area Start-->
    <section>
        <div class="site-section bg-light">
            <div>
                <div class="container">
                    <br>
                    <h3>We need some information to verify your account.</h3>

                    <form method="post" enctype="multipart/form-data" name="employerSignup">



                        <div class="form-row">
                            <div class="col-12 col-md-15" id="message">
                                <h2 class="h4">
                                    <br>
                                    <i class="fa fa-envelope"></i> Contact Us<small><small
                                            class="required-input">&nbsp;(*required)</small></small>
                                </h2>

                                <div class="form-row">
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-group">
                                            <label for="from-name">Company Image</label>
                                            <span class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-user-o"></i></span>
                                                </div>
                                                <label for="photo"><b>Profile Picture</b></label>
                                                 <input type="file" name="file" id="photo" required>     
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-group"><label for="from-name">Company Name</label><span
                                                class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                                                </div>
                                                <input class="form-control" type="text" name="company_name" required=""
                                                    placeholder="what is the name of your company" id="company_name">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-group"><label for="from-name">Owner name</label><span
                                                class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                                                </div>
                                                <input class="form-control" type="text" name="owner_name" required=""
                                                    placeholder="who is the owner?" id="owner_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-group"><label for="from-name">Phone</label><span
                                                class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                                                </div>
                                                <input class="form-control" type="text" name="phone" required=""
                                                    placeholder="Enter phone number " id="phone">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-group"><label for="from-name">email</label><span
                                                class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                                                </div>
                                                <input class="form-control" type="email" name="email" required=""
                                                    placeholder="Enter your email" id="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-group"><label for="from-name">Address</label><span
                                                class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                                                </div>
                                                <input class="form-control" type="text" name="address" required=""
                                                    placeholder="Enter Address " id="address">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-group"><label for="from-phone">Password</label><span
                                                class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="fa fa-phone"></i></span></div><input
                                                    class="form-control" type="text" name="password" required=""
                                                    placeholder="Enter your password" id="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-group"><label for="from-calltime">Number of employees</label>
                                            <div class="input-group">


                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="fa fa-phone"></i></span></div><input
                                                    class="form-control" type="text" name="Number_of_employees"
                                                    required="" placeholder="Enter number of employee"
                                                    id="Number_of_employees">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                        <div class="form-group"><label for="from-calltime">Established Date</label>
                                            <div class="input-group">


                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="fa fa-phone"></i></span></div>
                                                            <input class="form-control" type="date" name="established"   required=""  id="established">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"><label for="from-comments">ABout Company</label><textarea
                                        class="form-control" rows="5" name="aboutcompany" placeholder="Enter Comments"
                                        id="aboutcompany"></textarea></div>
                                <div class="form-group">
                                    <div class="form-row">

                                        <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit"
                                            value="sign Up">
                                    </div>
                                    <hr class="d-flex d-md-none">
                                </div>
                            </div>
                    </form>
                </div>

</main>

<?php
include('includes/footer.php');
include('includes/scripts.php');

?>