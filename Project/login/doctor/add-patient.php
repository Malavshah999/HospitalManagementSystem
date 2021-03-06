<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{	
$docid=$_SESSION['id'];
$patname=$_POST['patname'];
$patcontact=$_POST['patcontact'];
$patemail=$_POST['patemail'];
$gender=$_POST['gender'];
$pataddress=$_POST['pataddress'];
$patage=$_POST['patage'];
$medhis=$_POST['medhis'];
$sql=mysqli_query($con,"insert into tblpatient(Docid,PatientName,PatientContno,PatientEmail,PatientGender,PatientAdd,PatientAge,PatientMedhis) values('$docid','$patname','$patcontact','$patemail','$gender','$pataddress','$patage','$medhis')");
if($sql)
{
echo "<script>alert('Patient info added Successfully');</script>";
echo "<script>window.location.href ='manage-patient.php'</script>";
}
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor | Add Patient</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />

		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
<link rel="stylesheet" href="assets/css/respnsivestyle.css">
		
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#patemail").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
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
								<a href="appointment-history.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-list"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Appointment History </span>
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
											<span class="title"> Manage Patient </span>
										</a>
									</li>
									
								</ul>
								</li>




                             <li><a href="search.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-search"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Search </span>
										</div>
									</div>
								</a>
							</li>


						</ul>
						
					</nav>
					</div>
			</div>
<?php error_reporting(0);?>
<header class="navbar navbar-default navbar-static-top">
					<!-- start: NAVBAR HEADER -->
					<div class="navbar-header">

						<a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
							<i class="ti-align-justify"></i>
						</a>

						<a class="navbar-brand" href="#">
							<h2 style="padding-top:20% ">HMS</h2>
						</a>
						
						<a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="
						app-sidebar-closed" data-toggle-target="#app">
							<i class="ti-align-justify"></i>
						</a>
						
						<a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<i class="ti-view-grid"></i>
						</a>
					</div>
					
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-right">
					
								<li  style="padding-top:2% ">
								<h2>Hospital Management System</h2>
							</li>
						
						
							
						
							<li class="dropdown current-user">
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<img src="assets/images/doctor-icon-vector-11004500.jpg" > 
									<span class="username">
									<?php $query=mysqli_query($con,"select doctorName from doctors where id='".$_SESSION['id']."'"); 
                               while($row=mysqli_fetch_array($query))
                             {
                                 	echo $row['doctorName'];
                              }
									?> 
											<i class="ti-angle-down"></i></i></span></a>

								<ul class="dropdown-menu dropdown-dark">
									
									<li>
										<a href="edit-profile.php">
											My Profile
										</a>
									</li>
								
									<li>
										<a href="change-password.php">
											Change Password
										</a>
									</li>
									
									<li>
										<a href="logout.php">
											Log Out
										</a>
									</li>
								</ul>
							</li>


								</ul>
					
						<div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" 
						href=".navbar-collapse">
							<div class="arrow-left"></div>
							<div class="arrow-right"></div>
						</div>
						
							</div>
				
						</header>


<div class="main-content" >
<div class="wrap-content container" id="container">
					
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">DOCTOR| Add Patient</h1>
</div>
</div>
</section>


<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<div class="row margin-top-30">
<div class="col-lg-8 col-md-12">
<div class="panel panel-white">
<div class="panel-heading">
<h5 class="panel-title">Add Patient</h5>
</div>


<div class="panel-body">
<form role="form" name="" method="post">

<div class="form-group">
<label for="doctorname">Patient Name</label>
<input type="text" name="patname" class="form-control"  placeholder="Enter Patient Name" required="true"></div>
<div class="form-group">
<label for="fess">Patient Contact no</label>
<input type="text" name="patcontact" class="form-control"  placeholder="Enter Patient Contact no" required="true" maxlength="10" pattern="[0-9]+">
</div>

<div class="form-group">
<label for="fess">Patient Email</label>
<input type="email" id="patemail" name="patemail" class="form-control"  placeholder="Enter Patient Email id" required="true" onBlur="userAvailability()">
<span id="user-availability-status1" style="font-size:12px;"></span>
</div>


<div class="form-group">
<label class="block">Gender</label>
<div class="clip-radio radio-primary">
<input type="radio" id="rg-female" name="gender" value="female" >
<label for="rg-female">Female</label>
<input type="radio" id="rg-male" name="gender" value="male">
<label for="rg-male">Male</label>
</div>
</div>


<div class="form-group">
<label for="address">Patient Address</label>
<textarea name="pataddress" class="form-control"  placeholder="Enter Patient Address" required="true"></textarea>
</div>

<div class="form-group">
<label for="fess">Patient Age</label>
<input type="text" name="patage" class="form-control"  placeholder="Enter Patient Age" required="true">
</div>

<div class="form-group">
<label for="fess">Medical History</label>
<textarea type="text" name="medhis" class="form-control"  placeholder="Enter Patient Medical History(if any)" required="true"></textarea>
</div>	

<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">Add</button>
</form>
</div>
</div>
</div>
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
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>	
		<script src="assets/js/main.js"></script>
		<script src="assets/js/form-elements.js"></script>

		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		</body>
</html>
