<?php
    session_start();
    include './config.php';
    $email =$_POST['email'];
    $password =$_POST['password'];

    $check = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'";
    $result =mysqli_query($connection,$check);
    // check if data exists/match
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
       header("Location: $base_url/home.php");
        $_SESSION['username'] = $row['username'];
    }else{
        $_SESSION['invalid_user'] = 'Invalid Credentials';
        header("Location: $base_url");
    }


?>