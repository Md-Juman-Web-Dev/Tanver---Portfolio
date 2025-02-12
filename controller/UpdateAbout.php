<?php
session_start();
include '../database/db.php';
$about_me = $_REQUEST['about'];
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

if (empty($skill)) {
    $errors['skill_error'] = 'Field Not Should Remain Empty';
}

if (count($errors) > 0) {
    $_SESSION['errors'] = $errors;
    header('Location: ../admin/about.php');
} else {
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

    $result = mysqli_query($conn, $query);
    $_SESSION['success'] = 'Details Updated Successfully';
    header('Location: ../admin/about.php');
}