<?php
require 'dbconnect.php';
$query = "SELECT * FROM form AS f WHERE f.user_id=1";
$result = $conn->query($query);


$row = $result->fetch_assoc();
$fname = $row['fname'];
$lname = $row['lname'];
$number = $row['phnnum'];
$email = $row['emailad'];
$address = $row['address'];
$nationality = $row['nationality'];
$blood = $row['blood'];
$gender = $row['gender'];
$cvobj = $row['Obj'];
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
<style>
    #head {
        background-color: blue;
        height: 200px;

    }
</style>

<body>
<div > <?php
include("header.php"); 
?>
    <div id="div1">
        <h1>Personal Details</h1>
        <form action="form_data_update.php" method="post" enctype="multipart/form-data">
            <div class="img-div">
                <img src="image/img_icon.jpg" id="img1">
                <input type="file" id="file" name="file" value="<?php echo $file ?>">
                <label for="file" id="uploadBtn">Choose Photo</label>
            </div>
            <label for="fname" class="textdesign">First Name*</label>
            <input type="text" class="inputdesign" id="fname" name="fname" value="<?php echo $fname ?>" placeholder="Enter Your First Name">

            <label for="lname" class="textdesign">Last Name*</label>
            <input type="text" class="inputdesign" id="lname" name="lname" value="<?php echo $lname ?>" placeholder="Enter Your Last Name">

            <label for="email" class="textdesign2">Email Address*</label>
            <input type="text" class="inputdesign2" id="emailad" name="emailad" value="<?php echo $email ?>" placeholder="Enter Your Email Adress">

            <label for="phnNum" class="textdesign2">Phone Number*</label>
            <input type="text" class="inputdesign2" id="phnnum" name="phnnum" value="<?php echo $number ?>" placeholder="Enter Your Phone Number">

            <label for="address" class="textdesign2">Address*</label>
            <input type="textarea" class="inputdesign2" id="address" name="address" value="<?php echo $address ?>" placeholder="Enter Your Adress">

            <label for="nationality" class="textdesign2">Nationality*</label>
            <input type="text" class="inputdesign2" id="nationality" name="nationality" value="<?php echo $nationality ?>" placeholder="Enter Your Nationality">

            <label for="bloodg" class="textdesign2">Blood Group*</label>
            <input type="text" class="inputdesign2" id="blood" name="blood" value="<?php echo $blood ?>" placeholder="Enter Your Blood Group">

            <label for="gender" class="textdesign2">Gender*</label>
            <select class="inputdesign2" id="gender" name="gender" value="<?php echo $gender ?>">
                <option value="female">Female</option>
                <option value="male">Male</option>
                <option value="other">Other</option>
            </select>

            <label for="Obj" class="textdesign2">CV Objective*</label>
            <input type="text" class="textarea" id="Obj" name="Obj" value="<?php echo $cvobj ?>" role="textbox" contenteditable placeholder="Add your CV Objective">
            <!-- <span class="textarea" id="Obj" name="Obj" role="textbox" contenteditable></span> -->

            <input type="submit" name="Next" id="submit" value="Next">

        </form>
    </div>
    <div > <?php
include("footer.php"); 
?>
 </div>
    <script src="form.js"></script>
</body>

</html>