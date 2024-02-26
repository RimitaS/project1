<?php
session_start();
include 'config.php';

$errorcode="ERR(0001)";

if(isset($_POST['login']))
{
$username=$_POST['username']; // Get username
$password=$_POST['password']; // get password
}
?>


<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>User login and tracking in PHP using PHP OOPs Concept</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style2.css">
</head>
 <body>    
  <form name="login" method="post" >
  <header>Login to Test management system</header>
  <p style="color:green;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
  <p style="padding-left:1%;"><b>Please Enter UserID/passwords for IIHS:</b></p>
  <label>Username <span>*</span></label>
  <input name="username" type="text" value="" required />
  <label>Password <span>*</span></label>
  <input name="password" type="password" value="" required />
  <button type="submit" name="login">Login</button>
  <p style="padding-left:37%;"><b>Join us as a member? </b><a href="signup.php">Sign UP</a></p>
  </form>       
 </body>
</html>