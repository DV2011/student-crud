<?php 

$host = "localhost";
$username = "root";
$password = "";
$database = "hanu";

$mysqli = new mysqli($host, $username, $password, $database);
if (!$mysqli) {
    die("Cannot connect to mysql");
}

