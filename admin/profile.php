<?php
include_once "./include/header.php";
?>

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Profile</h1>


<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card rouded-0 shadow">
                <div class="card-header">Profile Info</div>
                <div class="card-body">
    
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="d-block" for="profile_img_input"><img src="https://api.dicebear.com/9.x/initials/svg?seed=<?= $_SESSION['auth']['fname'] ?>" alt="" class="img-fluid rounded-circle profile_image" style="width:300px;height:300px;object-fit:cover;object-position:center;"></label>
                                <input class="d-none" type="file" id="profile_img_input">
                            </div>
                            <div class="col-lg-12">
                                <input value="<?= $_SESSION['auth']['fname'] ?>" type="text" class="form-control my-3" name="first_name" placeholder="First Name">
                                <input value="<?= $_SESSION['auth']['email'] ?>" type="text" class="form-control my-3" name="email" placeholder="Email Address">
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
                        <input type="text" class="form-control my-3" name="confirm_password" placeholder="Confirm Password">
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
?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('#profile_img_input').change(function() {
            let file = $(this)[0].files[0]
            let url = URL.createObjectURL(file)
            $('.profile_image').attr('src', url)


        })

    })
</script>