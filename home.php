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

        </div>
        <div class="col-xl-3 col-lg-3 my-3">
            <div class="d-flex gap-3">
                <img src="https://cdn.pixabay.com/photo/2014/03/25/16/54/user-297566_640.png" width="50px" height="50px"
                    class="rounded-circle border" alt="">
                <div class="">

                    <?php 
                    echo "<h5 class='text-capitalize m-0'>{$_SESSION['username']}</h5>";
                    echo "<p class='text-secondary m-0'>{$_SESSION['fullname']}</p>"
                    ?>
                </div>
            </div>
        </div>
    </div>



    <!-- <a href="./logout.php" class="btn btn-danger">
        logout
    </a> -->


    <?php 
            include './boot_js.php'
        ?>


    <script>
    let previewImage = document.querySelector('.preview-image')
    let previewVideo = document.querySelector('.preview-video')
    let imageInput = document.querySelector('.image-input')
    previewImage.style.display = 'none'
    previewVideo.style.display = 'none'

    imageInput.addEventListener('input', (e) => {
        const file = e.target.files[0]
        const contentURL = URL.createObjectURL(file)
        if (file.type.startsWith('image')) {
            previewImage.src = contentURL;
            previewImage.style.display = 'block'
        } else if (file.type.startsWith('video')) {
            previewVideo.src = contentURL;
            previewVideo.style.display = 'block'

        }
    })
    </script>



</body>

</html>