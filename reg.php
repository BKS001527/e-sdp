<?php
session_start();
$_SESSION['musername'];
?>
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
                     <form class="form-horizontal" action="success.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Student Details</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="vtuid">VTU ID</label>  
  <div class="col-md-5">
      <input id="vtuid" name="vtuid" type="text" placeholder="VTUXXXX" class="form-control input-md" required="" size='7'maxlength="7">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sname">Name</label>  
  <div class="col-md-5">
  <input id="sname" name="sname" type="text" placeholder="Student" class="form-control input-md" required="" size='50'>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dob">Date Of Birth</label>  
  <div class="col-md-5">
      <input  id="datepicker"  name="dob" type="text" placeholder="MM/DD/YYYY" class="form-control input-md" required="" size='10' maxlength="10">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="dob">Place Of Birth</label>  
  <div class="col-md-5">
  <input  id="placeofbirth"  name="placeofbirth" type="text" placeholder="" class="form-control input-md" required="" size='50'>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="mtongue">Mother Tongue</label>  
  <div class="col-md-5">
  <input  id="mtongue"  name="mtongue" type="text" placeholder="" class="form-control input-md" required="" size='50'>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="reg">Register Number</label>  
  <div class="col-md-5">
      <input id="reg" name="reg" type="text" placeholder="14UECS0000" class="form-control input-md" size="9" maxlength="10">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dept">Department</label>  
  <div class="col-md-5">
      <select id="dept" name="dept" class="form-control">
          <option disabled="disabled">----School Of Electrical & Computing----</option>
      <option value="COMPUTER SCIENCE & ENGINEERING">Computer Science & Engineering</option>
      <option value="ELECTRICAL ENGINEERING">Electrical Engineering</option>
      <option value="ELECTRICAL AND COMMUNICATION ENGINEERING">Electrical & Communication Engineering</option>
      <option value="INFORMATION TECHNOLOGY">Information Technology</option>
      <option disabled="disabled">----School of Mechanical and Construction Engineering----</option>
      <option value="Mechanical Engineering">Mechanical Engineering</option>
      <option value="Civil ENGINEERING">Civil Engineering</option>
      <option value="Automobile ENGINEERING">Automobile Engineering</option>
      <option value="Aeronautical Engineering">Aeronautical Engineering</option> 
    </select>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="batch">Year</label>
  <div class="col-md-2">
    <select id="yr" name="yr" class="form-control">
      <option value="First">FIRST</option>
      <option value="Second">SECOND</option>
      <option value="Third">THIRD</option>
      <option value="Fourth">FOURTH</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="sem">Semester</label>
  <div class="col-md-2">
    <select id="sem" name="sem" class="form-control">
      <option value="1st">FIRST</option>
      <option value="2nd">SECOND</option>
      <option value="3rd">THIRD</option>
      <option value="4th">FOURTH</option>
      <option value="5th">FIFTH</option>
      <option value="6th">SIXTH</option>
      <option value="7th">SEVENTH</option>
      <option value="8th">EIGHTH</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="section">Section</label>  
  <div class="col-md-5">
      <input id="dept" name="section" type="text" placeholder="" class="form-control input-md" required="" size="2">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="batch">Batch</label>
  <div class="col-md-2">
    <select id="batch" name="batch" class="form-control">
      <option value="2012-2016">2012-2016</option>
      <option value="2013-2017">2013-2017</option>
      <option value="2014-2018">2014-2018</option>
      <option value="2015-2019">2015-2019</option>      
      <option value="2016-2020">2016-2020</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fname">Father Name</label>  
  <div class="col-md-5">
      <input id="fname" name="fname" type="text" placeholder="Mr. ABC" class="form-control input-md" required="" size="30">
    
  </div>
