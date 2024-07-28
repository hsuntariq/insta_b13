<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php' ?>
    <style>
    .mobile-image {
        top: 3%;
        right: 12%;
        width: 55%;
        transition: all 0.6s;
    }
    </style>
    <title>Document</title>
</head>

<body>


    <?php 
        session_start();
        include './config.php';
        if(isset($_SESSION['username'])){
            header("Location: $base_url/home.php");
        }



    ?>



    <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10 mx-auto d-flex justify-content-between" style="height: 100vh;">
        <div class="row w-100 align-items-center">
            <div class="col-lg-6 ">
                <div class="images position-relative">
                    <img width="100%" class=""
                        src="https://static.cdninstagram.com/images/instagram/xig/homepage/phones/home-phones.png?__makehaste_cache_breaker=HOgRclNOosk"
                        alt="">


                    <img width="" src="./images/screenshot1.png" class=" mobile-image position-absolute" alt="">
                    <img width="" src="./images/screenshot2.png" class=" mobile-image position-absolute" alt="">
                    <img width="" src="./images/screenshot3.png" class=" mobile-image position-absolute" alt="">
                    <img width="" src="./images/screenshot4.png" class=" mobile-image position-absolute" alt="">
                </div>


            </div>
            <div class="col-lg-6">
                <form action="./log-user.php" method="POST" class="border p-5">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/800px-Instagram_logo.svg.png?20160616034027"
                        width="100%" class="d-block mx-auto" alt="">
                    <input name="email" type="text" placeholder="Phone number, username, or email"
                        class="form-control my-2">
                    <input name="password" type="text" placeholder="Password" class="form-control my-2">
                    <button class="btn btn-info w-100 my-2">Login</button>
                    <div class="d-flex align-items-center gap-4 justify-content-center">
                        <hr class="w-25">
                        <h6 class="m-0 p-0">OR</h6>
                        <hr class="w-25">
                    </div>

                    <?php 
                        if(isset($_SESSION['invalid_user'])){
                    ?>

                    <p class="text-danger fw-bold text-center">
                        <?php echo $_SESSION['invalid_user'] ?>
                    </p>

                    <?php 
                        }

                        unset($_SESSION['invalid_user']);

                        ?>


                </form>

                <div class="border my-4 p-4 text-center ">
                    <p class="m-0 p-0">
                        Dont have an account ? <a href="./sign-up.php"
                            class="text-info text-decoration-none fw-bold">Sign
                            up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <script>
    let images = document.querySelectorAll('.mobile-image');
    let number = 0
    setInterval(() => {
        console.log(number)
        images.forEach((item, index) => {
            item.style.opacity = '0'
        })
        images[number].style.opacity = '1'
        number++
        if (number >= images.length) {
            number = 0
        }

    }, 1500)
    </script>


</body>

</html>