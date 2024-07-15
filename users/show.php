<?php

require("../conn.php");

$username = $_SESSION["username"];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_array($result);
