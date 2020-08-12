<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();


if(isset($_POST['submit']))
{
$room_type=$_POST['room_type'];
$room_availability=$_POST['room_availability'];
$room_price=$_POST['room_price'];
$sql=mysqli_query($con,"insert into ward(room_type,room_availability,room_price) values('$room_type','$room_availability','$room_price')");
if($sql)
{
echo "<script>alert('Ward added Successfully');</script>";
echo "<script>window.location.href ='room-setup.php'</script>";
}
}
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
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-user"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Ward </span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu">
									
									<li>
										<a href="add-ward.php">
											<span class="title"> Manage Ward </span>
										</a>
									</li>
									<li>
										<a href="room-setup.php">
											<span class="title"> Room type setup </span>
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
									<img src="assets/images/admin.png" > <span class="username">Admin<i class="ti-angle-down"></i></span>
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
	
			

				<div class="main-content container" >
					<div class="wrap-content container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							
								<div class="col-sm-8">
									<h1 style="color: black;" class="mainTitle">Ward setup </h1>
								</div>
						</section>
						<div class="container">
						<div class="row">
						<div class="col-md-3">
						<br>
							<center> Floor List 
							<br>
							<br>
							<select style="width:150px;">
							<option>Select </option>
							<option> Floor 1 </option>
							<option> Floor 2 </option>
							</select>
							<br>
							<br>
							<br>
							<button type="button" class="btn btn-o btn-primary" data-toggle="modal" data-target="#myModal"> Add New Floor</button>
					</center>
					<div id="myModal" class="modal fade" role="dialog">
						<form role="form" onSubmit="return valid();" method="POST"> 
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Add New Floor</h4>
									</div>
									<div class="modal-body">
										<p>
											<div class="form-group">
												<label for="room type">Floor Ward Name </label>					
												<input type="text" name="ward_name" class="form-control"  placeholder="Enter Floor ward name" required>
											</div>
										</p>
										<p>
											<div class="form-group">
												<label for="room availability">How many rooms ? </label>					
												<input type="text" name="ward_description" class="form-control"  placeholder="Enter number of rooms " required>
											</div>
										</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="submit" name="submit" id="submit" class="btn btn-default">Add</button>
									</div>
								</div>
							</div>
						</form>
					
				</div>
							
						</div>
						<div class="col-md-9">
						<br>
						<center> Ward Floor Rooms </center>
						<div class=" col-md-1" style="border:1px solid #6a6e6a; padding:10px;">
					<div style="border:1px solid #6a6e6a;">
					<img src="patient1.png" height="20px" alt=""> 
					</div>
					<br>
				
					<div style="border:1px solid #6a6e6a;">
					<img src="patient1.png" height="20px" alt="">
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
	</body>
</html>
