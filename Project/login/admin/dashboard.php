<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin  | Dashboard</title>
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />

	</head>
	<body>
<div id="app">
	<div class="sidebar app-aside" id="sidebar">
			<div class="sidebar-container perfect-scrollbar">
<nav>
	<div class="navbar-title">
							<span>Main Navigation</span>
						</div>

						<ul class="main-navigation-menu">
							<li>
								<a href="dashboard.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-home"></i>
										</div>

										<div class="item-inner">
											<span class="title"> Dashboard </span>
										</div>
									</div>
								</a>
							</li>


							<li>
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-user"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Doctors </span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu">
									<li>
										<a href="doctor-specilization.php">
											<span class="title"> Doctor Specialization </span>
										</a>
									</li>
									<li>
										<a href="add-doctor.php">
											<span class="title"> Add Doctor</span>
										</a>
									</li>
									<li>
										<a href="Manage-doctors.php">
											<span class="title"> Manage Doctors </span>
										</a>
									</li>
									
								</ul>
								</li>



								<li>
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-user"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Patients </span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu">
									
									<li>
										<a href="add-patient.php">
											<span class="title"> Add Patient</span>
										</a>
									</li>
									<li>
										<a href="manage-patient.php">
											<span class="title"> Manage Patients </span>
										</a>
									</li>
									
								</ul>
								</li>	





								<li>
								<a href="patient-search.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-search"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Patient Search </span>
										</div>
									</div>
								</a>
							</li>
								</li>

						</ul>						
					</nav>
					</div>
			</div>

			
			<div class="app-content">
				
					<?php error_reporting(0);?>
<header class="navbar navbar-default navbar-static-top">
					<!-- start: NAVBAR HEADER -->
					<div class="navbar-header">
						
						<a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
							<i class="ti-align-justify"></i>
						</a>
						
						<a class="navbar-brand" href="#">
							<h2 style="padding-top:20%;font-family:Numans;">HMS</h2>
						</a>
						
						
						
						<a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
							<i class="ti-align-justify"></i>
						</a>
						
						<a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<i class="ti-view-grid"></i>
						</a>
					
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-right">
								<li  style="padding-top:2%;font-family:Numans;">
								<h2>Hospital Management System</h2>
							</li>
						
						
							<li class="dropdown current-user">
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<img src="assets/images/admin.png" > <span class="username">Admin<i class="ti-angle-down"></i></i></span>
								</a>

								<ul class="dropdown-menu dropdown-dark">
									
										<li>
										<a href="change-password.php">Change Password</a>
									</li>

									<li>
										<a href="logout.php">Log Out</a>
									</li>

								</ul>
							</li>		
						</ul>
						

						<div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<div class="arrow-left"></div>
							<div class="arrow-right"></div>
						</div>
						
							</div>
				
						</header>
	
			

				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 style="color: black;" class="mainTitle">Dashboard</h1>
								
							</div>
						</section>
			

								<div class="col-sm-6">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">	
											<img src="assets/images/doctor.png" height="70" weight="100">
											<h2 class="StepTitle">Manage Doctor's</h2>
										
											<p class="cl-effect-1">
												<a href="manage-doctors.php">
												<?php $result1 = mysqli_query($con,"SELECT * FROM doctors ");
												$num_rows1 = mysqli_num_rows($result1);{?>
											Total Doctors :<?php echo htmlentities($num_rows1);} ?>		

												</a>	
											</p>
										</div>
									</div>
								</div>



                                    <div class="col-sm-6">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
														<img src="assets/images/patient.png" height="70" weight="100"><h2 class="StepTitle">Manage Patient's</h2>
											
											<p class="links cl-effect-1">
												<a href="manage-patient.php">
<?php $result = mysqli_query($con,"SELECT * FROM tblpatient ");
$num_rows = mysqli_num_rows($result);{?>Total Patients :<?php echo htmlentities($num_rows);} ?>		
</a>
											</p>
										</div>
									</div>
								</div>						
					</div>
				</div>
			</div>

<hr>


					</div>
				</div>
			</div>
		</div>
		
<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
