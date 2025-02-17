<?php
session_start();
include '../database/db.php';

// Initialize variables
$project_id = $_REQUEST['id'] ?? null;
$project_name = $_REQUEST['name'];
$project_disc = $_REQUEST['disc'];
$project_client = $_REQUEST['client'];
$project_date = $_REQUEST['date'];
$project_category = $_REQUEST['category'];
$project_imgs = $_FILES['project_img'];
$errors = [];
$image_paths = [];
$upload_dir = '../uploads/portfolio';

//* Validation Checks
if (empty($project_name)) {
    $errors['name_error'] = 'Project Name Should Not Be Empty';
}
if (empty($project_disc)) {
    $errors['disc_error'] = 'Description Should Not Be Empty';
} elseif (strlen($project_disc) > 200 || strlen($project_disc) < 6) {
    $errors['disc_error'] = 'Description Too Long or Short';
}
if (empty($project_category)) {
    $errors['category_error'] = 'Please Select A Category';
}

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: ../admin/protfolio.php');
    exit();
}

//* Ensure Upload Directory Exists
if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

//* Handle Multiple File Uploads
if (!empty($_FILES['project_img']['name'][0])) {
    $image_paths = [];

    foreach ($_FILES['project_img']['name'] as $key => $name) {
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        $filename = 'portfolio-' . uniqid() . '.' . $ext;
        $file_path = $upload_dir . '/' . $filename;

        if (move_uploaded_file($_FILES['project_img']['tmp_name'][$key], $file_path)) {
            $image_paths[] = $filename; // Store only filename
        }
    }
}

// Convert array of image paths to comma-separated string
$image_paths_str = implode(',', $image_paths);

if ($project_id) {
    // Update existing project
    $query = "UPDATE portfolio SET 
              title='$project_name', category='$project_category', 
              client='$project_client', project_date='$project_date', 
              description='$project_disc', img='$image_paths_str' 
              WHERE id=$project_id";
} else {
    // Insert new project
    $query = "INSERT INTO portfolio (title, category, client, project_date, description, img) 
              VALUES ('$project_name', '$project_category', '$project_client', '$project_date', '$project_disc', '$image_paths_str')";
}

mysqli_query($conn, $query);

$_SESSION['success'] = 'Project saved successfully!';
header('Location: ../admin/protfolio.php');
exit();
