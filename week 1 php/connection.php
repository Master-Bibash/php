 <?php
$server="localhost";
$username="root";
$password="";
$database="database";
//to know dbs osconnected  or not
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    echo "connection failed";
}else{
    echo "connected";
}