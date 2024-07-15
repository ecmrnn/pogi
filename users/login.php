<?php
require("../conn.php");

if (isset($_POST["submit"])) {
    session_start();
    $username = $_POST["username"];
    $password = md5(trim($_POST["password"]));

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if ($user["status"] == 0) {
            $_SESSION["username"] = $user["username"];
            $_SESSION["first_name"] = $user["first_name"];
            $_SESSION["last_name"] = $user["last_name"];
            $_SESSION["username"] = $user["username"];
            
            header("Location: ../guest/dashboard.php");
        }

        header("Location: ../login.php?error=user_deactivated");
    } else {
        header("Location: ../login.php?error=user_not_found");
    }
}
