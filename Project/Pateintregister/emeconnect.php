<?php

$name=$_POST['name'];
$gender=$_POST['gender'];
$birthday=$_POST['birthday'];
$Contact=$_POST['Contact'];
$Postal=$_POST['Postal'];
$textarea=$_POST['textarea'];

//databse connection
$conn=new mysqli('localhost','root','','hospitalmanagement');
if($conn->connect_error)
{
	die('connection failed:'.$conn->connect_error);
}
else
{
	$stmt=$conn->prepare("insert into emergency (name,gender,birthday,Contact,Postal,textarea)
	values(?,?,?,?,?,?)");
	$stmt->bind_param("ssssss",$name,$gender,$birthday,$Contact,$Postal,$textarea);
	$stmt->execute();
	echo "<script> location.href='../index.php'</script>";
	$stmt->close();
	$conn->close();
}
?>