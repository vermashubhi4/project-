<?php
 session_start();
if(!isset($_SESSION["USERNAME"]))
  header("Location:login.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <title></title>
  </head>
  <body>
    <div id="header">
      <div id="title">
        <b><i>CONNECT INC.</i></b>
      </div>
      <div id="greeting">
        <b>Hello,<?php echo $_SESSION["USERNAME"] ?></b>
      </div>
      <div id="controls">
        <a id="logout" href="logout_action.php">LOG OUT</a>
      </div>
    </div>

  </body>
</html>
