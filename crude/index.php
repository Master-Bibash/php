<?php

include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
    <section class="wrapper">
      <div class="form signup">
        <header>Signup</header>
        <form action="#" method="POST">
          <input type="text" placeholder="Full name" required name="fname" />
          <input type="text" placeholder="last  name" required name="lname" />
          <input type="text" placeholder="Email address" required name="email" />
          </div>
          <input type="submit" value="Signup" name='reg'/>
        </form>
      </div>
    </section>
  </body>
</html>

<?php

if(isset($_POST['reg']))
{
     $fname=$_POST['fname'];
  $lname=$_POST['lname'];
     $email=$_POST['email'];



     $query="INSERT INTO form values('$fname','$lname','$email')";
     // $sql="INSERT INTO `form`(`fname`, `lname`, `email``) VALUES ( '$fname', '$lname', '$email')";

     $data=mysqli_query($con,$query);
     if($data){
       echo " data inserted into data base";
     }else
     echo "failed";
     
}



?>