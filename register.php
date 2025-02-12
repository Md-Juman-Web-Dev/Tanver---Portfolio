<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tanvir Shawon -Admin || Nexgen Media </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./admin/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="./admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./admin/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="./admin/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./admin/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="./admin/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="./admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="./admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="./admin/assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="./admin/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <a href="index.php" class="navbar-brand brand-logo">NexGen Media</a>
                            </div>
                            <h4>New here?</h4>
                            <h6 class="fw-light">Signing up is easy. It only takes a few steps</h6>
                            <form action="./controller/RegisterUser.php" method="post" class="pt-3">
                                <div class="form-group">
                                    <input name="fname" type="text" class="form-control form-control-lg"
                                        id="exampleInputUsername1" placeholder="Username">
                                    <span class="teext-danger">
                                        <?= $_SESSION['errors']['fname_error'] ?? null ?>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control form-control-lg"
                                        id="exampleInputEmail1" placeholder="Email">
                                        <span class="teext-danger">
                                        <?= $_SESSION['errors']['email_error'] ?? null ?>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <input name="password" type="password" class="form-control form-control-lg"
                                        id="exampleInputUsername1" placeholder="Username">
                                        <span class="teext-danger">
                                        <?= $_SESSION['errors']['fpassword_error'] ?? null ?>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <input name="confirm_password" type="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Confirm Password">
                                </div>
                                <div class="mt-3 d-grid gap-2">
                                    <button class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn"
                                        type="submit">SIGN UP</button>
                                </div>
                                <div class="text-center mt-4 fw-light"> Already have an account? <a href="login.php"
                                        class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="./admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="./admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./admin/assets/js/off-canvas.js"></script>
    <script src="./admin/assets/js/template.js"></script>
    <script src="./admin/assets/js/settings.js"></script>
    <script src="./admin/assets/js/hoverable-collapse.js"></script>
    <script src="./admin/assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
<?php
session_unset();
?>