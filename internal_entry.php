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
<style>
    th,td{
        padding: 10px;
    }
</style>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
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
	<!-- start-smoth-scrolling -->
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
                                                                            <li><a href="men.php">Mentor</a></li>
										<li><a href="ment.php"><font color="orange">Mentee</font></a></li>
                                                                                <li><a href="men.php">Administrator</a></li>
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
                 <div align="center" 
                      style="
                      height: auto;
                      width: auto;
                      min-width: 415px;min-height: 250px;
                       padding-top:55px;
                      -webkit-border-radius: 25px 99px 0px 99px;
                      -moz-border-radius: 25px 99px 0px 99px;
                      border-radius: 25px 99px 0px 99px;
                      background:rgba(132,151,227,0.9);
                      -webkit-box-shadow: #B3B3B3 10px 10px 10px;
                      -moz-box-shadow: #B3B3B3 10px 10px 10px;
                      box-shadow: #B3B3B3 10px 10px 10px;">
                     
                     <form method="post" action="result_submit.php" class="form-horizontal" align="center">
                         
                     
                     <table align="center">
                         <tr>
                             <td colspan="5" align="right"><a href="signout.php"><font color="maroon" size="4px"><img src="images/Logout-icon.png"></font></a></td></tr>
                         <tr>
                             
                                            
<?php 

error_reporting(0);
session_start();
$vrs=$_SESSION['vtuid'];
//echo $vrs;
$mentor=$_SESSION['musername'];
//$semss=$_SESSION['sems'];
/*echo $_SESSION['sems'];
                 if($semss='1st')
                 {
                     $dbtable='marks_s1';
                 }
                 elseif ($semss='2nd')
                 {
                     $dbtable='marks_s2';
                 }
                 
                 elseif ($semss='3rd')
                 {
                     $dbtable='marks_s3';
                 }
                 
                 elseif ($semss='4th')
                 {
                     $dbtable='marks_s4';
                 }
                 
                 elseif ($semss='5th')
                 {
                     $dbtable='marks_s5';
                 }
                 
                 elseif ($semss='6th')
                 {
                     $dbtable='marks_s6';
                 }
                 
                 elseif ($semss='7th')
                 {
                     $dbtable='marks_s7';
                 }
                 
                 elseif ($semss='8th')
                 {
                     $dbtable='marks_s8';
                 }  
                 */
