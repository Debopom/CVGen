<?php
session_start();
require 'dbconnect.php';
$user_id= $_SESSION['id'];

$Sdelete = "DELETE FROM skill WHERE user_id = $user_id  ";
if ($conn->query($Sdelete) == TRUE) {
    echo '<script>alert("Delete Successfully")</script>';
    echo '<script>location.replace("form2.php")</script>';
} else {
    echo "Error: " . $Sdelete . "<br>" . $conn->error;
}

$Edelete = "DELETE FROM education WHERE user_id = $user_id ";
if ($conn->query($Edelete) == TRUE) {
    echo '<script>alert("Delete Successfully")</script>';
    echo '<script>location.replace("form2.php")</script>';
} else {
    echo "Error: " . $Edelete . "<br>" . $conn->error;
}

$Exdelete = "DELETE FROM experience WHERE user_id = $user_id";
if ($conn->query($Exdelete) == TRUE) {
    echo '<script>alert("Delete Successfully")</script>';
    echo '<script>location.replace("form2.php")</script>';
} else {
    echo "Error: " . $Exdelete . "<br>" . $conn->error;
}

$Hdelete = "DELETE FROM honors WHERE user_id = $user_id ";
// $Hdelete = $conn->query($Hdelete);
if ($conn->query($Hdelete) == TRUE) {
    echo '<script>alert("Delete Successfully")</script>';
    echo '<script>location.replace("form2.php")</script>';
} else {
    echo "Error: " . $Hdelete . "<br>" . $conn->error;
}


// if(isset($_GET['user_id'])){
//     $dlt = $_GET['user_id'];

//     $Sdelete = mysqli_query($conn, "DELETE FROM `skill` WHERE `user_id`='$dlt'");

//     $Edelete = mysqli_query($conn, "DELETE FROM `education` WHERE `user_id`='$dlt'");

//     $Exdelete = mysqli_query($conn, "DELETE FROM `experience` WHERE `user_id`='$dlt'");

//     $Hdelete = mysqli_query($conn, "DELETE FROM `honors` WHERE `user_id`='$dlt'");
// }
