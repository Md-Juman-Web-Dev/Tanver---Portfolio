<?php 
include './include/header.php';
//* Fetch categories from the category table
$category_query = "SELECT * FROM category";  // Assuming the table is called 'category'
$category_result = mysqli_query($conn, $category_query);
$category = mysqli_fetch_all( $category_result, MYSQLI_ASSOC);
?>

<div class="container">
    <table class="table table-bordered table-hover text-center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
            <?php
            if(empty($category)){
                     ?>
            <tr>
               <td colspan="7">No category Found !</td>
            </tr>
            <?php
             }
            foreach($category as $index=>$category):
            ?>
            <tr>
               <td class="text-wrap"><?=$category['id']?></td>
               <td class="text-wrap"><?=$category['name']?></td>
               <td>
                  <a href="../controller/DeleteCategory.php?id=<?=$category['id']?>"
                     class="btn btn-danger btn-sm">Delete</a>

               </td>
            </tr>
            <?php endforeach ?>
         </tbody>
    </table>
</div>

<?php 
include './include/footer.php';
?>