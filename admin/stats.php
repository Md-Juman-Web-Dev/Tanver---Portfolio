<?php
include './include/header.php';

?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card rounded-0 shadow">
                <div class="card-header">Update Stats</div>
                <div class="card-body">
                    <form action="../controller/UpdateStats.php" method="post">
                        <div class="form-group">
                            <label for="clients">Happy Clients</label>
                            <input value="<?= $stats_res['client'] ?>" type="number" name="clients" class="form-control">
                            <span class="text-danger">
                            <?= $_SESSION['errors']['client_error'] ?? null ?>
                        </span>
                        </div>
                        <div class="form-group">
                            <label for="project">Project Completed</label>
                            <input value="<?= $stats_res['project'] ?>" type="number" name="project" class="form-control">
                            <span class="text-danger">
                            <?= $_SESSION['errors']['project_error'] ?? null ?>
                        </span>
                        </div>
                        <div class="form-group">
                            <label for="support">Client Support</label>
                            <input value="<?= $stats_res['support'] ?>" type="number" name="support" class="form-control">
                            <span class="text-danger">
                            <?= $_SESSION['errors']['support_error'] ?? null ?>
                        </span>
                        </div>
                        <div class="form-group">
                            <label for="worker">Hard Worker</label>
                            <input value="<?= $stats_res['worker'] ?>" type="number" name="worker" class="form-control">
                            <span class="text-danger">
                            <?= $_SESSION['errors']['worker_error'] ?? null ?>
                        </span>
                        </div>
                        <span class="text-success">
                            <?= $_SESSION['success'] ?? null ?>
                        </span>

                        <button class="btn btn-primary btn-sm" type="submit">Update</button>
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

