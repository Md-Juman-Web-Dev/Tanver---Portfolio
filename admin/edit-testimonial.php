<?php
include './include/header.php';
$id = $_REQUEST['id'];

$query = "SELECT * FROM testimonial WHERE id='$id'";
$result = mysqli_query($conn, $query);
$review = mysqli_fetch_assoc($result);
?>

<div class="container">
    <a href="./all-testimonial.php" class="btn btn-primary btn-sm mb-3">Back</a>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Upload Testimonial
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" method="post" action="../controller/UpdateTestimonial.php">
                        <h3>Client Informations</h3>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        </div>
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <div class="form-group">
                            <label for="name">Client Name <span class="text-danger">*</span></label>
                            <input value="<?= $review['name'] ?>" type="text" id="name" name="name" class="form-control">
                        </div>
                        <span class="text-danger">
                            <?= $_SESSION['name_error'] ?? null ?>
                        </span>
                        <div class="form-group">
                            <label for="occu">Client Occupation <span class="text-danger">*</span></label>
                            <input value="<?= $review['occu'] ?>" type="text" id="occu" name="occu" class="form-control">
                        </div>
                        <span class="text-danger">
                            <?= $_SESSION['occu_error'] ?? null ?>
                        </span>

                        <div class="form-group">
                            <label for="review">Client Review <span class="text-danger">*</span></label>
                            <textarea name="review" id="review" class="form-control"><?= $review['review'] ?></textarea>
                        </div>
                        <span class="text-danger">
                            <?= $_SESSION['review_error'] ?? null ?>
                        </span>

                        <div class="form-group">
                        <label >Client Image :</label>
                        <label class="d-block" for="profile_img_input"><img src="../uploads/clients/<?= $review['img'] ?>" alt="" class="img-fluid rounded-circle profile_image"
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
unset($_SESSION['success']);
unset($_SESSION['errors']);
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