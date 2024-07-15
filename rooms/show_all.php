<?php

require("../conn.php");

$username = $_SESSION["username"];

$sql = "SELECT DISTINCT type, * FROM rooms GROUP BY type";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_array($result);
