<html>
<head>
<link rel="stylesheet" href="assets/css/styles.css">
</head>
</html><?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
 $output = '';  
 if(isset($_POST["floor_id"]))  
 {  
      if($_POST["floor_id"] != '')  
      {  
           $sql = "SELECT * FROM rooms WHERE floor_id = '".$_POST["floor_id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM rooms";  
      }  
      $result = mysqli_query($con, $sql);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<div class="big-box"><div class="outer-box">'.$row["room_name"].'<br>Bed Available : '.$row["bed_available"].'</div></div>';  
      }  
      echo $output;  
 }  
 ?>  