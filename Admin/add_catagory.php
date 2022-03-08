<?php
      include_once('includes/header.php');
      include_once('includes/sidebar.php');
      include_once('../class/admin.php');
      if(isset($_POST["submit"])){
     
        $role_cata = $_POST['role_cata'];
        $role_description = $_POST['role_description'];
   

      $catagory = new Admin();
        $catagory->addCatagory($role_cata, $role_description);//-> this helps to call a class function using that classes object
      }

?>

<section id="main-content">
      <section class="wrapper site-min-height">
          <h4>  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="catagory.php">Catagory</a></li>
          <li class="breadcrumb-item"><a href="add_Catagory.php">Add catagory</a></li>

         
        </ol>
</h4>
      </nav>
        <div class="row mt">
          <div class="col-lg-12">
            <a class="btn btn-primary col-sm-4 col-sm-push-8" href="add_jobseeker.php">Add Catagory</a>
        <div style="width: 60%; margin-left: 20%; background-color: #F2F4F4;" >
          <div id="msg">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="margin:3%; padding: 3%;" name="employer_form" id="employer_form">
                <div class="form-group">
                  <label for="Role catagory">Role catagory</label>
                  <input type="text" name="role_cata" id="role_cata" class="form-control" placeholder="Enter role catagory">
                </div>
                <div class="form-group">
                  <label for="role description">role description</label>
                  <input type="text" name="role_description" id="role_description" class="form-control" placeholder="Enter role description ">
                </div>
               
                    <div class="form-group">
                  
                  <input type="submit" class="btn btn-block btn-success" placeholder="Save" name="submit" id="submit">
                </div>
            </form>
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
