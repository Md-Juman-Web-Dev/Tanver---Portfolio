<?php
session_start();
include_once '../database/db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Ensure ID is an integer

    $query = "SELECT image FROM services WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $service = mysqli_fetch_assoc($result);

    if ($service) {
        $imagePath = '../uploads/services/' . $service['image'];
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $deleteQuery = "DELETE FROM services WHERE id = ?";
        $stmt = mysqli_prepare($conn, $deleteQuery);
        mysqli_stmt_bind_param($stmt, "i", $id);
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['success'] = "Service deleted successfully!";
        } else {
            $_SESSION['error'] = "Failed to delete service!";
        }
    } else {
        $_SESSION['error'] = "Service not found!";
    }
} else {
    $_SESSION['error'] = "Invalid request!";
}

header("Location: ../admin/services.php");
exit();
?>