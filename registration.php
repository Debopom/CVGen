<?php
require 'dbconnect.php';
if (!empty($_SESSION["user_id"])) {
  header("Location: login.php");
}
if (isset($_POST["submit"])) {
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
  if (mysqli_num_rows($duplicate) > 0) {
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  } else {
    if ($password == $confirmpassword) {
      $query = "INSERT INTO `users` (`fname`, `lname`, `email`, `password`) VALUES ('$fname', '$lname', '$email', '$password');";
      $rs = $conn->query($query);
      if ($rs) {
        echo "<script> alert('Registration Successful'); </script>";
        echo '<script>location.replace("login.php")</script>';
      } else {
        echo "<script> alert('Registration Error. Please try again'); </script>";
      }
    } else {
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Registration</title>
  <link rel="stylesheet" href="loginregistration.css">
  <link rel="stylesheet" href="background.css">
  <?php
  include("header_login.php");
  ?>
</head>

<body>
  <div id="registration">
    <div id="regdiv">
      <h2 id="registrationheader">Registration</h2>
    </div>
    <table id="logintable">
      <form class="" action="" method="post" autocomplete="off">
        <tr>
          <td><label for="fname">First Name : </label></td>
        </tr>
        <tr>
          <td><input type="text" name="fname" id="fname" required value="" placeholder="Enter your First Name"> <br></td>
        </tr>

        <tr></tr>
        <tr></tr>
        <tr></tr>

        <tr>
          <td><label for="lname">Last Name : </label></td>
        </tr>
        <tr>
          <td><input type="text" name="lname" id="lname" required value="" placeholder="Enter your Last Name"> </td>
        </tr>


        <tr></tr>
        <tr></tr>
        <tr></tr>

        <tr>
          <td><label for="email">Email : </label></td>
        </tr>
        <tr>
          <td><input type="email" name="email" id="email" required value="" placeholder="Enter your Email Address"> </td>
        </tr>


        <tr></tr>
        <tr></tr>
        <tr></tr>

        <tr>
          <td><label for="password">Password : </label></td>
        </tr>
        <tr>
          <td><input type="password" name="password" id="password" required value="" placeholder="Enter your Password"></td>
        </tr>


        <tr></tr>
        <tr></tr>
        <tr></tr>

        <tr>
          <td><label for="confirmpassword">Confirm Password : </label></td>
        </tr>
        <tr>
          <td><input type="password" name="confirmpassword" id="confirmpassword" required value="" placeholder="Confirm Password"></td>
        </tr>

        <tr></tr>
        <tr></tr>
        <tr></tr>

        <tr>
          <td colspan="2" align="center"><button type="submit" name="submit">Sign Up</button></td>
        </tr>

        <tr>
          <td colspan="2" align="center">
            <p><a href="login.php"> Click here </a> to go back to login page</p>
          </td>
        </tr>
    </table>
  </div>
  <div>
    <?php
    include("footer.php");
    ?>
  </div>
</body>

</html>