
<?php 
session_start();
if ( $_SESSION['email']==true) {
 
}else{
   header('location:admin_login.php');
}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="">
  <title>Ethio Job portal</title>

  <!-- Favicons -->
  <link href="CSSJSFOnt/Admin Dashboard/img/favicon.png" rel="icon">
  <link href="CSSJSFOnt/Admin Dashboard/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="CSSJSFOnt/Admin Dashboard/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="CSSJSFOnt/Admin Dashboard/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="CSSJSFOnt/Admin Dashboard/css/style.css" rel="stylesheet">
  <link href="CSSJSFOnt/Admin Dashboard/css/style-responsive.css" rel="stylesheet">
  <link href="CSSJSFOnt/Admin Dashboard/modal.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
 


  </head>

<body>
  <section id="container">

    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="admindashboard.php" class="logo"><?php echo $_SESSION['email']; ?></a>
      <!--logo end-->
    
        <!--  notification start -->
        
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>