<?php
session_start();

if(!isset($_SESSION['usernamea'])){
    header("Refresh:0; url=index.php");
}
require 'connect.php';
$q1='SELECT * FROM notices';
$q=mysqli_query($conn,$q1);
$row=mysqli_fetch_assoc($q);
$p='SELECT * FROM footer';
$q1=mysqli_query($conn,$p);
$row1=mysqli_fetch_assoc($q1);
if(isset($_POST['submi'])){
	$r=mysqli_real_escape_string($conn,$_POST['notic']);
	$q1="UPDATE notices SET downloads='$r' where 1";
	$t=mysqli_query($conn,$q1);
	if ($t) {
header("Refresh:0; url=admin.php");
exit();
}
}
if(isset($_POST['submit'])){
	$r=mysqli_real_escape_string($conn,$_POST['notice']);
	$q1="UPDATE notices SET notice='$r' where 1";
	$t=mysqli_query($conn,$q1);
	if ($t) {
header("Refresh:0; url=admin.php");
exit();
}
}
if(isset($_POST['submit33'])){
	$r=mysqli_real_escape_string($conn,$_POST['notice33']);
	$q1="UPDATE notices SET quote='$r' where 1";
	$t=mysqli_query($conn,$q1);
	if ($t) {
header("Refresh:0; url=admin.php");
exit();
}
}
if(isset($_POST['submit1'])){
	$r=mysqli_real_escape_string($conn,$_POST['notice1']);
	$q1="UPDATE notices SET events='$r' where 1";
	$t=mysqli_query($conn,$q1);
	if ($t) {
header("Refresh:0; url=admin.php");
exit();
}
}
if(isset($_POST['submit2'])){
	$r=mysqli_real_escape_string($conn,$_POST['notice2']);
	$q1="UPDATE notices SET camps='$r' where 1";
	$t=mysqli_query($conn,$q1);
	if ($t) {
header("Refresh:0; url=admin.php");
exit();
}
}
if(isset($_POST['submit3'])){
	$r=mysqli_real_escape_string($conn,$_POST['notice3']);
	$q1="UPDATE notices SET alumnis='$r' where 1";
	$t=mysqli_query($conn,$q1);
	if ($t) {
header("Refresh:0; url=admin.php");
exit();
}
}
if(isset($_POST['submit4'])){
	$r=mysqli_real_escape_string($conn,$_POST['notice4']);
	$q1="UPDATE footer SET phone='$r' where 1";
	$t=mysqli_query($conn,$q1);
	if ($t) {
header("Refresh:0; url=admin.php");
exit();
}
}
if(isset($_POST['submit5'])){
	$r=mysqli_real_escape_string($conn,$_POST['notice5']);
	$q1="UPDATE footer SET email='$r' where 1";
	$t=mysqli_query($conn,$q1);
	if ($t) {
header("Refresh:0; url=admin.php");
exit();
}
}
if(isset($_POST['submit6'])){
	$r=mysqli_real_escape_string($conn,$_POST['notice6']);
	$q1="UPDATE footer SET emails='$r' where 1";
	$t=mysqli_query($conn,$q1);
	if ($t) {
header("Refresh:0; url=admin.php");
exit();
}
}



?>
<link rel="shortcut icon" href="https://www.gndec.ac.in/sites/default/files/acquia_marina_favicon.png" type="image/x-icon" />
<TITLE>CHANGE HOME</TITLE>
<form method='POST'><br>DOWNLOADS<br>

	<textarea name="notic" style='height:500px;width:800px;'><?php echo $row['downloads'];?></textarea>
	 <br><br>
	 <button value='submit' name='submi'>UPDATE</button>
	</form>

<form method='POST'><br>NOTICES<br>

	<textarea name="notice" style='height:500px;width:800px;'><?php echo $row['notice'];?></textarea>
	 <br><br>
	 <button value='submit' name='submit'>UPDATE</button>
	</form>
	 	<BR>EVENTS<br>
	 	<form method='POST'>
	<textarea name="notice1" style='height:500px;width:800px;'><?php echo $row['events'];?></textarea>
	 <br><br>
	 <button value='submit' name='submit1'>UPDATE</button>
	</form>
	 	<br>CAMPS<br>
	 		<form method='POST'>
	<textarea name="notice2" style='height:500px;width:800px;'><?php echo $row['camps'];?></textarea>
	 <br><br>
	 <button value='submit' name='submit2'>UPDATE</button>
	</form>
	 	<br>ALUMINI<br>
	 		<form method='POST'>
	<textarea name="notice3" style='height:500px;width:800px;'><?php echo $row['alumnis'];?></textarea>
	 <br><br>
	 <button value='submit' name='submit3'>UPDATE</button>
	</form>
	<br>QUOTE<br>
	<form method='POST'>
	<textarea name="notice33" style='height:500px;width:800px;'><?php echo $row['quote'];?></textarea>
	 <br><br>
	 <button value='submit' name='submit33'>UPDATE</button>
	</form>
	 	<form method='POST'>
	<textarea name="notice4" style='height:200px;width:800px;'><?php echo $row1['phone'];?></textarea>
	 <br><br>
	 <button value='submit' name='submit4'>PHONE</button>
	</form>
	 	<form method='POST'>
	<textarea name="notice5" style='height:200px;width:800px;'><?php echo $row1['email'];?></textarea>
	 <br><br>
	 <button value='submit' name='submit5'>EMAIL</button>
	</form>
	 	<form method='POST'>
	<textarea name="notice6" style='height:200px;width:800px;'><?php echo $row1['emails'];?></textarea>
	 <br><br>
	 <button value='submit' name='submit6'>EMAILS</button>
	</form>
