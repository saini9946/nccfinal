<?php
session_start();
require 'connect.php';
if(!isset($_SESSION['usernamea'])){
    header("Refresh:0; url=index.php");
}
if(isset($_POST['submit'])){
$u=mysqli_real_escape_string($conn,$_POST['filename']);
$o="DELETE FROM files WHERE name='$u'";
if(mysqli_query($conn,$o))
header("Refresh:0; url=../download.php");
else
echo 'error';
}
?>
<form method="POST">
	<input type="text" placeholder="Enter File Name" name="filename">
	<button type="submit" name="submit">Delete</button>
</form>
