<?php
include './include/header.php';
$query = "SELECT * FROM testimonial";
$result = mysqli_query($conn, $query);
$reviews = mysqli_fetch_all($result, 1);

?>
<div class="container">
    <a href="./testimonial.php" class="btn btn-primary btn-sm mb-3">Back</a>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-responsive">
                <thead class="text-center">
                    <tr>
                        <th>Sl.</th>
                        <th>Client Name</th>
                        <th>Client Occupation</th>
                        <th>Client Review</th>
                        <th>Client Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php 
                        foreach($reviews as $key=>$review):
                    ?>
                    <tr>
                        <td><?= ++$key?></td>
                        <td><?= $review['name']?></td>
                        <td><?= $review['occu']?></td>
                        <td><?= $review['review']?></td>
                        <td><img src="../uploads/clients/<?= $review['img']?>" alt="client"></td>
                        <td>
                            <a href="./edit-testimonial.php?id=<?= $review['id']?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="../controller/DeleteTestimonial.php?id=<?= $review['id'] ?>" class="btn btn-danger btn-sm">Delete</a>

                        </td>
                    </tr>
                    <?php
                        endforeach;
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include './include/footer.php';
?>