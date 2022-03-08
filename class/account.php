<?php
   include_once("database.php");
 
   class Account extends Database{

    public function employerSignUp($company_image, $company_name, $owner_name,$phone_number,$email,$address,$numberofemployees,$est, $about_company, $password){


        $queryCheck = mysqli_query($this->con, "SELECT email FROM employer WHERE email = '$email' ");
        $resultQuery = mysqli_fetch_array($queryCheck);
        $numRows = mysqli_num_rows($queryCheck);
        $fetchedEmail = $resultQuery['email'];
      
        if($numRows!=true){


            $query = mysqli_query($this->con,"insert into employer_temp(company_image, company_name, owner_name,phone_number,email,address,numberofemployees, 
            Established, about_company,password)values('$company_image','$company_name','$owner_name','$phone_number','$email','$address','$numberofemployees','$est','$about_company','$password')");
    
            if($query){
    
        
             echo "<script>alert('you will be informed when your application is accepted');</script>";
             echo "<script>window.location='index.php'</script>";
         }
         else{
             echo "<script>alert('some errorrr please try again');</script>";
         } 

        }   
        else{
            echo "<script>alert('There is an employer with the same Email');</script>";
        }
       }

       //
       //
       public function jobseekerSignUp($fname, $lname,$filename,$username, $email,$dob,$pass,$phone,$Country,$City){

        $queryCheck = mysqli_query($this->con, "SELECT email FROM jobseeker WHERE email = '$email' ");
   
        if(mysqli_num_rows($queryCheck) <= 0){


        $query = mysqli_query($this->con,"insert into jobseeker(fname, lname,profilePicture,username,email, dateofbirth,password,phone_number,Country,City)
                                          values('$fname','$lname','$filename','$username','$email','$dob','$pass','$phone','$Country','$City')");

        if($query){
         echo "<script>alert('You can now login');</script>";
         echo "<script>window.location='index.php'</script>";
     }
     else{
         echo "<script>alert('some errorrr please try again');</script>";
     }  
    }   
    else{
        echo "<script>alert('There is already a jobseeker with the same Email');</script>";
    }
       }
       //
       //

       public function employerLogin($email, $pass){

        $hashCheckQuery = mysqli_query($this->con,"select * from employer where email='$email'");
        $row = mysqli_fetch_array($hashCheckQuery);
        $hashedPass = $row['password'];


        $query = "select * from employer where email=? and password = ?";
        $stmt=$this->con->prepare($query);
        $stmt->bind_param('ss', $email,$hashedPass);
         $stmt->execute();
        $result = $stmt->get_Result();

        $row = mysqli_fetch_array($result);
$booleanChcek = password_verify($pass,$hashedPass);


if($booleanChcek){
    if(mysqli_num_rows($result) > 0){
        echo "<script> window.location='Employer1/index.php'</script>";
        $_SESSION['email'] = $email;
        $_SESSION['emp']['id'] = $row['id'];
        $_SESSION['emp']['phone'] = $row['phone_number'];
        $_SESSION['emp']['address'] = $row['address'];
        $_SESSION['emp']['cm_name'] = $row['company_name'];
        $_SESSION['emp']['profilePicture'] = $row['company_image'];


     
}
}else{
       
    echo "<script> window.alert('incorrect email and pass');</script>";
}   
        
       }
       //abelkibebe5@gmail.com
       //

       public function jobseekerLogin($email, $pass){

        $hashCheckQuery = mysqli_query($this->con,"select * from jobseeker where email='$email'");
        $row = mysqli_fetch_array($hashCheckQuery);

        $hashedPass = isset($row['password']) ? $row['password'] : 'null';
        if($row['password'] = null){
            echo "<script> window.alert('incorrect email and pass');</script>";
        }
        $query = "select * from jobseeker where email=? and password = ?";

        ////

                $stmt=$this->con->prepare($query);
                $stmt->bind_param('ss', $email,$hashedPass);
                $stmt->execute();
                $result = $stmt->get_Result();


        ////
        $booleanChcek = password_verify($pass,$hashedPass); 
        
    //    echo  "<script>alert($booleanChcek);</script>";
if($booleanChcek){
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0){
       echo "<script> window.location='jobseeker/index.php'</script>";
       $_SESSION['email']= $email;

       $_SESSION['JS']['js_id'] = $row['js_id'];
       $_SESSION['JS']['firstName'] = $row['fname'];
       $_SESSION['JS']['lastName'] = $row['lname'];
       $_SESSION['JS']['profilePicture'] = $row['profilePicture'];
       $_SESSION['JS']['DOB'] = $row['dateofbirth'];
       $_SESSION['JS']['Phone'] = $row['phone_number'];
       $_SESSION['JS']['username'] = $row['username'];
       $_SESSION['JS']['Country'] = $row['Country'];
       $_SESSION['JS']['City'] = $row['City'];
  
}
       

        }else{
            echo "<script> window.alert('incorrect email and pass');</script>";
        }
        
       }


       //this is where to change pass


       public function changePassword($js_id){

        $query = mysqli_query($this->con,"select password from jobseeker where js_id='$js_id'");

        
        $row = mysqli_fetch_array($query);
        $pass = $row['password'];
        if($query){
           return $pass;
           
      

        }else{
            echo "<script> window.alert('incorrect email and pass');</script>";
        }
        
       }
       //
       //


       public function changePasswordInsert($password, $js_id){


        $query = mysqli_query($this->con,"update jobseeker set password='$password' where js_id='$js_id'");
    

        if($query){
            echo "<script>alert('password has been changed successfully');</script>";
            echo "<script>window.location='EditProfile.php'</script>";
        }
        else{ 
            echo "<script>alert('your password change Query is not right ');</script>";
        }  

        
       }//
       //


       public function passwordCheckForEmployer($em_id){

        $query = mysqli_query($this->con,"select password from employer where id='$em_id'");
        $row = mysqli_fetch_array($query);
        $pass = $row['password'];
        if($query){
           return $pass;
           
      

        }else{
            echo "<script> window.alert('incorrect email and pass');</script>";
        }
        
       }

       //
       public function changePassworEmployerInsert($password, $em_id){


        $query = mysqli_query($this->con,"update employer set password='$password' where id='$em_id'");
    

        if($query){
            echo "<script>alert('password has been changed successfully');</script>";
        
        }
        else{ 
            echo "<script>alert('your password change Query is not right ');</script>";
        }  

        
       }
       //
       //

       public function employerEdit($em_id){


        $query = mysqli_query($this->con,"select * from employer where id='$em_id'");
    

        if($query){
            return $query;
        }
        else{ 
            echo "<script>alert('Your query is not right ');</script>";
        }  

        
       }

//
//


public function updateJsProfile($firstName,$lastName,$username,$email,$dob,$Phone,$Country,$City,$js_id){


    $query = mysqli_query($this->con,"update jobseeker set fname='$firstName', lname='$lastName',username='$username',
    email='$email',dateofbirth='$dob',phone_number='$Phone',Country='$Country',city='$City' where js_id='$js_id'");


    if($query){
        echo "<script>alert('your profile is updated successfully');</script>";
    
    }
    else{ 
        echo "<script>alert('your Query is not right ');</script>";
    }  

    
   }

   }
?>