<?php
include_once "./include/header.php";
include_once "../database/db.php";

//* Fetch Service
$service_query = "SELECT * FROM services ";
$service_result = mysqli_query($conn, $service_query);
$services = mysqli_fetch_all($service_result,1);
?>

<div class="container">
   <div class="row">
      <div class="card col-lg-6 rounded-0">
         <div class="card-header">Add Services</div>
         <div class="card-body ">
            <form enctype="multipart/form-data" action="../controller/ServiceAdd.php" method="post">
               <div class="row">
                  <div class="text-end">
                     <a href="./all-services.php" class="btn btn-warning btn-sm">All Services</a>
                     <button type="submit" class="btn btn-primary btn-sm">ADD Service</button>
                  </div>
                  <div class="form-group col-lg-12">
                     <label for="name">Service Name <span class="text-danger">*</span></label><br>
                     <span class="text-danger"><?=$_SESSION['errors']['name_error'] ?? null?></span>
                     <input value="<?=$_SESSION['old']['name'] ?? null?>" type="text" class="form-control" id="name"
                        name="name">
                  </div>
                  <div class="form-group col-lg-12">
                     <label for="description">Service Description<span class="text-danger">*</span></label><br>
                     <span class="text-danger"><?=$_SESSION['errors']['description_error'] ?? null?></span>
                     <textarea class="form-control" id="description" name="description"
                        rows="3"><?=$_SESSION['old']['description'] ?? null?></textarea>
                  </div>
                  <div class="form-group col-lg-6">
                     <h4>Service Image<span class="text-danger">*</span></h4><br>
                     <span class="text-danger"><?=$_SESSION['errors']['image_error'] ?? null?></span>
                     <label class="d-block" for="profile_img_input" style="cursor: pointer">
                        <img
                           src="<?= !empty($service['image']) ? '../uploads/services/' . $service['image'] : 'https://api.dicebear.com/9.x/initials/svg?seed='.$name; ?>"
                           alt="Service Image" class="img-fluid rounded-circle profile_image"
                           style="width:300px;height:300px;object-fit:cover;object-position:center;">
                     </label>
                     <input value="<?=$_SESSION['old']['image'] ?? null?>" name="image" class="d-none" type="file"
                        id="profile_img_input">
                  </div>
               </div>
               <div class="py-2">
                  <span class="text-success"><?=$_SESSION['addSuccessfully'] ?? null ?></span>
               </div>

            </form>
         </div>
      </div>
      <div class="card col-lg-6  rounded-0">
         <div class="card-header">
            Update Service Title
         </div>
         <div class="card-body">
            <form action="../controller/ServiceUpdateTitle.php" method="post">

               <div class="form-floating">
                  <span class="text-danger"><?=$_SESSION['error']['title'] ?? null?></span>
                  <textarea name="serviceTitle" class="form-control" placeholder="Leave a comment here"
                     id="floatingTextarea2" style="height: 100px"></textarea>
                  <label for="floatingTextarea2">Enter Title</label>
               </div>
               <div><span class="text-success"><?=$_SESSION['updatedSuccessfully'] ?? null ?></span></div>
               <div class="text-end">
                  <button type="submit" class="btn btn-primary btn-sm my-2">Update Title</button>
               </div>
            </form>
         </div>
      </div>
   </div>


   <!-- * End Hear -->

</div>
<!-- * Start Here -->


<?php
include_once "./include/footer.php";
unset($_SESSION['old']);
unset($_SESSION['error']);
unset($_SESSION['errors']);
unset($_SESSION['updatedSuccessfully']);
unset($_SESSION['addSuccessfully']);
?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function() {
   $('#profile_img_input').change(function() {
      let file = $(this)[0].files[0];
      let url = URL.createObjectURL(file);
      $('.profile_image').attr('src', url);
   });
});
</script>