<?php
$db="project";
$username="root";
$password="";
$host="127.0.0.1";
$con = mysqli_connect($host,$username,$password,$db);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  //echo "Successfully Connected";
?>
