<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');

?>




<link rel="stylesheet" href="kotetDash/css/style.css">
<!-- Page Content  -->
<div id="content" style="background-color:darkgrey;" >
<form action="theme1.php" class="post-form">

<!-- row -->
<div class="row">


<div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Chose your picture</label>
            <input type="file" name="img" class="form-control" placeholder="Chose your image">
        </div>
    </div>

    
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="fullname" class="form-control" placeholder="Enter First Name">
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" placeholder="Enter Address">
        </div>
    </div>



    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="phone" class="form-control" placeholder="Phone number">
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="email">
        </div>
    </div>

  

    
</div>

<!-- row -->
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <label>Profile Description</label>
            <textarea  name="profile" class="form-control about height-120"
                placeholder="About Company"></textarea>
        </div>
    </div>
</div>

<!-- row -->
<div class="row">

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Skill*</label>
            <select id="skill" name="skill" class="form-control">
                <option>Choose Category</option>
                <option>Photography</option>
                <option>Arts, Design, Media</option>
                <option>Coding</option>
              
            </select>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Skill 1*</label>
            <select id="skill" name="skill1" class="form-control">
            <option>Choose Category</option>
                <option>Photography</option>
                <option>Arts, Design, Media</option>
                <option>Coding</option>
            </select>
        </div>
    </div>




    

</div>

<!-- row -->
<div class="row">

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Hobby*</label>
            <select id="hobby" name="hobby" class="form-control">
                <option>Choose Category</option>
                <option>Photography</option>
                <option>Arts, Design, Media</option>
                <option>Coding</option>
              
            </select>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>hobby1*</label>
            <select id="hobby1" name="hobby1" class="form-control">
            <option>Choose Category</option>
                <option>Photography</option>
                <option>Arts, Design, Media</option>
                <option>Coding</option>
            </select>
        </div>
    </div>




    

</div>


<h3>Education</h3>
<!-- row -->
<div class="row">

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>University Name/collage Name</label>
            <input type="text" name="univname" class="form-control" placeholder="Hawassa Univ">
        </div>
    </div>


    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>univ Graduated Year</label>

            <input type="date" name="univgradyear" class="form-control" >
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Depaertment</label>

            <select id="department" name="department" class="form-control">
            <option>Choose Category</option>
                <option>Computer science</option>
                <option>Enginering </option>
                <option>Agriculture</option>
            </select>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>CGPA</label>

            <input type="text" name="cgpa" class="form-control" >
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Education Level</label>

            <select id="edlvl" name="edlvl" class="form-control">
            <option>Choose Category</option>
                <option>Bachelor degree</option>
                <option>Master Degree </option>
                <option>PHD</option>
            </select>
        </div>
    </div>

</div>

<div class="row">

  


    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Additional University</label>
            <input type="text" name="univname1" class="form-control" placeholder="Rift valley">
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>graduatein year</label>
            
            <input type="date" name="univgradyear1" class="form-control" >
        </div>
    </div>


    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Depaertment</label>

            <select id="department1" name="department1" class="form-control">
            <option>Choose Category</option>
                <option>Computer science</option>
                <option>Enginering </option>
                <option>Agriculture</option>
            </select>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>CGPA</label>

            <input type="text" name="cgpa1" class="form-control" >
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Education Level</label>

            <select id="edlvl1" name="edlvl1" class="form-control">
            <option>Choose Category</option>
                <option>Bachelor degree</option>
                <option>Master Degree </option>
                <option>PHD</option>
            </select>
        </div>
    </div>


</div>


<h3>Work Experiance</h3>
<!-- row -->
<div class="row">

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Company1</label>
            <input type="text" name="company1" class="form-control" placeholder="Enter Company1 Name">
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Company 1 description</label>
            <textarea  name="companydesc" class="form-control" name="" id="" cols="50" ></textarea>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Year from</label>
           
            <input type="number"  min="1990" max="2022" name="comapny1yearfrom" class="form-control" placeholder="Enter Company1 Name">
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>to</label>
            <label>Company1</label>
            <input type="number"  min="1990" max="2022" name="comapny1yearto" class="form-control" placeholder="Enter Company1 Name">
        </div>
    </div>



</div>

<div class="row">

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Company2</label>
            <input type="text" name="company2" class="form-control" placeholder="Enter Company1 Name">
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Company 2 description</label>
            <textarea  name="company2desc" class="form-control" name="" id="" cols="50" ></textarea>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Year from</label>
           
            <input type="date" name="comapny2yearfrom" class="form-control" placeholder="Enter Company2 Name">
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>to</label>
            
            <input type="date" name="comapny2yearto" class="form-control" placeholder="Enter Company2 Name">
        </div>
    </div>



</div>

<div class="row">

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>Language*</label>
            <select id="language" name="language" class="form-control">
                <option>Choose Category</option>
                <option>Amhara</option>
                <option>Oromiffa</option>
                <option>English</option>
              
            </select>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">
            <label>language 1*</label>
            <select id="language1" name="language1" class="form-control">
            <option>Choose Category</option>
            <option>Amhara</option>
                <option>Oromiffa</option>
                <option>English</option>
            </select>
        </div>
    </div>




    

</div>






    <div class="form-group text-center">
                                                
         &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <input type="submit" class="btn btn-block btn-success" class="btn-savepreview" value="Publish & Preview" placeholder="Save" name="submit" id="submit">
    </div>


</form>

  <!-- slider Area Start-->

  </main><?php

include('includes/footer.php');

?>



  </body>

  </html>