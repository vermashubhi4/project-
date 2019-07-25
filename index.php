<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
    <script type="text/javascript">
    function validateForm()
      {
          //alert("Passwords Do not match");
          var value1=document.getElementById('pass1').value;
          var value2=document.getElementById('pass2').value;
        console.log(value1);
        console.log(value2);
        //sleep(6000);
        if (value1 == value2 )
        {
          return true;
        }
        else {
          alert("Passwords Do not match");
          return false;
        }

      }
    </script>
  </head>
  <body>
    <div id="header">
      <div id="title">
        <b><i>CONNECT INC.</i></b>
      </div>
      <div id="controls">
        <a id="login" href="login.php">LOG IN</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a id="signup" href="#">SIGN UP</a>
        &nbsp;&nbsp;
      </div>
    </div>
    <div id="afterheader">
    <div id="left">
      <img id="myKitty" src="tenor.gif" alt="Dancing kitty">
    </div>
    <div id="right">

      <form name="myform" class="signupform" action="signup_action.php" onsubmit="return validateForm()" method="post" >
        <table id="formtable">
          <tr>
            <td>NAME<sup class="astrisk">*</sup>:</td>
            <td><input type="text" name="name" required></td>
          </tr>
          <tr>
            <td>USERNAME<sup class="astrisk">*</sup>:</td>
            <td><input type="text" name="uname" required></td>
          </tr>
          <tr>
            <td>EMAIL<sup class="astrisk">*</sup> :</td>
            <td><input type="email" name="email" required></td>
          </tr>
          <tr>
            <td>PASSWORD<sup class="astrisk">*</sup> :</td>
            <td> <input id="pass1" type="password" pattern=".{4,}"name="pass" required></td>
          </tr>
          <tr>
            <td>CONFIRM PASSWORD<sup class="astrisk">*</sup> :</td>
            <td><input id="pass2" type="password" name="conpass" required></td>
          </tr>
        </table>
        <input type="submit" name="signup" value="SIGN UP" >
      </form>
    </div>
  </div>
<?php
  if(isset($msg)){
 ?>
<script type="text/javascript">
alert("<?php echo $_GET['$msg'] ?>");
</script>
 <?php
  }
  ?>
  </body>
</html>
