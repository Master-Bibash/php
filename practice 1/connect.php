<?php
//open php file
//specify the variable name with $
if(isset($fname) || isset($fpassword) || isset($fnumber)){


$fname = $_POST['fname'];
$fpassword = $_POST['fpassword'];
$fnumber = $_POST['fnumber'];
//databse connection
//connection code
$conn = new mysqli('localhost','root','','test1');
//check connection
if($conn->connect_error){
    die('connrction failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into signup(fname,fpassword,fnumber)
    values(? ,? ,?)");
    $stmt->blind_param("ssi",$fname,$fpassword,$fnumber);
    $stmt->execute();
    echo "regestration done";
    $stmt->close();
    $conn->close();
}
}


?>