<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');


$Image = $_GET['img'];
$fname = $_GET['fullname'];
$address = $_GET['address'];
$profile = $_GET['profile'];

$phone = $_GET['phone'];
$address = $_GET['address'];
$email = $_GET['email'];


$skill = $_GET['skill'];
$skill1 = $_GET['skill1'];

$hobby = $_GET['hobby'];
$hobby1 = $_GET['hobby1'];

$uniersity_name = $_GET['univname'];
$uni_grad_year = $_GET['univgradyear'];
$department = $_GET['department'];
$cgpa = $_GET['cgpa'];
$edlvl = $_GET['edlvl'];


$uniersity_name1 = $_GET['univname1'];
$uni_grad_year1 = $_GET['univgradyear1'];
$department1 = $_GET['department1'];
$cgpa1 = $_GET['cgpa1'];
$edlvl1 = $_GET['edlvl1'];


$comp = $_GET['company1'];
$compdesc = $_GET['companydesc'];
$compyear = $_GET['comapny1yearfrom'];
$compyearto = $_GET['comapny1yearto'];


$comp1 = $_GET['company2'];
$comp1desc = $_GET['company2desc'];
$comp1year = $_GET['comapny2yearfrom'];
$comp2yearto = $_GET['comapny1yearto'];



$language = $_GET['language'];
$language1 = $_GET['language1'];


?>

<script>
  window.onafterprint = function(e){
    closePrintView();
  };

  function myFunction(){
    window.print();
  }

  function closePrintView(){
    window.location.href = 'http://google.com';
  }
</script> -

<link rel="stylesheet" href="kotetDash/css/style.css">



<style>
	

  .cover{padding: 11px;}
  .cvBody{border:1px solid black; width: 57%;min-height: 444px;}
  .cv-head{background:#212121;width: 40%;padding: 4px}
  .photo{background:#BCBCBC;height: 222px}
  .cv-content{width: 60%;background:#321A3C;padding:11px 11px 11px 44px;}
  .center{text-align: center;}
  .flex{display: inline-flex;}
  .about-tab{background:#3C474D;}
  .about-head{ color: white ;font-size: 15pt;font-variant: small-caps;margin: 5px 0;font-weight: bold;font-size: 18pt;text-align: center;padding:11px;background:blue;width: 110%;border-radius:0  222px 222px 0;position: relative;z-index: 1}
  .about-details{color: white;padding:4px; font-family: calibri light;}
  .about-details li{font-size: 13pt;margin: 5px}
  .body-item{}
  .body-head{font-size: 17pt;text-align: center;color: white;font-family: Arial Rounded MT;font-variant:small-caps;}
  .body-details{padding:0 0 0 44px; }
  .detail-item,.info-item{margin-top: 11px}
  .detail-item-head{font-size: 15pt;font-family: calibri light;font-weight: bold}
  .info-item-head{width: 144px;font-size: 12pt;float: left;}
  .info-item-body{width: 200px;font-size: 12pt;float: right}
  .detail-item-text{font-size: 12pt;}
  #cvname{font-size: 14pt}
  .circle{border-radius: 50%}
  .detail-item{color: #CB9A5A}
  
  #dialogCover{position: absolute;width: 100%;height: 150%;background: black;top: 0;opacity: .8}
  
  
  
    </style>
  





<body >

<div id="printCV" class="col-sm-12" >
	<div class="" id="get">
		<div class="cvBody flex pull-left" >
			<div class="cv-head">
				<div class="photo center ">
					<span id="picSpan">
						<img id="image_preview" src="photo/user.png" width="133px" style="margin: auto;padding-top: 6px">
					</span><br><br>
					<span style="color: black;" id="cvname"><?php echo $fname ?></span>
				</div>
				
				<div class="about-tab ">
					<div class="about-head">About Me</div>
					<div class="about-details" id="cvaboutme" style="background:#CBCBCB;color:black;padding:11px 3px"><?php echo $profile ?></div>
				</div>
				<div class="about-tab ">
					<div class="about-head" style="background:#FDBC00">Contact Me</div>
					<div class="about-details">
						<ul>
							<li id="cvphone1"><?php echo $phone ?></li>
				
							
						</ul>
					</div>
				</div>
				<div class="about-tab ">
					<div class="about-head" style="background:#50BD00"> Skills</div>
					<div class="about-details" style="background:#FBFBFB;color:black">
						<ul>
              <li id="cvskill1"><?php echo $skill ?></li>
              <li id="cvskill1"><?php echo $skill1 ?></li>

              

						</ul>
					</div>
				</div>
				
			</div>
			<div class="cv-content">
				<div class="body-item">
					<div class="body-head"> Education</div>
					<div class="body-details fontTreb">
						
						<div class="detail-item" id="cvEdu1">
							<div class="detail-item-head">
								<span id="cvEdu1name"><?php echo $edlvl ?> In <?php echo $department ?></span>,
								<span id="cvEdu1py">2017</span>
							</div>
							
							<div class="detail-item-body">Securing <span id="cvEdu1marks"> <?php echo $cgpa ?></span> <strong> From </strong> <span id="cvEdu1insiti"><?php echo $uniersity_name ?> </span></div>
						</div>
					

					</div>
				</div>
			
				<div class="body-item" id="expMenu">	<hr>
					<div class="body-head"> Experience</div>
					<div class="body-details fontTreb" id="cvExp1">
						<div class="detail-item">
							<div class="detail-item-head" id="cvExp1">
								<span id="cvExp1name"><?php echo $comp ?></span>, 
								<span id="cvExp1start"><?php echo $compdesc ?></span>
                <span id="cvExp1leave"><?php echo $compyear ?></span>-
								<span id="cvExp1leave"><?php echo $compyearto ?></span>
                
							</div>
		
						</div>

				
				</div>
				
				<div class="body-item" id="personalMenu"><hr>
				
				<div style="clear: both;"></div>
				<div class="body-item" id="langMenu"><hr>
					<div class="body-head">Languages</div>
					<div class="body-details fontTreb">
						<div class="detail-item">
							<div class="detail-item-text" id="cvLangText"><?php echo $language ?> and <?php echo $language1 ?></div>
						</div>
						
					</div>
				</div>
				
				<div class="body-item" id="customMenu"><hr>
					<div class="body-head"><span id="cvCustomHead"> Custom Header</span></div>
					<div class="body-details fontTreb">
						<div class="detail-item">
							<div class="detail-item-text" id="cvCustomText">Custom Text</div>
						</div>
						
					</div>
				</div>
			</div>
	</div>	


 <button  name="pCV" onClick="myFunction()" class="pull-right btn btn-success" style="position: fixed;right: 22px;bottom: 22px;box-shadow: 2px 2px 11px black" id="download">Finish and Download CV</button>
		   
</body>
</html>