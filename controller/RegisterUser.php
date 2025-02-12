<?php
session_start();  
include_once '../database/db.php';
$fname = $_REQUEST['fname'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$cryptpassword = password_hash( $password, PASSWORD_DEFAULT );
$confirmpassword = $_REQUEST['confirm_password'];
$errors= [];

//*Validation For Full Name
if(empty($fname)){
    $errors['fname_error'] = 'Name Should Not Remain Empty';
}

//*Validation For Email
if(empty($email)){
    $errors['email_error'] = 'Email Address Should Not Remain Empty';
}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email_error'] = 'Invalid Email Address';
}else{
    $query = "SELECT email FROM admin WHERE email='$email'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)> 0){
        $errors['email_error'] = 'Email Address Already Exist';
    }
}

//*Validation For Password
if(empty($password)){
    $errors['password_error']= 'Password is Required';
}
if(empty($confirmpassword)){
    $errors['password_error'] = 'Retype The Password';
}
if($password != $confirmpassword){
    $errors['password_error'] = "Password Doesn't Matched";
}

//*Redirection
if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    header("Location: ../register.php");
}else{
    $query = "INSERT INTO admin(fname, email, password) VALUES ('$fname','$email','$$cryptpassword')";
    $result = mysqli_query($conn,$query);
    if($result){
        $_SESSION['auth'] = $_REQUEST;
        header('Location: ../admin/index.php');
    }

}