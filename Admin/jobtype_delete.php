
<?php 

include('../class/admin.php');


$del=$_GET['del'];


$deleteJobtype = new Admin();
$deleteJobtype->jobtypeDelete($del);


?>