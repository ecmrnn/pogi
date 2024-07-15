<?php
require("../conn.php");

if (isset($_POST["submit"])) {
    session_start();
    $first_name = ucwords(strtolower(trim($_POST["first_name"])));
    $last_name = ucwords(strtolower(trim($_POST["last_name"])));
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $confirm_password = trim($_POST["confirm_password"]);
    $error = "";

    // Validate first name
    if (empty($first_name)) {
        $error = $error . "err_f=not_null&";
    }
    
    // Validate last name
    if (empty($last_name)) {
        $error = $error . "err_l=not_null&";
    }
    
    // Validate username   
    if (empty($username)) {
        $error = $error . "err_u=not_null&";
    } 
    elseif (preg_match('/[\'!^£$%&*()}{@#~?><>,|=_+¬-]/', $username))
    {
        $error = $error . "err_u=special_char&";
    }
    
    // Validate password
    if (empty($password)) {
        $error = $error . "err_p=not_null&";
    }
    elseif (strlen($password) < 8) {
        $error = $error . "err_p=too_short&";
    }
    if (strcmp($password, $confirm_password) != 0) {
        $error = $error . "err_cp=not_equal&";
    }

    if (empty($error)) {
        $password = md5($password);
        $sql = "INSERT INTO users (first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$password')";
        
        try {
            mysqli_query($conn, $sql);
            header("Location: ../login.php?success=created_user");
        } catch (\Throwable $th) {
            header("Location: ../signup.php?err_db=dupe_u");
        }
    } else {
        header("Location: ../signup.php?" . "fname=$first_name&" . "lname=$last_name&" . rtrim($error, '&'));
    }
}
