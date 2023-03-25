<?php
$username="root";
$password="";
$server='localhost';
$db='emp';

$con=mysqli_connect($server,$username,$password,$db);
if($con)
{
     echo "connection success";
}else
die("failed ");



?>