<?php
    session_start();
    include './config.php';
    // get the values from the input
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $username= $_POST['username'];
    $password = $_POST['password'];

    // write the query
    $insert = "INSERT INTO users (email,fullname,username,password) VALUES ('{$email}','{$fullname}','{$username}','{$password}')";

    // execute the query
    mysqli_query($connection,$insert);


    $_SESSION['username'] = $username;



    header("Location: $base_url/home.php");


?>