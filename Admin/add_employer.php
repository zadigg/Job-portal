<?php
      include_once('includes/header.php');
      include_once('includes/sidebar.php');
      include_once('../class/admin.php');
      if(isset($_POST["submit"])){

        $company_image = $_POST['company_image'];

    
     
        $company_name = $_POST['company_name'];
        $owner_name = $_POST['owner_name'];
        $phone_number = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $numberofemployees = $_POST['Number_of_employees'];
        $about_company = $_POST['aboutcompany'];    

        $hashedPwdInDb = password_hash($password,PASSWORD_DEFAULT);

        $employee = new Admin();
        $employee->addEmployer($company_image, $company_name, $owner_name,$phone_number,$email,$address,$hashedPwdInDb,$numberofemployees, $about_company);//-> this helps to call a class function using an that classes object
      }

?>

<section id="main-content">
      <section class="wrapper site-min-height">
          <h4>  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admindashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="catagory.php">Employer</a></li>
          <li class="breadcrumb-item"><a href="add_Catagory.php">Add Employer</a></li>

         
        </ol>
</h4>
      </nav>
        <div class="row mt">
          <div class="col-lg-12">
            <a class="btn btn-primary col-sm-4 col-sm-push-8" href="add_employer.php">Add Employer</a>
        <div style="width: 60%; margin-left: 20%; background-color: #F2F4F4;" >
          <div id="msg">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" style="margin:3%; padding: 3%;" name="employer_form" id="employer_form">
            <div class="form-group">
                  <label for="Company name">Company image</label>
                  <input type="file" name="company_image" id="company_image" class="form-control" placeholder="upload company image">
                </div>

                <div class="form-group">
                  <label for="Company name">Company name</label>
                  <input type="text" name="company_name" id="company_name" class="form-control" placeholder="Enter Company Name">
                </div>
                
                <div class="form-group">
                  <label for="owner name">owner name</label>
                  <input type="" name="owner_name" id="owner_name" class="form-control" placeholder="Enter Owner Name">
                </div>
                <div class="form-group">
                  <label for="tel">phone</label>
                  <input type="phone"  name="phone" id="phone" class="form-control" placeholder="0924029960" " > 
                </div>
              
                <div class="form-group">
                  <label for="email">Enter email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
                </div>
                
                <div class="form-group">
                  <label for="email">password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
                </div>
                <div class="form-group">
                  <label for="address">Enter address</label>
                  <input type="text"  name="address" id="address" class="form-control" placeholder="Enter address">
                </div>
              
                <div class="form-group">
                  <label for="Numberofemployees">Number of employees</label>
                  <input type="text"  name="Number_of_employees" id="Number_of_employees" class="form-control" placeholder="Number_of_employees?">
                </div>
                <div class="form-group">
                  <label for="about company">about company</label>
                  <input type="text"  name="aboutcompany" id="aboutcompany" class="form-control" placeholder="type company description">
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
<!-- 
<script>
    $(document).ready(function(){
      $('#submit').click(function(){
        var image_name = $('company_image').val();
        if(image_name == '')
        {
          alert("please select image");
          return false;
        }

        else
        {
          var extension = $('#company_image').val().split('.').pop().toLowercase();
          if(jQuery.inArray(extension, ['gif', 'png','jpg','jpeg']) == -1)
          {
            alert('invlaif image file');
            $('company_image').val();
            return false;
          }
        }
      } );
    });
  </script> -->