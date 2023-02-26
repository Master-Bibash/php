<?php
include "connection.php";
// error_reporting(0);
$query="SELECT * FROM `form`";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
echo "name is ".$result['fname']." last name is ".$result['lname']." phone number is ".$result['phonen']." address is ".$result['address']; 


if($total!=0)
{
     echo "<br>table has records";
}else
echo "table has no records";



?>