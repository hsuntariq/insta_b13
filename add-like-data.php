<?php 
    session_start();
    include './config.php';
    $post_id = $_POST['post_id'];
    $user_id = $_SESSION['user_id'];

    $checkLike = "SELECT * FROM likes WHERE post_id = $post_id AND user_id = $user_id";
    $result = mysqli_query($connection,$checkLike);
    if(mysqli_num_rows($result) > 0){
        $delete = "DELETE FROM likes WHERE post_id = $post_id AND user_id = $user_id";
        mysqli_query($connection,$delete);
    }else{   
        $insert = "INSERT INTO likes (post_id,user_id) VALUES ($post_id,$user_id)";
        mysqli_query($connection,$insert);
    }

    header("Location: {$_SERVER['HTTP_REFERER']}")
?>