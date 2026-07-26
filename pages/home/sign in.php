<?php
ob_start(); // Buffer output so header() always works
include("connection.php");
// Hide warnings gracefully
error_reporting(0);

$login_error = "";

if(isset($_POST['submit']))
  {
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $password = mysqli_real_escape_string($conn, $_POST['password']);
     $query = "SELECT * FROM signup WHERE Email ='$email' && Password = '$password' ";

     $result = mysqli_query($conn, $query);
     $total = mysqli_num_rows($result);

     if($total >= 1)
     { 
       ob_end_clean();
       header("Location: index.html");
       exit();
     } 
     else
     {
       $login_error = "Invalid Email or Password. Please try again.";
     }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>STAR X — Login</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
  <link rel="stylesheet" href="sign in.css">
</head>

<body>
    
  <a href="../auth/home-page.php" class="btn-back">
    <i class="ri-arrow-left-line"></i> Back to Home
  </a>

  <form class="form" action="" method="POST">
    <div class="contener">
      <div class="auth-brand">
        <span class="star-icon">&#9733;</span>
        <span class="brand-title">STAR X</span>
      </div>

      <h2 class="login-title">Welcome Back</h2>
      <p class="login-subtitle">Sign in to access your cinema account</p>

      <?php if (!empty($login_error)): ?>
        <div class="alert alert-danger">
          <i class="ri-error-warning-line"></i> <?php echo $login_error; ?>
        </div>
      <?php endif; ?>
       
      <div class="input-group">
        <i class="ri-mail-line field-icon"></i>
        <input type="email" placeholder="Email Address" class="first" name="email" required autocomplete="email">
      </div>

      <div class="input-group">
        <i class="ri-lock-2-line field-icon"></i>
        <input type="password" placeholder="Password" class="first" name="password" required autocomplete="current-password">
      </div>

      <div class="form-actions">
        <button type="submit" class="submit" name="submit">
          Sign In <i class="ri-arrow-right-line"></i>
        </button>
      </div>

      <p class="signup-prompt">
        Don't have an account? <a href="sign up.php" class="a">Sign Up</a>
      </p>
    </div>
  </form>
</body>
</html>