<?php 
$host="localhost";
$usr="root";
$db="lawn";
$pwd="";
$connect=mysqli_connect($host,$usr,$pwd,$db)or die("Failed to Connect");
mysqli_select_db($connect,$db);
?>