</div><!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fqual">Father's Qualification</label>  
  <div class="col-md-5">
      <input id="foccup" name="fqual" type="text" placeholder="" class="form-control input-md" required="" size="30">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="fname">Father's Occupation</label>  
  <div class="col-md-5">
      <input id="foccup" name="foccup" type="text" placeholder="" class="form-control input-md" required="" size="30">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mname">Mother Name</label>  
  <div class="col-md-5">
      <input id="mname" name="mname" type="text" placeholder="Mrs. ABC" class="form-control input-md" required="" size="30">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mqual">Mother's Qualification</label>  
  <div class="col-md-5">
      <input id="moccup" name="mqual" type="text" placeholder="" class="form-control input-md" required="" size="30">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="mname">Mother's Occupation</label>  
  <div class="col-md-5">
      <input id="moccup" name="moccup" type="text" placeholder="" class="form-control input-md" required="" size="30">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="smob">Student Mobile No.</label>  
  <div class="col-md-5">
  <input id="smob" name="smob" type="text" placeholder="1234567890" class="form-control input-md" required=""
         onkeypress='return event.charCode >= 48 && event.charCode <= 57' size="10" maxlength="12">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="smail">Student Email Id</label>  
  <div class="col-md-5">
  <input id="smail" name="smail" type="text" placeholder="abc@example.com"  size="40" class="form-control input-md" required=""
         >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fmob">Father's Mobile No.</label>  
  <div class="col-md-5">
  <input id="fmob" name="fmob" type="text" placeholder="1234567890" class="form-control input-md" required=""
         onkeypress='return event.charCode >= 48 && event.charCode <= 57' size="10" maxlength="12">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mmob">Mother's Mobile No.</label>  
  <div class="col-md-5">
  <input id="mmob" name="mmob" type="text" placeholder="1234567890" class="form-control input-md" required=""
         onkeypress='return event.charCode >= 48 && event.charCode <= 57'  size="10" maxlength="12">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Hosteler/Day Scholar</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="hos_day" id="radios-0" value="Hosteler" checked="checked">
      Hosteler
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="hos_day" id="radios-1" value="Day Scholar">
      Day Scholar
    </label>
  </div>
</div>

<!-- Communication Address -->
<h4>Communication Address</h4>
<hr>
    <div class="form-group">
  <label class="col-md-4 control-label" for="cflat">Flat/House No.</label>  
  <div class="col-md-5">
      <input id="cflat" name="cflat" type="text" placeholder="" class="form-control input-md" required=""
              maxlength="6"  size="5">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="cvts">Village/Town/Street</label>  
  <div class="col-md-5">
      <input id="cvts" name="cvts" type="text" placeholder="" class="form-control input-md" required=""
              size="50">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="mbrd">City</label>  
  <div class="col-md-5">
      <input id="ccity" name="ccity" type="text" placeholder="" class="form-control input-md" required=""
              size="50">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="mbrd">District</label>  
  <div class="col-md-5">
      <input id="cdistrict" name="cdistrict" type="text" placeholder="" class="form-control input-md" required=""
              size="50">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">State/Union Territories</label>
  <div class="col-md-5">
    <select id="cstate" name="cstate" class="form-control">
        <option value="" disabled="disabled">------States------</option>
      <option value="Andhra Pradesh">Andhra Pradesh</option>
      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
      <option value="Assam">Assam</option>
      <option value="Bihar">Bihar</option>
      <option value="Chhattisgarh">Chhattisgarh</option>
      <option value="Goa">Goa</option>
      <option value="Gujarat">Gujarat</option>
      <option value="Haryana">Haryana</option>
      <option value="Himachal Pradesh">Himachal Pradesh</option>
      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
      <option value="Jharkhand">Jharkhand</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
      <option value="Madhya Pradesh">Madhya Pradesh</option>
      <option value="Maharashtra">Maharashtra</option>
      <option value="Manipur">Manipur</option>
      <option value="Meghalaya">Meghalaya</option>
      <option value="Mizoram">Mizoram</option>
      <option value="Nagaland">Nagaland</option>
      <option value="Odisha">Odisha</option>
      <option value="Punjab">Punjab</option>
      <option value="Rajasthan">Rajasthan</option>
      <option value="Sikkim">Sikkim</option>
      <option value="Tamil Nadu">Tamil Nadu</option>
      <option value="Telangana">Telangana</option>
      <option value="Tripura">Tripura</option>
      <option value="Uttar Pradesh">Uttar Pradesh</option>
      <option value="Uttarakhand">Uttarakhand</option>
      <option value="West Bengal">West Bengal</option>
      <option value="" disabled="disabled">------Union Territories------</option>
      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
      <option value="Chandigarh">Chandigarh</option>
      <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
      <option value="Daman and Diu">Daman and Diu</option>
      <option value="Lakshadweep">Lakshadweep</option>
      <option value="New Delhi">New Delhi</option>
      <option value="Puducherry">Puducherry</option>
    </select>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="cpin">Pincode</label>  
  <div class="col-md-5">
      <input id="cpin" name="cpin" type="text" placeholder="" class="form-control input-md" required=""
             onkeypress='return event.charCode >= 48 && event.charCode <= 57'  maxlength="6" size="6">
    
  </div>
</div>

<!-- Communication Address Ends -->

