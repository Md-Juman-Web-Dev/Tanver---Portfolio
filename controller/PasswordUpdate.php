<?php
session_start();
include_once '../database/db.php';
$old_password = $_REQUEST['old_password'];
$new_password = $_REQUEST['new_password'];
$cryptpassword = password_hash($new_password, PASSWORD_DEFAULT);
$confirm_password = $_REQUEST['confirm_password'];
$errors = [];

//*Validation For Password
if(empty($old_password)){
    $errors['old_password']= 'Password is Required';
}
if(empty($new_password)){
    $errors['password'] = 'Retype The Password';
}
if($new_password != $confirm_password){
    $errors['confirm_password'] = "Password Doesn't Matched";
}

//*redirect
if(count($errors) > 0){
    $_SESSION['errors']= $errors;
    header("Location : ../admin/profile.php");
}else{
    $id = $_SESSION['auth']['id'];
    $query = "UPDATE admin SET password='$cryptpassword' WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    if($result){
        header('Location: ../admin/index.php');
    }
}