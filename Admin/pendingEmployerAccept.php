
<?php 

include('../class/admin.php');


$accept=$_GET['accept'];


$acceptPendingEmployer = new Admin();
$acceptPendingEmployer->pendingEmployerAccept($accept);



?>