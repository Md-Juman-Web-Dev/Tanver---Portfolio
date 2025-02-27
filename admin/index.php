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

<div class="container">
  <div class="col-lg-8 d-flex flex-column">
    <div class="row flex-grow">
      <div class="col-12 grid-margin stretch-card">
        <div class="card card-rounded">
          <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-start">
              <div>
                <h4 class="card-title card-title-dash">Performance Line Chart</h4>
                <h5 class="card-subtitle card-subtitle-dash">Website Views Over the Last 7 Days</h5>
              </div>
              <div id="performanceLine-legend"></div>
            </div>
            <div class="chartjs-wrapper mt-4">
              <canvas id="performanceLine"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include_once "./include/footer.php";
?>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const ctx = document.getElementById('performanceLine').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php echo json_encode($dates); ?>,
            datasets: [{
                label: 'Views',
                data: <?php echo json_encode($views); ?>,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 2,
                fill: true,
                tension: 0.4
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