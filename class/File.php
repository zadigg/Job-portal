<?php
   include_once("database.php");
   class File extends Database{

      
    public function uploadCV($js_id,$filename){

     
     $query = mysqli_query($this->con,"insert into cv(js_id,filename)values('$js_id','$filename')");

     if($query){
      
         echo "<script>alert('New CV is added');</script>";
         echo "<script>window.location='savedCV.php'</script>";
     }
     else{
       
         echo "<script>alert('Your CV upload Query is Not right');</script>";
     }  
    }
    //
    // look for specified js cv files

    public function viewCV($js_id){

     
        $query = mysqli_query($this->con,"SELECT * FROM `cv` WHERE js_id='$js_id'");
   
        if(!$query){
         
            echo "<script>alert('Your have no cv');</script>";
           
        }
        else{
          
            return $query;
        }  
       }
       //
       //
       public function applyWithCV($js_id){

     
        $query = mysqli_query($this->con,"SELECT * FROM `cv` WHERE js_id='$js_id'");
   
        if(!$query){
         
            echo "<script>alert('Your have no cv');</script>";
           
        }
        else{
          
            return $query;
        }  
       }
       //
       //
       public function returnCVID($filename){

        $query = mysqli_query($this->con,"SELECT cv_id FROM `cv` WHERE filename='$filename'");
        $fetchCVID = mysqli_fetch_array($query);
        $cv_id = $fetchCVID['cv_id'];

        if($query){
            echo "<script>alert('$cv_id');</script>";
            return $cv_id;
        }
        else{
          
            echo "<script>alert('Your CV upload Query is Not right');</script>";
        }  
       }
       //
       //check if user upload more than one cv without deleting the previous one 
       public function checkCvLimit($js_id){

        $query = mysqli_query($this->con,"SELECT * FROM `cv` WHERE js_id='$js_id'");
     
        $check = mysqli_num_rows($query);
      

        if($check >= 1){
          echo " <script>windows.location('savedCV.php')</script>";
           
        }
        else{
          
           return true;
        }  
       }
}
?>