<?php
include_once "./include/header.php";
// Portfolio Query
$id = $_REQUEST['id'];
$prot_query = "SELECT * FROM portfolio WHERE id='$id'";
$prot_result = mysqli_query($conn, $prot_query);
$prot_items = mysqli_fetch_all($prot_result, MYSQLI_ASSOC);
?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title dark-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Portfolio Details</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Portfolio Details</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Portfolio Details Section -->
  <section id="portfolio-details" class="portfolio-details section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper init-swiper">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper align-items-center">
              <?php
              // Loop through portfolio items
              foreach ($prot_items as $prot_item):
                // Get the image field (comma-separated values)
                $image_str = $prot_item['img'];  // The 'img' field contains comma-separated image filenames
                $images = explode(',', $image_str);  // Split the string into an array

                // Check if the images array is not empty
                if (!empty($images)) {
                  foreach ($images as $image):  // Loop through all images for each portfolio item
                    $image_path = "uploads/portfolio/" . trim($image);  // Ensure there are no extra spaces in the filename
                    ?>
                    <div class="swiper-slide">
                      <img src="<?= htmlspecialchars($image_path) ?>" alt="Portfolio Image">
                    </div>
                  <?php
                  endforeach;  // End of inner loop for images
                } else {
                  echo "<p>No images available.</p>";  // Fallback message if no images are found
                }
              endforeach;  // End of outer loop for portfolio items
              ?>
            </div><!-- End swiper-wrapper -->

            <!-- Pagination and Navigation -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: <?= htmlspecialchars($prot_item['category']) ?></li>
              <li><strong>Client</strong>: <?= htmlspecialchars($prot_item['client']) ?></li>
              <li><strong>Project date</strong>: <?= htmlspecialchars($prot_item['project_date']) ?></li>
              <li><strong>Project URL</strong>: <a href="<?= htmlspecialchars($prot_item['project_url']) ?>"><?= htmlspecialchars($prot_item['project_url']) ?></a></li>
            </ul>
          </div>
          <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
            <h2><?= htmlspecialchars($prot_item['title']) ?></h2>
            <p><?= htmlspecialchars($prot_item['description']) ?></p>
          </div>
        </div>

      </div>

    </div>

  </section><!-- /Portfolio Details Section -->

</main>

<?php include_once "./include/footer.php"; ?>

<!-- Swiper JS and CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Initialize Swiper once the page is loaded
    const swiper = new Swiper('.swiper-container', {
      loop: true, // Enable looping
      autoplay: {
        delay: 3000, // 3 seconds per slide
      },
      slidesPerView: 1, // Display one image at a time
      spaceBetween: 10, // Space between slides
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true, // Enable pagination click
      },
    });
  });
</script>
