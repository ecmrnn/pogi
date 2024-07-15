<?php

require("../conn.php");

if (isset($_POST["submit"])) {
    session_start();
    $first_name = ucwords(strtolower(trim($_POST["first_name"])));
    $last_name = ucwords(strtolower(trim($_POST["last_name"])));
    $username = $_SESSION["username"];
    $password = trim($_POST["password"]);
    $confirm_password = trim($_POST["confirm_password"]);
    $address = empty($_POST["address"]) ? null : ucwords(strtolower(trim($_POST["address"])));
    $email = empty($_POST["email"]) ? null : trim($_POST["email"]);
    $contact_number = empty($_POST["contact_number"]) ? null : ltrim($_POST["contact_number"], '0');
    $error = "";

    // Validate first name
    if (!empty($first_name)) {
        $_SESSION["first_name"] = $first_name;
    } else {
        $error = $error . "err_f=not_null&";
    }

    // Validate last name
    if (!empty($last_name)) {
        $_SESSION["last_name"] = $last_name;
    } else {
        $error = $error . "err_l=not_null&";
    }

    // Validate password
    if (!empty($password)) {
        if (strlen($password) < 8) {
            $error = $error . "err_p=too_short&";
        }
        if (strcmp($password, $confirm_password) != 0) {
            $error = $error . "err_cp=not_equal&";
        }
        $password = md5($password);
    }

    // Validate contact number
    if (!empty($contact_number)) {
        if (!is_numeric($contact_number)) {
            $error = $error . "err_cn=nan&";
        }
        else if (strlen($contact_number) != 10 || ($contact_number[0] != 8 && $contact_number[0] != 9)) {
            $error = $error . "err_cn=invalid_format&";
        }
    }

    // Validate email
    if (!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = $error . "err_em=invalid_format&";
        }
    }
    
    if (empty($error)) {
        empty($password)
            ? $sql = "UPDATE users
            SET first_name='$first_name', last_name='$last_name', username='$username', address='$address', email='$email', contact_number='$contact_number'
            WHERE username='$username'" 
            : $sql = "UPDATE users
            SET first_name='$first_name', last_name='$last_name', username='$username', password='$password', address='$address', email='$email', contact_number='$contact_number'
            WHERE username='$username'" 
            ;
        
        try {
            mysqli_query($conn, $sql);
            header("Location: ../guest/settings.php?success=updated_user");
        } catch (\Throwable $th) {
            header("Location: ../guest/settings.php?err_db=unknown");
        }
    } else {
        header("Location: ../guest/settings.php?" . rtrim($error, '&'));
    }
}