<?php
require 'dbconnect.php';
session_start();
$user_id = $_SESSION['id'];
$query = "SELECT * FROM users WHERE user_id=$user_id";
$result = $conn->query($query);

$row = $result->fetch_assoc();
$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];
$form_query = "SELECT * FROM form AS f WHERE user_id=$user_id";
$form_query_rs = $conn->query($form_query);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="background.css">
  <link rel="stylesheet" href="dashboard.css">
  <link rel="stylesheet" href="homestyle.css">
  <link rel="stylesheet" href="navbar_logo.css">

  <title>Dashboard</title>

</head>

<body>
  <div class="container">
  <?php include 'back.php'; ?>
    <div class="logo">
      <h1 class="logo2">CVGen</h1>
    </div>

    <div class="dropdown">
      <button class="dropbtn">Profile</button>
      <div class="dropdown-content">
        <h2 style="font-weight: bold; font-size: 20px; text-align: left;">
          <?php echo $fname;
          echo " ";
          echo $lname; ?> <br>
          <?php echo $email; ?></h2>
      </div>
    </div>
    <nav>
      <ul>
        <li> </li>
        <a href="index.php">
          <li>Home</li>
        </a>
        <a href="faq.php"><li>FAQ</li></a>
        <a href="about.php"><li>About</li></a>
      </ul>
    </nav>
    <?php include 'logout.php'; ?>

  </div>


  <div class="newcv">
    <?php
    if (mysqli_num_rows($form_query_rs) > 0) { ?>

      <div id="update">
        <h1 id="hh">You already have created a form. Click here to edit</h1>
        <a href="form_edit.php"><button id="bt"> Edit </button></a>
        <br><br>
        <h1 id="or">OR</h1>
        <br><br>

        <a href="delete_cv.php"><button id="bt" onclick="validation()" style="background-color: red"> Delete CV </button></a>
      </div>

      <img src="images/12_prev_ui.png" alt="picture" width="600px">
    <?php } else { ?>
      <div id="createcvnow">
        <h1 id="hh">New in this site? </h1>
        <a href="form.php"><button id="bt"> Create your CV now </button></a>
      </div>

      <div id="sidepic">
        <img src="images/12_prev_ui.png" alt="picture" width="600px">
      </div>

    <?php } ?>
  </div>
  <?php include 'footer.php'; ?>
</body>
<script>
  function validation() {
    alert("Are you sure you want to delete the previous CV? You will have to do it again from scratch!");
  }
</script>

</html>