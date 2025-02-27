<?php
include './include/header.php';
$query = "SELECT * FROM banner WHERE id='1'";
$result = mysqli_query($conn, $query);
$res = mysqli_fetch_assoc($result);
?>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card rounded-0 shadow">
                    <div class="card-header">Update Banner</div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="../controller/UpdateBanner.php" method="post">
                            <div class="form-group">
                                <label for="name">Enter Name</label>
                                <input value="<?= $res['name'] ?>" type="text" id="name" name="name" class="form-control">
                                <span class="text-danger">
                                    <?= $_SESSION['errors']['name_error'] ?? null ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="skill">Enter Skills</label>
                                <input value="<?= $res['skills'] ?>" type="text" id="name" name="skill" class="form-control">
                                <span>Example : Designer, Developer, Freelancer, Photographer....</span>
                                <span class="text-danger d-block">
                                    <?= $_SESSION['errors']['skill_error'] ?? null ?>
                                </span>
                                <span class="text-success d-block">
                                    <?= $_SESSION['success'] ?? null ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="cta">Cta Action</label>
                                <input value="<?= $res['cta_link'] ?>" type="text" class="form-control" name="cta_link" id="cta">
                            </div>


                            <div class="form-group">
                            <label class="d-block" for="profile_img_input"><img src="<?= '../uploads/banners/'. $res['img']?>" alt="cover" class="img-fluid profile_image"
                                        style="width:100%;height:100%;object-fit:cover;object-position:center;"></label>
                                <input name="banner_img" class="d-none" type="file" id="profile_img_input">
                                <span class="text-danger">
                                    <?= $_SESSION['errors']['profile_image_error'] ?? null?>
                                </span>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include './include/footer.php';
unset($_SESSION['errors']['name_error'], $_SESSION['errors']['skill_error']);
unset($_SESSION['success']);
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