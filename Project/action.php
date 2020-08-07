<?php

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

//databse connection
$conn=new mysqli('localhost','root','','hospitalmanagement');
if($conn->connect_error)
{
    die('connection failed:'.$conn->connect_error);
}
else
{
    $stmt=$conn->prepare("insert into contactus(name,email,phone,message)
    values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$email,$phone,$message);
    $stmt->execute();
echo "<script>alert('message sent Successfully');</script>";
echo "<script>location.href='contact.php'</script>";
    $stmt->close();
    $conn->close();
}
    ?>
