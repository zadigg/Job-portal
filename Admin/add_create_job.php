<?php
include('includes/header.php');
include('includes/sidebar.php');
include('../class/admin.php');


session_start();



if(isset($_POST["submit"])){
     


  $job_type = 1;

  $job_name = $_POST['job_name'];
  $role_catagory = $_POST['role_catagory'];
 
  $salary = $_POST['salary'];

  $gender = $_POST['gender'];

  $address = $_POST['address'];
  $city = $_POST['city'];
  $region = $_POST['region'];
  
 
  $phone = $_POST['phone'];
  $Educational_Level = $_POST['Educational_Level'];  
  $experiance = $_POST['experiance'];  
  $job_description = $_POST['job_description'];  
  $keyword = $_POST['keyword'];  


$login= $_SESSION['email'];



$jobadd = new Admin();
  $jobadd->addjob($job_name,$login,$role_catagory,
  $salary,$gender,$address,$city,$region,$phone,$Educational_Level,$experiance,$job_description,$keyword,$job_type);//-> this helps to call a class function using an that classes object
}
  


?>


    <section id="main-content">
      <section class="wrapper site-min-height">
          <h4>  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="jobs.php">Job</a></li>
          <li class="breadcrumb-item"><a href="add_create_job.php">Add a job</a></li>

         
        </ol>
</h4>
      </nav>
        <div class="row mt">
          <div class="col-lg-12">
            <a class="btn btn-primary col-sm-4 col-sm-push-8" href="add_create_job.php">Add a job</a>
         
          
        <div style="width: 60%; margin-left: 20%; background-color: #F2F4F4;" >
            <div id="msg"></div>

             <form action="" method="post" style="margin:3%; padding: 3%;" name="job_form" id="job_form">

                 <div class="form-group">
                    <label for="Job name">job Name</label>
                    <input type="text" name="job_name" id="job_name" class="form-control" placeholder="Enter job Name">
                 </div>

                 <div class="form-group">
                    <label for="job_type">select job type</label>
                    <select name="job_type" class="form-control" id="job_type">
                    <option value="0">Choose type</option>
                        <?php 
                            include('connection/db.php');
                            $sql=mysqli_query($con,"SELECT job_type_name FROM job_type");
                            
                            while ($row=mysqli_fetch_array($sql)) { ?>
                                <option value="<?php echo $row['job_type_name']; ?>"><?php echo $row['job_type_name']; ?> </option>
                        
                         <?php    }   ?>
                     </select>
                 </div>

                 <div class="form-group">
                    <label for="role catagory">select role catagory</label>
                    <select name="role_catagory" class="form-control" id="role_catagory">
                    <option value="0">Choose role</option>
                        <?php 
                            include('connection/db.php');
                            $sql=mysqli_query($con,"SELECT role_cata FROM role_catagory");
                            
                            while ($row=mysqli_fetch_array($sql)) { ?>
                                <option value="<?php echo $row['role_cata']; ?>"><?php echo $row['role_cata']; ?> </option>
                        
                         <?php    }   ?>
                     </select>
                 </div>


                 <div class="form-group">
                    <label for="salary">salary</label>
                    <input type="text" name="salary" id="salary" class="form-control" placeholder="Enter salary">
                 </div>

                 <div class="form-group">
                 <label for="Gender">Gender</label>
                    <select name="gender" class="form-control" id="gender">
                       <option value="0">Choose applier Gender</option>
                       <option>Male</option>
                       <option>female</option>
                       <option>any</option>

                    
                     </select>
                 </div>
                 
                 <div class="form-group">
                    <label for="address">address</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Enter address">
                 </div>

                 <div class="form-group">
                    <label for="region">select region</label>
                    <select name="region" class="form-control" id="region">
                    <option value="0">Choose region</option>
                        <?php 
                            include('connection/db.php');
                            $sql=mysqli_query($con,"SELECT region_name FROM region");
                            
                            while ($row=mysqli_fetch_array($sql)) { ?>
                                <option value="<?php echo $row['region_name']; ?>"><?php echo $row['region_name']; ?> </option>
                        
                         <?php    }   ?>
                     </select>
                 </div>

                 <div class="form-group">
                    <label for="city">city</label>
                    <input type="text" name="city" id="city" class="form-control" placeholder="Enter city">
                 </div>

                 <div class="form-group">
                    <label for="phone">phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter phone">
                 </div>

                 <div class="form-group">
                    <label for="Educational_Level">Educational Level</label>
                    <select name="Educational_Level" class="form-control" id="Educational_Level">
                    <option value="0">Choose your education level</option>
                        <?php 
                            include('connection/db.php');
                            $sql=mysqli_query($con,"SELECT edlvl FROM Educational_Level");
                            
                            while ($row=mysqli_fetch_array($sql)) { ?>
                                <option value="<?php echo $row['edlvl']; ?>"><?php echo $row['edlvl']; ?> </option>
                        
                         <?php    }   ?>
                     </select>
                 </div>

                

                 <div class="form-group">
                    <label for="experiance">experiance</label>
                    <input type="text" name="experiance" id="experiance" class="form-control" placeholder="Enter experiance">
                 </div>
     
                 <div class="form-group">
                    <label for="job_description">job description</label>
                    <textarea name="job_description" id="job_description" class="form-control" cols="30" rows="10" placeholder="Enter job_description"> </textarea>
                 </div>


                 <div class="form-group">
                    <label for="experiance">experiance</label>
                    <input type="text" name="experiance" id="experiance" class="form-control" placeholder="Enter experiance">
                 </div>
     
                 <div class="form-group">
                    <label for="keyword">keyword</label>
                    <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Enter keyword">
                 </div>
                  
                  
            
                      <div class="form-group">
                   
                    <input type="submit" class="btn btn-block btn-success" placeholder="Save" name="submit" id="submit">
                 </div>
           


             </form>


          </div>

        <!-- Edit Modal HTML -->
        <div id="addEmployeeModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form>
                <div class="modal-header">						
                  <h4 class="modal-title">Add Employee</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" required></textarea>
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" required>
                  </div>					
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-success" value="Add">
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="editEmployeeModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form>
                <div class="modal-header">						
                  <h4 class="modal-title">Edit Employee</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" required></textarea>
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" required>
                  </div>					
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-info" value="Save">
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Delete Modal HTML -->
        <div id="deleteEmployeeModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <form>
                <div class="modal-header">						
                  <h4 class="modal-title">Delete Employee</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                  <p>Are you sure you want to delete these Records?</p>
                  <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                  <input type="submit" class="btn btn-danger" value="Delete">
                </div>
              </form>
            </div>
          </div>
        </div>



            
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
  
  </section>

  <script src="CSSJSFOnt/Admin Dashboard/lib/jquery/jquery.min.js"></script>
  <script src="CSSJSFOnt/Admin Dashboard/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="CSSJSFOnt/Admin Dashboard/lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="CSSJSFOnt/Admin Dashboard/lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="CSSJSFOnt/Admin Dashboard/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="CSSJSFOnt/Admin Dashboard/lib/jquery.scrollTo.min.js"></script>
  <script src="CSSJSFOnt/Admin Dashboard/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="CSSJSFOnt/Admin Dashboard/lib/common-scripts.js"></script>


  
  <script type="text/javascript" src="DataTables/datatables.min.js"></script>
  <script type="text/javascript" src="jquery-3.5.1.js"></script>

  
  <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>

  
              



       
     
</body>

</html>
