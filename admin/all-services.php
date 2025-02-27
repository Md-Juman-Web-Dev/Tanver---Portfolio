<?php
include_once "./include/header.php";
include_once "../database/db.php";

//* Fetch Service
$service_query = "SELECT * FROM services ";
$service_result = mysqli_query($conn, $service_query);
$services = mysqli_fetch_all($service_result,1);
?>

<div class="container mt-5 ">
   <h2 class="text-center mb-4">Service List</h2>
   <div class="table-responsive">
      <a href="./services.php" class="btn btn-primary btn-sm mb-3">Back</a>
      <table class="table table-bordered table-hover text-center">
         <thead class="table-dark">
            <tr>
               <th>ID</th>
               <th>Service Name</th>
               <th>Service Description</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach ($services as $index=>$service) : ?>
            <tr>
               <td><?= ++$index ?></td>
               <td class="text-wrap"><?= $service['sarvice_name'] ?></td>
               <td class="text-wrap w-50"><?=$service['sarvice_description'] ?></td>
               <td>
                  <a href="../controller/ServiceDelete.php?id=<?= $service['id'] ?>"
                     class="btn btn-danger btn-sm">Delete</a>
               </td>
            </tr>
            <?php endforeach; ?>
         </tbody>
      </table>
   </div>
</div>

<?php
include_once "./include/footer.php";
unset($_SESSION['old']);
unset($_SESSION['error']);
unset($_SESSION['errors']);
unset($_SESSION['updatedSuccessfully']);
unset($_SESSION['addSuccessfully']);
?>