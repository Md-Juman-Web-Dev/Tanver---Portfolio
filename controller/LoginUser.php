<?php
session_start();
include_once '../database/db.php';
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$errors=[];

//*Validation For Email
if(empty($email)){
    $errors['email_error'] = 'Email Address Should Not Remain Empty';
}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email_error'] = 'Invalid Email Address';
}

//*Validation For Password
if(empty($password)){
    $errors['password_error']= 'Password is Required';
}

//*Login System
$query = "SELECT * FROM admin WHERE email= '$email'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) == 0){
    $errors["email_error"] = "Invalid Email Address Or Password";
}else{
    $user = mysqli_fetch_assoc($result);
    // print_r($user);
    // exit();
    if(password_verify($password, $user["password"])){
        $errors["password_error"] = "Invalid Email Address Or Password";
    }
}

//*Redirection
if(count($errors) > 0){
    $_SESSION['errors']= $errors;
    header('Location: ../login.php');
}else{
    $_SESSION['auth'] = $user;
    header('Location: ../admin/index.php');
}