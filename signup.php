<?php
session_start();
include 'config.php';

$errorcode="ERR(0001)";

if(isset($_POST['login']))
{
$username=$_POST['email']; // Get username
$password=$_POST['mob']; // get password
mysqli_query($con,"insert into UserD(emailid,password) values('$username','$password')");
}
?>


<!DOCTYPE html>
<html>
<head 
<meta charset="UTF-8">
<title>Registration form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style2.css">

</head>
<body>    
        
    <form name="login" method="post">
      <div class="container">
        <h1><c>SignUp form </c></h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
    
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>

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
    
        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
        <hr>
            
        <button type="submit" name="login" class="registerbtn">Register</button>
               
      </div>
      
      <div class="container signin">
        <p>Already have an account? <a href="index.php">Sign in</a>.</p>
      </div>
    </form>
</body>
</html>
   
    


