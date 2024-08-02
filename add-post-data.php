<?php 
    session_start();
    include './config.php';

    // get the current page address
    $current_page = $_SERVER['HTTP_REFERER'];


    $caption = $_POST['caption'];
    $user_id = $_SESSION['user_id'];
    // name for the database
    $filename = $_FILES['content']['name'];
    // name for the server
    $tmp_name = $_FILES['content']['tmp_name'];
    // move your files into the posts folder
    move_uploaded_file($tmp_name, './posts/' . $filename);
    // move your data into the backend
    $insert = "INSERT INTO posts (caption,content,user_id) VALUES ('{$caption}','{$filename}',$user_id)";
    mysqli_query($connection,$insert);
    header("Location: $current_page");


?>