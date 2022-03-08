<?php
include('connection/db.php');

echo $cname = $_POST['company_name'];
echo $oname = $_POST['owner_name'];
echo $phone = $_POST['phone'];
echo $email = $_POST['email'];
echo $address = $_POST['address'];
echo $nuofemployees = $_POST['Number_of_employees'];
echo $description = $_POST['aboutcompany'];


$query = mysqli_query($con,"insert into employer(company_name, owner_name,phone_number,email,address,numberofemployees, 
about_company)values('$cname','$oname','$phone','$email','$address','$nuofemployees','$description')");
if($query){
    echo "data has been added";
}
else{
    echo "some erroe please try again";
}  

?>


