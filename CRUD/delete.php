<?php 
include_once('./config.php');
$id = $_GET['id'];
$sql = "DELETE FROM students WHERE id = $id";
$result = $mysqli->query($sql);
if ($result) {
    header('location:index.php');
}