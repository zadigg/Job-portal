<?php

   include_once("database.php");
   class Job extends Database{

    //search job
    //apply
    //view job-
    public function roleCatagoryJobseekerSearchList(){

        $qu = "select * from role_catagory";
       
        $query = mysqli_query($this->con, $qu);

        if(mysqli_num_rows($query) > 0){
            return $query;
        }else{
            return null;
        }
    }

    public function jobSearch($keyword,$catagory){

        
        $qu="select * from jobs LEFT JOIN  employer ON jobs.employer_id = employer.id WHERE job_name LIKE '%$keyword%' OR role_catagory='$catagory' ";
       
        $query1 = mysqli_query($this->con, $qu);

        if(mysqli_num_rows($query1) > 0){
            return $query1;
        }else{
            return null;
        }
    }

    public function viewJob($id){
        $qu = "select * from jobs LEFT JOIN  employer ON jobs.employer_id = employer.id where job_id='$id' ";
        $query = mysqli_query($this->con, $qu);

        if(mysqli_num_rows($query) > 0){
            return $query;
           
            
        }else{
            return null;
        }
    }
    //
    //
    public function applyJob($cm_name,$sessionJsEmail,$job_id, $jobposted){

        // keapplyjob call sareg session eyaschegere nw ena bezi check enaregewalen aza karege
        // echo "<script>alert('$cm_name');</script>";
        // echo "<script>alert('$sessionJsEmail');</script>";
        // echo "<script>alert('$job_id');</script>";


        $query = mysqli_query($this->con,"select id from employer WHERE company_name='$cm_name' ");

        $query1 = mysqli_query($this->con,"select job_id from jobs WHERE job_id='$job_id' ");

        $query2 = mysqli_query($this->con,"select js_id from jobseeker WHERE email='$sessionJsEmail' ");

        $rowCompany = mysqli_fetch_array($query);
        $rowJob = mysqli_fetch_array($query1);
        $rowJs = mysqli_fetch_array($query2);

        $company_id = $rowCompany['id'];
        $postedJob_id=$rowJob['job_id'];
      
        $jobseeker_id=$rowJs['js_id'];

        if($query && $query1 && $query2 ){

            $checkApply = mysqli_query($this->con,"select * from applied_job WHERE js_id='$jobseeker_id' AND job_id = '$postedJob_id' AND em_id = '$company_id' ");
            $checkApplyResults = mysqli_fetch_array($checkApply);
            $emIdChecked = $checkApplyResults['em_id'];
            $jsIdChecked = $checkApplyResults['js_id'];
            $jobIdChecked = $checkApplyResults['job_id'];
            
            if($company_id === $emIdChecked && $postedJob_id === $jobIdChecked && $jobseeker_id === $jsIdChecked){
                
                $resultAlert = '<div class="alert alert-danger"> you already applied to this Job</div>';
                            echo "$resultAlert";
            } else {
            $addAppliedJobs = mysqli_query($this->con,"insert into applied_job(em_id, job_id, js_id,appliedDate)values('$company_id','$postedJob_id','$jobseeker_id',' $jobposted')");
                        
                    if($addAppliedJobs){
                        
                            echo "<script>alert('You applied to this Job');</script>";
                            // $resultAlert = '<div class="alert alert-success"> you applied to this job </div>';
                            
                            // echo "$resultAlert";
                     
                            echo "<script>window.location='applyjob.php?id=$job_id'</script>";

                           


                           
                        }
                        else{
                            echo "<script>alert('You cant apply to this Job');</script>";
                        }  
                    }
                }
            
                
 
     else{
         echo "<script>alert('Your query is not right ');</script>";
     }  
       }
  //
  //

  
  public function applyJobWithCV($cm_name,$sessionJsEmail,$job_id, $jobposted,$cvid){

    // keapplyjob call sareg session eyaschegere nw ena bezi check enaregewalen aza karege
    // echo "<script>alert('$cm_name');</script>";
    // echo "<script>alert('$sessionJsEmail');</script>";
    // echo "<script>alert('$job_id');</script>";
    $query2 = mysqli_query($this->con,"select js_id from jobseeker WHERE email='$sessionJsEmail' ");
    $rowJs = mysqli_fetch_array($query2);
    $jobseeker_id=$rowJs['js_id'];


    $queryCheckCV = mysqli_query($this->con,"select * from cv WHERE js_id='$jobseeker_id' ");
    if(mysqli_num_rows($queryCheckCV) <= 0){
        echo "<script>alert('You must upload your cv');</script>";
    

    }else{


    $query = mysqli_query($this->con,"select id from employer WHERE company_name='$cm_name' ");
    $query1 = mysqli_query($this->con,"select job_id from jobs WHERE job_id='$job_id' ");
    $query3 = mysqli_query($this->con,"select cv_id from cv WHERE cv_id='$cvid' ");


    $rowCompany = mysqli_fetch_array($query);
    $rowJob = mysqli_fetch_array($query1);
    $rowCvId = mysqli_fetch_array($query3);

    $company_id = $rowCompany['id'];
    $postedJob_id=$rowJob['job_id'];
    $cv_id=$rowCvId['cv_id'];

    if($query && $query1 && $query2 && $query3){

        $checkApply = mysqli_query($this->con,"select * from applied_job WHERE js_id='$jobseeker_id' AND job_id = '$postedJob_id' AND em_id = '$company_id' AND cv_id = '$cv_id'  ");
        $checkApplyResults = mysqli_fetch_array($checkApply);
        $emIdChecked = $checkApplyResults['em_id'];
        $jsIdChecked = $checkApplyResults['js_id'];
        $jobIdChecked = $checkApplyResults['job_id'];
        $cvIdChecked = $checkApplyResults['cv_id'];

        
        if(mysqli_num_rows($checkApply) >= 1){
            echo "<script>alert('You already applied to this job');</script>";
        } else {
        $addAppliedJobs = mysqli_query($this->con,"insert into applied_job(em_id, job_id, js_id,cv_id,appliedDate)values('$company_id','$postedJob_id','$jobseeker_id','$cvid',' $jobposted')");
                    
                if($addAppliedJobs){
                    
                    
                    echo "<script>window.location='applyjob.php?id=$job_id'</script>"; 
                    echo "<script>alert('You applied to this job');</script>";
                    }
                    else{
                        echo "<script>alert('You cant apply to this Job');</script>";
                    }  
                }
            }
        
            

 else{
     echo "<script>alert('Your query is not right ');</script>";
 }  

}

}



public function SaveJobs($js_id, $job_id,$dateSaved){

    $query = mysqli_query($this->con,"INSERT INTO saved_jobs(js_id, job_id,saved_date)VALUES('$js_id','$job_id','$dateSaved')");

    if($query){
     echo "<script>alert('You saved the Job');</script>";
  
 }
 else{
     echo "<script>alert('some errorrr please try again');</script>";
 }  
   }
   //
   // kezi behuala yalew candidate job lay yaluten lemawtat nw

   public function viewJobAppliers($em_id){

    $queryJobAppliers = mysqli_query($this->con,"select * from jobs WHERE employer_id='$em_id'");

    if($queryJobAppliers){
    return $queryJobAppliers;
  
 }
 else{
     echo "<script>alert('some errorrr please try again');</script>";
 }  
   }
   //
   //
   public function viewManageJob($job_id){

    $queryJobAppliers = mysqli_query($this->con,"select * from jobs WHERE job_id='$job_id'");

    if($queryJobAppliers){
    return $queryJobAppliers;
  
 }
 else{
     echo "<script>alert('some errorrr please try again');</script>";
 }  
   }


//
//

public function deleteManageJob($delete){

        
    $query = mysqli_query($this->con,"DELETE FROM `jobs` WHERE job_id ='$delete'");
     

    if($query){
      
        echo "<script>alert('data has been Deleted');</script>";
     
        
    }
    else{
        echo "<script>alert('some error please try again');</script>";
        echo  " <script>alert('$delete');</script>";
    }  
   }



    }
    
?>





