<?php

$name=$_POST['name'];
$email=$_POST['email'];
$textarea=$_POST['textarea'];

//databse connection
$conn=new mysqli('localhost','root','','hospitalmanagement');
if($conn->connect_error)
{
	die('connection failed:'.$conn->connect_error);
}
else
{
	$stmt=$conn->prepare("insert into quickcontact(name,email,textarea) values(?,?,?)");
	$stmt->bind_param("sss",$name,$email,$textarea);
	$stmt->execute();
echo "<script>alert('message sent Successfully');</script>";
echo "<script>location.href='index.php'</script>";
	$stmt->close();
	$conn->close();

}


	?>

	