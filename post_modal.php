<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create a Post</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body fs-6">
                <form action="./add-post-data.php" method="post" enctype="multipart/form-data">
                    <label for="">Caption</label>
                    <input type="text" name="caption" class="form-control">

                    <label for="">Post</label>
                    <input type="file" name="content" class="form-control image-input">
                    <img src="" style="object-fit: contain;" width="200px" height="200px"
                        class="preview-image my-3 mx-auto border" alt="">
                    <video src="" controls style="object-fit: contain;" width="200px" height="200px"
                        class="preview-video my-3 mx-auto border"></video>
                    <button class="btn btn-success w-100 my-2">
                        Add Post
                    </button>
                </form>
            </div>

        </div>
    </div>



</div>