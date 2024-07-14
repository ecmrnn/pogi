<?php

$localhost = "localhost";
$username = "root";
$password = "";
$database = "pogi_reservation_system";

$conn = mysqli_connect($localhost, $username, $password, $database);

if (!$conn) {
    die("ERROR: Cannot connect to database.");   
}