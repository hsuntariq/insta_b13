<?php 
    include './config.php';
    $select = "SELECT posts.id AS post_id,posts.caption,posts.content,users.id AS user_id,users.fullname,users.username FROM posts JOIN users ON posts.user_id = users.id ORDER BY(posts.id) DESC";
    $result = mysqli_query($connection,$select);
    while($row = mysqli_fetch_assoc($result)){
?>



<div class="card my-4 shadow col-xl-5 col-lg-6  mx-auto">
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
            <div class="bi bi-heart"></div>
            <div class="bi bi-chat"></div>
            <div class="bi bi-share"></div>
        </div>
        <div class="bi bi-bookmark"></div>
    </div>
    <h6 class="m-0  p-2">302 likes</h6>
    <p class="text-secondary text-sm p-2">
        <span class="fw-bold text-dark"><?php echo $row['username'] ?></span>
        <?php echo $row['caption'] ?>
    </p>
</div>

<?php 
    }
?>