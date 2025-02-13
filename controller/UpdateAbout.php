<?php
session_start();
include '../database/db.php';
$about_me = $_REQUEST['about'];
$profile_img = $_FILES['profile_img'];
$skill = $_REQUEST['skill'];
$skill_desc = $_REQUEST['skill_desc'];
$birth = $_REQUEST['birth'];
$age = $_REQUEST['age'];
$website = $_REQUEST['website'];
$degree = $_REQUEST['degree'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$city = $_REQUEST['city'];
$freelance = $_REQUEST['freelance'];
$bdesc = $_REQUEST['bdesc'];
$errors = [];

//*Image
define('MAX_UPLOAD_SIZE', 5000000);
define('ACCEPTED_EXTENSION', ['png', 'jpg', 'jpeg', 'svg']);
$extention = pathinfo($profile_img['name'])['extension'];

if($profile_img['size'] > 0){
    //*Validation For Image
    if($profile_img['size'] > MAX_UPLOAD_SIZE){
        $errors['profile_image_error'] = 'Please Select A File Under 5 mb';
    }else if(!in_array($extention, ACCEPTED_EXTENSION)){
        $errors['profile_image_error'] =  'Please Select File With ' . implode(', ', ACCEPTED_EXTENSION);
    }
}


if (empty($skill)) {
    $errors['skill_error'] = 'Field Not Should Remain Empty';
}

if (count($errors) > 0) {
    $_SESSION['errors'] = $errors;
    header('Location: ../admin/about.php');
} else {

    if($profile_img['size'] > 0){
        if(!file_exists('../uploads/users')){
            mkdir('../uploads/users');
        }

        $filename = 'user-' . uniqid() . ".$extention";
        $isupload = move_uploaded_file($profile_img["tmp_name"], '../uploads/users/' .$filename);

        $query = "UPDATE about 
        SET aboutme = '$about_me', 
            img='$filename',
            stitle = '$skill', 
            sdesc = '$skill_desc', 
            birth_date = '$birth', 
            age = '$age', 
            website = '$website', 
            degree = '$degree', 
            phone = '$phone', 
            email = '$email', 
            city = '$city', 
            freelance = '$freelance', 
            bdesc = '$bdesc' 
        WHERE id = '1'";
    }else{
        $query = "UPDATE about 
        SET aboutme = '$about_me', 
            stitle = '$skill', 
            sdesc = '$skill_desc', 
            birth_date = '$birth', 
            age = '$age', 
            website = '$website', 
            degree = '$degree', 
            phone = '$phone', 
            email = '$email', 
            city = '$city', 
            freelance = '$freelance', 
            bdesc = '$bdesc' 
        WHERE id = '1'";
    }
    $result = mysqli_query($conn, $query);
    $_SESSION['success'] = 'Details Updated Successfully';
    $_SESSION['auth']['img'] = $filename;
    header('Location: ../admin/about.php');
}