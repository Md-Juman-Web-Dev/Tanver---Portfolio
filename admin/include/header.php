<?php
session_start();
if (!isset($_SESSION["auth"])){
  session_unset();
  session_destroy();
  header("Location: ../index.php");
  exit();
}

$name = $_SESSION['auth']['fname'];
include '../database/db.php';
$query = "SELECT * FROM about WHERE id='1'";
$result = mysqli_query($conn, $query);
$res = mysqli_fetch_assoc($result);


//*Query Admin
$id= $_SESSION['auth']['id'];
$admin_query = "SELECT * FROM admin WHERE id='$id'";
$admin_result = mysqli_query($conn, $admin_query);
$admin_row = mysqli_fetch_assoc($admin_result);

//*Query Stats
$stats_query = "SELECT * FROM stats WHERE id='1'";
$stats_result = mysqli_query($conn, $stats_query);
$stats_res = mysqli_fetch_assoc($stats_result);

//*Query Skill
$skill_query = "SELECT * FROM skills WHERE id='1'";
$skill_result = mysqli_query($conn, $skill_query);
$skill_res = mysqli_fetch_assoc($skill_result);


//*project query
$project_query = "SELECT * FROM portfolio WHERE id='$id'";
$project_result = mysqli_query($conn, $project_query);
$project_row = mysqli_fetch_assoc($project_result);
print_r($project_row);

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Admin Tanvir - NexGen</title>
   <!-- plugins:css -->
   <link rel="stylesheet" href="assets/vendors/feather/feather.css">
   <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
   <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
   <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="assets/vendors/typicons/typicons.css">
   <link rel="stylesheet" href="assets/vendors/simple-line-icons/css/simple-line-icons.css">
   <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
   <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
   <link rel="stylesheet" type="text/css"
      href="https://unpkg.com/file-upload-with-preview@4.0.2/dist/file-upload-with-preview.min.css">
   <script src="https://unpkg.com/file-upload-with-preview@4.0.2/dist/file-upload-with-preview.min.js"></script>
   <!-- endinject -->
   <!-- Plugin css for this page -->
   <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
   <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css">
   <!-- End plugin css for this page -->
   <!-- inject:css -->
   <link rel="stylesheet" href="assets/css/style.css">
   <!-- endinject -->
   <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
</head>

<body class="with-welcome-text">
   <div class="container-scroller">
      <!-- partial:partials/_navbar.php -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
         <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <div class="me-3">
               <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                  <span class="icon-menu"></span>
               </button>
            </div>
            <div>
               <!-- <a class="navbar-brand brand-logo" href="index.php">
              <img src="assets/images/logo.png" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.php">
              <img src="assets/images/logo.png" alt="logo" />
            </a> -->
               <a href="index.php" class="navbar-brand brand-logo">NexGen</a>
            </div>
         </div>
         <div class="navbar-menu-wrapper d-flex align-items-top">
            <ul class="navbar-nav">
               <li class="nav-item fw-semibold d-none d-lg-block ms-0">
                  <h1 class="welcome-text">Good Morning, <span
                        class="text-black fw-bold"><?= $_SESSION['auth']['fname'] ?></span></h1>
               </li>
            </ul>
            <ul class="navbar-nav ms-auto">
               <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                  <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                     <img style="width: 30px; height: 30px;" class="img-xs rounded-circle"
                        src="<?= !empty($admin_row['img']) ? '../uploads/admins/' . $admin_row['img'] : 'https://api.dicebear.com/9.x/initials/svg?seed='.$name; ?>"
                        alt="Profile image"> </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                     <div class="dropdown-header text-center">
                        <img style="width: 150px; height: 150px;" class="img-md rounded-circle"
                           src="<?= !empty($admin_row['img']) ? '../uploads/admins/' . $admin_row['img'] : 'https://api.dicebear.com/9.x/initials/svg?seed='.$name; ?>"
                           alt="Profile image">
                        <p class="mb-1 mt-3 fw-semibold"><?= $_SESSION['auth']['fname'] ?></p>
                        <p class="fw-light text-muted mb-0"><?= $_SESSION['auth']['email'] ?></p>
                     </div>
                     <a href="./profile.php" class="dropdown-item"><i
                           class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile</a>
                     <a href="../controller/LogoutUser.php" class="dropdown-item"><i
                           class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                  </div>
               </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
               data-bs-toggle="offcanvas">
               <span class="mdi mdi-menu"></span>
            </button>
         </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
         <!-- partial:partials/_sidebar.php -->
         <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
               <li class="nav-item">
                  <a class="nav-link" href="index.php">
                     <i class="mdi mdi-grid-large menu-icon"></i>
                     <span class="menu-title">Dashboard</span>
                  </a>
               </li>
               <li class="nav-item nav-category">UI Elements</li>
               <li class="nav-item">
                  <a class="nav-link" href="./banner.php">
                     <i class="menu-icon mdi mdi-floor-plan"></i>
                     <span class="menu-title">Banner</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="collapse" href="#about" aria-expanded="false"
                     aria-controls="tables">
                     <i class="menu-icon mdi mdi-card-text-outline"></i>
                     <span class="menu-title">About</span>
                     <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="about">
                     <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="./about.php">About</a></li>
                     </ul>
                  </div>
                  <div class="collapse" id="about">
                     <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="./stats.php">Stats</a></li>
                     </ul>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="./skills.php">
                     <i class="menu-icon mdi mdi-chart-line"></i>
                     <span class="menu-title">Skills</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="./client.php" ">
                <i class=" menu-icon mdi mdi-table"></i>
                     <span class="menu-title">Client</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="./social-links.php"">
                <i class=" menu-icon mdi mdi-layers-outline"></i>
                     <span class="menu-title">Social Links</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="./protfolio.php">
                     <i class="menu-icon mdi mdi-account-circle-outline"></i>
                     <span class="menu-title">Protfoilo</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="./services.php">
                     <i class="menu-icon mdi mdi-layers-outline"></i>
                     <span class="menu-title">Service</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="./testimonial.php">
                     <i class="menu-icon mdi mdi-layers-outline"></i>
                     <span class="menu-title">Testimonial</span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="./cv.php">
                     <i class="menu-icon mdi mdi-file-document"></i>
                     <span class="menu-title">Upload Cv</span>
                  </a>
               </li>
            </ul>
         </nav>