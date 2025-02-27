<?php
session_start();
include_once '../database/db.php';

$title = trim($_REQUEST['serviceTitle']);
$error = [];

// Validate title
if (empty($title)) {
    $error['title'] = "Enter a Title";
}

if (count($error) > 0) {
    $_SESSION['error'] = $error;
    header('Location: ../admin/services.php');
    exit();
} else {
    // Check if title already exists
    $query = "SELECT * FROM services_title LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Fetch existing data
        $res = mysqli_fetch_assoc($result);
        $query = "UPDATE services_title SET title = '$title' WHERE id = '{$res['id']}'";
    } else {
        $query = "INSERT INTO services_title (title) VALUES ('$title')";
    }

    if (mysqli_query($conn, $query)) {
        $_SESSION['updatedSuccessfully'] = "Service title updated successfully!";
        header('Location: ../admin/services.php');
        exit();
    } else {
        echo "Title not updated: " . mysqli_error($conn);
    }
}
?>