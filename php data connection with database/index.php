<?php include("connection.php"); ?>
<!DOCTYPE html>
<!-- Coding by CodingLab || www.codinglabweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title>Login & Signup Form</title>-->
    <link rel="stylesheet" href="style.css" /> 
  </head>
  <body>
    <section class="wrapper">
      <div class="form signup">
        <header>Signup</header>
        <form action="#" method="POST">
          <input type="text" placeholder="Full name" required name="fname" />
          <input type="text" placeholder="last  name" required name="lname" />
          <input type="text" placeholder="Email address" required name="email" />
          <input type="password" placeholder="Password" required name="password"/>
          <input type="number" placeholder="phone number" required name="phonen" />
          <input type="text" placeholder="address" required name="address"/>
          <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">I accept all terms & conditions</label>
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
  $password=$_POST['password'];
  $phone=$_POST['phonen'];
  $address=$_POST['address'];

  $query="INSERT INTO form values('$fname','$lname','$email','$password','$phone','$address')";
  $data=mysqli_query($con,$query);
  if($data){
    echo " data inserted into data base";
  }else
  echo "failed";


}





?>