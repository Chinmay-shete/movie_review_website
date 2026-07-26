<?php
ob_start(); // Buffer output so header() always works
include("connection.php");
error_reporting(0);

$msg = "";
$msg_type = "";

if(isset($_POST['register']))
{
    $fname       = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname       = mysqli_real_escape_string($conn, $_POST['lname']);
    $email       = mysqli_real_escape_string($conn, $_POST['email']);
    $password    = mysqli_real_escape_string($conn, $_POST['password']);
    $re_password = mysqli_real_escape_string($conn, $_POST['re_password']);
    
    if ($password !== $re_password) {
        $msg = "Passwords do not match!";
        $msg_type = "danger";
    } else {
        $query = "INSERT INTO signup (First_Name, Last_Name, Email, Password, Re_Password) VALUES ('$fname','$lname','$email','$password','$re_password')";
        $query_run = mysqli_query($conn, $query);
        
        if($query_run) {
            $msg = "Account created successfully! You can now <a href='sign in.php'>Login</a>.";
            $msg_type = "success";
        } else {
            $msg = "Registration failed. Email may already be registered.";
            $msg_type = "danger";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>STAR X — Create Account</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
  <link rel="stylesheet" href="sing up.css">
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

      <h2 class="login-title">Create Account</h2>
      <p class="login-subtitle">Join STAR X to unlock unlimited cinema reviews</p>

      <?php if (!empty($msg)): ?>
        <div class="alert alert-<?php echo $msg_type; ?>">
          <i class="ri-<?php echo ($msg_type === 'success') ? 'checkbox-circle-line' : 'error-warning-line'; ?>"></i> <?php echo $msg; ?>
        </div>
      <?php endif; ?>

      <div class="name-row">
        <div class="input-group">
          <i class="ri-user-3-line field-icon"></i>
          <input type="text" placeholder="First Name" class="first" name="fname" required>
        </div>
        <div class="input-group">
          <i class="ri-user-3-line field-icon"></i>
          <input type="text" placeholder="Last Name" class="first" name="lname" required>
        </div>
      </div>

      <div class="input-group">
        <i class="ri-mail-line field-icon"></i>
        <input type="email" placeholder="Email Address" class="first" name="email" required autocomplete="email">
      </div>

      <div class="input-group">
        <i class="ri-lock-2-line field-icon"></i>
        <input type="password" placeholder="Password" class="first" name="password" required autocomplete="new-password">
      </div>

      <div class="input-group">
        <i class="ri-lock-line field-icon"></i>
        <input type="password" placeholder="Re-enter Password" class="first" name="re_password" required autocomplete="new-password">
      </div>

      <div class="form-actions">
        <button type="submit" class="submit" name="register">
          Create Account <i class="ri-user-add-line"></i>
        </button>
      </div>

      <p class="signup-prompt">
        Already have an account? <a href="sign in.php" class="a">Sign In</a>
      </p>
    </div>
  </form>

</body>
</html>


