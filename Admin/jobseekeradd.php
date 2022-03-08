<?php
include('connection/db.php');

echo $first_name = $_POST['fname'];
echo $last_name = $_POST['lname'];
echo $address = $_POST['address'];



$query = mysqli_query($con,"insert into jobseeker(fname, lname,address)values('$first_name','$last_name','$address')");


if ($query) {
    echo "Data has been successfully Inserted !";
}else{
   echo "some error please try again !";
}

?>


