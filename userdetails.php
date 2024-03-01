
<?php

session_start();
include 'config.php';

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
   $email=$_POST['emailid'];
   $mob=$_POST['mob'];
   $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $sql = "UPDATE UserD Set mob='$mob', fname='$fname', lname='$lname' WHERE emailid='$emailid'";
   $result = $mysqli -> query($sql);

   if ($result === TRUE) {
   echo '<script>alert("Record updated Successfully")</script>'; 
   } else {
   echo "Error updating record: " . $conn->error;
}


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

<script>
function validateform() {
 
  var mob = document.edit.mob.value;
  var mob1 = mob.toString();

  if (mob1.length !== 10) {
    alert("Mobile number must be 10 digits long.");
    return false;
 }

}
</script>

<!DOCTYPE html>
<html>

<head 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style3.css">
<title>Registration form</title>
</head>

   <body>            
    <form style="background-color:#E6E6FA" name="edit" onsubmit="return validateform()" method="post">

        <header>Profile update Form</header>
        
        <label for="email"><b>Email</b></label>
	<input type="email" placeholder=<?php echo $emailid;?> name="email" id="emailid" readonly >
        <br>

        <label for="mob"><b>Mobile No : <?php echo $mob;?></b></label>
        <input type="number" name="mob" id="mob" Value=<?php echo $mob;?> >

        <label for="fname"><b>First Name : <?php echo $fname;?></b></label>
        <input type="text" name="fname" id="fname" Value=<?php echo $fname;?>>

        <label for="lname"><b>Last Name : <?php echo $lname;?></b></label>
        <input type="text" name="lname" id="lname" Value=<?php echo $lname;?>>

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
   
