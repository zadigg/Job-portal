<?php

include('connection/db.php');
include('includes/header.php');
include('includes/sidebar.php');

$id=$_GET['edit'];
$query = mysqli_query($con, "select * from employer where id='$id'");
while($row=mysqli_fetch_array($query)){
  $company_name = $row['company_name'];
  $oname = $row['owner_name'];
  $phone = $row['phone_number'];
  $email = $row['email'];
  $address = $row['address'];
  $nemployee = $row['numberofemployees'];
  $ABout_company = $row['about_company'];
  


}
?>


    <section id="main-content">
      <section class="wrapper site-min-height">
          <h4>  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="employerlist.php">Employer</a></li>
          <li class="breadcrumb-item"><a href="add_employer.php">Edit Employer</a></li>

         
        </ol>
</h4>
      </nav>
        <div class="row mt">
          <div class="col-lg-12">
            <a class="btn btn-primary col-sm-4 col-sm-push-8" href="add_employer.php">Edit Employers</a>
         
          
        <div style="width: 60%; margin-left: 20%; background-color: #F2F4F4;" >
            <div id="msg"></div>
             <form action="" method="post" style="margin:3%; padding: 3%;" name="employer_form" id="employer_form">
                 <div class="form-group">
                    <label for="Company name">Company name</label>          
                    <input type="text" name="company_name" id="company_name"  value=" <?php echo $company_name; ?>" class="form-control" placeholder="Enter Company Name">
                 </div>
                 <div class="form-group">
                    <label for="owner name">owner name</label>
                    <input type="" name="owner_name" id="owner_name" value=" <?php echo $oname; ?>" class="form-control" placeholder="Enter Owner Name">
                 </div>
                  <div class="form-group">
                    <label for="tel">phone</label>
                    <input type="tel"  name="phone" id="phone" value=" <?php echo $phone; ?>" class="form-control" placeholder="0924029960"  > 
                 </div>
               
                  <div class="form-group">
                    <label for="email">Enter email</label>
                    <input type="email" name="email" id="email" value=" <?php echo $email; ?>" class="form-control" placeholder="Enter email">
                 </div>
                  <div class="form-group">
                    <label for="address">Enter address</label>
                    <input type="text"  name="address" id="address" value=" <?php echo $address; ?>" class="form-control" placeholder="Enter address">
                 </div>
                
                 <div class="form-group">
                    <label for="Numberofemployees">Number of employees</label>
                    <input type="text"  name="Number_of_employees" id="Number_of_employees" value=" <?php echo $nemployee; ?>"  class="form-control" placeholder="Number_of_employees?">
                 </div>
                 <div class="form-group">
                    <label for="about company">about company</label>
                    <input type="text"  name="aboutcompany" id="aboutcompany" value=" <?php echo $ABout_company; ?>" class="form-control" placeholder="type company description">
                 </div>
                      <div class="form-group">
                   
                      <input type="hidden" name="id" id="id" value= " <?php echo $_GET['edit']; ?>">
                      <div class="form-group">

                      <input type="submit" href="Employerlist.php" class="btn btn-block btn-success" placeholder="Update" name="submit" id="submit">
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

    $id=$_POST['id'];
    $cname=$_POST['company_name'];
    $oname=$_POST['owner_name'];
    $phone=$_POST['phone_number'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $nemployee=$_POST['numberofemployees'];
    $ABout_company=$_POST['about_company'];
   
 
 	

  $query1=mysqli_query($con,"update employer set company_name ='$cname',owner_name='$oname', phone_number='$phone', email='$email', address='$address',
               numberofemployees='$nemployee', about_company='$ABout_company'  where id='$id'");
                      
               if ($query1) {
                        echo "<script>alert('Record has been Update successfully  !!!!')</script>";
                      }else{
                        echo "<script>alert('some error Please try again  !!!!')</script>";
                      }
                     }
                    

?>