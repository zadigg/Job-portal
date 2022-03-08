<?php
   include_once("database.php");
 
   class Exam extends Database{


    public function NumberOfPostedQuestionRows($em_id){

     
        
        $query = mysqli_query($this->con,"select * from exam where em_id='$em_id'");
 
        $queryNumRows=mysqli_num_rows($query);
        

        if($query){
        return $queryNumRows;
            }
            else{
                echo "<script>alert('some errorrr please try again');</script>";
            }  
   }
//

public function postAQuestion($question, $answer,$choose1,$choose2,$choose3,$choose4,$em_id,$job_id){

    $query = mysqli_query($this->con,"insert into exam(question,choose1,choose2,choose3,choose4,answer,em_id,job_id )
    values('$question','$choose1','$choose2','$choose3','$choose4','$answer','$em_id','$job_id')");
    
    if($query){
    
        echo "<script>alert('you posted a question');</script>";
     }
     else{
         echo "<script>alert('you can not add a job');</script>";
     }  
       }

       //
       //

       public function viewQuestions($em_id){

     
        
        $query = mysqli_query($this->con,"select * from exam where em_id='$em_id'");
        if($query){
        return $query;
            }
            else{
                echo "<script>alert('some errorrr please try again');</script>";
            }  
           
    
    }
    //
    //kezi behuala lik apply job milewn sinke fetena endalewna endelelew check yemiyaderg

    public function checkIfThereIsAQuestion($em_id){

     
        
        $query = mysqli_query($this->con,"select * from exam where em_id='$em_id'");
        if($query){
        return $query;
            }
            else{
                echo "<script>alert('some errorrr please try again');</script>";
            }  
           
    
    }
    //
    //

    public function chooseAJob($em_id){

     
        
        $query = mysqli_query($this->con,"select * from jobs where employer_id='$em_id'");
        if($query){
        return $query;
            }
            else{
                echo "<script>alert('some errorrr please try again');</script>";
            }  
           
    
    }
//
//find job id for the test
public function findJobID($em_id,$job_name){

     
        
    $query = mysqli_query($this->con,"SELECT * from jobs where job_name='$job_name' AND employer_id = '$em_id' ");
    if($query){
    return $query;
        }
        else{
            echo "<script>alert('some errorrr please try again');</script>";
        }  
       

}
//
//exam catagory 

public function examList($em_id){

     
        
    $query = mysqli_query($this->con,"SELECT * from exam where em_id='$em_id' ");
    if($query){
    return $query;
        }
        else{
            echo "<script>alert('some errorrr please try again');</script>";
        }  
       

}
//
//yejob name keexam table minawetabet 

public function findJobName($em_id){

     
        

    $query = mysqli_query($this->con,"SELECT * FROM jobs  where employer_id='$em_id' ");
    if($query){
    return $query;
        }
        else{
            echo "<script>alert('some errorrr please try again');</script>";
        }  
       

}
//
//kezi behuala fetenawn fetch yaregal
public function fetchQuestion($job_id){

    $query = mysqli_query($this->con,"SELECT * FROM exam  where job_id='$job_id' ");
    if($query){
    return $query;
        }
        else{
            echo "<script>alert('some errorrr please try again');</script>";
        }  
       

}
//
//
//kezi behuala jobseeker fetenaw gar migenagnu 



   }
  

  

?>

