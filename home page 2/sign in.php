<?php
ob_start();
include("connection.php");
error_reporting(0);

$login_error = "";

if(isset($_POST['submit'])) {
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $query    = "SELECT * FROM signup WHERE Email='$email' AND Password='$password'";

    $result = mysqli_query($conn, $query);
    $total  = mysqli_num_rows($result);

    if($total >= 1) {
        ob_end_clean();
        header("Location: index.html");
        exit();
    } else {
        $login_error = "Invalid Email or Password. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login page</title>
  <link rel="stylesheet" href="sign in.css">
</head>
<body>

  <button class="btn"><a href="../home page 1/home page.php">&#8592;&nbsp; Back to home</a></button>

  <form class="form" action="" method="POST">
    <div class="contener">
      <div class="login">
        Login

        <?php if (!empty($login_error)): ?>
          <p class="error-msg">&#9888; <?php echo $login_error; ?></p>
        <?php endif; ?>

        <div class="icon">
          <input type="email" placeholder=" Email_Id...!" class="first" name="email" required>
        </div>
        <div class="icon">
          <input type="password" placeholder=" password...!" class="first" name="password" required>
        </div>

        <div>
          <input type="submit" value="submit" class="submit" name="submit"/>
        </div>
      </div>
      <h3> !! <a href="sign up.php" class="a">sign up</a> !! for new users !!</h3>
    </div>
  </form>

</body>
</html>