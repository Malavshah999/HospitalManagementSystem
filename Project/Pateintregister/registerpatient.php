<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles.css">
	<title>New Patient Registration</title>
</head>
<body>
	<div class="wrapper">
		<div class="title">
			New Patient Registration
		</div>
		<h5> Please fill in the patient details below </h5>
		<br>
		<div class="form">       
			<form action="connect.php"method="post">
				<div class="inputfield">
					<label for="name">FullName</label>
					<input type="text" class="input" name="name" required>
				</div> 
			
				<div class="inputfield">
					<label for="email">Email Address</label>
					<input type="text" class="input" name="email" required>
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
					<label for="Height">Height(Inches)</label>
					<input type="text" class="input" name="Height" required>
				</div>  

				<div class="inputfield">
					<label for="weight">Weight(Pounds)</label>
					<input type="text" class="input"name="weight" required> 
				</div>  
				<hr>
				<br>
				
				<div class="inputfield">
					<label for="Contact" >Contact Number</label>
					<input type="text" class="input" name="Contact" required>
				</div>  
				
				<div class="inputfield">
					<label for="Marital">Marital Status</label>
					<div class="custom_select" required>
						<select name="Marital">
							<option value=""></option>
							<option value="Single">Single</option>
							<option value="married">Married</option>
							<option value="Divorced">Divorced</option>
							<option value="LegallySeparated">Legally Separated</option>
							<option value="Widowed">Widowed</option>
						</select>
					</div>
				</div> 
    
				<div class="inputfield">
					<label for="textarea">Address</label>
					<textarea class="textarea" name="textarea" required></textarea>
				</div> 
				<hr>
				<br>
				
				<div class="inputfield">
					<label for="disease" >Disease</label>
					<input type="text" class="input" name="disease" required>
				</div>  
				
				<div class="inputfield">
					<label for="surgeries" >Past surgeries </label>
					<input type="text" class="input" name="surgeries" placeholder="Type 'Na' if None" required>
				</div>

				<div class="inputfield">
					<label for="phobia">Phobias </label>
					<input type="text" class="input" name="phobia" placeholder="Type 'Na' if None" required>
				</div>  
				
				<div class="inputfield">
					<label for="medics"> Ongoing Medications </label>
					<input type="text" class="input" name="medics" placeholder="Type 'Na' if None" required>
				</div> 
				<br>
				<div class="inputfield terms">
					<label class="check">
						<input type="checkbox" required>
						<span class="checkmark"></span>
					</label>
					<p>Agreed to terms and conditions</p>
				</div> 
				<div class="inputfield">
					<a href="emergency.php" style="color: red; text-decoration:none ;">In case of emergency ➤</a>
				</div>
				<div class="inputfield">
					<input type="submit" value="Register" class="btn">
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