<?php


$servername ="localhost";
$username ="root";
$password = "";
$dbName = "JobportalWanaw";

$con =  mysqli_connect($servername, $username, $password, $dbName);

if(mysqli_connect_error()){
    echo "failed to connect!";
    exit();
}
 echo "connection success!";
?>