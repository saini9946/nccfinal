<?php
session_start();
if(isset($_SESSION['username'])){
    header("Refresh:0; url=dashboard.php");
}

if(isset($_SESSION['usernamea'])){
    header("Refresh:0; url=admin.php");
}
require 'connect.php';
if(isset($_POST['submit'])){
	$u=mysqli_real_escape_string($conn,$_POST['username']);
	
	$p=mysqli_real_escape_string($conn,$_POST['password']);
$s="SELECT * FROM attendance WHERE crn='$u' AND password='$p'";
$q=mysqli_query($conn,$s);
$t="SELECT * FROM attendanceevening WHERE crn='$u'";
$q1=mysqli_query($conn,$t);
if((mysqli_num_rows($q)>0)||(mysqli_num_rows($q1)>0))
{   if(mysqli_num_rows($q)>0)
    $row = mysqli_fetch_assoc($q);
   else if(mysqli_num_rows($q1)>0)
    $row = mysqli_fetch_assoc($q1);
	$_SESSION['username']=$u;
	$_SESSION['NAME']=$row['name'];
	
	header("Refresh:0; url=dashboard.php");
}
else{
echo "<script type='text/javascript'>alert('Username Not Found');</script>";
header("Refresh:0; url=index.php");
}
}
if(isset($_POST['submitadmin'])){
	$u=mysqli_real_escape_string($conn,$_POST['username']);
	
	$p=mysqli_real_escape_string($conn,$_POST['password']);
$s="SELECT * FROM admin WHERE email='$u' AND password='$p'";
$q=mysqli_query($conn,$s);
if(mysqli_num_rows($q)>0)
{
    $row = mysqli_fetch_assoc($q);
	$_SESSION['usernamea']=$u;
	header("Refresh:0; url=admin.php");
}
else{
echo "<script type='text/javascript'>alert('Username Not Found');</script>";
header("Refresh:0; url=index.php");
}
}
?>
<html>
<head>
	<link rel="shortcut icon" href="https://www.gndec.ac.in/sites/default/files/acquia_marina_favicon.png" type="image/x-icon" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/cannabis.png"/>
    <title>LogIn</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
@import "bourbon";

body {

background-image: url(b.jpg);
  background-repeat: no-repeat;
  background-size: 100% 100%;
}

.wrapper {
	margin-top: 40px;
  margin-bottom: 40px;
  position:relative;
  z-index:99;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: white;



	
}
.header-fixed {
	
	height: 400px;
	color: #ffffff;

	
background-image:url(headerimage1.png);
  background-repeat:no-repeat;
  background-size: 100% 100%;
  background-position: left top;
	
}

@media screen and (max-width: 300px) {
	.header-fixed{height:100px;

		}}
		@media screen and (min-width: 301px) {
	.header-fixed{height:100px;

		}}
		@media screen and (min-width: 350px) {
	.header-fixed{height:100px;

		}}
		@media screen and (min-width: 420px) {
	.header-fixed{height:100px;

		}}
			@media screen and (min-width: 600px) {
	.header-fixed{height:125px;

		}}
		@media screen and (min-width: 768px) {
	.header-fixed{height:150px;

		}}
		@media screen and (min-width: 900px) {
	.header-fixed{height:175px;

		}}
		br
		{ display: block;
		   content: ""; 
            margin-top: 10px;
            line-height: 10px;
		}
</style>
</head>
<body>
    <header class="header-fixed">
           
	</header>
	
  <div class="wrapper">
    <form class="form-signin" method="POST">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="Enter University Roll Number" required="" autofocus="" /><br>
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
     <button class="btn btn-lg btn-primary btn-block" type="submit" name="submitadmin">Admin</button><br>
     <a href="forgot.php" style="text-decoration:none">Forgot Password</a><br>
     <a href="https://ncc.gndec.ac.in" style="text-decoration:none">HOME</a>
    </form>
  </div>

</body>
</html>
