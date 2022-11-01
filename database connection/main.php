<form acion="main.php" method="post">
    <input type=text name="fname" id=fname placeholder="enter first name"><br>
    <br>
    <input type=text name="lname" id=lname placeholder="enter last name"><br>
    <br>
    <input type=email name="email" id=email placeholder="enter email "><br>
    <br>
    <input type=radio name=gender value="male" checked/>male
    <input type=radio name=gender value=female/>female
    <input type=radio name=gender value=other/>other<br>
    <br>
    <input type="submit">

</form>
<?php
//setting the database

$servername="localhost";
$username="root";
$password="";
$dbname="signup";

//built connection
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("failed");
}

//lets connect now

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$gender=$_POST['gender'];

//sql part to insert data
$sql="INSERT INTO `sign` (`S.N`, `fname`, `lname`, `email`, `gender`) VALUES (NULL, '$fname', '$lname', '$email', '$gender')";
//$sql="INSERT INTO `sign` (`S.N`, `fname`, `lname`, `email`,'gender') VALUES (NULL, '$fname', '$lname', '$email','$gender')";

//$sql="INSERT INTO 'sign'('S.N','fname','lname','email')VALUES(NULL,'$fname','$lname','$email')";

//to know that the data is posted 
if($conn->query($sql)==True){
    echo "data inserted success";
}else{
    echo "error";
}
$conn->close();









?>