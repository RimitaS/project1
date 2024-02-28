
<?php

session_start();
include 'config.php';

// $username=$_SESSION['username'];


$sql = "SELECT emailid, mob, password, fname, lname FROM UserD WHERE emailid='".$_SESSION['username']."'";
$result = $mysqli -> query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $emailid=$row['emailid'];
        $mob=$row['mob'];
        $fname=$row['fname'];
        $lname=$row['lname'];
        }
} else {
    echo "0 results";
}

if(isset($_POST['edit']))
{
    $extra="signup.php";
    $host=$_SERVER['HTTP_HOST'];
    $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    header("location:http://$host$uri/$extra");
    exit();
}
if(isset($_POST['continue']))
{
    $extra="welcome.php";
    $host=$_SERVER['HTTP_HOST'];
    $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    header("location:http://$host$uri/$extra");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style3.css">
<title>Registration form</title>
</head>

   <body>            
    <form style="background-color:#E6E6FA" name="edit" method="post">

        <header>New User Submission Form</header>
        
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder=<?php echo $emailid;?> name="email" id="email">
        <label for="mob"><b>Mobile No</b></label>
        <input type= "number" placeholder=<?php echo $mob;?> name="mob" id="mob">
        <label for="fname"><b>First Name</b></label>
        <input type="text" placeholder=<?php echo $fname;?> name="fname" id="fname">
        <label for="lname"><b>Last Name</b></label>
        <input type="text" placeholder=<?php echo $lname;?> name="lname" id="lname">
        <label for="gen"><b>Gender</b></label>
        <Select id="gen" name="gen" required>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Transgender">Transgender</option>
          <option value="NA">Not prefer to say</option>
        </select> 
          <button type="submit" name="edit">Update</button> 
          <button style="margin-left:80px;" type="submit" name="continue">Continue</button>
	

        <p style="padding-left:50%;">Already have an account? <a href="index.php">Sign in</a>.</p>
    </form>
   </body>
</html>
   
