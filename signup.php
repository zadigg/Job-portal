<?php
include('includes/header.php');
include('class/account.php');

if(isset($_POST["submit"])){

  // echo "<script>alert('$filename')</script>";
  $temp = explode(".", $_FILES["file"]["name"]);
  $newFileName = round(microtime(true)) . '.' . end($temp);
  move_uploaded_file($_FILES["file"]["tmp_name"], "resource/jobseekerPicture/" . $newFileName);
  $filename = $newFileName;

  
  $fname = $_POST['first_name'];
  $lname = $_POST['last_name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $dob = $_POST['date_of_birth'];
  $pass = $_POST['pass'];
  $phone = $_POST['phone'];
  $country = $_POST['country'];
  $city = $_POST['city']; 


  $hashedPwdInDb = password_hash($pass,PASSWORD_DEFAULT);
  $signupJS = new Account();
  $signupJS->jobseekerSignUp($fname,$lname,$filename,$username,$email,$dob,$hashedPwdInDb,$phone,$country,$city);

}

?>
    <main>

        <!-- slider Area Start-->
        <section>
            <div class="bg-img">
              <form action="signup.php" enctype="multipart/form-data" class="container" method="post">
                <br>
                
                <h1>Login</h1>
            
                <label for="photo"><b>Profile Picture</b></label>
                <input type="file" name="file" id="photo" required>
<br>
                <label for="First_name"><b>First name</b></label>
                <input type="text" placeholder="Enter First_name" name="first_name" id="first_name" required>

                <label for="Last_name"><b>Last name</b></label>
                <input type="text" placeholder="Enter Last_name" name="last_name" id="last_name" required>

                <label for="username"><b>username</b></label>
                <input type="text" placeholder="username" name="username" id="username" required>

                
                <label for="Email"><b>Email</b></label>
                <input type="email" class="form-control"  placeholder="email" name="email" id="email" required>
<br>
                <label for="date"><b>Date of birth</b></label>
                <input type="date" class="form-control" placeholder="Enter date of birth" name="date_of_birth" id="date_of_birth" required>
                <br>

                <label for="password"><b>Password</b></label>
                <input type="text" placeholder="Enter Password" name="pass" id="pass" required>
     
                <label for="Phone number"><b>Phone Number</b></label>
                <input type="text" placeholder="Enter Phone_number" name="phone" id="phone" required>

                <label for="country"><b>Country</b></label>
                <input type="text" placeholder="Enter country" name="country" id="country" required>

                <label for="city"><b>City</b></label>
                <input type="text" placeholder="city" name="city" id="city" required>

            
                <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="sign Up">
              </form>
             
            </div>
            
            </section>
</main>

<?php

include('includes/footer.php');
include('includes/scripts.php');

  ?>
    </body>
</html>

