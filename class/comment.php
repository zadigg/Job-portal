<?php
   include_once("database.php");
 
   class Comment extends Database{


    public function checkEmployerIDforthePostedComment($company_name){

     
        
        $query = mysqli_query($this->con,"select id from employer where company_name='$company_name'");
        $row = mysqli_fetch_array($query);

        if($query){
         $companyId  = $row['id'];
        return $companyId;
     }
     else{
         echo "<script>alert('some errorrr please try again');</script>";
     }  
   }

   //
   //
   //

    public function postComment($jsid, $em_id, $comment,$jobcommented,$jobcommentedHour){

     
        
        $query = mysqli_query($this->con,"insert into comment(js_id, em_id, comment, commented_Date,commented_Hour)
        values('$jsid','$em_id','$comment','$jobcommented','$jobcommentedHour')");


        if($query){
       
        $resultAlert = '<div class="alert alert-success"> you commented</div>';
        echo "$resultAlert";

     }
     else{
         echo "<script>alert('You must login to comment');</script>";
     }  
       }

       
       //
       //


       public function viewCommentPerCompany($em_id){

        $queryViewComment = "SELECT * FROM comment LEFT JOIN jobseeker ON comment.js_id = jobseeker.js_id WHERE em_id='$em_id' ORDER BY `comment`.`comment_id` DESC ";
        $resultComment = mysqli_query($this->con, $queryViewComment);
        // $resultFetch = mysqli_fetch_array($resultComment);
        if($resultComment){
            // $result = $resultFetch['comment'];
            // echo "<script>alert('$result');</script>";
        
            return $resultComment;
        }else{
            echo "<script>alert('You must login to comment');</script>";
        }
       }


       


      //
      //

   }
?>