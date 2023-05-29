<?php
session_start();
require 'dbconnect.php';
$user_id= $_SESSION['id'];
$delete = "DELETE FROM form WHERE user_id = $user_id"; 
$delete1 = "DELETE FROM education WHERE user_id = $user_id"; 
$delete2 = "DELETE FROM experience WHERE user_id = $user_id"; 
$delete3 = "DELETE FROM honors WHERE user_id = $user_id"; 
$delete4 = "DELETE FROM skill WHERE user_id = $user_id"; 

$rs = $conn-> query($delete);
$rs = $conn-> query($delete1);
$rs = $conn-> query($delete2);
$rs = $conn-> query($delete3);
$rs = $conn-> query($delete4);
if ($rs){
    echo '<script>location.replace("dashboard.php")</script>';
}
?>