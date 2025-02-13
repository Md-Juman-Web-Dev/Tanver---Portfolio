<?php
include '../database/db.php';
session_start();
$first_name = $_REQUEST["first_name"];
$email = $_REQUEST["email"];
$profile_img = $_FILES['profile_img'];
define('MAX_UPLOAD_SIZE', 5000000);
define('SUPPORTED_EXTENSIONS', ['png', 'jpg', 'jpeg', 'svg']);
$extention = pathinfo($profile_img['name'])['extension'];
$errors = [];

//*Validation For Name
if(empty($first_name)){
    $errors['fname_error'] = 'Name Should Not Remain Empty';
}

//*Validation For Email
if(empty($email)){
    $errors['email_error'] = 'Email Address Should Not Remain Empty';
}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email_error'] = 'Invalid Email Address';
}


//*Validation
if(($profile_img)){
    if($profile_img['size'] > MAX_UPLOAD_SIZE){
        $errors['profile_image_error'] = 'File Size Exceed';
    }else if(!in_array($extention, SUPPORTED_EXTENSIONS)){
        $errors['profile_image_error'] = 'File Type Not Supported Use ' . implode(', ', SUPPORTED_EXTENSIONS);
    }
}
//*Redirection
if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    header('Location: ../admin/profile.php');
}else{
    $id = $_SESSION['auth']['id'];
    if(($profile_img)){
        if(!file_exists('../uploads/admins')){
            mkdir('../uploads/admins');
        }
        $filename = 'admin-'. uniqid() . ".$extention";
        $isupload = move_uploaded_file($profile_img['tmp_name'], '../uploads/admins/'. $filename);
        $query = "UPDATE admin SET fname='$first_name',email='$email',img='$filename' WHERE id='$id'";
    }else{
        $query = "UPDATE admin SET fname='$first_name',email='$email' WHERE id='$id'";
    }
    $result = mysqli_query($conn,$query);
    $_SESSION['success'] = 'Details Updated Successfully';
    header('Location: ../admin/profile.php');
}






