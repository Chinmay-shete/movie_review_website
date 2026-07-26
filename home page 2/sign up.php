<?php
ob_start();
include("connection.php");
error_reporting(0);

$msg      = "";
$msg_type = ""; // "success" or "error"

if(isset($_POST['register'])) {
    $fname       = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname       = mysqli_real_escape_string($conn, $_POST['lname']);
    $email       = mysqli_real_escape_string($conn, $_POST['email']);
    $password    = mysqli_real_escape_string($conn, $_POST['password']);
    $re_password = mysqli_real_escape_string($conn, $_POST['re_password']);

    // Bug fix: check passwords match before inserting
    if($password !== $re_password) {
        $msg      = "Passwords do not match. Please try again.";
        $msg_type = "error";
    } else {
        $query     = "INSERT INTO signup (First_Name, Last_Name, Email, Password, Re_Password)
                      VALUES ('$fname','$lname','$email','$password','$re_password')";
        $query_run = mysqli_query($conn, $query);

        if($query_run) {
            $msg      = "Registered successfully! You can now Login.";
            $msg_type = "success";
        } else {
            // Duplicate email or other DB error
            $msg      = "Registration failed. Email may already be registered.";
            $msg_type = "error";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Form</title>
  <link rel="stylesheet" href="sing up.css">
</head>

<body>
  <button class="btn"><a href="../home page 1/home page.php">&#8592;&nbsp; Back to home</a></button>

  <form class="form" action="" method="POST">
    <div class="contener">
      <div class="signup">
        Sign up

        <?php if (!empty($msg)): ?>
          <p style="color:<?php echo ($msg_type === 'success') ? 'green' : 'red'; ?>; font-size:14px; margin: 8px 0;">
            <?php echo ($msg_type === 'success') ? '&#10003; ' : '&#9888; '; echo $msg; ?>
          </p>
        <?php endif; ?>

        <div class="icon">
          <input type="text" placeholder=" First name...!" class="first" name="fname" required>
        </div>
        <div class="icon">
          <input type="text" placeholder=" Last name...!" class="first" name="lname" required>
        </div>
        <div class="icon">
          <input type="email" placeholder=" Email id...!" class="first" name="email" required>
        </div>
        <div class="icon">
          <input type="password" placeholder=" password...!" class="first" name="password" required>
        </div>
        <div class="icon">
          <input type="password" placeholder=" Re-enter password...!" class="first" name="re_password" required>
        </div>

        <div>
          <input type="submit" value="Register" class="submit" name="register"/>
        </div>
      </div>
      <h3>Already have a registered user !! <u><a href="sign in.php" class="a">Login</a></u> !!</h3>
    </div>
  </form>
</body>
</html>
