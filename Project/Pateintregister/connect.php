<?php

$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$birthday=$_POST['birthday'];
$Height=$_POST['Height'];
$weight=$_POST['weight'];
$Contact=$_POST['Contact'];
$Marital=$_POST['Marital'];
$textarea=$_POST['textarea'];
$disease=$_POST['disease'];
$surgeries=$_POST['surgeries'];
$phobia=$_POST['phobia'];
$medics=$_POST['medics'];


//databse connection
$conn=new mysqli('localhost','root','','hospitalmanagement');
if($conn->connect_error)
{
	die('connection failed:'.$conn->connect_error);
}
else
{
	$stmt=$conn->prepare("insert into patient (name,email,gender,birthday,Height,weight,Contact,Marital,textarea,disease,surgeries,phobia,medics)
	values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssssssssss",$name,$email,$gender,$birthday,$Height,$weight,$Contact,$Marital,$textarea,$disease,$surgeries,$phobia,$medics);
	$stmt->execute();
	echo "<script>location.href='../index.php'</script>";
	$stmt->close();
	$conn->close();
}


	?>