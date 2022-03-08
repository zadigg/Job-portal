<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');

?>
<link rel="stylesheet" href="kotetDash/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">



<body>

  <section class="content">
    <!-- Small boxes (Stat box) -->
    <!-- Basic Forms -->
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Default Basic Forms</h3>


      </div>
      <!-- /.box-header -->
      <form action="" name="jobpost" onsubmit="return validateform()" method="post">
        <div class="box-body">
          <div class="row">
            <div class="col-12">
              <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">Job name</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="job_name" id="job_name" placeholder="Managment"
                    id="example-text-input">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-search-input" class="col-sm-2 col-form-label">Role catagory</label>
                <div class="col-sm-10">
                  <select id="jb-category" name="role_catagory" id="role_catagory" class="form-control">

                    <option>Choose Category</option>
                    <?php 
													include('connection/db.php');
													$sql=mysqli_query($con,"SELECT role_cata FROM role_catagory");
													
													while ($row=mysqli_fetch_array($sql)) { ?>
                    <option value="<?php echo $row['role_cata']; ?>"><?php echo $row['role_cata']; ?>
                    </option>

                    <?php    }   ?>

                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="example-search-input" class="col-sm-2 col-form-label">Job type</label>
                <div class="col-sm-10">
                  <select id="jb-type" name="jobtype" id="jobtype" class="form-control">
                    <option>Choose job type</option>
                    <?php 
                                                        include('connection/db.php');
                                                        $sql=mysqli_query($con,"SELECT job_type_name FROM job_type");
                                                        
                                                        while ($row=mysqli_fetch_array($sql)) { ?>
                    <option value="<?php echo $row['job_type_name']; ?>">
                      <?php echo $row['job_type_name']; ?> </option>

                    <?php    }   ?>
                  </select>
                </div>
              </div>


              <div class="form-group row">
                <label for="salary" class="col-sm-2 col-form-label">salary</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="salary" id="salary" placeholder="5454 - 5656">
                </div>
              </div>
              <div class="form-group row">
                <label for="gender" class="col-sm-2 col-form-label">gender</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="gender" id="gender" placeholder="Male / Female">
                </div>
              </div>
              <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">address</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="address" id="address" placeholder="Wossen">
                </div>
              </div>
              <div class="form-group row">
                <label for="City" class="col-sm-2 col-form-label">city</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="city" id="city" placeholder="hunter2"
                    id="example-password-input">
                </div>
              </div>

              <div class="form-group row">
                <label for="Region" class="col-sm-2 col-form-label">Region</label>
                <div class="col-sm-10">
                  <select name="region" id="region" class="form-control">

                    <option>Choose Region</option>
                    <?php 
												include('connection/db.php');
												$sql=mysqli_query($con,"SELECT region_name FROM region");
												
												while ($row=mysqli_fetch_array($sql)) { ?>
                    <option value="<?php echo $row['region_name']; ?>">
                      <?php echo $row['region_name']; ?> </option>

                    <?php    }   ?>

                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">phone</label>
                <div class="col-sm-10">
                  <input class="form-control" type="number" name="phone" id="phone" placeholder="0924029960">
                </div>
              </div>


              <div class="form-group row">
                <label for="Region" class="col-sm-2 col-form-label">Education level</label>
                <div class="col-sm-10">
                  <select name="Educational_Level" id="Educational_Level" class="form-control">
                    <option>Choose Education Level</option>
                    <?php 
                                                        include('connection/db.php');
                                                        $sql=mysqli_query($con,"SELECT edlvl FROM educational_level");
                                                        
                                                        while ($row=mysqli_fetch_array($sql)) { ?>
                    <option value="<?php echo $row['edlvl']; ?>"><?php echo $row['edlvl']; ?> </option>

                    <?php    }   ?>
                  </select>
                </div>
              </div>


              <div class="form-group row">
                <label for="example-month-input" class="col-sm-2 col-form-label">experiance</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="experiance" id="experiance" placeholder="5years">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-month-input" class="col-sm-2 col-form-label">Job description</label>
                <div class="col-sm-10">
                  <textarea name="job_description" id="job_description" cols="100%" rows="10"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="example-week-input" class="col-sm-2 col-form-label">deadline</label>
                <div class="col-sm-10">
                  <input class="form-control" type="datetime-local" name="deadline" id="deadline" placeholder="2011-W33"
                    id="example-week-input">
                </div>
              </div>




              <div class="form-group text-center">

                <input type="submit" class="btn btn-block btn-success" class="btn-savepreview" value="Publish & Preview"
                  placeholder="Save" name="submit" id="submit">
              </div>


            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </form>
      <!-- /.box-body -->
    </div>
  </section>


</body>

</html>