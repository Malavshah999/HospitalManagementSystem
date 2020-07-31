<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles.css">
	<title>Emergency Registration</title>
</head>
<body>
	<div class="wrapper">
		<div class="title">
			Emergency Registration
		</div>
		<h5> Please fill in the patient details below </h5>
		<br>
		<div class="form">       
			<form action="emeconnect.php"method="post">
				<div class="inputfield">
					<label for="name">FullName</label>
					<input type="text" class="input" name="name" required>
				</div> 
			
				<div class="inputfield">
					<label for="gender">Gender</label>
					<div>
						<input type="radio" id="male" name="gender" value="male">
							<label for="male">Male</label>
						<input type="radio" id="female" name="gender" value="female">
							<label for="female">Female</label>
						<input type="radio" id="other" name="gender" value="other">
							<label for="other">Other</label>
					</div>
				</div> 
				<div class="inputfield">
					<label for="birthday">Date Of Birth</label>
					<input type="date" class="input" name="birthday" required>
				</div>
				
				<div class="inputfield">
					<label for="Contact" >Contact Number</label>
					<input type="text" class="input" name="Contact" required>
				</div> 
				
				<div class="inputfield">
					<label for="Postal">Postal Code</label>
					<input type="text" class="input" name="Postal">
				</div>				
    
				<div class="inputfield">
					<label for="textarea">Address</label>
					<textarea class="textarea" name="textarea" required></textarea>
				</div> 
				<hr>
				<br>
			
				<div class="inputfield terms">
					<label class="check">
						<input type="checkbox" required>
						<span class="checkmark"></span>
					</label>
					<p>Agreed to terms and conditions</p>
				</div> 
				<div class="inputfield">
					<input type="button" value="Register" class="btn">
				</div>
			</form>	
		</div>
		<br>
		<div>
			<input type="button" onclick="location.href = '../index.php';" class="btn-primary" value="Back to home">
		</div>
	</div>	
</body>
</html>