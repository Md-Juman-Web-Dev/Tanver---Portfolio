<?php 
include_once "./include/header.php";
//*Query For Banner part
$banner_query = "SELECT * FROM banner WHERE id='1'";
$banner_result = mysqli_query($conn, $banner_query);
$banner_res = mysqli_fetch_assoc($banner_result);

//*Query For About Part
$about_query = "SELECT * FROM about WHERE id='1'";
$about_result = mysqli_query($conn, $about_query);
$about_res= mysqli_fetch_assoc( $about_result );

//*Query For Sumary Part
$query = "SELECT * FROM sumary WHERE id='1'";
$result = mysqli_query($conn,$query);
$sumary_res = mysqli_fetch_assoc($result);

//* Fetch portfolio items from the database
$prot_query = "SELECT * FROM portfolio ORDER BY id DESC";
$prot_result = mysqli_query($conn, $prot_query);
$prot_items = mysqli_fetch_all($prot_result, MYSQLI_ASSOC);


//* Fetch categories from the category table
$category_query = "SELECT * FROM category";  // Assuming the table is called 'category'
$category_result = mysqli_query($conn, $category_query);

// Store categories in an array
$categories = [];
while ($row = mysqli_fetch_assoc($category_result)) {
    // Change 'category_name' to 'name' as per the query result
    $categories[] = $row['name'];  // Use the correct key from the query result
}

//*Fetch Testimonial
$testi_query = "SELECT * FROM testimonial";
$testi_result = mysqli_query($conn, $testi_query);
$testimonials = mysqli_fetch_all($testi_result, 1);

?>

