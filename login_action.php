<?php
 include 'dbconnect.php';

 $uname=$_POST['uname'];
 $pass=$_POST['pass'];

 if(isset($uname) && isset($pass))
 {
   $qry = "SELECT `Password` FROM `userinfo` WHERE `Username`='$uname'";
   $result = mysqli_query($con,$qry);
   $row=mysqli_fetch_assoc($result);
    //print_r($row);
   if($row['Password']==$pass)
   {
     session_start();
     $_SESSION["USERNAME"]=$uname;
     header("Location:main.php");
   }

 }

?>
