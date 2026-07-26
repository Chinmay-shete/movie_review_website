<?php
include("connection.php");
//hide the warning part easily
 

if(isset($_POST['submit']))
  {
     $email = $_POST['email'];
     $password = $_POST['password'];
     $query = "SELECT * FROM signup WHERE Email ='$email' && Password = '$password' ";

     $result = mysqli_query($conn,$query);
     $total = mysqli_num_rows($result);
     //echo($total);
     if($total==1)
     { 
       
       header("location:index.php");
     } 
     else
     {
       echo"<font color='red'><script>alert('Login failed..!')</script></font>";
     }
  }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login page</title>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <link rel="stylesheet" href="sign in.css">

</head>

<body>
    
  <button class="btn"><i class="fa-sharp fa-solid fa-arrow-left"></i>&nbsp; <a href="../home page 1/home page.php">Back to home</a></button>
  <form class="form" action="" method="POST">
  <div class="contener">
    <div class="login">
       Login
       
        <div class="icon">
          <i class="fa-regular fa-envelope"></i> <input type="email"placeholder=" Email_Id...!"class="first" name="email">
        </div>
        <div class="icon">
          <i class="fa-solid fa-lock"></i> <input type="password"placeholder=" password...!"class="first" name="password">
        </div>

        <!-- <div class="forget_pass"><a href="forget_pass.html" >forgot password ?</a></div> -->
        
        <div>
          <input type="submit"value="submit"class="submit" name="submit"/>
        </div>
         
    </div>
      <h3> !! <a href="sign up.php" class="a">sign up</a> !! for new users !!</h3>
  </div>
</form>
</body>
</html>