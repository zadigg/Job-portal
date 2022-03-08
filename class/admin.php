<?php
   include_once("database.php");
   class Admin extends Database{

    
     public function addCatagory($role_cata, $role_description){

        
        $query = mysqli_query($this->con,"insert into role_catagory(role_cata, role_description)values('$role_cata','$role_description')");

        if($query){
            echo "<script>alert('New Catagory is added');</script>";
        }
        else{
            echo "<script>alert('some errorrr please try again');</script>";
        }  
       }

       //
       //

       public function addjob($job_name,$login,$role_catagory,
       $salary,$gender,$address,$city,$region,$phone,$Educational_Level,$experiance,$job_description,$keyword,$jobtype){

        
        $query = mysqli_query($this->con,"insert into jobs(job_name,company_email, role_catagory,salary,gender,address,city, 
        region,phone,degreelvl,experiance,job_description,keyword,jobtype_id)values('$job_name','$login','$role_catagory','$salary','$gender','$address','$city'
                                                                ,'$region','$phone','$Educational_Level','$experiance','$job_description','$keyword','$jobtype')");

        if($query){
            echo "data has been added";
            echo "<script>alert('New job is added');</script>";
            echo "<script>window.location='jobs.php'</script>";
        }
        else{
          
            echo "<script>alert('some error please try again');</script>";
        }  
       }

       //
       //

       
       public function addJobtype($job_type){

        
        $query = mysqli_query($this->con,"insert into job_type(job_type_name)values('$job_type')");

        if($query){
            echo "data has been added";
            echo "<script>alert('New job type is added');</script>";
            echo "<script>window.location='jobtype.php'</script>";
        }
        else{
          
            echo "<script>alert('some error please try again');</script>";
        }  
       }

       //
       //

       public function jobtypeEdit($role_cata,$id){

        
        $query = mysqli_query($this->con,"update job_type set job_type_name='$role_cata' where jobtype_id='$id'");
    

        if($query){
            echo "<script>alert('Catagory is updated successfully');</script>";
            echo "<script>window.location='jobtype.php'</script>";
        }
        else{
            echo "<script>alert('some error please try again');</script>";
        }  
       }
           
       //
       //
       public function jobtypeDelete($jobtype_id){

        
        $query = mysqli_query($this->con,"delete from job_type where jobtype_id ='$jobtype_id'");
    

        if($query){
          
            echo "<script>alert('data has been Deleted');</script>";
            header('location:jobtype.php');
        }
        else{
            echo "<script>alert('some error please try again');</script>";
        }  
       }
       //
       //

       public function jobEdit($job_name,$role_catagory,$salary,$gender,$address,$region,$city,$phone,$Educational_Level,$experiance,$job_description,$job_id){


        $query = mysqli_query($this->con, "update jobs set job_name='$job_name', role_catagory='$role_catagory' , salary='$salary', gender='$gender', 
        address='$address', city='$city', region='$region', phone='$phone', degreelvl='$Educational_Level',
         experiance='$experiance' , job_description='$job_description' where job_id='$job_id'");

        if($query){
      
            echo "<script>alert('Job is updated successfully');</script>";
            echo "<script>window.location='jobs.php'</script>";
        }
        else{
            echo "<script>alert('some error please try again');</script>";
        }  
       }

       //
       //

       
    

       public function jobCatagoryEdit($role_cata, $role_description,$id){

        
        $query = mysqli_query($this->con,"update role_catagory set role_cata='$role_cata', role_description='$role_description'  where role_id='$id'");
    

        if($query){
            echo "<script>alert('Catagory is updated successfully');</script>";
        }
        else{
            echo "<script>alert('some error please try again');</script>";
        }  
       }
           
       //
       //
       public function jobCatagoryDelete($delete){

        
        $query = mysqli_query($this->con,"delete from role_catagory where role_id ='$delete'");
    

        if($query){
          
            echo "<script>alert('data has been Deleted');</script>";
            header('location:Catagory.php');
        }
        else{
            echo "<script>alert('some error please try again');</script>";
        }  
       }

      //
      //
      public function selectEmployer(){

        
        $queryEmployer = mysqli_query($this->con,"select * from employer");
    

        if($queryEmployer){
          return $queryEmployer;
        
        }
        else{
            echo "<script>alert('Query is not right');</script>";
        }  
     
    }
    //
    //
      public function addEmployer($company_image, $company_name, $owner_name,$phone_number,$email,$address,$password,$numberofemployees, $about_company){

        $query = mysqli_query($this->con,"insert into employer(company_image, company_name, owner_name,phone_number,email,address,password,numberofemployees, 
        about_company)values('$company_image','$company_name','$owner_name','$phone_number','$email','$address','$password','$numberofemployees','$about_company')");

        if($query){
            echo "<script>alert('New Employer is added');</script>";

        }
        else{
            echo "<script>alert('some erroe please try again');</script>";
        }  
       }
       //
       //


     public function searchJob($keyword,$catagory){
       
        $query1="select * from jobs LEFT JOIN  employer ON jobs.company_email = employer.email WHERE keyword LIKE '%$keyword%' OR role_catagory='$catagory' ";
        $sql = mysqli_query($this->con,$query1);

        if(mysqli_num_rows($sql) > 0){
            return $sql;
        }else{
            return NULL;
        }
       }
   
       //
       //
       
       public function employerDelete($delete){

        
        $query = mysqli_query($this->con,"delete from employer where id ='$delete'");
    

        if($query){
          
            echo "<script>alert('data has been Deleted');</script>";
            header('location:Employerlist.php');
        }
        else{
            echo "<script>alert('some error please try again');</script>";
        }  
       }

       //
       //

       public function pendingEmployerSelect(){

        
        $query = mysqli_query($this->con,"select * from employer_temp");
    

        if($query){
          return $query;
        
        }
        else{
            echo "<script>alert('Query is not right');</script>";
        }  
     
    }

    //
    //
        
       public function pendingEmployerRemove($delete){

        
        $query = mysqli_query($this->con,"delete from employer_temp where empTempId ='$delete'");
    

        if($query){
          
            echo "<script>alert('data has been Deleted');</script>";
            header('location:Employerlist.php');
        }
        else{
            echo "<script>alert('some error please try again');</script>";
        }  
     
    }
    //
    //

    
    public function pendingEmployerAccept($accept){

        $query = mysqli_query($this->con,"select * from employer_temp WHERE empTempId = '$accept'");

        while($row=mysqli_fetch_array($query)){
            
            $image = $row['company_image'];
            $name = $row['company_name'];
            $oname = $row['owner_name'];
            $phone = $row['phone_number'];
            $email = $row['email'];
            $address = $row['address'];
            $noemp = $row['numberofemployees'];
            $est = $row['Established'];
            $abComp = $row['about_company'];
            $pass = $row['password'];
    


        
        // $query ="select * from employer_temp WHERE empTempId = $id";

        if($query){

            $query1 = mysqli_query($this->con,"insert into employer(company_image, company_name, owner_name,phone_number,email,address,numberofemployees,Established,
        about_company, password)values('$image','$name','$oname','$phone','$email','$address','$noemp','$est','$abComp','$pass')");
        if($query1){

            $query2 = mysqli_query($this->con,"delete from employer_temp where empTempId ='$accept'");
            
            echo "<script>alert('Success');</script>";
            header('location:Employerlist.php');
        }else
            echo "<script>alert('query 2 Error');</script>";
            header('location:Employerlist.php');
            
        }
        else{
            echo "<script>alert('Query1 Error');</script>";
        }  
       }
    }
    }
?>