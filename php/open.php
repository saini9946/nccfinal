<?php
require 'connect.php';
error_reporting(0);
$a="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$ex=mysqli_real_escape_string($conn,strtolower(end(explode('?',$a))));
$r="SELECT * FROM files where name='$ex'";
$t=mysqli_query($conn,$r);
if(mysqli_num_rows($t)>0){
$row=mysqli_fetch_assoc($t);
$ex1=strtolower(end(explode('/',$row['type'])));
$data = $row['file'];
header('Content-Type: '.$row['type']);
header('Content-Disposition: attachment; filename="'.$row['name'].'.'.$ex1.'"');
echo $data;
}
else
echo 'file not found';
?>

