<?php
session_start();
if(!isset($_SESSION['usernamea'])){
    header("Refresh:0; url=index.php");
}
require 'connect.php';
if(isset($_POST['submit'])){
$u=$_POST['username'];
$s="SELECT * FROM attendanceevening WHERE crn='$u'";
$q=mysqli_query($conn,$s);
if(!mysqli_num_rows($q)>0){echo "<script>alert('username Does Not exists')</script>";
}
else{
$o="DELETE FROM attendanceevening WHERE crn='$u'";
$q=mysqli_query($conn,$o);
$o1="DELETE FROM recordevening WHERE crn='$u'";
$q=mysqli_query($conn,$o1);
$o1="DELETE FROM tbl_images WHERE crn='$u'";
$q=mysqli_query($conn,$o1);
header("Refresh:0; url=dashboardevening.php");
}
}
?>
<html lang="en" >

<head>
	<style type="text/css">
		.wrapper
		{
			height: 100%;
		}
	</style>
	<link rel="shortcut icon" href="https://www.gndec.ac.in/sites/default/files/acquia_marina_favicon.png" type="image/x-icon" />

  <meta charset="UTF-8">
  <title>DELETE a new User</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form class="form" method="POST">
			<input type="text" placeholder="URN" name="username" required>
			<button type="submit" id="login-button" name="submit" value="submit">DELETE</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

 




</body>

</html>
