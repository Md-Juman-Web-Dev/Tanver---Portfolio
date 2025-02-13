<?php
session_start();
include '../database/db.php';
$twitter = $_REQUEST['twitter'];
$facebook = $_REQUEST['facebook'];
$instagram = $_REQUEST['instagram'];
$skype = $_REQUEST['skype'];
$linkedin = $_REQUEST['linkedin'];
$errors = [];


if(empty($facebook)){
    $errors['f_error'] = 'Field Should Not Remain Empty';
}


if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    header('Location: ../admin/scoial-links.php');
}else{
    $query = "UPDATE social_links SET twitter='$twitter',facebook='$facebook',instagram='$instagram',skype='$skype',linkedin='$linkedin' WHERE id='1'";
    $result = mysqli_query($conn, $query);
    $_SESSION['success']= 'Details Updated Successfully';
    header('Location: ../admin/social-links.php');
}
