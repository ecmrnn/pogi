<?php
require("../conn.php");

if (isset($_POST["submit"])) {
    session_start();
    $password = md5(trim($_POST["password"]));
    $username = $_SESSION["username"];
    $error = "";

    // Get password
    $sql = "SELECT password FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $old_password = mysqli_fetch_assoc($result);

    if (empty($_POST["password"])) {
        $error = $error . "err_dp=not_null&";
    }
    elseif (strcmp($password, $old_password["password"]) != 0) {
        $error = $error . "err_dp=not_equal&";
    }

    if (empty($error)) {
        $sql = "UPDATE users SET status = '1' WHERE username='$username'";
        
        try {
            mysqli_query($conn, $sql);
            header("Location: ../users/logout.php");
        } catch (\Throwable $th) {
            header("Location: ../guest/settings.php?err_db=system");
        }
    } else {
        header("Location: ../guest/settings.php?" . rtrim($error, '&'));
    }
}
