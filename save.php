<!--
//$_SESSION['musername'];
//$_SESSION['mpassword'];

/*
$name=$_POST['sname'];
$dob=$_POST['dob'];
$pob=$_POST['placeofbirth'];
$reg=$_POST['reg'];
$dept=$_POST['dept'];
$year=$_POST['yr'];
$batch=$_POST['batch'];
$fname=$_POST['fname'];
$foccup=$_POST['foccup'];
$mname=$_POST['mname'];
$moccup=$_POST['moccup'];
$smob=$_POST['smob'];
$smail=$_POST['smail'];
$fmob=$_POST['fmob'];
$mmob=$_POST['mmob'];
$hos_day=$_POST['hos_day'];
$cflat=$_POST['cflat'];
$cvts=$_POST['cvts'];
$ccity=$_POST['ccity'];
$cdistrict=$_POST['cdistrict'];
$cstate=$_POST['cstate'];
$cpin=$_POST['cpin'];
$pflat=$_POST['pflat'];
$pvts=$_POST['pvts'];
$pcity=$_POST['pcity'];
$pdistrict=$_POST['pdistrict'];
$pstate=$_POST['pstate'];
$ppin=$_POST['ppin'];
$mbrd=$_POST['mbrd'];
$mmrk=$_POST['mmrk'];
$ibrd=$_POST['ibrd'];
$imrk=$_POST['imrk'];
$suc=$_POST['suc'];
$bloodgroup=$_POST['bloodgroup'];
$medhealth=$_POST['medhealth'];
$medallergy=$_POST['medallergy'];
$medialler=$_POST['medialler'];*/
//define('DB_NAME', 'student');
           //define('DB_HOST', 'localhost');
            //$sql= mysql_connect('127.0.0.1', 'root','');
            //$db_selected = mysql_select_db(DB_NAME, $sql);
            //  session_start();
//error_reporting(0);        session_start();
/*error_reporting(0);
	mysql_connect('localhost','root','') or die (mysql_error ());

	mysql_select_db("student") or die(mysql_error());

        //mysql_select_db("hello", $sql);
           if(isset($_POST['submit']))
    {
                //echo $vtuid;
            // yaha pe error hai//  
                $queryna="INSERT INTO personal(vtu) VALUES ('$vtuid')";
                
	mysql_select_db($queryna) or die(mysql_error());
             //$sql = "INSERT INTO personal(vtuid, name,regno, batch, dept, Year, dob, placeofbirth, h/ds, smobno) VALUES ('$vtuid','$name','$reg','$batch','$dept','$year','$dob','$pob','$hos_day',$smob)";
               
            echo 'Registered succesfully';
           }
            else
            {
                echo 'error';
            }
           /* If (!$sql && !$db_selected)
            {
            echo 'could not connect :'.  mysql_error();
            //$info="Check Your Username & Password.";
            //header('location:men.php');
            }
            else
            {
           /*  $sql = "INSERT INTO `communicationaddress` (`vtuid`, `flatno`, `village/town`, `city`, "
                     . "`district`, `state`, `pincode`) VALUES ($vtuid, $cflat, $cvts, $ccity,"
                     . " $cdistrict, $cstate, $cpin);";
             
             $sql1 = "INSERT INTO `permanentaddress` (`vtuid`, `flatno`, `village/town`, `city`, "
                     . "`district`, `state`, `pincode`) VALUES ($vtuid, $cflat, $cvts, $ccity,"
                     . " $cdistrict, $cstate, $cpin);";
             
             $sql2 = "INSERT INTO `health` (`vtuid`, `blood`, `allergy`, `issues`, `alrtomed`)"
                     . " VALUES ($vtuid, $bloodgroup, $medallergy, $medhealth, $medialler);";
             
            $sql3 = "INSERT INTO `parent` (`vtuno`, `fname`, `foccupation`, `fno`, `mname`, "
                    . "`moccupation`, `mno`) VALUES ($vtuid, '$fname, $foccup, $fmob,"
                    . " $mname, $moccup, $mmob);";
            
            $sql4 = "INSERT INTO `personal` (`vtuid`, `name`,`regno`, `batch`, `dept`,"
                    . " `Year`, `dob`, `placeofbirth`, `h/ds`, `smobno`) VALUES ($vtuid, $name,"
                    . " $reg, $batch, $dept, $year, $dob, $pob, $hos_day,"
                    . " $smob);";
            
            $sql = "INSERT INTO `school` (`vtuid`, `10board`, `12board`, `achievments`, `matcgpa`,"
                    . " `tweper`) VALUES ($vtuid, $mbrd, $ibrd, $suc, $mmrk, $imrk);";*/
              // $sql="INSERT INTO personal' (`vtuid`, `name`,`regno`, `batch`, `dept`,`Year`, `dob`, `placeofbirth`, `h/ds`, `smobno`) VALUES ($vtuid, $name, $reg, $batch, $dept, $year, $dob, $pob, $hos_day, $smob);";
              
            /*   $sql = "INSERT INTO `personal`(`vtuid`, `name`, `mentorid`, `regno`, `batch`, `dept`, `Year`, `dob`, `placeofbirth`, `h/ds`, `smobno`) VALUES ('$vtuid','$name','$reg','$batch','$dept','$year','$dob','$pob','$hos_day',$smob)";
               
               $sql="INSERT INTO `school` (`vtuid`, `10board`, `12board`, `achievments`, `matcgpa`,"
                    . " `tweper`) VALUES ('$vtuid', $mbrd, $ibrd, $suc, $mmrk, $imrk);";
              
               $sql = "INSERT INTO `communicationaddress` (`vtuid`, `flatno`, `village/town`, `city`, "
                     . "`district`, `state`, `pincode`) VALUES ($vtuid, $cflat, $cvts, $ccity,"
                     . " $cdistrict, $cstate, $cpin);";
             
             $sql = "INSERT INTO `permanentaddress` (`vtuid`, `flatno`, `village/town`, `city`, "
                     . "`district`, `state`, `pincode`) VALUES ($vtuid, $pflat, $pvts, $pcity,"
                     . " $pdistrict, $pstate, $ppin);";
             
             $sql = "INSERT INTO `health` (`vtuid`, `blood`, `allergy`, `issues`, `alrtomed`)"
                     . " VALUES ($vtuid, $bloodgroup, $medallergy, $medhealth, $medialler);";
             
            $sql = "INSERT INTO `parent` (`vtuno`, `fname`, `foccupation`, `fno`, `mname`, "
                    . "`moccupation`, `mno`) VALUES ($vtuid, $fname, $foccup, $fmob,"
                    . " $mname, $moccup, $mmob);";
            
               */
            
            
            

            
  /*          ?>
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
                                                                            <li><a href="#"><font color="orange">Mentor</font></a></li>
										<li><a href="ment.php">Mentee</a></li>
                                                                                <li><a href="adm.php">Administrator</a></li>
										<li><a href="cnt.php">Contact</a></li>
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
                      min-width: 350px;min-height: 250px;
                       padding-top:55px;
                      -webkit-border-radius: 25px 99px 0px 99px;
                      -moz-border-radius: 25px 99px 0px 99px;
                      border-radius: 25px 99px 0px 99px;
                      background:rgba(132,151,227,0.9);
                      -webkit-box-shadow: #B3B3B3 10px 10px 10px;
                      -moz-box-shadow: #B3B3B3 10px 10px 10px;
                      box-shadow: #B3B3B3 10px 10px 10px;">
                     
<?php
   error_reporting(0);
   
   ?> 

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