<?php
include 'dbconnect.php';
session_start();
if(isset($_SESSION["USERNAME"]))
 header("Location:main.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <div id="header">
      <div id="title">
        <b><i>CONNECT INC.</i></b>
      </div>
      <div id="controls">
        <a id="login" href="#">LOG IN</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a id="signup" href="index.php">SIGN UP</a>
        &nbsp;&nbsp;
      </div>
    </div>
    <div id="credentials">
      <form class="loginform" action="login_action.php" method="post">
      <table align="center">
      <tr>
        <tr>
          <td>USERNAME<sup class="astrisk">*</sup>:</td>
          <td><input type="text" name="uname" required></td>
        </tr>
      </tr>
      <tr>
         <td>PASSWORD<sup class="astrisk">*</sup>:</td>
         <td><input type="password" name="pass" required></td>
     </tr>
      </table>
      <input id="loginbtn" type="submit" name="login" value="LOGIN">
      </form>
    </div>
  </body>
</html>
