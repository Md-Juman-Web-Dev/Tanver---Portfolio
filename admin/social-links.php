<?php
include './include/header.php';

$query = "SELECT * FROM social_links WHERE id='1'";
$result = mysqli_query($conn, $query);
$res = mysqli_fetch_assoc($result);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card rounded-0 shadow">
                <div class="card-header">Update Links</div>
                <div class="card-body">
                    <form action="../controller/SocialLinks.php" method="post">
                        <div class="form-group">
                            <label for="twitter">X / Twitter</label>
                            <input value="<?= $res['twitter'] ?>" type="text" id="twitter" name="twitter" class="form-control">
                        </div>
                        <span class="text-danger">
                            <?= $_SESSION['errors']['f_error'] ?? null ?>
                        </span>
                        <div class="form-group">
                            <label for="facebbok">Facebook</label>
                            <input value="<?= $res['facebook'] ?>" type="text" id="facebook" name="facebook" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input value="<?= $res['instagram'] ?>" type="text" id="instagram" name="instagram" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="skype">Skype</label>
                            <input value="<?= $res['skype'] ?>" type="text" id="skype" name="skype" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="linkedin">Linkedin</label>
                            <input value="<?= $res['linkedin'] ?>" type="text" id="linkedin" name="linkedin" class="form-control">
                        </div>
                        <span class="text-success">
                            <?= $_SESSION['success'] ?? null ?>
                        </span>
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include './include/footer.php';
unset($_SESSION['errors']['f_error']);
unset($_SESSION['success']);
?>