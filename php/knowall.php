<?php
session_start();
if(!isset($_SESSION['usernamea'])){
    header("Refresh:0; url=index.php");
}
?>
<html>
<head>
<style>
td:first-child {color:white;background-color:black;position:sticky;left:0px;}
</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title></title>
</head>
<body>
<?php
require 'connect.php';
$query="SELECT * FROM record";

$result = mysqli_query($conn,$query);

if (!$result) 
{
	$message = 'ERROR:' . mysqli_error();
	return $message;
}
else
{
	$i = 0;
	echo '<table class="table-hover table" border=2><tr style="background-color:black;" class="sticky-top">';
	while ($i < mysqli_num_fields($result))
	{
		$meta = mysqli_fetch_field($result);
		echo '<th style="color:white">' . $meta->name . '</th>';
		$i = $i + 1;
	}
	echo '</tr>';
	
	$i = 0;
	while ($row = mysqli_fetch_row($result)) 
	{
		echo '<tr>';
		$count = count($row);
		$y = 0;
		while ($y < $count)
		{
			if(current($row)==0)
			$c_row='ABSENT';
		    else if(current($row)==1)
		    	$c_row='PRESENT';
		    else
		    	$c_row=current($row);
			echo '<td>' . $c_row . '</td>';
			next($row);
			$y = $y + 1;
		}
		echo '</tr>';
		$i = $i + 1;
	}
	echo '</table>';
	mysqli_free_result($result);
}
?>
</body>
</html>
