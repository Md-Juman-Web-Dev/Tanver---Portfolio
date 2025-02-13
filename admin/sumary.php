<?php include_once "./include/header.php";
include_once "../database/db.php";
$query = "SELECT * FROM `sumary` WHERE id='1'";
$result = mysqli_query($conn,$query);
$sumary_res = mysqli_fetch_assoc($result);

?>


<div class="container">
   <div class="row">
      <div class="col-lg-12">
         <div class="card rounded-0 shadow">
            <div class="card-header">Update Sumary</div>
            <div class="card-body">
               <form action="../controller/Sumary.php" method="post">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="Resume">Resume</label>
                           <textarea name="resume" id="Resume"
                              class="form-control"><?= $sumary_res['resume']?></textarea>
                        </div>
                        <div class="form-group">
                           <label for="Description">Summary Description</label>
                           <input value="<?=$sumary_res['description']?>" type="text" name="description"
                              id="Description" class="form-control">
                        </div>

                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="professionalTitle">Professional Title</label>
                           <input value="<?=$sumary_res['title']?>" type="text" name="title" id="professionalTitle"
                              class="form-control">
                        </div>
                        <div class="form-group">
                           <label for="Present">2019 - Present</label>
                           <input value="<?=$sumary_res['present']?>" type="text" name="present" id="Present"
                              class="form-control">
                        </div>
                        <div class="form-group">
                           <label for="Experion">Experion, New York, NY</label>
                           <input value="<?=$sumary_res['experion']?>" type="text" name="experion" id="Experion"
                              class="form-control">
                        </div>
                        <div class="form-group">
                           <label for="Experion">label 1</label>
                           <input value="<?=$sumary_res['labelOne']?>" type="text" name="label-1" id="Experion"
                              class="form-control">
                        </div>
                        <div class="form-group">
                           <label for="Experion">label 2</label>
                           <input value="<?=$sumary_res['labelTwo']?>" type="text" name="label-2" id="Experion"
                              class="form-control">
                        </div>
                        <div class="form-group">
                           <label for="Experion">label 3</label>
                           <input value="<?=$sumary_res['labelThree']?>" type="text" name="label-3" id="Experion"
                              class="form-control">
                        </div>
                     </div>

                  </div>
                  <button type="submit" class="btn btn-primary btn-sm">Update</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>





<?php include_once "./include/footer.php"; ?>