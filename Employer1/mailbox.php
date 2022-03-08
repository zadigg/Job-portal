<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
include('../class/view.php');

$em_id  = $_SESSION['emp']['id'];
$mailbox = new view();
$employerMailbox = $mailbox->viewEmployerMailbox($em_id);

$noOFsentMsg = $mailbox->contSentMsg($em_id);
?>


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Mailbox
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="breadcrumb-item active">Mailbox</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-3 col-12">
        <a href="compose.html" class="btn btn-success btn-block btn-shadow margin-bottom">Compose</a>

        <div class="box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Folders</h3>

            <div class="box-tools">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body no-padding mailbox-nav">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item"><a class="nav-link active" href="javascript:void(0)"><i
                    class="ion ion-ios-email-outline"></i> Sent
                  <span class="label label-success pull-right"><?php echo $noOFsentMsg; ?></span></a></li>


            </ul>
          </div>
          <!-- /.box-body -->
        </div>

      </div>
      <!-- /.col -->
      <div class="col-lg-9 col-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Inbox</h3>

          </div>

          <div class="box-body no-padding">
            <div class="mailbox-controls">

              <div class="btn-group">


                <!-- /.btn-group -->
              </div>
              <!-- /.pull-right -->
            </div>
            <div class="mailbox-messages">
              <table class="table table-hover table-striped table-responsive">
                <tbody>

                <?php

                  while($viewMessage = mysqli_fetch_array($employerMailbox)){

                    $js_id = $viewMessage['js_id'];
                    $messageID = $viewMessage['message_id'];
                    $subject = $viewMessage['subject'];
                    $message = $viewMessage['message'];
               
                    $receiver = new view();
                    $returnedReceiverName = $receiver->receiverName($js_id);
                    $receive = mysqli_fetch_array($returnedReceiverName);
                    $firstName = $receive['fname'];
                    $lastName = $receive['lname'];

                ?>
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailbox-name"><?php echo $firstName," ",$lastName;?> </td>
                    <td class="mailbox-subject"><a href="mailboxDetail.php?messageId=<?php echo $messageID ?>"><b><?php echo $subject;?></b> - <?php echo $message;?></a>
                    </td>
                   
                  </tr>
                 <?php
     
                  }
                 ?>
                </tbody>
              </table>
              <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer no-padding">
            <div class="mailbox-controls">
              <!-- Check all button -->


              
              <!-- /.pull-right -->
            </div>
          </div>
        </div>
        <!-- /. box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
</section>

<div class="control-sidebar-bg"></div>
</div>

<?php

include('includes/scripts.php');




?>


</body>

</html>