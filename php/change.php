<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Refresh:0; url=index.php");
}
require 'connect.php';
if(isset($_POST['submit']))
{  $p=mysqli_real_escape_string($conn,$_POST['password']);
$u=$_SESSION['username'];
    $q="UPDATE attendance SET password='$p' WHERE crn='$u'";
    $s=mysqli_query($conn,$q);
    if ($s) {
    	header("Refresh:0; url=dashboard.php");
exit();}
 }
?>
<link rel="shortcut icon" href="https://www.gndec.ac.in/sites/default/files/acquia_marina_favicon.png" type="image/x-icon" />
<title>CHANGE </title>
<html>
<head>
  <link rel="shortcut icon" href="https://www.gndec.ac.in/sites/default/files/acquia_marina_favicon.png" type="image/x-icon" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/cannabis.png"/>
    <title>FORGOT PASSWORD</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
@import "bourbon";

body {
	background: #eee !important;	
}

.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	}

	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}
  input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
}
</style>
</head>
<body>
  <div class="wrapper">
    <form class="form-signin" method="POST">       
      <h2 class="form-signin-heading">CHANGE PASSWORD</h2>
       <input type="password" class="form-control" name="password" placeholder="Enter New Password" required autofocus="" /><br>
<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Change Password</button>    
      <br><a href="dashboard.php">HOME</a><br>
    </form>
  </div>
</body>
</html>