<?php 
session_start();
include './controllers/db_connection.php' ;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup_Patient's Form</title>
	<link rel="stylesheet" href="fonts/linearicons/style.css">	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="inner">
			
			<form action="../patientsignup/controllers/signup.php"  class="user" method="POST">
                <h3>Patient's Signup</h3>
				<div class="form-holder">
					<span class="lnr lnr-user"></span>
					<input class="form-control" id="fullname"  type="text" name="fullname" placeholder="Full Name" required  >
				</div>			

				
				<div class="form-holder">
					<span class="lnr lnr-phone-handset"></span>
					<input class="form-control" id="phonenumber"  type="text" name="phonenumber" placeholder="phonenumber" required >
				</div>

				
				<div class="form-holder">
					<span class="lnr lnr-envelope"></span>
					<input name="email" type="email" class="form-control" id="exampleInputEmail" placeholder="Email Address" value="" required >
				</div>


				<div class="form-holder">
					<span class="lnr lnr-lock"></span>
					<input name="password" type="password" class="form-control" id="exampleInputPassword" placeholder="Password" required >
				</div>



				<div class="form-holder">
					<span class="lnr lnr-lock"></span>
					<input name="pw_confirm" type="password" class="form-control" id="exampleRepeatPassword" placeholder="Repeat Password" required >                              
				</div>

				
				<button>
					<span>Register</span>
				</button>

  <br><br>
  <p><h4>Already have an account?<a href="../../login/patient/index.php"> Login Now!</a></h4></p>

			</form>


			<img src="images/image-2.png" alt="" class="image-2">
			
			<p>
				<?php
					if(!empty($_SESSION['signup_errors'])){
						foreach ($_SESSION['signup_errors'] as $error) {
							echo "<script>alert('".$error."')</script>";
						}
                    }
				?>
			</p>
		</div>
	</div>
</body>
</html>
