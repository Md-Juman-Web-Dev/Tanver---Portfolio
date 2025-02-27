<?php
session_start();
include_once "../database/db.php";

$name = trim($_REQUEST['name']);
$description = trim($_REQUEST['description']);
$image = $_FILES['image'];

define('SELECTED_EXTENSION', ['png', 'jpg', 'jpeg']);
$errors = [];


// Validate name
if (empty($name)) {
    $errors['name_error'] = "Name is required";
}

// Validate description
if (empty($description)) {
    $errors['description_error'] = "Description is required";
}

// Validate image
if ($image['error'] == 4) { 
    $errors['image_error'] = "Image is required";
} elseif ($image['size'] > 0) {
    $extension = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));

    if (!in_array($extension, SELECTED_EXTENSION)) {
        $errors['image_error'] = 'Only PNG, JPG, and JPEG files are allowed.';
    } else {
        $fileName = 'service-' . uniqid() . '.' . $extension;
        $filePath = '../uploads/services';

        if (!file_exists($filePath)) {
            mkdir($filePath, 0777, true);
        }

        if (move_uploaded_file($image['tmp_name'], $filePath . '/' . $fileName)) {
            $uploadedImage = $fileName;
        } else {
            $errors['upload_error'] = 'File upload failed!';
        }
    }
}

if (count($errors) > 0) {

    $_SESSION['old'] = $_REQUEST;
    $_SESSION['errors'] = $errors;
    header('Location: ../admin/services.php');
    exit();
} else {
    $addImageQuery = "INSERT INTO services ( sarvice_name, sarvice_description, image) 
                      VALUES ( '$name', '$description', '$uploadedImage')";

    if (mysqli_query($conn, $addImageQuery)) {
        $_SESSION['addSuccessfully'] = "Service added successfully!";
        header('Location: ../admin/services.php');
        exit();
    } else {
        $_SESSION['errors']['db_error'] = "Database error: " . mysqli_error($conn);
        header('Location: ../admin/services.php');
        exit();
    }
}
?>