<!-- Permanent Address -->
<h4>Permanent Address</h4>
<hr>
    <div class="form-group">
  <label class="col-md-4 control-label" for="pflat">Flat/House No.</label>  
  <div class="col-md-5">
      <input id="pflat" name="pflat" type="text" placeholder="" class="form-control input-md" required=""
              maxlength="5" size="5">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="pvts">Village/Town/Street</label>  
  <div class="col-md-5">
      <input id="pvts" name="pvts" type="text" placeholder="" class="form-control input-md" required=""
              size="50">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="mbrd">City</label>  
  <div class="col-md-5">
      <input id="pcity" name="pcity" type="text" placeholder="" class="form-control input-md" required=""
              size="50">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="pdistrict">District</label>  
  <div class="col-md-5">
      <input id="pdistrict" name="pdistrict" type="text" placeholder="" class="form-control input-md" required=""
              size="50">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">State/Union Territories</label>
  <div class="col-md-5">
    <select id="pstate" name="pstate" class="form-control">
        <option value="" disabled="disabled">------States------</option>
      <option value="Andhra Pradesh">Andhra Pradesh</option>
      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
      <option value="Assam">Assam</option>
      <option value="Bihar">Bihar</option>
      <option value="Chhattisgarh">Chhattisgarh</option>
      <option value="Goa">Goa</option>
      <option value="Gujarat">Gujarat</option>
      <option value="Haryana">Haryana</option>
      <option value="Himachal Pradesh">Himachal Pradesh</option>
      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
      <option value="Jharkhand">Jharkhand</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
      <option value="Madhya Pradesh">Madhya Pradesh</option>
      <option value="Maharashtra">Maharashtra</option>
      <option value="Manipur">Manipur</option>
      <option value="Meghalaya">Meghalaya</option>
      <option value="Mizoram">Mizoram</option>
      <option value="Nagaland">Nagaland</option>
      <option value="Odisha">Odisha</option>
      <option value="Punjab">Punjab</option>
      <option value="Rajasthan">Rajasthan</option>
      <option value="Sikkim">Sikkim</option>
      <option value="Tamil Nadu">Tamil Nadu</option>
      <option value="Telangana">Telangana</option>
      <option value="Tripura">Tripura</option>
      <option value="Uttar Pradesh">Uttar Pradesh</option>
      <option value="Uttarakhand">Uttarakhand</option>
      <option value="West Bengal">West Bengal</option>
      <option value="" disabled="disabled">------Union Territories------</option>
      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
      <option value="Chandigarh">Chandigarh</option>
      <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
      <option value="Daman and Diu">Daman and Diu</option>
      <option value="Lakshadweep">Lakshadweep</option>
      <option value="New Delhi">New Delhi</option>
      <option value="Puducherry">Puducherry</option>
    </select>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="ppin">Pincode</label>  
  <div class="col-md-5">
      <input id="ppin" name="ppin" type="text" placeholder="" class="form-control input-md" required=""
             onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="6"  size="6">
    
  </div>
</div>

<!-- Permanent Address Ends -->
<legend>Academic Details</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mbrd">10th Board</label>  
  <div class="col-md-5">
      <input id="mbrd" name="mbrd" type="text" placeholder="Board" class="form-control input-md" required="" size="25">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mmrk">10th %</label>  
  <div class="col-md-5">
      <input id="mmrk" name="mmrk" type="text" placeholder="Percent, CGPA"  maxlength="5" class="form-control input-md" required="" size="4">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ibrd">12th Board</label>  
  <div class="col-md-5">
      <input id="ibrd" name="ibrd" type="text" placeholder="Board" class="form-control input-md" required="" size="25">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="imrk">12th %</label>  
  <div class="col-md-5">
      <input id="imrk" name="imrk" type="text" placeholder="Percent"  maxlength="5" class="form-control input-md" required="" size="4">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="suc">Achievements</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="suc" name="suc" size='200'></textarea>
  </div>
</div>



  <legend>Medical History</legend>

<!-- Text input-->
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Blood Group</label>
  <div class="col-md-2">
    <select id="bloodgroup" name="bloodgroup" class="form-control">
      <option value="O+">O+</option>
      <option value="O-">O-</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="medhealth">Health Issues</label>  
  <div class="col-md-5">
      <input id="medhealth" name="medhealth" type="text" size="50" placeholder="Asthama, Migrain, etc." class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="medallergy">Allergy</label>  
  <div class="col-md-5">
      <input id="medallergy" name="medallergy" type="text" size="50" placeholder="Skin" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="medialler">Allergy From Mediciene</label>  
  <div class="col-md-5">
      <input id="medialler" name="medialler" type="text" size="50" placeholder="Paracetamol, etc." class="form-control input-md" required="">
    
  </div>
</div>
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btn"></label>
  <div class="col-md-8">
     <input type="submit" name="submit" value="Register Now"style="
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
    <button id="clear" name="clear" type="clear" class="btn btn-warning"style="
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
text-shadow:   1px 1px 0 #000;">Clear</button>
  </div>
</div>

</fieldset>
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