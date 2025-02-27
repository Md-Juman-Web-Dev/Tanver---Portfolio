<?php
include_once "./include/header.php";

// Fetch the last 7 days' views from the database
$query = "SELECT DATE(visit_time) AS date, COUNT(*) AS views FROM visitors 
          WHERE visit_time >= DATE_SUB(NOW(), INTERVAL 7 DAY) 
          GROUP BY DATE(visit_time) ORDER BY visit_time ASC";
$result = mysqli_query($conn, $query);

// Store data in arrays for Chart.js
$dates = [];
$views = [];
while ($row = mysqli_fetch_assoc($result)) {
   $dates[] = $row['date'];
   $views[] = $row['views'];
}
?>
<main>
   <div class="main-panel">
      <div class="content-wrapper">
         <div class="container m-auto">
         <div class="row">
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-0 ">Website Views</h6>
              <p class="text-sm ">Last Campaign Performance</p>
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-symbols-rounded text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card ">
            <div class="card-body">
              <h6 class="mb-0 "> Daily Sales </h6>
              <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-symbols-rounded text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> updated 4 min ago </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
          <div class="card">
            <div class="card-body">
              <h6 class="mb-0 ">Completed Tasks</h6>
              <p class="text-sm ">Last Campaign Performance</p>
              <div class="pe-2">
                <div class="chart">
                  <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-symbols-rounded text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm">just updated</p>
              </div>
            </div>
          </div>
        </div>
      </div>
         </div>
      </div>
   </div>
   <!-- partial -->
   </div>
   <!-- main-panel ends -->

</main>

<?php
include_once "./include/footer.php";
?>
<script>
   document.addEventListener("DOMContentLoaded", function () {
      const ctx = document.getElementById('chart-bars').getContext('2d');
      new Chart(ctx, {
         type: 'bar',
         data: {
            labels: <?php echo json_encode($dates); ?>,
            datasets: [{
               label: 'Views',
               data: <?php echo json_encode($views); ?>,
               backgroundColor: 'rgba(54, 162, 235, 0.6)',
               borderColor: 'rgba(54, 162, 235, 1)',
               borderWidth: 1,
               borderRadius: 4
            }]
         },
         options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
               y: {
                  beginAtZero: true,
                  grid: { color: "rgba(200, 200, 200, 0.2)" }
               },
               x: {
                  grid: { color: "rgba(200, 200, 200, 0.2)" }
               }
            }
         }
      });
   });
</script>