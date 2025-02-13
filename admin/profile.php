<?php
include_once "./include/header.php";
include_once '../database/db.php';

$query = "SELECT img FROM about WHERE id='1'";
$result = mysqli_query($conn, $query);
$res = mysqli_fetch_assoc($result);

$id= $_SESSION['auth']['id'];
$admin_query = "SELECT * FROM admin WHERE id='$id'";
$admin_result = mysqli_query($conn, $admin_query);
$admin_row = mysqli_fetch_assoc($admin_result);

$name = $_SESSION['auth']['fname'];
?>

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Profile</h1>


<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card rouded-0 shadow">
                <div class="card-header">Profile Info</div>
                <div class="card-body">

                    <form enctype="multipart/form-data" action="../controller/ProfileUpdate.php" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="d-block" for="profile_img_input"><img src="<?= !empty($admin_row['img']) ? '../uploads/admins/' . $admin_row['img'] : 'https://api.dicebear.com/9.x/initials/svg?seed='.$name; ?>" alt="" class="img-fluid rounded-circle profile_image"
                                        style="width:300px;height:300px;object-fit:cover;object-position:center;"></label>
                                <input name="profile_img" class="d-none" type="file" id="profile_img_input">
                                <span class="text-danger">
                                    <?= $_SESSION['errors']['profile_image_error'] ?? null?>
                                </span>
                            </div>
                            <div class="col-lg-12">
                                <input value="<?= $_SESSION['auth']['fname'] ?>" type="text" class="form-control my-3"
                                    name="first_name" placeholder="First Name">
                                    <span class="text-danger">
                                    <?= $_SESSION['errors']['fname_error'] ?? null?>
                                </span>
                                <input value="<?= $_SESSION['auth']['email'] ?>" type="text" class="form-control my-3"
                                    name="email" placeholder="Email Address">
                                    <span class="text-danger">
                                    <?= $_SESSION['errors']['email_error']?? null?>
                                </span>
                                <span class="text-success">
                                    <?= $_SESSION['success']?? null?>
                                </span>
                                <button class="btn btn-primary btn-sm">Update Profile</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-2">
            <div class="card rouded-0 shadow">
                <div class="card-header">Update Password</div>
                <div class="card-body">
                    <form action="../controller/PasswordUpdate.php" method="POST">
                        <input type="text" class="form-control my-3" name="old_password" placeholder="Old Password">
                        <span class="text-danger">
                            <?= $_SESSION['errors']['old_password'] ?? null ?>
                        </span>
                        <input type="text" class="form-control my-3" name="new_password" placeholder="New Password">
                        <span class="text-danger">
                            <?= $_SESSION['errors']['password'] ?? null ?>
                        </span>
                        <input type="text" class="form-control my-3" name="confirm_password"
                            placeholder="Confirm Password">
                        <span class="text-danger">
                            <?= $_SESSION['errors']['confirm_password'] ?? null ?>
                        </span>
                        <button class="btn btn-primary btn-sm">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php
include_once "./include/footer.php";
unset($_SESSION['errors']);
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