<?php

include('connection/db.php');
include('includes/header.php');
include('includes/sidebar.php');

$id=$_GET['edit'];
$query = mysqli_query($con, "select * from jobseeker where js_id='$id'");
while($row=mysqli_fetch_array($query)){
  $first_name = $row['fname'];
  $last_name = $row['lname'];
  $address = $row['address'];

  


}
?>


    <section id="main-content">
      <section class="wrapper site-min-height">
          <h4>  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="jobseekerlist.php">jobseeker</a></li>
          <li class="breadcrumb-item"><a href="add_jobseeker.php">Edit jobseeker</a></li>

         
        </ol>
</h4>
      </nav>
        <div class="row mt">
          <div class="col-lg-12">
            <a class="btn btn-primary col-sm-4 col-sm-push-8" href="add_jobseeker.php">Edit jobseeker</a>
         
          
        <div style="width: 60%; margin-left: 20%; background-color: #F2F4F4;" >
            <div id="msg"></div>
             <form action="" method="post" style="margin:3%; padding: 3%;" name="jobseeker_form" id="jobseeker_form">

             <div class="form-group">
                    <label for="address">first name</label>
                    <input type="text"  name="first_name" id="first_name" value=" <?php echo $first_name; ?>" class="form-control"  > 
                 </div>

                 <div class="form-group">
                    <label for="address">last name</label>
                    <input type="text"  name="last_name" id="last_name" value=" <?php echo $last_name; ?>" class="form-control"  > 
                 </div>
                  <div class="form-group">
                    <label for="address">address</label>
                    <input type="text"  name="address" id="address" value=" <?php echo $address; ?>" class="form-control"  > 
                 </div>
               
                
                      <div class="form-group">
                   
                      <input type="hidden" name="js_id" id="js_id" value= " <?php echo $_GET['edit']; ?>">
                      <div class="form-group">

                      <input type="submit" class="btn btn-block btn-success" placeholder="Update" name="submit" id="submit">
                 </div>
           


             </form>


          </div>

        <!-- Edit Modal HTML -->
        
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


  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="DataTables/datatables.min.js"></script>
  
  <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>

  

</body>

</html>


<?php 
 include('connection/db.php');
 if (isset($_POST['submit'])) {


    $id=$_POST['js_id'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $add = $_POST['address'];
   
 
 	
 
  $query1=mysqli_query($con,"update jobseeker  set fname='$firstname',lname='$lastname', address='$add' where 	js_id='$id'");

               if ($query1) {
                        echo "<script>alert('Record has been Update successfully  !!!!')</script>";
                        header('location:jobseerkerList.php');
                      }else{
                        echo "<script>alert('some error Please try again  !!!!')</script>";
                      }
                     }
                    

?>