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
<link href="css/dob.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/polyfill.js"></script>
<script type="text/javascript" src="js/jdate.js"></script>
<script type="text/javascript" src="js/jdates.js"></script>
<script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
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
                      min-width: 350px;min-height: 250px;
                       padding-top:55px;
                      -webkit-border-radius: 25px 99px 0px 99px;
                      -moz-border-radius: 25px 99px 0px 99px;
                      border-radius: 25px 99px 0px 99px;
                      background:rgba(132,151,227,0.9);
                      -webkit-box-shadow: #B3B3B3 10px 10px 10px;
                      -moz-box-shadow: #B3B3B3 10px 10px 10px;
                      box-shadow: #B3B3B3 10px 10px 10px;">
                     <form class="form-horizontal" action="mar_ks.php" method="post">
                         <h1>
                            ACADEMICS
                         </h1>
                         <form>
                             VTU:
                             <input type="text" name="vtu"><br>
                             Semester:
                             <select>
                                 <li>
                                 <option value = "1">1</option>
                                 <option value = "2">2</option>
                                 <option value = "3">3</option>
                                 <option value = "4">4</option>
                                 <option value = "5">5</option>
                                 <option value = "6">6</option>
                                 <option value = "7">7</option>
                                 <option value = "8">8</option>
                                 
                                 </li>
                             </select><br>
                             Internal Test:
                             <select>
                                 <li>
                                 <option value = "ut1">Unit Test 1</option>
                                 <option value = "ut2">Unit Test 2</option>
                                 <option value = "mt1">Mid Term 1</option>
                                 <option value = "mt2">Mid Term 2</option>
                                 </li>
                             </select><br>
                             <table>
                                 <tr>
                                     
                                     <td><input type="text" name="subject name" placeholder="S.No." disabled="disabled" size="3"></td>
                                     <td><input type="text" name="subject name" placeholder="SUBJECT" disabled="disabled"></td>
                                     <td><input type="text" name="subject name" placeholder="MARKS" disabled="disabled"></td>
                                 </tr>
                                 <tr>
                                     <?php
                                     $i=1;
                                     ?>
                                     <td><input type="text" name="subject name" placeholder="<?php echo $i;?>" disabled="disabled" size="3"></td>
                                     <td><input type="text" name="subject name"></td>
                                     <td><input type="text" name="subject name"></td>
                                 </tr>
                                 <tr>
                                     <td><input type="text" name="subject name" placeholder="S.No." disabled="disabled" size="3"></td>
                                     <td><input type="text" name="subject name"></td>
                                     <td><input type="text" name="subject name"></td>
                                 </tr>
                                 <tr>
                                     <td><input type="text" name="subject name" placeholder="S.No." disabled="disabled" size="3"></td>
                                     <td><input type="text" name="subject name"></td>
                                     <td><input type="text" name="subject name"></td>
                                 </tr>
                                 <tr>
                                     <td><input type="text" name="subject name" placeholder="S.No." disabled="disabled" size="3"></td>
                                     <td><input type="text" name="subject name"></td>
                                     <td><input type="text" name="subject name"></td>
                                 </tr>
                                 <tr>
                                     <td><input type="text" name="subject name" placeholder="S.No." disabled="disabled" size="3"></td>
                                     <td><input type="text" name="subject name"></td>
                                     <td><input type="text" name="subject name"></td>
                                 </tr>
                                 <tr>
                                     <td><input type="text" name="subject name" placeholder="S.No." disabled="disabled" size="3"></td>
                                     <td><input type="text" name="subject name"></td>
                                     <td><input type="text" name="subject name"></td>
                                 </tr>
                                 <tr>
                                     <td><input type="text" name="subject name" placeholder="S.No." disabled="disabled" size="3"></td>
                                     <td><input type="text" name="subject name"></td>
                                     <td><input type="text" name="subject name"></td>
                                 </tr>
                                 <tr>
                                     <td><input type="text" name="subject name" placeholder="S.No." disabled="disabled" size="3"></td>
                                     <td><input type="text" name="subject name"></td>
                                     <td><input type="text" name="subject name"></td>
                                 </tr>
                                 <tr>
                                     <td><input type="text" name="subject name" placeholder="S.No." disabled="disabled" size="3"></td>
                                     <td><input type="text" name="subject name"></td>
                                     <td><input type="text" name="subject name"></td>
                                 </tr>
                                 <tr>
                                     <td><input type="text" name="subject name" placeholder="S.No." disabled="disabled" size="3"></td>
                                     <td><input type="text" name="subject name"></td>
                                     <td><input type="text" name="subject name"></td>
                                 </tr>
                                 <tr>
                                     <td><input type="text" name="subject name" placeholder="S.No." disabled="disabled" size="3"></td>
                                     <td><input type="text" name="subject name"></td>
                                     <td><input type="text" name="subject name"></td>
                                 </tr>
                                 <tr>
                                     <td><input type="text" name="subject name" placeholder="S.No." disabled="disabled" size="3"></td>
                                     <td><input type="text" name="subject name"></td>
                                     <td><input type="text" name="subject name"></td>
                                 </tr>
                             </table>
                             
                         
                         
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