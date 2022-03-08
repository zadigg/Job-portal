<?php
include('includes/header.php');
include('includes/sidebar.php');
include('../class/admin.php');

?>


<section id="main-content">
  <section class="wrapper site-min-height">
    <h4>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="employerlist.php">Employer</a></li>



        </ol>
    </h4>
    </nav>
    <div class="row mt">
      <div class="col-lg-12">
        <a class="btn btn-primary col-sm-4 col-sm-push-8" href="add_employer.php">Add Employers</a>
        <br>
        <br>
        <br>

        <table id="example" class="display table table-striped table-bordered" style="width:100%">
          <!-- <table id="example" class="display table table-striped table-bordered" style="width:100%"> -->

          <thead>
            <tr>
              <th>ID</th>

         

              <th>Company_name</th>
          

              <th>Owner Name</th>
              <th>Phone Number</th>
              <th>Email</th>

              <th >Action</th>

            </tr>
          </thead>
          <tbody>

            <?php 
     

         $Employers = new Admin();
         $EmployersResult = $Employers->selectEmployer();
        while($row=mysqli_fetch_array($EmployersResult)){
        ?>

            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['company_name']; ?></td>
             <td><?php echo $row['owner_name']; ?></td>
              <td><?php echo $row['phone_number']; ?></td>
              <td><?php echo $row['email']; ?></td>

              <td>
                <div class="row">
                  <div class="btn-group">
                    <a href="employer_edit.php?edit=<?php echo $row['id'];  ?>" class="btn btn-success"><span
                        class="glyphicon glyphicon-pencil"></span> </a>
                    <a href="employer_delete.php?del=<?php echo $row['id'];  ?>" class="btn btn-danger"><span
                        class="glyphicon glyphicon-trash"></span> </a>
                  </div>
                </div>
              </td>
            </tr>
            <?php }  ?>
          </tbody>

        </table>


        <section class="content">

          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">


                  <div class="row">
                    <div class="col-lg-12">
                      <h1 class="page-header">New pending employers <a href="add_employer.php"
                          class="btn btn-primary btn-xs  "> <i class="fa fa-plus-circle fw-fa"></i> Add New Employee</a>
                      </h1>
                    </div>

                  </div>


                  <table id="example" class="display table table-striped table-bordered" style="width:100%">

                    <thead>
                      <tr>
                        <th width="5%">EmployeeId</th>
                        <th>Company_name</th>
                        <th>Company_name</th>
                        <th>owner name</th>
                        <th>phone number </th>
                        <th>email</th>
                        <th>address</th>
                        <th>number of employees</th>
                        <th>Established</th>
                        

                        <th>about_company</th>

                   
                        <th width="14%">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                        include('connection/db.php');

                        
                          $newEmployers = new Admin();
                          $newEmployersTempResult = $newEmployers->pendingEmployerSelect();
                        while($row=mysqli_fetch_array($newEmployersTempResult)){
                        ?>

                      <tr>
                        <td><?php echo $row['empTempId']; ?></td>
                        <td><?php echo $row['company_image']; ?></td>
                        <td><?php echo $row['company_name']; ?></td>
                        <td><?php echo $row['owner_name']; ?></td>
                        <td><?php echo $row['phone_number']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['numberofemployees']; ?></td>
                        <td><?php echo $row['Established']; ?></td>

                        <td><?php echo $row['about_company']; ?></td>


                       
                        <td>
                          <div class="row">
                            <div class="btn-group">
                              <a href="pendingEmployerAccept.php?accept=<?php echo $row['empTempId'];  ?>" class="btn btn-success"><span
                                  class="glyphicon glyphicon-ok"></span> </a>
                              <a href="pendingEmployerDelete.php?del=<?php echo $row['empTempId'];  ?>" class="btn btn-danger"><span
                                  class="glyphicon glyphicon-remove"></span> </a>

                                  
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php }  ?>
                    </tbody>

                  </table>


                  </form>



                </div>
              </div>
            </div>
          </div>
        </section>
  </section>



  <?php
include('includes/scripts.php');
?>
  <!-- datatables plugin -->
  <script src="jquery-3.5.1.js"></script>
  <script type="text/javascript" src="DataTables/datatables.min.js"></script>

  <script>
    $(document).ready(function () {
      $('#example').DataTable();
    });
  </script>

 
  </body>

  </html>