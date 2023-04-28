<?php
require 'dbconnect.php';
session_start();
$user_id= $_SESSION['id'];
$query = "SELECT * FROM users WHERE user_id=$user_id";
$result = $conn->query($query);

$row = $result->fetch_assoc();
$fname = $row['fname'];
$lname = $row['lname'];
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
  <link rel="stylesheet" href="background.css">

  <link rel="stylesheet" href="homestyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="navbar_logo.css">
  <link rel="stylesheet" href="dashboard.css">

  <title>User profile</title>

  <style>
    
  </style>

</head>

<body>

  </head>

  <body>
    <div class="container">

      <div class="logo">
        <h1 class="logo2">CVGen</h1>
      </div>

      <div class="dropdown">
        <button class="dropbtn">Profile</button>
        <div class="dropdown-content">
          <h2 style="font-weight: bold; font-size: 20px; text-align: left;">
            <?php echo $fname;
            echo " ";
            echo $lname; ?></h2>
        </div>
      </div>
      <nav>

        <ul>

          <li> </li>
          <a href="index.php">
            <li>Home</li>
          </a>
          <li>FAQ</li>
          <li>About</li>

        </ul>
      </nav>
      <?php include 'logout.php'; ?>
    </div>

    <div class="parent">
      <div class="w3-container">
        <?php
        if (mysqli_num_rows($form_query_rs) > 0) {?>
        <h1>You already have created a form. Click here to edit</h1>
        <a href="form_edit.php"><button> Edit </button></a>
        <?php } 
        else {?>
        <h1>New in this site? </h1>
          <a href="form.php"><button> Create your CV now </button></a>
       <?php }?>
      </div>
    </div>
    <?php include 'footer.php'; ?>
    </div>
  </body>

</html>