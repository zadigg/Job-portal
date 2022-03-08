

<?php 
 include('Connection/db.php');
 include('includes/header.php');
 include('includes/sidebar.php');


 $del=$_GET['del'];



  $query=mysqli_query($con,"delete from jobs where job_id ='$del'");
  if ($query) {
  	 echo "<script>alert('Record has been successfully Deleted !!!!')</script>";
  	 header('location:jobs.php');
  }else{
      echo "<script>alert('JOb is Not deleted')</script>";
      header('location:jobs.php');
  }

  
 ?>

 