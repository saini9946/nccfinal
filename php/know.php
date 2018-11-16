<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Refresh:0; url=index.php");
}
require 'connect.php';
$s="SELECT * FROM attendance WHERE crn=".$_SESSION['username']."";
$q=mysqli_query($conn,$s);
$t="SELECT * FROM attendanceevening WHERE crn=".$_SESSION['username']."";
$q1=mysqli_query($conn,$t);
if(mysqli_num_rows($q)>0)
$query="SELECT * FROM record WHERE crn=".$_SESSION['username']."";
else if(mysqli_num_rows($q1)>0)
	$query="SELECT * FROM recordevening WHERE crn=".$_SESSION['username']."";
$result = mysqli_query($conn,$query);

if (!$result) 
{
	$message = 'ERROR:' . mysqli_error();
	return $message;
}
else
{
	$i = 0;
	echo '<html><body><table class="table">';
	$row = mysqli_fetch_row($result);
	while ($i < mysqli_num_fields($result))
	{
		$meta = mysqli_fetch_field($result);
            echo '<tr>';
		echo '<th scope="col">' . $meta->name . '</th>';
		if(current($row)==0)
			$c_row='ABSENT';
		    else if(current($row)==1)
		    	$c_row='PRESENT';
		    else
		    	$c_row=current($row);
			echo '<td>' . $c_row . '</td>';
			next($row);
		$i = $i + 1;
		echo '</tr>';
	}
	
	echo '</table></body></html>';
	mysqli_free_result($result);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title></title>
</head>
<body>

</body>
</html>