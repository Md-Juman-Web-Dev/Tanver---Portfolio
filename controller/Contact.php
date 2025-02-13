<?php 
session_start();
include_once "../database/db.php";
$name    = $_REQUEST['name'];
$email   = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
$errors  = [];

// validate for name
if(empty($name)){
   $errors['name_error'] = "Name is required";
}

// validate for email
if(empty($email)){
    $errors['email_error'] = "Email is required";
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email_error'] = "Invalid email format";
}

// validate for subject
if(empty($subject)){
    $errors['subject_error'] = "Subject is required";
}

// validate for message
if(empty($message)){
    $errors['message_error'] = "Message is required";
} 

// if no errors, send email
if(count($errors)>0){
    $_SESSION['errors'] = $errors;
    header("Location: ../index.php#contact");
}else{
   $query = "INSERT INTO client(name, email, subject, message) VALUES ('$name','$email','$subject','$message')";
   $reslut= mysqli_query($conn,$query);
   if($reslut){
      $_SESSION['sccess'] = 'Message Successfully Seed';
      header("Location: ../index.php#contact");
   }
}