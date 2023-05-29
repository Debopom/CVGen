<?php
require 'dbconnect.php';
session_start();

if (isset($_POST["submit"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
  $row = mysqli_fetch_assoc($result);

  if (mysqli_num_rows($result) > 0) {
    if ($password == $row['password']) {
      $_SESSION['login'] = true;
      $_SESSION['id'] = $row["user_id"];
      header("Location: dashboard.php");
    } else {
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  } else {
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="loginregistration.css">
  <link rel="stylesheet" href="background.css">
  <?php
  include("header_login.php");
  ?>

</head>

<body>

  <div id="login">

    <div id="logindiv">
      <h2>Login Here</h2>
    </div>

    <table id="logintable">

      <form action="" method="post" autocomplete="off">
        <tr>
          <td><label for="email">Email</label></td>
        </tr>
        <tr>
          <td><input type="text" name="email" id="email" required value="" placeholder="Enter your email"> <br></td>
        </tr>

        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>

        <tr>
          <td><label for="password">Password </label></td>
        </tr>

        <tr>
          <td><input type="password" name="password" id="password" required value="" placeholder="Enter your password"></td>
        </tr>

        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>

        <tr>
          <td colspan="2" align="center"><button type="submit" name="submit">Login</button></td>
        </tr>

        <tr></tr>
        <tr></tr>
        
        <tr>
          <td colspan="2" align="center">
            <p>Don't have an account? <a href="registration.php"><br> Click here </a> to Sign In</p>
          </td>
        </tr>
      </form>
    </table>
  </div>
  <div>
    <?php
    include("footer.php");
    ?>
  </div>

</body>

</html>