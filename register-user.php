<?php
    session_start();
    include './config.php';
    // get the values from the input
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $username= $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($password == $confirm_password){
        // write the query
            $insert = "INSERT INTO users (email,fullname,username,password) VALUES ('{$email}','{$fullname}','{$username}','{$password}')";
            // execute the query
            mysqli_query($connection,$insert);
            $_SESSION['username'] = $username;
            header("Location: $base_url/home.php");
        }else{
        header("Location: $base_url/sign-up.php");
        $_SESSION['unmatched_password'] = 'Passwords do not match';
    }


?>