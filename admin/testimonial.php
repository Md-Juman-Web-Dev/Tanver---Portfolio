<?php
include './include/header.php';

?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Upload Testimonial
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" method="post" action="../controller/InsertTestimonial.php">
                        <h3>Client Informations</h3>
                        <div class="text-end">
                            <a href="./all-testimonial.php">
                                <button type="button" class="btn btn-warning btn-sm">All Reviews</button>
                            </a>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                        <div class="form-group">
                            <label for="name">Client Name <span class="text-danger">*</span></label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <span class="text-danger">
                            <?= $_SESSION['name_error'] ?? null ?>
                        </span>
                        <div class="form-group">
                            <label for="occu">Client Occupation <span class="text-danger">*</span></label>
                            <input type="text" id="occu" name="occu" class="form-control">
                        </div>
                        <span class="text-danger">
                            <?= $_SESSION['occu_error'] ?? null ?>
                        </span>

                        <div class="form-group">
                            <label for="review">Client Review <span class="text-danger">*</span></label>
                            <textarea name="review" id="review" class="form-control"></textarea>
                        </div>
                        <span class="text-danger">
                            <?= $_SESSION['review_error'] ?? null ?>
                        </span>

                        <div class="form-group">
                        <label >Client Image :</label>
                        <label class="d-block" for="profile_img_input"><img src="#" alt="" class="img-fluid rounded-circle profile_image"
                                        style="width:300px;height:300px;object-fit:cover;object-position:center;"></label>
                        <input name="profile_img" class="d-none" type="file" id="profile_img_input">
                        </div>
                    </form>
                    <span class="text-success">
                        <?= $_SESSION['success'] ?? null ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include './include/footer.php';
?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function () {
        $('#profile_img_input').change(function () {
            let file = $(this)[0].files[0]
            let url = URL.createObjectURL(file)
            $('.profile_image').attr('src', url)


        })

    })
</script>