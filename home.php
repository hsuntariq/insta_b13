<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include  './boot_css.php' ?>
    <title>Document</title>
</head>

<body>

    <?php 
        session_start();
        include './config.php';
        if(!isset($_SESSION['username'])){
            header("Location: $base_url/sign-up.php");
        }
     ?>


    <div class="row">
        <div class="col-xl-2 col-lg-3">
            <?php include './sidebar.php' ?>
        </div>
        <div class="col-xl-7 col-lg-6" style="height: 99.5vh;overflow-y:scroll">
            <?php include './posts.php' ?>
            <?php include './posts.php' ?>
            <?php include './posts.php' ?>
            <?php include './posts.php' ?>
        </div>
        <div class="col-xl-3 col-lg-3"></div>
    </div>



    <!-- <a href="./logout.php" class="btn btn-danger">
        logout
    </a> -->


    <?php 
            include './boot_js.php'
        ?>


</body>

</html>