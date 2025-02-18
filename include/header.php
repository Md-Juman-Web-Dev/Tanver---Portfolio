<?php
session_start();
include './database/db.php';
$query = "SELECT * FROM banner WHERE id='1'";
$result = mysqli_query($conn, $query);
$res = mysqli_fetch_assoc($result);

//*Query For About Part
$about_query = "SELECT * FROM about WHERE id='1'";
$about_result = mysqli_query($conn, $about_query);
$about_res= mysqli_fetch_assoc( $about_result );

//*Query For Social links
$social_query = "SELECT * FROM social_links WHERE id='1'";
$social_result = mysqli_query($conn, $social_query);
$social_res= mysqli_fetch_assoc($social_result);

//*Query Stats
$stats_query = "SELECT * FROM stats WHERE id='1'";
$stats_result = mysqli_query($conn, $stats_query);
$stats_res = mysqli_fetch_assoc($stats_result);

//*Query Skill
$skill_query = "SELECT * FROM skills WHERE id='1'";
$skill_result = mysqli_query($conn, $skill_query);
$skill_res = mysqli_fetch_assoc($skill_result);

//*

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tanvir Ahmed Shawon - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./assets/img/favicon.png" rel="icon">
  <!-- <link href="./assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="./assets/css/main.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="index-page">

  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img style="width: 200px; height=200px;" src="<?= './uploads/users/' .$about_res['img']  ?>" alt="" class="img-fluid rounded-circle">
    </div>

    <a href="index.php" class="logo d-flex align-items-center justify-content-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="./assets/img/logo.png" alt=""> -->
      <h1 class="sitename"><?= $res['name'] ?></h1>
    </a>

    <div class="social-links text-center">
      <a href="<?= $social_res['twitter'] ?>" target="_blank" class="twitter"><i class="bi bi-twitter-x"></i></a>
      <a href="<?= $social_res['facebook'] ?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="<?= $social_res['instagram'] ?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="<?= $social_res['skype'] ?>" target="_blank" class="google-plus"><i class="bi bi-skype"></i></a>
      <a href="<?= $social_res['linkedin'] ?>" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
        <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
        <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
        <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
      </ul>
    </nav>
  </header>