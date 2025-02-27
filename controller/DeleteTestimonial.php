<?php
include_once '../database/db.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid ID");
}

$id = intval($_GET['id']); // Convert to integer to avoid SQL injection

// Fetch the image name before deleting the record
$query = "SELECT img FROM testimonial WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

if ($row) {
    $imagePath = "../uploads/clients/" . $row['img'];

    // Delete the record from the database
    $deleteQuery = "DELETE FROM testimonial WHERE id = ?";
    $deleteStmt = mysqli_prepare($conn, $deleteQuery);
    mysqli_stmt_bind_param($deleteStmt, "i", $id);
    $deleteResult = mysqli_stmt_execute($deleteStmt);

    if ($deleteResult) {
        // Remove the image file if it exists
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        header("Location: ../admin/all-testimonial.php");
        exit();
    } else {
        echo "Error deleting record.";
    }
} else {
    echo "Record not found.";
}

mysqli_close($conn);
?>
