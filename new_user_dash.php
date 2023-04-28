<?php
require 'dbconnect.php';
$query = "SELECT * FROM form AS f WHERE f.user_id=1";
$result = $conn->query($query);


$row = $result->fetch_assoc();
$first_name = $row ['fname'];
$last_name = $row ['lname'];
$email = $row ['emailad'];
$number = $row ['phnnum'];

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
    .w3-table,
    .w3-table-all {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      display: table
    }

    .w3-table-all {
      border: 2px solid #ccc;
      margin-top: 50px;
      height: 150px;

    }

    .dropbtn {
      background-color: rgb(17, 121, 93);
      color: white;
      padding: 15px;
      font-size: 16px;
      border: none;
      width: 130px;
      margin-top: -9px;
      margin-left: 30px;
      border-radius: 3px;
    }

    .dropdown {
      display: inline-block;
      width: 150px;
      float: left;
      margin-top: 40px;
      margin-left: 10px;

    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #a2f2d293;
      border-radius: 5px;
      margin-left: 30px;
      min-width: 300px;
      height: 170px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      padding-right: 10px;
    }

    .dropdown-content a {
      color: black;
      text-decoration: wavy;
      font-weight: bold;
      display: block;
    }

    .dropdown-content p {
      color: black;
      font-weight: bold;
      margin-left: 40px;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #dddddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: rgba(65, 218, 198, 0.729);
    }

    td {
      font-weight: medium;
    }
  </style>

</head>

<body>

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
          <h2 style="font-weight: bold; font-size: 20px; text-align: left;"> <?php echo $first_name; echo $last_name ;?></h2>
          <p style="font-weight: bold; font-size: 13px;"> <?php echo $number; ?>
          <p>
          <p style=" font-size: 12px;"> <?php echo $email; ?> </p>
        </div>
      </div>
      <nav>

        <ul>

          <li> </li>
          <li>Home</li>
          <li>FAQ</li>
          <li>About</li>

        </ul>
      </nav>
      <?php include 'logout.php'; ?>
    </div>

    <div class="parent">
      <div class="w3-container">
        <table class="w3-table-all w3-card-4">
          <thead>
            <tr class="w3-teal">
              <th>#</th>
              <th>Files</th>
              <th>Date Created</th>
              <th> Option </th>

            </tr>
          </thead>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></a>
            </td>
          </tr>
          <a  href="form.php"> <button style="align: center;"> CREATE A CV </button> </a>

        </table>

      </div>
    </div>
    <?php include 'footer.php'; ?>
    </div>
  </body>
</html>