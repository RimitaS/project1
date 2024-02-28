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


mysqli_query($con,"insert into UserD(emailid,mob,password,fname,lname) values('$email','$mob','$pass','$fname','$lname')");
}
?>

<script>  

function validateform(){  
 
var psw=document.signup.psw.value;

var psw1=document.signup.pswr.value;

int mob=document.signup.mob.value

int mob1= mob.toString()

if(isInteger(mob) && mob1.length!=10){
alert("Password must be at least 8 characters long.");  
return false;
}else if(psw.length<8){  
  alert("Password must be at least 8 characters long.");  
  return false;
}else if(psw!=psw1){
  alert("Retype password doesn't match with the Password");  
  return false;}

}  
</script> 
 



<!DOCTYPE html>
<html>
<head 
<meta charset="UTF-8">
<title>Registration form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
</head>
   <body>            
    <form name="signup" method="post">
      <div class="container">
        <h1><c>SignUp form </c></h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
    
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" id="email" required>
	<br><br>

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
          <option value="NA"></option>
        </select><br><br>   
         
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    
        <label for="pswr"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="pswr" id="pswr" required>
        <hr>
            
        <button type="submit" name="signup" class="registerbtn">Register</button>
               
      </div>
      
      <div class="container signin">
        <p>Already have an account? <a href="index.php">Sign in</a>.</p>
      </div>
    </form>
</body>
</html>
   
    