define('DB_NAME', 'student');
           define('DB_HOST', 'localhost');
            $sql= mysql_connect(DB_HOST,"root","");
            //$db_selected = mysql_select_db(DB_NAME, $sql);
            $link = mysql_select_db('student');
            
           // $sqll = "SELECT * FROM `personal` where mentorid=$mentor";
            if(isset($_POST['submit']))
            {
                 //echo $dbtable;
             $sqll = "SELECT * FROM `marks_s5` WHERE `vtuid` = '$vrs'";
             $retval = mysql_query( $sqll, $sql );
             while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {       
                 $_SESSION['name']=$row['studentname'];
                 $u1s1=$row['u1s1'];
                 $u1s2=$row['u1s2'];
                 $u1s3=$row['u1s3'];
                 $u1s4=$row['u1s4'];
                 $u1s5=$row['u1s5'];
                 $u1s6=$row['u1s6'];
                 $u2s1=$row['u2s1'];
                 $u2s2=$row['u2s2'];
                 $u2s3=$row['u2s3'];
                 $u2s4=$row['u2s4'];
                 $u2s5=$row['u2s5'];
                 $u2s6=$row['u2s6'];
                 $m1s1=$row['m1s1'];
                 $m1s2=$row['m1s2'];
                 $m1s3=$row['m1s3'];
                 $m1s4=$row['m1s4'];
                 $m1s5=$row['m1s5'];
                 $m1s6=$row['m1s6'];
                 $m2s1=$row['m2s1'];
                 $m2s2=$row['m2s2'];
                 $m2s3=$row['m2s3'];
                 $m2s4=$row['m2s4'];
                 $m2s5=$row['m2s5'];
                 $m2s6=$row['m2s6'];
                 //$_SESSION['dbtable']=$dbtable;
                 //$_SESSION['mentorid']=$row['mentorid'];
                echo '<td colspan=5><h3>Hello <font color="white" face="cursive">'.'"'.strtoupper($row['studentname']).'"'.'</font></h3></td></tr>';
                echo '<tr><td align="center" colspan=5><font color="brown" size="5" face="Times New Roman"><b>Marks Entry!!!</b></font></td></tr>';
                echo '<tr><td align="center"><font color="voilet" size="5" face="Times New Roman">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>'
                . '<td align="center"><font color="voilet" size="5" face="Times New Roman">UNIT TEST-I(10)</font></td>'
                        . '<td align="center"><font color="voilet" size="5" face="Times New Roman">MIDTERM TEST-I(20)</font></td>'
                        . '<td align="center"><font color="voilet" size="5" face="Times New Roman">UNIT TEST-II(10)</font></td>'
                        . '<td align="center"><font color="voilet" size="5" face="Times New Roman">MIDTERM TEST-II(20)</font></td></tr>';
                        echo "<tr>"
                . "<td><legend>Subject 1</legend></td><td padding-left='20px'>"
                                . "<input id='u1s1' name='u1s1' type='text' size='10' maxlength='3' placeholder='$u1s1'  style='-webkit-border-radius: 8px;   -moz-border-radius: 8px; border-radius: 8px;   padding-left: 70px;'> </td>"
                                . "<td padding-left='20px'><input id='m1s1' name='m1s1' type='text' size='10' maxlength='3' placeholder='$m1s1' style='-webkit-border-radius: 8px;   -moz-border-radius: 8px;   border-radius: 8px;   padding-left: 70px'> </td>  "
                                . "<td padding-left='20px'><input id='u2s1' name='u2s1' type='text' size='10' maxlength='3' placeholder='$u2s1' style='-webkit-border-radius: 8px;   -moz-border-radius: 8px;   border-radius: 8px;   padding-left: 70px'> </td>"
                                . "<td padding-left='20px'><input id='m2s1' name='m2s1' type='text' size='10' maxlength='3'   placeholder='$m2s1' style='-webkit-border-radius: 8px;   -moz-border-radius: 8px;   border-radius: 8px;   padding-left: 70px'> </td> </tr>";
                               
                        echo "<tr>"
                . "<td><legend>Subject 2</legend></td><td padding-left='20px'>"
                                . "<input id='u1s2' name='u1s2' type='text' size='10' maxlength='3' placeholder='$u1s2'  style='-webkit-border-radius: 8px;   -moz-border-radius: 8px; border-radius: 8px;   padding-left: 70px;'> </td>"
                                . "<td padding-left='20px'><input id='m1s2' name='m1s2' type='text' size='10' maxlength='3' placeholder='$m1s2' style='-webkit-border-radius: 8px;   -moz-border-radius: 8px;   border-radius: 8px;   padding-left: 70px'> </td>  "
                                . "<td padding-left='20px'><input id='u2s2' name='u2s2' type='text' size='10' maxlength='3' placeholder='$u2s2' style='-webkit-border-radius: 8px;   -moz-border-radius: 8px;   border-radius: 8px;   padding-left: 70px'> </td>"
                                . "<td padding-left='20px'><input id='m2s2' name='m2s2' type='text' size='10' maxlength='3'   placeholder='$m2s2' style='-webkit-border-radius: 8px;   -moz-border-radius: 8px;   border-radius: 8px;   padding-left: 70px'> </td> </tr>";
                              
                        echo "<tr>"
                . "<td><legend>Subject 3</legend></td><td padding-left='20px'>"
                                . "<input id='u1s3' name='u1s3' type='text' size='10' maxlength='3' placeholder='$u1s3'  style='-webkit-border-radius: 8px;   -moz-border-radius: 8px; border-radius: 8px;   padding-left: 70px;'> </td>"
                                . "<td padding-left='20px'><input id='m1s3' name='m1s3' type='text' size='10' maxlength='3' placeholder='$m1s3' style='-webkit-border-radius: 8px;   -moz-border-radius: 8px;   border-radius: 8px;   padding-left: 70px'> </td>  "
                                . "<td padding-left='20px'><input id='u2s3' name='u2s3' type='text' size='10' maxlength='3' placeholder='$u2s3' style='-webkit-border-radius: 8px;   -moz-border-radius: 8px;   border-radius: 8px;   padding-left: 70px'> </td>"
                                . "<td padding-left='20px'><input id='m2s3' name='m2s3' type='text' size='10' maxlength='3'   placeholder='$m2s3' style='-webkit-border-radius: 8px;   -moz-border-radius: 8px;   border-radius: 8px;   padding-left: 70px'> </td> </tr>";
                              
                        echo "<tr>"
                . "<td><legend>Subject 4</legend></td><td padding-left='20px'>"
                                . "<input id='u1s4' name='u1s4' type='text' size='10' maxlength='3' placeholder='$u1s4'  style='-webkit-border-radius: 8px;   -moz-border-radius: 8px; border-radius: 8px;   padding-left: 70px;'> </td>"
                                . "<td padding-left='20px'><input id='m1s4' name='m1s4' type='text' size='10' maxlength='3' placeholder='$m1s4' style='-webkit-border-radius: 8px;   -moz-border-radius: 8px;   border-radius: 8px;   padding-left: 70px'> </td>  "
                                . "<td padding-left='20px'><input id='u2s4' name='u2s4' type='text' size='10' maxlength='3' placeholder='$u2s4' style='-webkit-border-radius: 8px;   -moz-border-radius: 8px;   border-radius: 8px;   padding-left: 70px'> </td>"
                                . "<td padding-left='20px'><input id='m2s4' name='m2s4' type='text' size='10' maxlength='3'  placeholder='$m2s4' style='-webkit-border-radius: 8px;   -moz-border-radius: 8px;   border-radius: 8px;   padding-left: 70px'> </td> </tr>";
                              
                        echo "<tr>"
                . "<td><legend>Subject 5</legend></td><td padding-left='20px'>"
                                . "<input id='u1s5' name='u1s5' type='text' size='10' maxlength='3' placeholder='$u1s5'  style='-webkit-border-radius: 8px;   -moz-border-radius: 8px; border-radius: 8px;   padding-left: 70px;'> </td>"
                                . "<td padding-left='20px'><input id='m1s5' name='m1s5' type='text' size='10' maxlength='3' placeholder='$m1s5' style='-webkit-border-radius: 8px;   -moz-border-radius: 8px;   border-radius: 8px;   padding-left: 70px'> </td>  "
                                . "<td padding-left='20px'><input id='u2s5' name='u2s5' type='text' size='10' maxlength='3' placeholder='$u2s5' style='-webkit-border-radius: 8px;   -moz-border-radius: 8px;   border-radius: 8px;   padding-left: 70px'> </td>"
                                . "<td padding-left='20px'><input id='m2s5' name='m2s5' type='text' size='10' maxlength='3'  placeholder='$m2s5' style='-webkit-border-radius: 8px;   -moz-border-radius: 8px;   border-radius: 8px;   padding-left: 70px'> </td> </tr>";
                              
                        echo "<tr>"
                . "<td><legend>Subject 6</legend></td><td padding-left='20px'>"
                                . "<input id='u1s6' name='u1s6' type='text' size='10' maxlength='3' placeholder='$u1s6'  style='-webkit-border-radius: 8px;   -moz-border-radius: 8px; border-radius: 8px;   padding-left: 70px;'> </td>"
                                . "<td padding-left='20px'><input id='m1s6' name='m1s6' type='text' size='10' maxlength='3' placeholder='$m1s6' style='-webkit-border-radius: 8px;   -moz-border-radius: 8px;   border-radius: 8px;   padding-left: 70px'> </td>  "
                                . "<td padding-left='20px'><input id='u2s6' name='u2s6' type='text' size='10' maxlength='3' placeholder='$u2s6' style='-webkit-border-radius: 8px;   -moz-border-radius: 8px;   border-radius: 8px;   padding-left: 70px'> </td>"
                                . "<td padding-left='20px'><input id='m2s6' name='m2s6' type='text' size='10' maxlength='3'  placeholder='$m2s6' style='-webkit-border-radius: 8px;   -moz-border-radius: 8px;   border-radius: 8px;   padding-left: 70px'> </td> </tr>";
                              
            }}
            
?>
                         <tr>
                             <td colspan="5" align="center">
                                  <input type="submit" name="submit" value="Done" style="
                                            background:    #3d85c6;
background:    -webkit-linear-gradient(#3d85c6, #073763);
background:    linear-gradient(#3d85c6, #073763);
border:        1px solid #569;
border-radius: 5px;
color:         #fff;
display:       inline-block;
padding:       8px 20px;
font:          italic 700 23px/1 'Droid Serif', serif;
text-align:    center;
text-shadow:   1px 1px 0 #000;">
                     
                     
                             </td>
                         </tr></table>
                                    </form>

</div>
                    
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