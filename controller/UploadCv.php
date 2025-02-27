<?php
session_start();
include '../database/db.php';

if (isset($_POST['upload_cv'])) {
    $target_dir = "../uploads/";
    $file_name = basename($_FILES["cv"]["name"]);
    $target_file = $target_dir . $file_name;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allow only PDF files
    if ($fileType != "pdf") {
        die("Only PDF files are allowed.");
    }

    // Upload file
    if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file)) {
        // Save to database
        $query = "UPDATE cv_uploads SET cv_file='$file_name' WHERE id=1";
        mysqli_query($conn, $query);
        header('Location: ../admin/cv.php');
    } else {
        echo "Error uploading file.";
    }
}
?>
