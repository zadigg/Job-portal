<?php
   include_once("database.php");
   class Employer extends Database{

      
    public function employerPostJob($job_name,$login,$role_catagory,
    $salary,$gender,$address,$city,$region,$phone,$Educational_Level,$experiance,$job_description,$keyword,$jobtype,$deadline,$jobpost, $rolecata, $regionFK, $employer_id){

     
     $query = mysqli_query($this->con,"insert into jobs(job_name,company_email, role_catagory,salary,gender,address,city, 
     region,phone,degreelvl,experiance,job_description,keyword,role_catagory_id,jobtype_id, deadline, jobposted, region_FK, employer_id)values('$job_name','$login','$role_catagory','$salary','$gender','$address','$city'
                                                             ,'$region','$phone','$Educational_Level','$experiance','$job_description','$keyword','$rolecata','$jobtype','$deadline','$jobpost','$regionFK','$employer_id')");

     if($query){
        $jobposted = date('Y-m-d H:i:s');
         echo "<script>alert('New job is added');</script>";
         echo "<script>window.location='index.php'</script>";
     }
     else{
       
         echo "<script>alert('some error please try again');</script>";
     }  
    }
    //
    //
  
    
    public function employerEditPostedJob($job_name,$role_cata,$salary,$gender,$address,
    $city,$regionFK,$phone,$Educational_Level,$experiance,$job_description,$deadline,$job_id){

     

      

         $query = mysqli_query($this->con, "update jobs set job_name='$job_name', role_catagory='$role_cata' , salary='$salary', gender='$gender', 
        address='$address', city='$city', region='$regionFK', phone='$phone', degreelvl='$Educational_Level',
         experiance='$experiance' , job_description='$job_description', deadline = '$deadline' where job_id='$job_id'");

     if($query){
        
         echo "<script>alert('Job is Updated');</script>";
         echo "<script>window.location='managejob.php'</script>";
     }
     else{
       
         echo "<script>alert('Your query is not right');</script>";
     }  
    }

    //
    //
    public function employerManageCandidate($em_id){

     
     $query = mysqli_query($this->con,"select * from applied_job where em_id = '$em_id'");
     $rowapplyers = mysqli_fetch_array($query);
     if($query){
                    if(mysqli_num_rows($query)  > 0){
                                    $employer_id = $rowapplyers['em_id'];
                                    $jobseeker_id = $rowapplyers['js_id'];

                                    echo "<script>alert('$employer_id');</script>";
                                    $queryapplyers = mysqli_query($this->con,"select * from jobseeker where js_id = '$jobseeker_id'");
                                    if($queryapplyers){
                                        return $queryapplyers;
                                    } 
                                    else{
                                        echo "<script>alert('There user is not in our system anymore');</script>";
                                    }
                        }
                        else{
                            echo "<script>alert('No one applied to your Job');</script>";
                        }
               }
   
     else 
     {
        echo "<script>alert('nudda');</script>";
     }

    }

    //

    //

    
    public function employerManageCandidatetwo($em_id){

        
        $query = mysqli_query($this->con,"select * from applied_job 
                                         LEFT JOIN jobseeker ON applied_job.js_id = jobseeker.js_id 
                                         LEFT JOIN jobs ON applied_job.job_id = jobs.job_id
                                         where em_id = '$em_id'  ");
       

        if($query){
           
            
            return $query;
        }
        else{
            echo "<script>alert('your query is not right');</script>";
        }
   
       }
       //
       // esket ketay comment dires sile send messgae enaregalen the function

       public function receieveJsIdForMsg($email){   // this is for the employer to get the jobseeker id using the gmail

        
        $query = mysqli_query($this->con,"select * from jobseeker 
                                         where email = '$email'  ");
       
        if($query){
            return $query;
        }
        else{
            echo "<script>alert('your query is not right');</script>";
        }
   
       }
       //
       //

       public function sendMsg($subject, $message, $emp_id, $js_id){   // this is for the employer to get the jobseeker id using the gmail

        
        $query = mysqli_query($this->con,"insert into message(subject,message, emp_id,js_id)
                                          values('$subject','$message','$emp_id','$js_id')");
   
       
        if($query){
            echo "<script>alert('Message Has been Sent');</script>";
           
            echo "<script>window.location='managecandidate.php'</script>";

        
        }
        else{
            echo "<script>alert('your query is not right');</script>";
        }
   
       }
//
// eziga yecandidate profile data minametabet 

public function viewCandidateProfile($js_id){   // this is for the employer to get the jobseeker id using the gmail

        
    $candidateQuery = mysqli_query($this->con,"select * from jobseeker 
                                     where js_id = '$js_id'  ");
   
    if($candidateQuery){
        return $candidateQuery;
    }
    else{
        echo "<script>alert('your query is not right');</script>";
    }

   }
   //
   //

   public function updateEmployerDetail($cname,$oname,$phone,$email,$address,$nemployee,$ABout_company,$id){   // this is for the employer to get the jobseeker id using the gmail

        
    $query1=mysqli_query($this->con,"update employer set company_name ='$cname',owner_name='$oname', phone_number='$phone', email='$email', address='$address',
    numberofemployees='$nemployee', about_company='$ABout_company'  where id='$id'");
           
    if ($query1) {
             echo "<script>alert('Record has been Updated successfully  !!!!')</script>";
              echo "<script>window.location='editEmployer.php'</script>";

           }else{
             echo "<script>alert('some error Please try again  !!!!')</script>";
           }
          }
          //
          //

          public function jobSearch($keyword,$em_id){

        
  
           
            $query1 = mysqli_query($this->con, "select * from jobs  WHERE job_name LIKE '$keyword%' AND employer_id='$em_id'");
    
            if($query1){
                return $query1;
                

            }else{
                echo "<script>alert('No job with such a name  !!!!')</script>";
                echo "<script>alert('$em_id')</script>";

            }
        }

        //
        //

       

   }


       

?>