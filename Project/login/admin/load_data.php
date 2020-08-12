<?php
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
           $output .= '<div class="col-md-3"><div style="border:1px solid #6a6a6e; padding:20px;">'.$row["room_name"].'</div></div>';  
      }  
      echo $output;  
 }  
 ?>  