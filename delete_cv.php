<?php
session_start();
require 'dbconnect.php';
$user_id= $_SESSION['id'];
$delete = "DELETE FROM form WHERE user_id = $user_id"; 
$rs = $conn-> query($delete);
if ($rs){
    echo '<script>location.replace("dashboard.php")</script>';
}
?>