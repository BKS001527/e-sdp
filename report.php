<!DOCTYPE html>
<html>
<head>
<title>Student Development Programme</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Student Development Programme" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link rel="stylesheet" href="css/swipebox.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/new.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<style>
    th, td {
    padding: 2px;
}
</style>
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<script src="js/responsiveslides.min.js"></script>
		<!-- swipe box js -->
			<script src="js/jquery.swipebox.min.js"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
			</script>
		<!-- //swipe box js -->
	<!-- start-smooth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->

</head>
<body>
<!--banner-->
<div class="banner">
	<div class="container">
			<div class="header-nav">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header logo">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1>
									<a class="navbar-brand link link--yaku" href="index.php"><span>e</span><span>S</span><span>D</span><span>P</span></a>
								</h1>
								
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav class="cl-effect-1">
									<ul class="nav navbar-nav ">
                                                                            <li><a href="index.php">Home</a></li>
                                                                            <li><a href="#"><font color="orange">Mentor</font></a></li>
										<li><a href="ment.php">Mentee</a></li>
                                                                                <li><a href="adm.php">Administrator</a></li>
										<li><a href="http://www.veltechuniv.edu.in/contact-us/">Contact</a></li>
									</ul>
								</nav>
							</div><!-- /navbar-collapse -->
						</nav>
			</div>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: false,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
		<div  id="top" class="callbacks_container" padding-top="50px" align="center" >
                    <p align="right"><a href="signout.php"><img src="images/Logout-icon.png"></a></p><br>
                 <div align="center" 
                      style="
                      height: auto;
                      width: auto;
                      min-width: 350px;min-height: 250px;
                       padding-top:10px;
                      -webkit-border-radius: 25px 99px 0px 99px;
                      -moz-border-radius: 25px 99px 0px 99px;
                      border-radius: 25px 99px 0px 99px;
                      background:rgba(132,151,227,0.9);
                      -webkit-box-shadow: #B3B3B3 10px 10px 10px;
                      -moz-box-shadow: #B3B3B3 10px 10px 10px;
                      box-shadow: #B3B3B3 10px 10px 10px;">
                              
           

                     
            
            
<?php 

