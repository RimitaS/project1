<?php
session_start();
include 'config.php';

$errorcode="ERR(0001)";

if(isset($_POST['signup']))
{
$email=$_POST['email']; // Get email
$fname=$_POST['fname']; // get first name
$lname=$_POST['lname']; // Get last name
$pass=$_POST['psw']; // get password
$mob=$_POST['mob']; // Get mobile no
$gen=$_POST['gen']; // get gender

$ret=mysqli_query($conn,"SELECT * FROM UserD WHERE emailid='$email'");
$num=mysqli_fetch_array($ret);

if ($num>0) {
  $_SESSION['msg']="User Already Registered";
 }
else {
  mysqli_query($conn,"insert into UserD(emailid,mob,password,fname,lname) values('$email','$mob','$pass','$fname','$lname')");
  $_SESSION['msg']="User Registered Successfully";
  $extra="index.php";
  $host=$_SERVER['HTTP_HOST'];
  $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
  header("location:http://$host$uri/$extra");
  exit();
 }
}
?>


<script>
function validateform() {
  var psw = document.signup.psw.value;
  var psw1 = document.signup.pswr.value;

  var mob = document.signup.mob.value;
  var mob1 = mob.toString();

  if (mob1.length !== 10) {
    alert("Mobile number must be 10 digits long.");
    return false;
  } else if (psw.length < 8) {
    alert("Password must be at least 8 characters long.");
    return false;
  } else if (psw !== psw1) {
    alert("Retype password doesn't match with the Password");
    return false;
  }
}
</script>

<!DOCTYPE html>
<html>

<head 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style3.css">
<title>Registration form</title>
</head>

   <body>            
    <form style="background-color:#E6E6FA" name="signup" onsubmit="return validateform()" method="post">

        <header>New User Submission Form</header>
        <p style="color:red;"><?php echo $_SESSION['msg'];?><?php unset($_SESSION['msg']);?></p>

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" id="email" required>
        <label for="mob"><b>Mobile No</b></label>
        <input type= "number" placeholder="Enter Mobile Number" name="mob" id="mob" required>
        <label for="fname"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="fname" id="fname" required>
        <label for="lname"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="lname" id="lname" required>
        <label for="gen"><b>Gender</b></label>
        <Select id="gen" name="gen" required>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Transgender">Transgender</option>
          <option value="NA">Not prefer to say</option>
        </select> 
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
        <label for="pswr"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="pswr" id="pswr" required>
        <button type="submit" name="signup">SignUP</button>
	

        <p style="padding-left:50%;">Already have an account? <a href="index.php">Sign in</a>.</p>
    </form>
   </body>
</html>
   
