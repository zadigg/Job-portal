<?php
session_start();
include('includes/headeremployer.php');


?>

<?php 
  include('class/account.php');
  if (isset($_POST['submit'])) {

    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    $eLogin = new Account();
    $eLogin-> employerLogin($email, $pass);

    // var_dump($query);
    // if ($query == true) {
    //     if (mysqli_num_rows($query) >0) {
    //       $_SESSION['email']= $email;
    //       header('location:Jobseeker/index.php');
    //     }else{
    //       echo "<script>alert('Email or password is  incorrect ,Please try again')</script>";
    //     }
    // }
  }


?>

    <main>

        <!-- slider Area Start-->
        <section>
            <div class="bg-img">
              <form  id="login" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="login"  class="container">
                <br>
                
                <h1>Login</h1>
            
            
                
                  <label for="inputEmail" >Email address</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
            <br>
                  <label for="inputPassword" >Password</label>
                  <input type="password" name="pass"  id="pass" class="form-control" placeholder="Password" required>

            
                  <input class="btn-lg btn-success btn-block" name="submit" id="submit" type="submit" placeholder="sign in">
              </form>
              <br>
              <p class="text-center" >Dont have an account? <a href="signup.php" class="text-secondary" >Sign Up </a></p>
            </div>
            
            </section>
</main>
<?php

include('includes/footer.php');
include('includes/scripts.php');

  ?>
    </body>
</html>