<main class="main">

   <!-- Hero Section -->
   <section id="hero" class="hero section dark-background">

      <img src="<?= './uploads/banners/' .$banner_res['img'] ?>" alt="" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
         <h2><?= $banner_res['name'] ?></h2>
         <p>I'm <span class="typed" data-typed-items="<?= $banner_res['skills'] ?>"></span><span
               class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span
               class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>

         <a target="_blank" href="<?= $banner_res['cta_link'] ?>"><button type="button" class="hireBtn">Hire Me!</button>      </a>
      </div>

   </section><!-- /Hero Section -->

   <!-- About Section -->
   <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
         <h2>About</h2>
         <p><?= $about_res['aboutme'] ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

         <div class="row gy-4 justify-content-center">
            <div class="col-lg-4">
               <img src="<?= './uploads/users/'. $about_res['img'] ?>" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 content">
               <h2><?= $about_res['stitle'] ?></h2>
               <p class="fst-italic py-3">
                  <?= $about_res['sdesc'] ?>
               </p>
               <div class="row">
                  <div class="col-lg-6">
                     <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                           <span><?= $about_res['website'] ?></span>
                        </li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                           <span><?= $about_res['phone'] ?></span>
                        </li>
                        <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                           <span><?= $about_res['city'] ?></span>
                        </li>
                     </ul>
                  </div>
                  <div class="col-lg-6">
                     <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                           <span><?= $about_res['email'] ?></span>
                        </li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                           <span><?= $about_res['freelance'] ?></span>
                        </li>
                     </ul>
                  </div>
               </div>
               <p class="py-3">
                  <?= $about_res['bdesc'] ?>
               </p>
            </div>
         </div>

      </div>

   </section><!-- /About Section -->

   <!-- Stats Section -->
   <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

         <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
               <div class="stats-item">
                  <i class="bi bi-emoji-smile"></i>
                  <span data-purecounter-start="1" data-purecounter-end="<?= $stats_res['client'] ?>"
                     data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Happy Clients</strong></p>
               </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
               <div class="stats-item">
                  <i class="bi bi-journal-richtext"></i>
                  <span data-purecounter-start="1" data-purecounter-end="<?= $stats_res['project'] ?>"
                     data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Projects</strong></p>
               </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
               <div class="stats-item">
                  <i class="bi bi-headset"></i>
                  <span data-purecounter-start="1" data-purecounter-end="<?= $stats_res['support'] ?>"
                     data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Hours Of Support</strong></p>
               </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
               <div class="stats-item">
                  <i class="bi bi-people"></i>
                  <span data-purecounter-start="1" data-purecounter-end="<?= $stats_res['worker'] ?>"
                     data-purecounter-duration="1" class="purecounter"></span>
                  <p><strong>Hard Workers</strong></p>
               </div>
            </div><!-- End Stats Item -->

         </div>

      </div>

   </section><!-- /Stats Section -->

   <!-- Skills Section -->
   <section id="skills" class="skills section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
         <h2>Skills</h2>
         <p><?= $skill_res['disc'] ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

         <div class="row skills-content skills-animation">

            <div class="col-lg-6">

               <div class="progress">
                  <span class="skill"><span><?= $skill_res['skill1'] ?></span> <i
                        class="val"><?= $skill_res['percentage1']. '%' ?></i></span>
                  <div class="progress-bar-wrap">
                     <div class="progress-bar" role="progressbar" aria-valuenow="<?= $skill_res['percentage1'] ?>"
                        aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div><!-- End Skills Item -->

               <div class="progress">
                  <span class="skill"><span><?= $skill_res['skill2'] ?></span> <i
                        class="val"><?= $skill_res['percentage2'] . '%' ?></i></span>
                  <div class="progress-bar-wrap">
                     <div class="progress-bar" role="progressbar" aria-valuenow="<?= $skill_res['percentage2'] ?>"
                        aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div><!-- End Skills Item -->

               <div class="progress">
                  <span class="skill"><span><?= $skill_res['skill3'] ?></span> <i
                        class="val"><?= $skill_res['percentage3'] . '%' ?></i></span>
                  <div class="progress-bar-wrap">
                     <div class="progress-bar" role="progressbar" aria-valuenow="<?= $skill_res['percentage3'] ?>"
                        aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div><!-- End Skills Item -->

            </div>

            <div class="col-lg-6">

               <div class="progress">
                  <span class="skill"><span><?= $skill_res['skill4'] ?></span> <i
                        class="val"><?= $skill_res['percentage4'] . '%' ?></i></span>
                  <div class="progress-bar-wrap">
                     <div class="progress-bar" role="progressbar" aria-valuenow="<?= $skill_res['percentage4'] ?>"
                        aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div><!-- End Skills Item -->

               <div class="progress">
                  <span class="skill"><span><?= $skill_res['skill5'] ?></span> <i
                        class="val"><?= $skill_res['percentage5'] . '%' ?></i></span>
                  <div class="progress-bar-wrap">
                     <div class="progress-bar" role="progressbar" aria-valuenow="<?= $skill_res['percentage5'] ?>"
                        aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div><!-- End Skills Item -->

               <div class="progress">
                  <span class="skill"><span><?= $skill_res['skill6'] ?></span> <i
                        class="val"><?= $skill_res['percentage6'] . '%' ?></i></span>
                  <div class="progress-bar-wrap">
                     <div class="progress-bar" role="progressbar" aria-valuenow="<?= $skill_res['percentage6'] ?>"
                        aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div><!-- End Skills Item -->

            </div>

         </div>

      </div>

   </section><!-- /Skills Section -->


   <!-- Portfolio Section -->
   <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
         <h2>Portfolio</h2>
         <p>We map your success in business through digital platforms as a Google ads, Facebook ads & Web analytics agency. We implement proven planning & strategy to generate sales. Additionally, provide business report for grabbing your potential customer.</p>
      </div><!-- End Section Title -->

      <div class="container">

      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

<!-- Portfolio Filters (Dynamic Categories) -->
<ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
    <li data-filter="*" class="filter-active">All</li>
    <?php foreach ($categories as $category): ?>
        <li data-filter=".filter-<?= strtolower(str_replace(' ', '-', $category)) ?>">
            <?= htmlspecialchars($category) ?>
        </li>
    <?php endforeach; ?>
