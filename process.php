<?php


$host='localhost';
$user='root';
$pass='';
$db='images';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
	echo 'connected successfully to images database';
$sql="INSERT INTO photo (image_path,caption) VALUES ('G:\SIES Technical Team Web\sky.jpg','Beautiful')";
$query = mysqli_query($con,$sql);
if($query)
	echo 'data inserted successfully';

?>