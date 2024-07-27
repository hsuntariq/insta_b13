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

    <h1>
        Salam <?php echo $_SESSION['username'] ?>
    </h1>


</body>

</html>