</ul><!-- End Portfolio Filters -->

<div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

<?php foreach ($prot_items as $prot_item): ?>
    <?php
        // Split the 'img' column to get an array of image filenames
        $images = explode(',', $prot_item['img']); 
        // Use the first image for the thumbnail
        $first_image = $images[0] ?? 'default.jpg'; 
    ?>
    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-<?= strtolower(str_replace(' ', '-', $prot_item['category'])) ?>">
        <div class="portfolio-content h-100">
            <!-- Display the first image as the thumbnail -->
            <img src="uploads/portfolio/<?= htmlspecialchars($first_image) ?>" class="img-fluid" alt="<?= htmlspecialchars($prot_item['title']) ?>">

            <div class="portfolio-info">
                <h4><?= htmlspecialchars($prot_item['title']) ?></h4>
                <p><?= substr(htmlspecialchars($prot_item['description']), 0, 100) ?>...</p>

                <!-- Lightbox for all images -->
                <?php foreach ($images as $image): ?>
                    <a href="uploads/portfolio/<?= htmlspecialchars($image) ?>" title="<?= htmlspecialchars($prot_item['title']) ?>"
                       data-gallery="portfolio-gallery-app" class="glightbox preview-link">
                        <i class="bi bi-zoom-in"></i>
                    </a>
                <?php endforeach; ?>

                <!-- Portfolio details page -->
                <a href="portfolio-details.php?id=<?= $prot_item['id'] ?>" title="More Details" class="details-link">
                    <i class="bi bi-link-45deg"></i>
                </a>
            </div>
        </div>
    </div><!-- End Portfolio Item -->
<?php endforeach; ?>

