<?php

   include_once("database.php");
   class view extends Database{

    //job seeker check Company profile
 
    public function checkCompanyProfile($company_name){

       
        
        $query = "select * from employer where company_name = '$company_name'";
        $queryCompanyProfile =  mysqli_query($this->con, $query);
        if($queryCompanyProfile){

            return $queryCompanyProfile;
     
            // $qu = "select * from role_catagory";
        }
        else{
            echo "<script> alert('nuhhh'); </script>";
        }
   
        // $qu = "select * from role_catagory";
       
        // $query = mysqli_query($this->con, $qu);

        // if(mysqli_num_rows($query) > 0){
        //     return $query;
        // }else{
        //     return null;
        // }
    }

 //
 //

 public function viewAppliedJob($js_id){


    // $appliedJobs = mysqli_query($this->con,"select * from applied_job where js_id='$js_id' ");
    // return  $appliedJobs;
    
    
    $appliedJobs = mysqli_query($this->con,"select * from applied_job 
                                     LEFT JOIN employer ON applied_job.em_id = employer.id 
                                     LEFT JOIN jobs ON applied_job.job_id = jobs.job_id  
                                      where js_id='$js_id' ");
    
                                    
    
                                     if($appliedJobs){
                                        
                                        return $appliedJobs;
                                    }
                                    else{
                                        echo "<script>alert('your query is not right');</script>";
                                    }
    }
    //
    //


    public function viewSavedJob($js_id){
        $appliedJobs = mysqli_query($this->con,"SELECT * FROM saved_jobs 
                                                LEFT JOIN jobs ON saved_jobs.job_id = jobs.job_id 
                                                LEFT JOIN employer ON jobs.employer_id = employer.id
                                                where js_id='$js_id' ");
        
                                        
        
                                         if($appliedJobs){
                                            
                                            return $appliedJobs;
                                        }
                                        else{
                                            echo "<script>alert('your query is not right');</script>";
                                        }
        }
        //
        //kezih betach yalut yemesasage view 

        public function viewEmail($js_id){
            $viewEmail = mysqli_query($this->con,"SELECT * FROM message 
                                                    where js_id='$js_id' ");
            
                                            
            
                                             if($viewEmail){
                                                
                                                return $viewEmail;
                                            }
                                            else{
                                                echo "<script>alert('your query is not right');</script>";
                                            }
            }

            

            public function knowSenderName($em_id){
                $viewComapny = mysqli_query($this->con,"SELECT company_name FROM employer 
                                                        where id='$em_id' ");
                
                                                
                
                                                 if($viewComapny){
                                                    
                                                    return $viewComapny;
                                                }
                                                else{
                                                    echo "<script>alert('your query is not right');</script>";
                                                }
                }



                public function viewMessageDescription($messageID){
                    $viewMessageDescription = mysqli_query($this->con,"SELECT * FROM message 
                                                            where message_id='$messageID'  ");
                    
                                                    
                    
                                                     if($viewMessageDescription){
                                                        
                                                        return $viewMessageDescription;
                                                    }
                                                    else{
                                                        echo "<script>alert('your query is not right');</script>";
                                                    }
                    }
                    //
                    //
                    //  kezi til the next comment employer mailbox miyabet

                    public function viewEmployerMailbox($em_id){
                        $viewEmailEmployer = mysqli_query($this->con,"SELECT * FROM message 
                                                                where emp_id='$em_id' ");
                        
                                                        
                        
                                                         if($viewEmailEmployer){
                                                            
                                                            return $viewEmailEmployer;
                                                        }
                                                        else{
                                                            echo "<script>alert('your query is not right');</script>";
                                                        }
                        }
                        //
                        //
                        public function receiverName($js_id){
                            $viewEmailEmployer = mysqli_query($this->con,"SELECT * FROM jobseeker 
                                                                    where js_id='$js_id' ");
                            
                                                            
                            
                                                             if($viewEmailEmployer){
                                                                
                                                                return $viewEmailEmployer;
                                                            }
                                                            else{
                                                                echo "<script>alert('your query is not right');</script>";
                                                            }
                            }
                            //
                            //

                            public function messageDetail($message_id){
                                $messageView = mysqli_query($this->con,"SELECT * FROM message 
                                                                        where message_id='$message_id' ");
                                
                                                                
                                
                                                                 if($messageView){
                                                                    
                                                                    return $messageView;
                                                                }
                                                                else{
                                                                    echo "<script>alert('your query is not right');</script>";
                                                                }
                                }
                                //
                                //

                                public function viewProfilePicture($profilePicture){
                                    $viewProfile = mysqli_query($this->con,"SELECT profilePicture FROM jobseeker 
                                                                            where profilePicture='$profilePicture' ");
                                    $fetchProfile = mysqli_fetch_array($viewProfile);
                                    $profileFileName = $fetchProfile['profilePicture'];
                                                                    
                                    
                                                                     if($viewProfile){
                                                                        
                                                                        return $profileFileName;
                                                                    }
                                                                    else{
                                                                        echo "<script>alert('your query is not right');</script>";
                                                                    }
                                    }
                                    //
                                    // view comment on employer

                                    public function viewCommentOnEmployer($em_id){
                                        $commentView = mysqli_query($this->con,"SELECT * FROM comment LEFT JOIN jobseeker ON comment.js_id = jobseeker.js_id
                                                                                where em_id='$em_id' ");
                                        
                                                                        
                                        
                                                                         if($commentView){
                                                                            
                                                                            return $commentView;
                                                                        }
                                                                        else{
                                                                            echo "<script>alert('your query is not right');</script>";
                                                                        }
                                        }
                                        //
                                        //candidate profile view CV

                                        public function candidateProfileViewCv($js_id){
                                            $viewCV = mysqli_query($this->con,"SELECT * FROM cv where js_id='$js_id' ");
                                            
                                                                            
                                            
                                                                             if($viewCV){
                                                                                
                                                                                return $viewCV;
                                                                            }
                                                                            else{
                                                                                echo "<script>alert('your query is not right');</script>";
                                                                            }
                                            }

                                            public function companyProfile($em_id){
                                                $viewProfile = mysqli_query($this->con,"SELECT * FROM employer where id ='$em_id' ");
                                                
                                                                                
                                                
                                                                                 if($viewProfile){
                                                                                    
                                                                                    return $viewProfile;
                                                                                }
                                                                                else{
                                                                                    echo "<script>alert('your query is not right');</script>";
                                                                                }
                                                }


                                                public function companyViewComments($em_id){
                                                    $viewComment = mysqli_query($this->con,"SELECT * FROM comment LEFT JOIN jobseeker ON comment.js_id = jobseeker.js_id where em_id ='$em_id' ");
                                                    
                                                                                    
                                                    
                                                                                     if($viewComment){
                                                                                        
                                                                                        return $viewComment;
                                                                                    }
                                                                                    else{
                                                                                        echo "<script>alert('your query is not right');</script>";
                                                                                    }
                                                    }

                                                    public function countPostedjobs($em_id){
                                                        $countJobsQuery = mysqli_query($this->con,"SELECT * FROM jobs where employer_id ='$em_id' ");
                                                        $countedJobs = mysqli_num_rows($countJobsQuery);
                                                                                        
                                                        
                                                                                         if($countJobsQuery){
                                                                                            
                                                                                            return $countedJobs;
                                                                                        }
                                                                                        else{
                                                                                            echo "<script>alert('your query is not right');</script>";
                                                                                        }
                                                        }//
                                                        //

                                                        public function countTotalJobAppliers($em_id){
                                                            $countJobsAppliers = mysqli_query($this->con,"SELECT * FROM applied_job where em_id ='$em_id' ");
                                                            $countedAppliedJobs = mysqli_num_rows($countJobsAppliers);
                                                                                            
                                                            
                                                                                             if($countJobsAppliers){
                                                                                                
                                                                                                return $countedAppliedJobs;
                                                                                            }
                                                                                            else{
                                                                                                echo "<script>alert('your query is notdsfsdf right');</script>";
                                                                                            }
                                                            }
                                                            //
                                                            //

                                                            public function contSentMsg($em_id){
                                                                $countMsg = mysqli_query($this->con,"SELECT * FROM message where emp_id ='$em_id' ");
                                                                $countedMsg = mysqli_num_rows($countMsg);
                                                                                                
                                                                
                                                                                                 if($countMsg){
                                                                                                    
                                                                                                    return $countedMsg;
                                                                                                }
                                                                                                else{
                                                                                                    echo "<script>alert('your query is notdsfsdf right');</script>";
                                                                                                }
                                                                }


                        

}
?>



