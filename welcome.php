<?php
session_start();

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
  <form name="Welcome" method="post" >
  <p style="color:green;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
  <header style="color:yellow;">Welcome to the application</header>
  </form>       
 </body>
</html>
