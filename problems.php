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
                    <p align="right"><a href="signout.php"><img src="images/Logout-icon.png"></a></p>
                 <div align="center" 
                      style="
                      height: auto;
                      width: 415px;min-height: 250px;
                       padding-top:55px;
                      -webkit-border-radius: 25px 99px 0px 99px;
                      -moz-border-radius: 25px 99px 0px 99px;
                      border-radius: 25px 99px 0px 99px;
                      background:rgba(132,151,227,0.9);
                      -webkit-box-shadow: #B3B3B3 10px 10px 10px;
                      -moz-box-shadow: #B3B3B3 10px 10px 10px;
                      box-shadow: #B3B3B3 10px 10px 10px;">
                     
                     <form method="post" action="fsubmit.php" class="form-horizontal" align="center">
                         
                     
                     <table>
                         <tr>
                             
                                            
<?php 

error_reporting(0);
session_start();
$vrs=$_SESSION['vtuid'];
$mentor=$_SESSION['musername'];
define('DB_NAME', 'student');
           define('DB_HOST', 'localhost');
            $sql= mysql_connect(DB_HOST,"root","");
            //$db_selected = mysql_select_db(DB_NAME, $sql);
            $link = mysql_select_db('student');
            
           // $sqll = "SELECT * FROM `personal` where mentorid=$mentor";
            if(isset($_POST['submit']))
            {
             $sqll = "SELECT * FROM `myinfo` WHERE `vtuid` = '$vrs'";
             $retval = mysql_query( $sqll, $sql );
             while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {
                 $_SESSION['name']=$row['studentname'];
                 $_SESSION['mentorid']=$row['mentorid'];
                echo '<td colspan=3><h3>Hello <font color="white" face="cursive">'.'"'.strtoupper($row['studentname']).'"'.'</font></h3></td></tr>';
                echo '<tr><td align="center" colspan=3><font color="brown" size="5" face="Times New Roman"><b>How May I Assit You!!!</b></font></td></tr>';
                echo '<tr><td align="center"><font color="voilet" size="5" face="Times New Roman">TYPE</font></td>'
                . '<td align="center"><font color="voilet" size="5" face="Times New Roman">PROBLEM</font></td></tr>';
                        
            }}
?>
                         <tr>
                             <td>
    <select id="type1" name="type1" class="form-control">
      <option value="personal">Personal</option>
      <option value="academic">Academic</option>
    </select></td>
    <td>
        <div class="form-group">
                    
    <textarea class="form-control" id="problem1" name="problem1" size='200'></textarea>

</div>
    </td>
    
                         </tr>
                         
                         
                         <tr>
                             <td>
    <select id="type2" name="type2" class="form-control">
      <option value="personal">Personal</option>
      <option value="academic">Academic</option>
    </select></td>
    <td>
        <div class="form-group">
                    
    <textarea class="form-control" id="problem2" name="problem2" size='200'></textarea>

</div>
    </td>
    
                         </tr>
                         <tr>
                             <td>
    <select id="type3" name="type3" class="form-control">
      <option value="personal">Personal</option>
      <option value="academic">Academic</option>
    </select></td>
    <td>
        <div class="form-group">
                    
    <textarea class="form-control" id="problem3" name="problem3" size='200'></textarea>

</div>
    </td>
    
                         </tr>
                         <tr>
                             <td colspan="3" align="center">
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