<?php
  include("connection.php");
?>
<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Form</title>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
 <link rel="stylesheet" href="sing up.css">
</head>

<body>
  <button class="btn"><i class="fa-sharp fa-solid fa-arrow-left"></i>&nbsp; <a href="../home page 1/home page.php">Back to home</a></button>
  <form class="form" action="" method="POST">
  <div class="contener">
    <div class="signup">
       Sign up
        <div class="icon">
          <i class="fa-regular fa-user"></i> <input type="text"  placeholder=" First name...!"class="first" name="fname" required>
        </div>
        <div class="icon">
          <i class="fa-regular fa-user"></i> <input type="text"placeholder=" last name...!" class="first" name="lname" required>
        </div>
  
        <div class="icon">
          <i class="fa-regular fa-envelope"></i> <input type="email"placeholder=" email id...!"class="first" name="email" required>
        </div>
        
        <div class="icon">
          <i class="fa-solid fa-lock"></i> <input type="password"placeholder=" password...!"class="first" name="password" required>
        </div>
        <div class="icon">
          <i class="fa-solid fa-lock"></i> <input type="password"placeholder="Re-enter password...!" class="first" name="re_password" required>
        </div>

        




        <div>
          <input type="submit"value="Register"class="submit" name="register" />
        </div>
    </div>
      <h3>Already have a registered user !! <u><a href="sign in.php" class="a">Login</a></u> !!</h3>
  </div>
</form>
</body>

<?php
    
    if(isset($_POST['register']))
  {
   
  $fname       = $_POST['fname'];
  $lname       = $_POST['lname'];
  $email       = $_POST['email'];
  $password    = $_POST['password'];//password and re-password  are matched then login
  $re_password = $_POST['re_password'];
  
 
 
 
  $query = "INSERT INTO signup (First_Name, Last_Name,  Email, Password, Re_Password) values ('$fname','$lname','$email','$password','$re_password')";
   
  $query_run = mysqli_query($conn,$query);
  //$result = mysqli_error($conn,$query);
  
  if($query_run)
 
  {
     echo"<script>alert('Register Successfully...!')</script>";

  }
  else
  {
    echo"<font color='Red'>query failed...!";
  }

}

?>

</html>