</div><!-- End Isotope Container -->
</div><!-- End Isotope Layout -->

            </div><!-- End Portfolio Container -->

         </div>

      </div>

   </section><!-- /Portfolio Section -->
   <!-- Services Section -->
   <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
         <h2>Services</h2>
         <p>We map your success in business through digital platforms as a Google ads, Facebook ads & Web analytics agency. We implement proven planning & strategy to generate sales. Additionally, provide business report for grabbing your potential customer.</p>
      </div><!-- End Section Title -->

      <div class="container">

         <div class="row gy-4">

            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
               <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
               <div>
                  <h4 class="title"><a href="service-details.html" class="stretched-link">Lorem Ipsum</a></h4>
                  <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi
                     sint occaecati cupiditate non provident</p>
               </div>
            </div>
            <!-- End Service Item -->
         </div>

      </div>

   </section><!-- /Services Section -->

   <!-- Testimonials Section -->
   <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
         <h2>Testimonials</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

         <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
            {
               "loop": true,
               "speed": 600,
               "autoplay": {
                  "delay": 5000
               },
               "slidesPerView": "auto",
               "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
               },
               "breakpoints": {
                  "320": {
                     "slidesPerView": 1,
                     "spaceBetween": 40
                  },
                  "1200": {
                     "slidesPerView": 3,
                     "spaceBetween": 1
                  }
               }
            }
            </script>
            <div class="swiper-wrapper">
            <?php foreach($testimonials as $testimonial): ?>
               <div class="swiper-slide">
                  <div class="testimonial-item">
                     <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span><?= $testimonial['review'] ?></span>
                        <i class="bi bi-quote quote-icon-right"></i>
                     </p>
                     <img src="./uploads/clients/<?= $testimonial['img']?> ?? https://api.dicebear.com/9.x/initials/svg?seed=<?= $testimonial['name'] ?>" style="width: 100px; height: 100px;" class="testimonial-img img-fluid" alt="">
                     <h3><?= $testimonial['name'] ?></h3>
                     <h4><?= $testimonial['occu'] ?></h4>
                  </div>
               </div>
               <?php endforeach ?>
               <!--todo: End testimonial item --> 
            </div>
            <div class="swiper-pagination"></div>
         </div>

      </div>

   </section><!-- /Testimonials Section -->

   <!-- Contact Section -->
   <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
         <h2>Contact</h2>
         <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

         <div class="row gy-4">

            <div class="col-lg-5">

               <div class="info-wrap">
                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                     <i class="bi bi-geo-alt flex-shrink-0"></i>
                     <div>
                        <h3>Address</h3>
                        <p><?= $about_res['city']?></p>
                     </div>
                  </div><!-- End Info Item -->

                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                     <i class="bi bi-telephone flex-shrink-0"></i>
                     <div>
                        <h3>Call Us</h3>
                        <p><?= $about_res['phone']?></p>
                     </div>
                  </div><!-- End Info Item -->

                  <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                     <i class="bi bi-envelope flex-shrink-0"></i>
                     <div>
                        <h3>Email Us</h3>
                        <p><?= $about_res['email']?></p>
                     </div>
                  </div><!-- End Info Item -->

                  <iframe
                     src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                     frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy"
                     referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
            </div>

            <div class="col-lg-7">
               <form action="./controller/Contact.php" method="post">
                  <div class="row gy-4">

                     <div class="col-md-6">
                        <label for="name-field" class="pb-2">Your Name</label>
                        <input type="text" name="name" id="name-field"
                           class="form-control <?= isset($_SESSION['errors']['name_error']) ? 'is-invalid' : null?> ">
                        <span class="text-danger"><?=$_SESSION['errors']['name_error'] ?? null?></span>
                     </div>

                     <div class="col-md-6">
                        <label for="email-field" class="pb-2">Your Email</label>
                        <input type="email"
                           class="form-control <?= isset($_SESSION['errors']['email_error']) ? 'is-invalid' : null?>"
                           name="email" id="email-field">
                        <span class="text-danger"><?=$_SESSION['errors']['email_error'] ?? null?></span>
                     </div>

                     <div class="col-md-12">
                        <label for="subject-field" class="pb-2">Subject</label>
                        <input type="text"
                           class="form-control <?= isset($_SESSION['errors']['subject_error']) ? 'is-invalid' : null?>"
                           name="subject" id="subject-field">
                        <span class="text-danger"><?=$_SESSION['errors']['subject_error'] ?? null?></span>
                     </div>

                     <div class="col-md-12">
                        <label for="message-field" class="pb-2">Message</label>
                        <textarea
                           class="form-control <?= isset($_SESSION['errors']['message_error']) ? 'is-invalid' : null?>"
                           name="message" rows="10" id="message-field"></textarea>
                        <span class="text-danger"><?=$_SESSION['errors']['message_error'] ?? null?></span>
                     </div>
                     <div class="col-md-12 text-center">
                        <button type="submit" style="color: #ffffff;
                        margin-top:10px;
                        background: #149ddd;
                        border: 0;
                        padding: 10px 30px;
                        transition: 0.4s;
                        border-radius: 50px;">
                           Send Message</button>
                     </div>

                  </div>
               </form>
            </div><!-- End Contact Form -->

         </div>

      </div>

   </section><!-- /Contact Section -->


</main>
<?php if (isset($_SESSION['success'])): ?>
  <script>
    Swal.fire({
      title: "<?= $_SESSION['success'] ?>",
      icon: "success"
    });
  </script>
  <?php unset($_SESSION['success']); // Clear success message after displaying ?>
<?php endif; ?>

<?php if (!empty($_SESSION['errors']['email_error'])): ?>
  <script>
    Swal.fire({
      title: "<?= $_SESSION['errors']['email_error'] ?>",
      icon: "error"
    });
  </script>
  <?php unset($_SESSION['errors']['email_error']); // Clear email error after displaying ?>
<?php endif; ?>

<?php 
 include_once "./include/footer.php";
 unset($_SESSION['errors']);
 unset($_SESSION['success']);
?>