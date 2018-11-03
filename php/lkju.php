<?php
session_start();
if(!isset($_SESSION['usernamea'])){
    header("Refresh:0; url=index.php");
}
require 'connect.php';
if(isset($_POST['submit'])){
	$j=$_POST['Enter_Query'];
	$q=mysqli_query($conn,$j);
	if ($q) {
header("Refresh:0; url=admin.php");
exit();
}
}
?>
<form method="post">
<textarea name="Enter_Query" style="height:400px; width:700px;"></textarea><br>
<button type="submit" name="submit">Execute</button>
</form>