

<?php 
 include('Connection/db.php');
 include('include/header.php');
 include('include/sidebar.php');


 $del=$_GET['del'];



  $query=mysqli_query($con,"delete from jobseeker where js_id ='$del'");
  if ($query) {
  	 echo "<script>alert('Record has been successfully Deleted !!!!')</script>";
  	 header('location:jobseekerlist.php');
  }else{
  	echo "<script>alert('no datatase detected')</script>";
  }

  
 ?>

 