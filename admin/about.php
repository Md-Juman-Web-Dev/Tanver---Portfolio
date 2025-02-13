<?php
include './include/header.php';

$query = "SELECT * FROM about WHERE id='1'";
$result = mysqli_query($conn, $query);
$res = mysqli_fetch_assoc($result);
?>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card rounded-0 shadow">
                    <div class="card-header">Update About Details</div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="../controller/UpdateAbout.php" method="post">
                            <div class="form-group">
                                <label for="about">About Me</label>
                                <textarea name="about" id="about" class="form-control"><?= $res['aboutme'] ?></textarea>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>About Image</label>
                                        <label class="d-block" for="profile_img_input"><img src="<?= !empty($res['img']) ? '../uploads/users/' . $res['img'] : 'https://api.dicebear.com/9.x/initials/svg?seed='.$name; ?>" alt="" class="img-fluid rounded-circle profile_image" style="width:258px;height:258px;object-fit:cover;object-position:center;"></label>
                                        <input name="profile_img" class="d-none" type="file" id="profile_img_input">
                                        <span class="text-danger">
                                            <?= $_SESSION['errors']['profile_image_error'] ?? null ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="skill">Skill Title</label>
                                        <input value="<?= $res['stitle'] ?>" type="text" name="skill" id="skill" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="skill_desc">Skill Description</label>
                                        <input value="<?= $res['sdesc'] ?>" type="text" name="skill_desc" id="skill_desc" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="birthdate">Date of Birth</label>
                                        <input value="<?= $res['birth_date'] ?>" type="date" name="birth" id="birthdate" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="age">Age</label>
                                        <input value="<?= $res['age'] ?>" type="text" name="age" id="age" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="website">Website</label>
                                        <input value="<?= $res['website'] ?>" type="text" name="website" id="website" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="degree">Degree</label>
                                        <input value="<?= $res['degree'] ?>" type="text" name="degree" id="degree" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="phone">Phone</label>
                                        <input value="<?= $res['phone'] ?>" type="number" name="phone" id="phone" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="email">Email</label>
                                        <input value="<?= $res['email'] ?>" type="email" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="city">City</label>
                                        <input value="<?= $res['city'] ?>" type="text" name="city" id="city" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="freelance">Freelance</label>
                                        <input value="freelance" type="text" name="freelance" id="freelance" class="form-control">
                                    </div>
                                    
                                </div>
                                <label for="bdesc">Bottom Description</label>
                                <textarea name="bdesc" id="bdesc" class="form-control"><?= $res['bdesc'] ?></textarea>
                                <span class="text-danger">
                                    <?= $_SESSION['errors']['skill_error'] ?? null ?>
                                </span>
                                <span class="text-success">
                                    <?= $_SESSION['success'] ?? null ?>
                                </span>

                            </div>
                            <button class="btn btn-primary btn-sm mt-2" type="submit">Update</button>
                        </form>
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
    $(document).ready(function() {
        $('#profile_img_input').change(function() {
            let file = $(this)[0].files[0]
            let url = URL.createObjectURL(file)
            $('.profile_image').attr('src', url)


        })

    })
</script>