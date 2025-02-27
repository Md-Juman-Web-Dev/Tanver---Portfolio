<?php
include './include/header.php';
$prot_query = "SELECT * FROM portfolio";
$prot_result = mysqli_query($conn, $prot_query);
$prot_post = mysqli_fetch_all($prot_result, MYSQLI_ASSOC);
?>

<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
            <thead>
            <tr>
            <th>ID</th>
               <th>Title</th>
               <th>Description</th>
               <th>Category</th>
               <th>Client</th>
               <th>Project Date</th>
               <th>Project URL</th>
               <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if(empty($prot_post)){
                     ?>
            <tr>
               <td colspan="7">No prot_Post Found !</td>
            </tr>
            <?php
             }
            foreach($prot_post as $index=>$prot_post):
            ?>
            <tr>
               <td class="text-wrap"><?=$prot_post['id']?></td>
               <td class="text-wrap"><?=$prot_post['title']?></td>
               <td class="text-wrap"><?=$prot_post['description']?></td>
               <td class="text-wrap"><?=$prot_post['category']?></td>
               <td class="text-wrap"><?=$prot_post['client']?></td>
               <td class="text-wrap"><?=$prot_post['project_date']?></td>
               <td class="text-wrap"><?=$prot_post['project_url']?></td>
               <td>
                  <a href="../controller/ProtfolioDelete.php?id=<?=$prot_post['id']?>"
                     class="btn btn-danger btn-sm">Delete</a>

               </td>
            </tr>
            <?php endforeach ?>
         </tbody>
        </table>
    </div>
</div>


<?php
include './include/footer.php';
?>