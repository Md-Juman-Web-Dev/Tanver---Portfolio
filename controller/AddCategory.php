<?php
session_start();
include '../database/db.php';
$category = $_REQUEST['category'];
$errors = [];

//*Validation
if(empty($category)) {
    $errors['category_error'] = 'Category Name Should Not Remain Empty';
}

//*Redirect
if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    header('Location: ../admin/protfolio.php');
}else{
    $query = "INSERT INTO category(name) VALUES ('$category')";
    $result = mysqli_query($conn, $query);
    if($result){
        $_SESSION['success'] = 'Category Added Successfully';
        header('Location: ../admin/protfolio.php');
    }
}
