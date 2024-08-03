<?php 
    include './config.php';
    $select = "SELECT posts.id AS post_id,posts.caption,posts.content,users.id AS user_id,users.fullname,users.username FROM posts JOIN users ON posts.user_id = users.id ORDER BY(posts.id) DESC";
    $result = mysqli_query($connection,$select);
    while($row = mysqli_fetch_assoc($result)){
?>



<div class="card my-4 my-card shadow col-xl-6 col-lg-10  mx-auto">

    <div class="d-flex p-4 justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-3">
            <img width="50px" height="50px" class="rounded-circle"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQdztTDcpZ2pFqwWDYwSXbvZq5nzJYg5cn8w&s"
                alt="">
            <div class="">
                <h5 class="m-0 p-0"><?php echo $row['username'] ?></h5>
                <p class="text-secondary m-0 p-0"><?php echo $row['fullname'] ?></p>
            </div>
        </div>
        <div class="icon">
            <i class="bi bi-three-dots"></i>
        </div>
    </div>
    <div class="post">

        <img src="./posts/<?php echo $row['content']?>" width="100%" height="400px" style="object-fit:contain" alt="">
    </div>
    <div class="d-flex p-2 justify-content-between align-items-center  fs-4">
        <div class="d-flex gap-3">
            <form action="./add-like-data.php" method="POST">
                <input type="hidden" name="post_id" value="<?php echo $row['post_id'] ?>">



                <?php 
                    $user_id = $_SESSION['user_id'];    
                    $checkLike = "SELECT * FROM likes WHERE post_id = {$row['post_id']} AND user_id = $user_id";
                    $result1 = mysqli_query($connection,$checkLike);
                     if(mysqli_num_rows($result1) > 0){
                        echo "<button class='bi bi-heart-fill text-danger border-0 bg-transparent'></button>";
                     }else{
                        echo "<button class='bi bi-heart border-0 bg-transparent'></button>";
                     }
                ?>



            </form>
            <div class="bi bi-chat"></div>
            <div class="bi bi-share"></div>
        </div>
        <div class="bi bi-bookmark"></div>
    </div>
    <h6 class="m-0  p-2">302 likes</h6>
    <p class="text-secondary text-sm p-2 m-0">
        <span class="fw-bold text-dark"><?php echo $row['username'] ?></span>
        <?php echo $row['caption'] ?>
    </p>
    <p class="text-secondary m-0 px-2">
        <?php 

            $count = "SELECT COUNT(id) AS total FROM comments WHERE post_id = {$row['post_id']}";
            $res = mysqli_query($connection,$count);
            $row2 = mysqli_fetch_assoc($res);

            if($row2['total'] > 0){
                echo "View all  {$row2['total']}  comments";
            }else{
                echo "No comments";
            }

        ?>

    </p>
    <form autocomplete="off" action="./add-comment-data.php"
        class=" d-flex border border-top-0 mb-2 rounded-3 border-start-0 border-end-0 border-top-3" method="POST">
        <input type="hidden" name="post_id" value="<?php echo $row['post_id'] ?>" id="">
        <input style="box-shadow: none;" type="text" name="comment" class="form-control border-0"
            placeholder="Add a comment...">
        <button class="bg-transparent border-0 text-info">Post</button>
    </form>
</div>

<?php 
    }
?>