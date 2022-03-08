<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');

include('../class/Exam.php');

?>

<?php 
$job_id = $_GET['job_id'];

$qusetion = new Exam();
$queryFindQuestion = $qusetion->fetchQuestion($job_id);





?>

<link rel="stylesheet" href="CSSJSFONT/CandidateList2/css/style.css">

<style>
    .pagination li{
        display: inline;
    }
</style>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Manage Candidates
       
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Exam</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div id="content" class="p-4 p-md-5 pt-5">
        <div class="Loader"></div>
		<div class="wrapper">  
						<div class="Container-fluid">
							<div class="dashboard-body">
								
                            <div id="page-wrap">

<h1>Exam for [JobName]</h1>

<form method="post" id="quiz">

    <ol>
    <?php 
    $count = 1;
    while($whileQuestion = mysqli_fetch_array($queryFindQuestion)){

        // for(i=0;i<10;i++)
        $GLOBALS['idexam'] = $whileQuestion['exam_id'].$whileQuestion['choose3'];
        
    ?>
        <li>
       <?php 

            if(isset($_POST['submitQuiz'])){

                
                $answer = $idexam;
                echo "<script>alert('$answer')</script>";
            }
       ?>
            <h3> <?php echo $whileQuestion['question'];?></h3>
           
            <div>

                <input type="radio"  name="<?php echo $idexam; ?>" id="<?php echo $whileQuestion['exam_id'].$whileQuestion['choose1']; ?>" value="A" />
                <label for="<?php echo $whileQuestion['exam_id'].$whileQuestion['choose1']; ?>">A) <?php echo $whileQuestion['choose1'];?> </label>
            </div>
            <div>
                <input type="radio" name="<?php echo $idexam; ?>" id="<?php echo $whileQuestion['exam_id'].$whileQuestion['choose2']; ?>" value="A" />
                <label for="<?php echo $whileQuestion['exam_id'].$whileQuestion['choose2']; ?>">B) <?php echo $whileQuestion['choose2'];?> </label>
            </div>
            <div>
                <input type="radio" name="<?php echo $idexam; ?>" id="<?php echo $whileQuestion['exam_id'].$whileQuestion['choose3']; ?>" value="A" />
                <label for="<?php echo $whileQuestion['exam_id'].$whileQuestion['choose3']; ?>">C) <?php echo $whileQuestion['choose3'];?> </label>
            </div>
            <div>
                <input type="radio" name="<?php echo $idexam; ?>" id="<?php echo $whileQuestion['exam_id'].$whileQuestion['choose4']; ?>" value="A" />
                <label for="<?php echo $whileQuestion['exam_id'].$whileQuestion['choose4']; ?>">D) <?php echo $whileQuestion['choose4'];?> </label>
            </div>
            
           
            <!-- <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                <label for="question-1-answers-B">B) <?php echo $whileQuestion['choose2'];?></label>
            </div>
            
            <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                <label for="question-1-answers-C">C) <?php echo $whileQuestion['choose3'];?></label>
            </div>
            
            <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                <label for="question-1-answers-D">D)<?php echo $whileQuestion['choose4'];?></label>
            </div> -->
       
        </li>
        <?php
        $count++;
    }
        ?>
    
    </ol>
    
    <input type="submit" name="submitQuiz" value="Submit Quiz" />

</form>

</div>
                                    
                                        



















								</div>
							</div>
						</div>
					
					</div>
				</div>
			</section>
		
		</div>
    </section>
</div>
  	
<?php

include('includes/scripts.php');




?>
	
	
</body>
</html>
