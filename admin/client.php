<?php 
include_once "./include/header.php";
include_once "../database/db.php";
$query = "SELECT id, name, email, subject, message FROM client ORDER BY id DESC";
$reslut = mysqli_query($conn, $query);
$query_res=mysqli_fetch_all($reslut, 1);
?>
<style>
tbody td {
   font-size: 16px;
   text-align: justify;
   line-height: 16px;
}
</style>
<div class="container-fluid mt-5">
   <h2 class="text-center mb-4">Managed Client</h2>
   <div class="table-responsive">
      <table class="table table-bordered table-hover text-center">
         <thead class="table-dark">
            <tr>
               <th>ID</th>
               <th>Client Name</th>
               <th>Client E-mail</th>
               <th>Client Subject</th>
               <th>Client Message</th>
               <th>Action</th>

            </tr>
         </thead>
         <tbody>
            <?php
            if(empty($query_res)){
                     ?>
            <tr>
               <td colspan="7">No Post Found !</td>
            </tr>
            <?php
             }
            foreach($query_res as $index=>$query_res):
            ?>
            <tr>
               <td><?=++$index?></td>
               <td class="text-wrap"><?=$query_res['name']?></td>
               <td class="text-wrap"><?=$query_res['email']?></td>
               <td class="text-wrap w-30"><?=$query_res['subject']?></td>
               <td class="text-wrap w-50"><?=$query_res['message']?></td>
               <td>
                  <a href="../controller/DeleteController.php?id=<?=$query_res['id']?>"
                     class="btn btn-danger">Delete</a>
               </td>
            </tr>
            <?php endforeach ?>
         </tbody>
      </table>
   </div>
</div>

<?php 
include_once "./include/footer.php";
?>