<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "building";

$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn){
    die("Connection lost " . mysqli_connect_error());
}

