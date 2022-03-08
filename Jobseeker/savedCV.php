<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('../class/File.php');

$js_id = $_SESSION['JS']['js_id'];
$cvFile = new File();
$cvlist = $cvFile->viewCV($js_id);



if(isset($_POST['submit'])){
    
    $returnedBoolean = $cvFile->checkCvLimit($js_id);
    if($returnedBoolean == true){

   
$file = $_FILES["file"];
move_uploaded_file($file["tmp_name"], "resource/CV/" . $file['name']);
$filename = $file['name'];
// echo "<script>alert('$filename');</script>";

$cvFile->uploadCV($js_id,$filename);
}
else{
echo "<script>alert('you have to delete the old one to upload the new CV');</script>";

}
}
?>




<link rel="stylesheet" href="kotetDash/css/style.css"> <!-- Dashboard CSS -->
<!-- <link rel="stylesheet" href="CSSJSFONT/Job applied/plugins/css/plugins.css"> -->
<link href="CSSJSFONT/Job applied/css/style.css" rel="stylesheet">

<!-- Content Wrap -->
<div class="container-fluid">
    <div class="dashboard-body">
        <div class="dashboard-caption">

            <div class="dashboard-caption-header">
                <h4><i class="ti-briefcase"></i>Saved your CV</h4>
            </div>
        </div>

    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="container-fluid">
            
                <form enctype="multipart/form-data" action="" name="form" method="post">
                    Select File
                    <input type="file" name="file" id="photo" /></td>
                    <input type="submit" name="submit" id="submit" value="Upload" />
                </form>
                <br />
                <br />
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered"id="example">
                    <thead>
                        <tr>
                            <th width="90%" align="center">Files</th>
                            <th width="90%" align="center">View</th>

                            <th align="center">Action</th>
                        </tr>
                    </thead>
                 
                    <tr>

                    <?php
                    while($whiledcvlist=mysqli_fetch_array($cvlist)) {
                    ?>
                        
                        <td>
                            &nbsp;<?php echo $whiledcvlist['filename']; ?>
                        </td>

                        <td>
                            <button class="alert-success"><a
                                    href="../resource/CV/<?php echo $whiledcvlist['filename']; ?>">View</a></button>
                                    
                        </td>

                        <td>
                            <button class="alert-success">
                                <a download="<?php echo $whiledcvlist['filename']; ?>" href="../resource/CV/<?php echo $whiledcvlist['filename']; ?>">Download</a>
                            </button>
                                    
                        </td>
                    </tr>
                  <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>
</section>

<!-- Page Content  -->


<script src="kotetDash/js/jquery.min.js"></script>
<script src="kotetDash/js/popper.js"></script>
<script src="kotetDash/js/bootstrap.min.js"></script>
<script src="kotetDash/js/main.js"></script>
<!-- slider Area Start-->

</main><?php

include('includes/footer.php');

?>



</body>

</html>