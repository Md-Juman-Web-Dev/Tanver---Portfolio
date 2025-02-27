<?php
include './include/header.php';
//*Category query
$category_query = "SELECT * FROM category";
$category_result = $conn->query($category_query);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card rounded-0 shadow">
                <div class="card-header">Update Protfolio</div>
                <div class="card-body">
                        <div class="text-end">
                            <a href="./all-category.php" class="btn btn-primary btn-sm">All Category</a>
                            <a href="./all-protfolio.php" class="btn btn-primary btn-sm">All Post</a>
                        </div>
                    <form action="../controller/AddCategory.php" method="post">
                        <label for="category">Category Name</label>
                        <div class="row mb-3">
                            <div class="col-lg-10"><input type="text" name="category" id="category"
                                    class="form-control mt-2"></div>
                            <div class="col-lg-2">
                                <button class="btn btn-primary mt-2">Add</button>
                            </div>
                            <span class="text-danger">
                                <?= $_SESSION['errors']['category_error'] ?? null ?>
                            </span>
                            <span class="text-success">
                                <?= $_SESSION['success'] ?? null ?>
                            </span>
                        </div>
                    </form>

                    <form enctype="multipart/form-data" action="../controller/AddProject.php" method="post">
                        <div class="form-gorup">
                            <label for="name" class="mb-2">Project Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                            <div class="text-danger">
                                <?= $_SESSION['errors']['name_error'] ?? null ?>
                            </div>
                        </div>
                        <div class="form-gorup">
                            <label for="disc" class="mb-2">Project Decription</label>
                            <input type="text" name="disc" id="disc" class="form-control">
                            <div class="text-danger">
                                <?= $_SESSION['errors']['disc_error'] ?? null ?>
                            </div>
                        </div>
                        <div class="form-gorup">
                            <label for="client" class="mb-2">Client</label>
                            <input type="text" name="client" id="client" class="form-control">
                            <div class="text-danger">
                                <?= $_SESSION['errors']['client_error'] ?? null ?>
                            </div>
                        </div>
                        <div class="form-gorup">
                            <label for="date" class="mb-2">Project Date</label>
                            <input type="date" name="date" id="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category" class="mb-2">Project Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value="">Select Category</option>
                                <?php while ($category = $category_result->fetch_assoc()): ?>
                                    <option value="<?= htmlspecialchars($category['name']) ?>">
                                        <?= htmlspecialchars($category['name']) ?>
                                    </option>
                                <?php endwhile; ?>
                            </select>
                            <div class="text-danger">
                                <?= $_SESSION['errors']['category_error'] ?? null ?>
                            </div>
                        </div>
                        <div class="custom-file-container" data-upload-id="myUniqueUploadId">
                            <label class="mt-2">Project Images <a href="javascript:void(0)"
                                    class="custom-file-container__image-clear" title="Clear Image"> </a></label>
                            <label class="custom-file-container__custom-file">
                                <input name="project_img[]" type="file"
                                    class="custom-file-container__custom-file__custom-file-input" accept="*" multiple
                                    aria-label="Choose File" required>
                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                            </label>
                            <div class="custom-file-container__image-preview"></div>
                            <div class="text-danger">
                                <?= $_SESSION['errors']['category_error'] ?? null ?>
                            </div>
                        </div>
                        <div class="text-success">
                                <?= $_SESSION['success'] ?? null ?>
                            </div>
                                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include './include/footer.php';
unset($_SESSION['errors']);
unset($_SESSION['success']);
?>
<script>
    var upload = new FileUploadWithPreview('myUniqueUploadId')
</script>