<?php
include './include/header.php';
include '../database/db.php';
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
                        <form action="../controller/UpdateBanner.php" method="post">
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