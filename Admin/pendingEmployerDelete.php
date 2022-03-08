

<?php 
 include('Connection/db.php');
 include('includes/header.php');
 include('includes/sidebar.php');
 include('../class/admin.php');


 $del=$_GET['del'];

 $deletePendingEmployer = new Admin();
 $deletePendingEmployer->pendingEmployerRemove($del);


  
 ?>

 