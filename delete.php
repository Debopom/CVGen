<?php
session_start();
require 'dbconnect.php';
$user_id= $_SESSION['id'];
$table = $_GET['table'];
$id = $_GET['id'];
$column =$_GET['column'];
echo $table;
echo $id;
echo $column;


$delete = "DELETE FROM $table WHERE $column = $id";
if ($conn->query($delete) == TRUE) {
    echo '<script>alert("Delete Successfully")</script>';
    echo '<script>location.replace("form2.php")</script>';
} else {
    echo '<script>alert("Delete failed! Try again")</script>';
    echo '<script>location.replace("form2.php")</script>';
}
?>