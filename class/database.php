<?php

class Database{
    public $con;

    public function  __construct()
    {
        $this->con=mysqli_connect("localhost","root","","jobportalwanaw");
        if(!$this->con){
            die("Database connection failed".mysqli_connect_error());
        }
    }
}


?>