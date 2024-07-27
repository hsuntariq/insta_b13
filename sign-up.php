<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php' ?>
    <style>
    .text-sm {
        font-size: 0.8rem;
    }
    </style>
    <title>Sign . Instagram</title>
</head>

<body>

    <?php 
        session_start();
        include './config.php';
        if(isset($_SESSION['username'])){
            header("Location: $base_url/home.php");
        }



    ?>


    <div class="col-lg-3 border mx-auto p-5">
        <form action="./register-user.php" method="POST">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/800px-Instagram_logo.svg.png?20160616034027"
                width="50%" class="d-block mx-auto" alt="">
            <p class="text-seconadary text-center fw-bold">
                Sign up to see photos and videos from your friends.
            </p>
            <div class="d-flex align-items-center gap-4 justify-content-center">
                <hr class="w-25">
                <h6 class="m-0 p-0">OR</h6>
                <hr class="w-25">
            </div>
            <input type="text" name="email" placeholder="Mobile number or email " class="form-control my-2">
            <input type="text" name="fullname" placeholder="Full Name" class="form-control my-2">
            <input type="text" name="username" placeholder="UserName" class="form-control my-2">
            <input type="password" name="password" placeholder="Password" class="form-control my-2">
            <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control my-2">
            <p class="text-sm text-center">
                People who use our service may have uploaded your contact information to Instagram. Learn More
            </p>
            <p class="text-sm text-center">
                By signing up, you agree to our Terms , Privacy Policy and Cookies Policy .
            </p>
            <button class="btn w-100 my-2 btn-info">
                Sign Up
            </button>
        </form>
    </div>
    <div class="border col-lg-3 mx-auto  my-4 p-4 text-center ">
        <p class="m-0 p-0">
            Already have an account ? <a href="./index.php" class="text-info text-decoration-none fw-bold">Log
                in</a>
        </p>
    </div>
</body>

</html>