<?php
  include 'dbconnect.php';

  $uname=$_POST["uname"];
  $name=$_POST["name"];
  $email=$_POST["email"];
  $password=$_POST["pass"];

  if(isset($name) && isset($uname) && isset($password) && isset($email))
  {
    echo "in isset";
    $qry = "INSERT INTO `userinfo`(`Name`,`Username`, `Email`, `Password`) VALUES ('$name','$uname','$email', '$password')";
    echo $qry;
    $result= mysqli_query($con,$qry);
    print_r($result);
    if($result)
     echo"true";
    else {
      echo "Error: " . $qry . "<br>" . mysqli_error($con);
    }
  //  while(mysqli_qy)

    header("Location:login.php");
  }
  else
    {
        $msg="ENTER CORRECT VALUES";
        header("Location:index.php?msg=".$msg);
    }

 ?>
