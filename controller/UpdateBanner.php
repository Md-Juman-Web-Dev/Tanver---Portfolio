<?php
session_start();
include '../database/db.php';
$name = $_REQUEST["name"];
$skill = $_REQUEST["skill"];
$errors=[];

if(empty( $name )){
    $errors['name_error'] = "Enter Name";
}
if(empty( $skill )){
    $errors['skill_error'] = "Enter Skills";
}

if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    header('Location: ../admin/banner.php');
}else{
    $query = "UPDATE banner SET name='$name',skills='$skill' WHERE id='1'";
    $result = mysqli_query($conn, $query);
    $_SESSION['success']= 'Text Updated Successfully';
    header('Location: ../admin/banner.php');
}