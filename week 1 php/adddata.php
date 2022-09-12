"<?php
$username= $_POST["username"];
$password= $_POST['password'];
$email= $_POST['email'];
include 'connection.php';
$sql = "INSERT INTO table(name,password,email)VALUES('$name','$email')";
$result=mysqli_query($conn,$sqli);
if($result){
    header('loaction :signup.php');
}

?>"