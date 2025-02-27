<?php
include './include/header.php';

// Fetch Existing CV File
$query = "SELECT cv_file FROM cv_uploads WHERE id=1";
$result = mysqli_query($conn, $query);
$cv = mysqli_fetch_assoc($result);
?>

<div class="container">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2>Upload New CV</h2>
            </div>
        
            <div class="card-body">
                <?php if (!empty($cv['cv_file'])): ?>
                    <h4>Current CV: <a class="btn btn-danger btn-sm" href="../uploads/<?= htmlspecialchars($cv['cv_file']) ?>" target="_blank">View CV</a></h4>
                <?php endif; ?>
        
                <form action="../controller/UploadCv.php" method="POST" enctype="multipart/form-data">
                    <input  type="file" name="cv" required class="form-control">
                    <button class="btn btn-primary btn-sm mt-3" type="submit" name="upload_cv">Upload CV</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include './include/footer.php';
?>