<?php
    session_start();
    include './config.php';
    $user_id = $_SESSION['user_id'];
    $comment = $_POST['comment'];
    $post_id = $_POST['post_id'];


    $insert = "INSERT INTO comments (comment,user_id,post_id) VALUES ('{$comment}',$user_id,$post_id)";
    mysqli_query($connection,$insert);
    header("Location: {$_SERVER['HTTP_REFERER']}")


?>