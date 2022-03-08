<?php
include('includes/header.php');
include('includes/sidebar.php');
include('../class/admin.php');


session_start();



if(isset($_POST["submit"])){
     

  $jobtype = $_POST['jobtype'];
 


$jobtypeadd = new Admin();
  $jobtypeadd->addJobtype($jobtype);//-> this helps to call a class function using an that classes object
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

             <form action="" method="post" style="margin:3%; padding: 3%;" name="jobtype_form" id="jobtype_form">

             
                    

                 <div class="form-group">
                    <label for="jobtype">job type</label>
                    <input type="text" name="jobtype" id="jobtype" class="form-control" placeholder="Enter Jobtype">
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
