<?php
	session_start();

	$_SESSION["fees"]=$_POST["fees"];
	
$conn=new mysqli('localhost','root','','hospitalmanagement');

if($conn->connect_error)
{
	die('connection failed:'.$conn->connect_error);
}
else
{
	$stmt=$conn->prepare("INSERT INTO appointment(patient,doctor,date,timeslot,contact,address,disease,fees) 
						VALUES(?,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssssi",$_SESSION["username"],$_SESSION["doctor"],$_SESSION["date"],$_SESSION["timeslot"],$_SESSION["contact"],
								$_SESSION["address"],$_SESSION["disease"],$_SESSION["fees"]);
	$stmt->execute();
	echo '<script> window.location="receipt.php"; </script>';
	$stmt->close();
	$conn->close();
}


?>