<?php
session_start();
include "database.php";


if(isset($_POST["submit"])){

    $email = filter_input(INPUT_POST, 'user_email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'user_pwd', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $_SESSION["user_email"] = $email;


    $query = "SELECT * FROM user WHERE user_email='$email' AND user_pwd='$password'";
    $result = mysqli_query($mysqli, $query);
    $count = mysqli_num_rows($result);
    

if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['user_id']; // Fetch the id from the query result

        $_SESSION['user_id'] = $id; // Store the id in a session variable
        $_SESSION['login_success'] = true;

    if(isset($_SESSION['user_id'])) {
    header("location: dashboard.php?id=$id");
    exit();
    }else{
    header("location: index.php?error=invalid");
    }
} else {
        header("Location: index.php?error=invalid");
    }
}

