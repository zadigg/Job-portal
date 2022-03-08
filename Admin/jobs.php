<?php
include('includes/header.php');
include('includes/sidebar.php');
?>


    <section id="main-content">
      <section class="wrapper site-min-height">
          <h4>  <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="">Jobs</a></li>
     

         
        </ol>
</h4>
      </nav>
        <div class="row mt">
          <div class="col-lg-12">
            <a class="btn btn-primary col-sm-4 col-sm-push-8" href="add_create_job.php">Add a job</a>
            <br>
            <br>
            <br>

            <table id="example" class="display" style="width:100%">
            <thead>
            <tr>
                <th>ID</th>
               
                <th>job Name</th>
                <th>job type</th>

                <th>role catagory</th>
                
                  <th>salary</th>
                  <th>gender</th>
                  <th>address</th>
                  <th>city</th>
                  <th>region</th>
                  <th>phone</th>
                  <th>Educational level</th>
                  <th>experiance</th>
                  <th>Job description</th>
                  <th>keyword</th>
                  <th>Job posted</th>
                  <th>deadline</th>


              
                   <th>Action</th>
               
            </tr>
        </thead>
        <tbody>

        <?php 
         include('connection/db.php');

        // $query=mysqli_query($con,"select * from jobs");
       $tinsu= "SELECT * FROM `jobs`";

       

 $tinsu= "SELECT `job_id`, `job_name`, `company_email`, `role_catagory`, `salary`, `gender`, `address`, `city`, `region`, `phone`, `degreelvl`, `experiance`,
 `job_description`,`jobposted`,`deadline`, `keyword`, `job_type`.`job_type_name` FROM `jobs` INNER JOIN `job_type` ON `jobs`.`jobtype_id` = `job_type`.`jobtype_id`";

         $query=mysqli_query($con,$tinsu);
        while($row=mysqli_fetch_array($query)){
        ?>
                    
            <tr>
            
              
           
                <td><?php echo $row['job_id']; ?></td>
                
                <td><?php echo $row['job_name']; ?></td>
                <td><?php echo $row['job_type_name']; ?></td>

                <td><?php echo $row['role_catagory']; ?></td>
            
                 <td><?php echo $row['salary']; ?></td>
                 <td><?php echo $row['gender']; ?></td>
                 <td><?php echo $row['address']; ?></td>
                 <td><?php echo $row['city']; ?></td>
                 <td><?php echo $row['region']; ?></td>
                 <td><?php echo $row['phone']; ?></td>
                 <td><?php echo $row['degreelvl']; ?></td>
                 <td><?php echo $row['experiance']; ?></td>
                 <td><?php echo $row['job_description']; ?></td>
                 <td><?php echo $row['keyword']; ?></td>
                 <td><?php echo $row['jobposted']; ?></td>
                 <td><?php echo $row['deadline']; ?></td>




              
                 <td>
                    <div class="row">
                       <div  class="btn-group">
                          <a href="job_edit.php?edit=<?php echo $row['job_id'];  ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> </a>
                           <a href="job_delete.php?del=<?php echo $row['job_id'];  ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> </a>
                       </div>
                    </div>
                 </td>
            </tr>
          <?php }  ?>
        </tbody>
      
    </table>


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
<?php
include('includes/scripts.php');
?>
  <!-- datatables plugin -->
  <script src="jquery-3.5.1.js"></script>
  <script type="text/javascript" src="DataTables/datatables.min.js"></script>
  
  <script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
</body>

</html>
