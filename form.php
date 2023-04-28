<?php
require 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="background.css">
    <title>Form</title>
</head>

<body>
    <div> <?php
            include("header.php");
            ?>
        <div id="div1">
            <h1>Personal Details</h1>
            <form action="form_data.php" method="post" enctype="multipart/form-data">
                <div class="img-div">
                    <img src="image/img_icon.jpg" id="img1">
                    <input type="file" id="file" name="file">
                    <label for="file" id="uploadBtn">Choose Photo</label>
                </div>
                <label for="fname" class="textdesign">First Name*</label>
                <input type="text" class="inputdesign" id="fname" name="fname" placeholder="Enter Your First Name">

                <label for="lname" class="textdesign">Last Name*</label>
                <input type="text" class="inputdesign" id="lname" name="lname" placeholder="Enter Your Last Name">

                <label for="email" class="textdesign2">Email Address*</label>
                <input type="text" class="inputdesign2" id="emailad" name="emailad" placeholder="Enter Your Email Adress">

                <label for="phnNum" class="textdesign2">Phone Number*</label>
                <input type="text" class="inputdesign2" id="phnnum" name="phnnum" placeholder="Enter Your Phone Number">

                <label for="address" class="textdesign2">Address*</label>
                <input type="textarea" class="inputdesign2" id="address" name="address" placeholder="Enter Your Adress">

                <label for="nationality" class="textdesign2">Nationality*</label>
                <input type="text" class="inputdesign2" id="nationality" name="nationality" placeholder="Enter Your Nationality">

                <label for="bloodg" class="textdesign2">Blood Group*</label>
                <input type="text" class="inputdesign2" id="blood" name="blood" placeholder="Enter Your Blood Group">

                <label for="gender" class="textdesign2">Gender*</label>
                <select class="inputdesign2" id="gender" name="gender">
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="other">Other</option>
                </select>

                <label for="Obj" class="textdesign2">CV Objective*</label>
                <input type="text" class="textarea" id="Obj" name="Obj" role="textbox" contenteditable placeholder="Add your CV Objective">
                <!-- <span class="textarea" id="Obj" name="Obj" role="textbox" contenteditable></span> -->

                <input type="submit" name="Next" id="submit" value="Next">

            </form>
        </div>
        <div> <?php
                include("footer.php");
                ?>
        </div>
        <script src="form.js"></script>
</body>

</html>