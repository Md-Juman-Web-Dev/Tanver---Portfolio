<?php
session_start();
include '../database/db.php';
$name = $_REQUEST["name"];
$skill = $_REQUEST["skill"];
$cta = $_REQUEST['cta'];
$cover = $_FILES['banner_img'];
$extention = pathinfo($cover['name'])['extension'];
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
    if(!file_exists('../uploads/banners')){
        mkdir('../uploads/banners');
    }

    $filename = 'banner-' . uniqid() . ".$extention";
    $isupload = move_uploaded_file($cover["tmp_name"], '../uploads/banners/' .$filename);

    $query = "UPDATE banner SET name='$name',skills='$skill', img='$filename', cta_link='$cta' WHERE id='1'";
    $result = mysqli_query($conn, $query);
    $_SESSION['success']= 'Updated Successfully';
    $_SESSION['auth']['img'] = $filename;
    header('Location: ../admin/banner.php');
}