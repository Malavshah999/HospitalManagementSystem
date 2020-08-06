<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>

	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/contact.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">

</head>

<body>
	<div class="super_container">
		<!-- Home -->

		<div class="home">
			<div class="parallax_background parallax-window"   data-image-src="images/box_3.jpg" data-parallax="scroll" >
			</div>
			
			<!-- Header -->

			<header class="header" id="header">
				<div>
					<div class="header_top">
						<div class="container">
						</div>
					</div>
				</div>			
				<section class="navigation">
					<div class="nav-container">
						<div class="brand">
							<a href="index.php">LOGO</a>
						</div>
						<nav>
							<div class="nav-mobile">
								<a id="nav-toggle" href="#!"><span></span></a>
							</div>
							<ul class="nav-list">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="#">User Login</a>
										<ul class="nav-dropdown">
										<li><a href="login/doctor/index.php">Doctor's Login</a></li>
										<li><a href="login/patientlogin.php">Patient's Login</a></li>
										<li><a href="login/admin/index.php">Admin Login</a></li>
									</ul>
								</li>
								<li><a href="#">Sign-Up</a>
									<ul class="nav-dropdown">
										<li><a href="Signup/doctorsignup/signupdoctor.php">As a Doctor</a></li>
										<li><a href="Signup/patientsignup/signuppateint.php">As a Patient</a></li>
									</ul>
								</li>
							
							</ul>
						</nav>
					</div>
				</section>
			</header>
		</div>
	</div>	

	<div class="home_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_title">Contact us</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="container2">
					<div class="innerwrap">
						<section class="section1 clearfix">
							<h1>Drop Us a Mail</h1>
						</section>
						<section class="section2 clearfix">
							<div class="col2 column1 first">
								<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
								<div class="sec2map" style='overflow:hidden;height:550px;width:100%;'>
									<div id='gmap_canvas' style='height:100%;width:100%;'></div>
									<div>
										<small><a href="http://embedgooglemaps.com">embed google maps </a></small>
									</div>
									<div>
										<small><a href="http://freedirectorysubmissionsites.com/">free web directories</a></small>
									</div>
									<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
								</div>
								<script type='text/javascript'>
									function init_map(){
										var myOptions = {zoom:14,center:new google.maps.LatLng(19.075314480255834,72.88153973865361),mapTypeId: google.maps.MapTypeId.ROADMAP};
										map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
										marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.075314480255834,72.88153973865361)});
										infowindow = new google.maps.InfoWindow({content:'<strong>My Location</strong><br>mumbai<br>'});
										google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);
									}
									google.maps.event.addDomListener(window, 'load', init_map);
								</script>
							</div>
							<div class="col2 column2 last">
								<div class="sec2innercont">
									<div class="sec2addr">
										<p>SMT. P.D.HINDUJA TRUST'S, INSTITUTE OF MANAGEMENT STUDIES (31236)</p>
										<p><span class="collig">Phone :</span> +91 8145220128</p>
										<p><span class="collig">Email :</span>akramulali8067@gmail.com</p>
										<p><span class="collig">Fax :</span> +91 7045053487</p>
									</div>
								</div>
								<div class="sec2contactform">
									<h3 class="sec2frmtitle">Want to Know More?? Drop Us a Mail</h3>
									<form action="http://www.SnapHost.com/captcha/send.aspx" id="ContactUsCaptchaWebForm" method="post" onsubmit="return ValidateForm(this)" target="_top">
										<input name="skip_WhereToSend" type="hidden" value="akramulali8067@gmail.com" />
										<input name="skip_SnapHostID" type="hidden" value="9FCFDTWMBCRB" />
										<input name="skip_WhereToReturn" type="hidden" value="http://localhost/ProjectLatestNew/project/index.php"/>
										<input name="skip_Subject" type="hidden" value="Contact Us Form" />
										<input name="skip_ShowUsersIp" type="hidden" value="1" />
										<div class="clearfix">
											<input type="text" class="col2 first" name="FirstName" placeholder="Your First Name">
											<input type="text" class="col2 last" name="LastName" placeholder="Your Last Name">
										</div>
										<div class="clearfix">
											<input type="email" class="col2 first" name="EmailAddress" placeholder="Your E-mail">
											<input type="text" class="col2 last" name="Contact" placeholder="Your Contact Number">
										</div>
										<div class="clearfix">
											<textarea name="message" class="col2 first" id="message" cols="30" rows="10" placeholder="Message"></textarea>
										</div>
										<div class="clearfix"><input type="submit" value="Send"></div>

									</form>
								</div>

							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">
					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="logo">
								<a href="#">Coming soon <span>+</span></a>	
							</div>
							<div class="footer_about_text">coming soon</div>
							<div class="footer_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="https://www.instagram.com/accounts/login/?hl=en" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="https://twitter.com/login?lang=en-gb" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="copyright">
								Copyright &copy;
								<script>document.write(new Date().getFullYear());
								</script> 
								All rights reserved | This project is made by Akramul and Malav</a>
							</div>
						</div>
					</div>
					
					<!-- Footer Contact -->
					<div class="col-lg-5 footer_col">
						<div class="footer_contact">
							<div class="footer_contact_title">Quick Contact</div>
							<div class="footer_contact_form_container">
								<form action="quickaction.php" method="post" class="footer_contact_form" id="footer_contact_form">
									<div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
										<input type="text" class="footer_contact_input" placeholder="Name"name="name" required="required">
										<input type="email" class="footer_contact_input" placeholder="E-mail" name="email" required="required">
									</div>
									<textarea class="footer_contact_input footer_contact_textarea" placeholder="Message" name="textarea" required="required"></textarea>
									<button class="footer_contact_button">send message</button>
								</form>
							</div>
						</div>
					</div>

					<!-- Footer Hours -->
					<div class="col-lg-4 footer_col">
						<div class="footer_hours">
							<div class="footer_hours_title">Opening Hours</div>
							<ul class="hours_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Monday – Thursday</div>
									<div class="ml-auto">8.00 – 19.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Friday</div>
									<div class="ml-auto">8.00 - 18.30</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Saturday</div>
									<div class="ml-auto">9.30 – 17.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Sunday</div>
									<div class="ml-auto">9.30 – 15.00</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
</body>
</html>