<?php
session_start();
if(!isset($_SESSION['usernamea'])){
    header("Refresh:0; url=index.php");
}
if(isset($_POST['submit'])){
$file = $_POST['filename'];
if (!unlink($file))
  {
  echo ("Error deleting $file");
  }
else
  {
  echo ("Deleted $file");
  }
}
?>
<form method="POST">
	<input type="text" placeholder="Enter File Name" name="filename">
	<button type="submit" name="submit">Delete</button>
</form>