<?php
session_start();
include './database/db.php';
include './controller/Track.php';
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

// Fetch CV from database
$cv_query = "SELECT cv_file FROM cv_uploads WHERE id=1";
$cv_result = mysqli_query($conn, $cv_query);
$cv = mysqli_fetch_assoc($cv_result);

//*

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Tanvir Ahmed Shawon - Digital Markteting Expert</title>
  
  <meta name="description" content="I specialize in digital marketing, focusing on PPC advertising, social media marketing, and growth strategies. With expertise in Facebook, Instagram, and Google Ads, I create data-driven campaigns that drive traffic, engagement, and sales. My goal is to help businesses scale efficiently with ROI-focused strategies.">
  <meta name="keywords" content="Tanvir Ahmed Shawon, UI/UX designer, digital marketing, google adds, facebook adds, web development services, tanvir, ahmed, shawon, tanvirahmedshawon, tanvir ahmed shawon, tanvir shawon">
  <meta name="author" content="Tanvir Ahmed Shawon">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:title" content="Tanvir Ahmed Shawon - Digital Markteting Expert">
  <meta property="og:description" content="I specialize in digital marketing, focusing on PPC advertising, social media marketing, and growth strategies. With expertise in Facebook, Instagram, and Google Ads, I create data-driven campaigns that drive traffic, engagement, and sales. My goal is to help businesses scale efficiently with ROI-focused strategies.">
  <meta property="og:image" content="https://scontent.fcgp7-1.fna.fbcdn.net/v/t39.30808-1/476153871_1181615006911284_8976687795296513049_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=104&ccb=1-7&_nc_sid=1d2534&_nc_ohc=djdL-8QB5xQQ7kNvgERnB6-&_nc_oc=Adim9J4osMsjGCs9ymrIcopel6GAaYQviANVA1fDtph6L5oJLOQZCFC_tGCZqy0boh0&_nc_zt=24&_nc_ht=scontent.fcgp7-1.fna&_nc_gid=AUugJ8d9bv9YvM9mskXkBEd&oh=00_AYB5Hf5A7qlhpwZCGfJ9tMRZ1Wl2oLgqiEsLMqQYXIPgQg&oe=67C5E582">
  <meta property="og:url" content="https://www.facebook.com/tanvirshawon03">
  <meta property="og:type" content="website">
  
  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Tanvir Ahmed Shawon - Digital Markteting Expert">
  <meta name="twitter:description" content="I specialize in digital marketing, focusing on PPC advertising, social media marketing, and growth strategies. With expertise in Facebook, Instagram, and Google Ads, I create data-driven campaigns that drive traffic, engagement, and sales. My goal is to help businesses scale efficiently with ROI-focused strategies.">
  
  <!-- Favicons -->
  <link rel="icon" href="./assets/img/favicon.jpeg">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/vendor/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="./assets/vendor/aos/aos.css">
  <link rel="stylesheet" href="./assets/vendor/glightbox/css/glightbox.min.css">
  <link rel="stylesheet" href="./assets/vendor/swiper/swiper-bundle.min.css">
  
  <!-- Main CSS File -->
  <link rel="stylesheet" href="./assets/css/main.css">
  
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

  <style>
.button {
  --width: 250px;
  --height: 50px;
  --tooltip-height: 35px;
  --tooltip-width: 90px;
  --gap-between-tooltip-to-button: 18px;
  --button-color: #1163ff;
  --tooltip-color: #fff;
  width: var(--width);
  height: var(--height);
  background: var(--button-color);
  position: relative;
  text-align: center;
  border-radius: 0.45em;
  transition: background 0.3s;
}

.button::before {
  position: absolute;
  content: attr(data-tooltip);
  width: var(--tooltip-width);
  height: var(--tooltip-height);
  background-color: var(--tooltip-color);
  font-size: 0.9rem;
  color: #111;
  border-radius: .25em;
  line-height: var(--tooltip-height);
  bottom: calc(var(--height) + var(--gap-between-tooltip-to-button) + 10px);
  left: calc(50% - var(--tooltip-width) / 2);
}

.button::after {
  position: absolute;
  content: '';
  width: 0;
  height: 0;
  border: 10px solid transparent;
  border-top-color: var(--tooltip-color);
  left: calc(50% - 10px);
  bottom: calc(100% + var(--gap-between-tooltip-to-button) - 10px);
}

.button::after,.button::before {
  opacity: 0;
  visibility: hidden;
  transition: all 0.5s;
}

.text {
  display: flex;
  align-items: center;
  justify-content: center;
}

.button-wrapper,.text,.icon {
  overflow: hidden;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  color: #fff;
}

.text {
  top: 0
}

.text,.icon {
  transition: top 0.5s;
}

.icon {
  color: #fff;
  top: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.icon svg {
  width: 24px;
  height: 24px;
}

.button:hover {
  background: #6c18ff;
}

.button:hover .text {
  top: -100%;
}

.button:hover .icon {
  top: 0;
}

.button:hover:before,.button:hover:after {
  opacity: 1;
  visibility: visible;
}

.button:hover:after {
  bottom: calc(var(--height) + var(--gap-between-tooltip-to-button) - 20px);
}

.button:hover:before {
  bottom: calc(var(--height) + var(--gap-between-tooltip-to-button));
}

   .hireBtn{
      width: 160px;
      height: 50px;
      background: #040b14;
      color: #fff;
      border-radius: 5px;
      margin-top: 50px;
   }
  </style>
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
    <a class="d-flex justify-content-center" href="uploads/<?= htmlspecialchars($cv['cv_file']) ?>" download="Tanvir-Ahmed-Shawon-CV.pdf">
<!-- From Uiverse.io by satyamchaudharydev --> 
<div class="button" data-tooltip="Size: 2Mb">
<div class="button-wrapper">
  <div class="text">DOWNLOAD CV</div>
    <span class="icon">
      <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="2em" height="2em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 0 0 4.561 21h14.878a2 2 0 0 0 1.94-1.515L22 17"></path></svg>
    </span>
  </div>
</div>
</a>
    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
        <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
        <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
      </ul>
    </nav>
  </header>