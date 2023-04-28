<?php
session_start();
require 'dbconnect.php';
$user_id= $_SESSION['id'];

// image file 
$imsg = "";

if (!empty($_SESSION["user_id"])) {
    header("Location: form.php");
}

if (isset($_POST['Next'])) {
    
    $target = "image/" . basename($_FILES['file']['name']);

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['emailad'];
    $phone = $_POST['phnnum'];
    $address = $_POST['address'];
    $nationality = $_POST['nationality'];
    $blood = $_POST['blood'];
    $gender = $_POST['gender'];
    $cvobj = $_POST['Obj'];
    $file = $_FILES['file']['name'];

    $query1 = "INSERT INTO form (user_id , fname, lname, emailad, phnnum, address, 
nationality, blood, gender, Obj, file) VALUES($user_id,'$fname', '$lname', '$email',
'$phone','$address', '$nationality', '$blood', '$gender', '$cvobj', '$target')";

    if ($conn->query($query1) == TRUE) {
        echo '<script>location.replace("form2.php")</script>';
        
    } else {
        echo "Error: " . $query1 . "<br>" . $conn->error;
    }

    if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
        $imsg = "Uploaded successfully";
    } else {
        $imsg = "Error in uploading";
    }

    $conn->close();
}
?>

<?php
if (isset($_POST['submit2'])) {
    $skillname = $_POST['sname'];

    $query2 = "INSERT INTO skill (user_id,sname) VALUES($user_id,'$skillname')";

    if ($conn->query($query2) == TRUE) {
        echo '<script>alert("New record created successfully")</script>';
        echo '<script>location.replace("form2.php")</script>';
    } else {
        echo "Error: " . $query2 . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<?php
if (isset($_POST['submit3'])) {
    $elevel = $_POST['elevel'];
    $einstitute = $_POST['einstitute'];
    $emajor = $_POST['emajor'];
    $eresult = $_POST['eresult'];
    $epassyear = $_POST['epassyear'];

    $query3 = "INSERT INTO education(user_id,elevel, einstitute, emajor, eresult, epassyear)
VALUES($user_id,'$elevel', '$einstitute', '$emajor', '$eresult', '$epassyear')";

    if ($conn->query($query3) == TRUE) {
        echo '<script>alert("New record created successfully")</script>';
        echo '<script>location.replace("form2.php")</script>';
    } else {
        echo "Error: " . $query3 . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<?php
if (isset($_POST['submit4'])) {
    $excompany = $_POST['excompany'];
    $exdesignation = $_POST['exdesignation'];
    $exstart = $_POST['exstart'];
    $exend = $_POST['exend'];

    $query4 = "INSERT INTO experience (user_id,excompany, exdesignation, exstart, exend)
VALUES($user_id,'$excompany', '$exdesignation', '$exstart', '$exend')";

    if ($conn->query($query4) == TRUE) {
        echo '<script>alert("New record created successfully")</script>';
        echo '<script>location.replace("form2.php")</script>';
    } else {
        echo "Error: " . $query4 . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<?php
if (isset($_POST['submit5'])) {
    $hname = $_POST['hname'];
    $hplace = $_POST['hplace'];
    $hposition = $_POST['hposition'];

    $query5 = "INSERT INTO honors (user_id,hname, hplace, hposition)
VALUES($user_id,'$hname', '$hplace', '$hposition')";

    if ($conn->query($query5) == TRUE) {
        echo '<script>alert("New record created successfully")</script>';
        echo '<script>location.replace("form2.php")</script>';
    } else {
        echo "Error: " . $query5 . "<br>" . $conn->error;
    }
    $conn->close();
}
?>



