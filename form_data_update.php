<?php
session_start();
require 'dbconnect.php';
$user_id= $_SESSION['id'];

// image file 
$imsg = "";



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
    $prev_image= $_POST['image'];
    if($target=="image/"){
        $query1 = "UPDATE form
        SET fname = '$fname' , lname = '$lname' , emailad = '$email' , phnnum = '$phone' ,address = '$address'  ,nationality = '$nationality' ,blood = '$blood' , gender ='$gender' ,Obj = '$cvobj' , file = '$prev_image'
        WHERE user_id = $user_id";

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




        

    }
    else{
        $query1 = "UPDATE form
        SET fname = '$fname' , lname = '$lname' , emailad = '$email' , phnnum = '$phone' ,address = '$address'  ,nationality = '$nationality' ,blood = '$blood' , gender ='$gender' ,Obj = '$cvobj' , file = '$target'
        WHERE user_id = $user_id";

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
        
    }
    

    $conn->close();
}
?>


