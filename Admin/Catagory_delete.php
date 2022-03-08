
<?php 

 include('../class/admin.php');


 $del=$_GET['del'];


 $deleteCatagory = new Admin();
 $deleteCatagory->jobCatagoryDelete($del);


 ?>