error_reporting(0);
session_start();
$vtu=$_POST['vtu'];
$vtu=  strtoupper($vtu);
$mentor=$_SESSION['musername'];
define('DB_NAME', 'student');
           define('DB_HOST', 'localhost');
            $sql= mysql_connect(DB_HOST,"root","");
            //$db_selected = mysql_select_db(DB_NAME, $sql);
            $link = mysql_select_db('student');
            
           // $sqll = "SELECT * FROM `personal` where mentorid=$mentor";
            if(isset($_POST['submit']))
            {
             $sqll = "SELECT * FROM `myinfo` WHERE `vtuid` = '$vtu'";
             $retval = mysql_query( $sqll, $sql );
             while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {
                 if($row['mathscgpa']<=10)
                 {
                     $use='CGPA';
                 }
                 else
                 {
                     $use='%';
                 }
                echo '<table min-width="500px" padding="10px">';
                echo '<tr><td colspan="4" align="center"><font color="orange" size="6" face="Times New Roman"><u>STUDENT PROFILE</u></font></td></tr>';
                //Personal Details
                echo '<tr><td colspan="4" align="left"><font color="brown" size="5" face="Times New Roman"><u>Personal Details :</u></font></td></tr>';
                echo '<tr><td><h4>VTU Id : </td><td><font color="white">'.strtoupper($row['vtuid']).'</font></h4></td><td><h4>Name : </td><td><font color="white">'.strtoupper($row['studentname']).'</font></h4></td></tr>';
                echo '<tr><td><h4>Register No.: </td><td><font color="white">'.strtoupper($row['register']).'</font></h4></td><td><h4>Department : </td><td><font color="white">'.strtoupper($row['department']).'</font></h4></td></tr>';
                echo '<tr><td><h4>Year : </td><td><font color="white">'.strtoupper($row['year']).'</font></h4></td><td><h4>Section : </td><td><font color="white">'.strtoupper($row['section']).'</font></h4></td></tr>';
                echo '<tr><td><h4>Place Of Birth : </td><td><font color="white">'.strtoupper($row['palceofbirth']).'</font></h4></td><td><h4>Student Mobile : </td><td><font color="white">'.strtoupper($row['studentmob']).'</font></h4></td></tr>';
                echo '<tr><td><h4>Mother Tongue : </td><td><font color="white">'.strtoupper($row['mothertongue']).'</font></h4></td><td><h4>Date Of Birth : </td><td><font color="white">'.strtoupper($row['dob']).'</font></h4></td></tr>';
                echo '<tr><td><h4>Email : </td><td><font color="white">'.($row['email']).'</font></h4></td><td><h4>Blood Group : </td><td><font color="red">'.strtoupper($row['bloodgroup']).'</font></h4></td></tr>';
                echo '<tr><td><h4>Father Name : </td><td><font color="white">'.strtoupper($row['fathername']).'</font></h4></td><td><h4>Mother Name : </td><td><font color="white">'.strtoupper($row['mothername']).'</font></h4></td></tr>';
                echo '<tr><td><h4>Father'."'".'s Qulaification : </td><td><font color="white">'.strtoupper($row['fqual']).'</font></h4></td><td><h4>Mother'."'".'s Qulaification : </td><td><font color="white">'.strtoupper($row['mqual']).'</font></h4></td></tr>';
                echo '<tr><td><h4>Father'."'".'s Occupation  : </td><td><font color="white">'.strtoupper($row['foccupation']).'</font></h4></td><td><h4>Mother'."'".'s Occupation : </td><td><font color="white">'.strtoupper($row['moccupation']).'</font></h4></td></tr>';
                echo '<tr><td><h4>Father'."'".'s Mobile  : </td><td><font color="white">'.strtoupper($row['fathermob']).'</font></h4></td><td><h4>Mother'."'".'s Mobile : </td><td><font color="white">'.strtoupper($row['mothermob']).'</font></h4></td></tr>';
                echo '<tr><td><h4>Accomodation  : </td><td colspan=3><font color="#800000">'.strtoupper($row['accomodation']).'</font></h4></td></tr>';
                // Communication Details
                echo '<tr><td colspan="4" align="left"><font color="brown" size="5" face="Times New Roman"><u>Communication Details :</u></font></td></tr>';
                echo '<tr><td colspan="2" align="left"><font color="voilet" size="4" face="Verdana">Residential Address :</font></td><td colspan="2" align="left"><font color="voilet" size="4" face="Verdana">Permanent Address :</font></td></tr>';
                echo '<tr><td colspan=2><h5><font color="white">'.strtoupper($row['cflatno']).', '.strtoupper($row['cvillagetown']).'</h5></font></td><td colspan=2><h5><font color="white">'.strtoupper($row['pflatno']).', '.strtoupper($row['pvillagetown']).'</h5></font></td></tr>';
                echo '<tr><td colspan=2><h5><font color="white">'.strtoupper($row['ccity']).', '.strtoupper($row['cdistrict']).'</h5></font></td><td colspan=2><h5><font color="white">'.strtoupper($row['pcity']).', '.strtoupper($row['pdistrict']).'</h5></font></td></tr>';
                echo '<tr><td colspan=2><h5><font color="white">'.strtoupper($row['cstate']).' - '.strtoupper($row['cpincode']).'</h5></font></td><td colspan=2><h5><font color="white">'.strtoupper($row['pstate']).' - '.strtoupper($row['ppincode']).'</h5></font></td></tr>';
                // Academic Details
                echo '<tr><td colspan="4" align="left"><font color="brown" size="5" face="Times New Roman"><u>Academic Details :</u></font></td></tr>';
                echo '<tr><td colspan=2><h4><font color="voilet" face="verdana">'.'Matriculation :'.'</h5></font></td><td colspan=2><h4><font color="voilet" face="verdana">'.'Intermediate :'.'</h5></font></td></tr>';
                echo '<tr><td><h4>Board : </td><td><font color="white">'.strtoupper($row['mathsboard']).'</font></h4></td><td><h4>Board : </td><td><font color="white">'.strtoupper($row['intermediateboard']).'</font></h4></td></tr>';
                echo '<tr><td><h4>Percentage/CGPA : </td><td><font color="white">'.strtoupper($row['mathscgpa']).' '.$use.'</font></h4></td><td><h4>Percentage : </td><td><font color="white">'.strtoupper($row['intermediatepercent']).'%'.'</font></h4></td></tr>';
                echo '<tr><td><h4>Achievements  : </td><td colspan=3><font color="#800000">'.strtoupper($row['achievements']).'</font></h4></td></tr>';

                echo '<tr><td colspan="4" align="left"><font color="brown" size="5" face="Times New Roman"><u>Medical Details :</u></font></td></tr>';
                echo '<tr><td><h4>Health Issues  : </td><td colspan=3><font color="#fff">'.strtoupper($row['issue']).'</font></h4></td></tr>';
                echo '<tr><td><h4>Allergy  : </td><td colspan=3><font color="#fff">'.strtoupper($row['allergy']).'</font></h4></td></tr>';
                echo '<tr><td><h4>Allergy From Mediciene  : </td><td colspan=3><font color="#fff">'.strtoupper($row['alergytomediciene']).'</font></h4></td></tr>';

                echo '<tr align=center><td colspan="4"><a onclick="myFunction()"><img src="images/print.png"></td></tr></table>';
            }}
?>
                 </div>

<script>
function myFunction() {
    window.print();
}
</script>
                    
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--//banner-->

 <!-- footer -->
<?php
include 'footer.php';
?>
<!-- //footer -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</body>
</html>