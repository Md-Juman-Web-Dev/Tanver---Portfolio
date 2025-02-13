<?php 
include './include/header.php';
?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card rounded-0 shadow">
                    <div class="card-header">Update Skills</div>
                    <div class="card-body">
                        <form action="../controller/UpdateSkills.php" method="post">
                            <div class="form-group">
                                <label for="desc">Skill Description</label>
                                <textarea name="desc" id="desc" class="form-control"><?= $skill_res['disc'] ?></textarea>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="skill1">Skill 1</label>
                                    <input value="<?= $skill_res['skill1'] ?>" type="text" id="skill1" name="skill1" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                <label for="percentage1">Percentage 1</label>
                                <input value="<?= $skill_res['percentage1'] ?>" type="text" id="percentage1" name="percentage1" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="skill2">Skill 2</label>
                                    <input value="<?= $skill_res['skill2'] ?>" type="text" id="skill2" name="skill2" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                <label for="percentage2">Percentage 2</label>
                                <input value="<?= $skill_res['percentage2'] ?>" type="text" id="percentage2" name="percentage2" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="skill3">Skill 3</label>
                                    <input value="<?= $skill_res['skill3'] ?>" type="text" id="skill3" name="skill3" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                <label for="percentage3">Percentage 3</label>
                                <input value="<?= $skill_res['percentage3'] ?>" type="text" id="percentage3" name="percentage3" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="skill4">Skill 4</label>
                                    <input value="<?= $skill_res['skill4'] ?>" type="text" id="skill4" name="skill4" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                <label for="percentage4">Percentage 4</label>
                                <input value="<?= $skill_res['percentage4'] ?>" type="text" id="percentage4" name="percentage4" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="skill5">Skill 5</label>
                                    <input value="<?= $skill_res['skill5'] ?>" type="text" id="skill5" name="skill5" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                <label for="percentage5">Percentage 5</label>
                                <input value="<?= $skill_res['percentage5'] ?>" type="text" id="percentage5" name="percentage5" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="skill6">Skill 6</label>
                                    <input value="<?= $skill_res['skill6'] ?>" type="text" id="skill6" name="skill6" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                <label for="percentage6">Percentage 6</label>
                                <input value="<?= $skill_res['percentage6'] ?>" type="text" id="percentage6" name="percentage6" class="form-control">
                                </div>
                            </div>

                            <span class="text-success">
                                <?= $_SESSION['success'] ?? null ?>
                            </span>
                            <span class="text-danger">
                                <?= $_SESSION['error'] ?? null ?>
                            </span>

                            <button class="btn btn-primary btn-sm mt-3" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
include './include/footer.php';
unset($_SESSION['success']);
?>