<?php
session_start();
include '../database/db.php';

$name = $_REQUEST['name'];
$occu = $_REQUEST['occu'];
$review = $_REQUEST['review'];
$image = $_FILES['profile_img'];
$errors = [];


//* Validation for Name
if(empty($name)){
    $errors['name_error'] = 'Client Name Required';

}
//* Validation for Occu
if(empty($occu)){
    $errors['occu_error'] = 'Client Occupation Required';
}

//* Validation for Review
if(empty($review)){
    $errors['review_error'] = 'Client Review Required';
}

$extention = pathinfo($image['name'])['extension'];
if(!file_exists('../uploads/clients')){
    mkdir('../uploads/clients');
}
$filename = 'clients-'. uniqid() . ".$extention";
$isupload = move_uploaded_file($image['tmp_name'], '../uploads/clients/'. $filename);

//*Redirection
if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    header('Location: ../admin/testimonial.php');
}else{
    $query = "INSERT INTO testimonial(name, occu, review, img) VALUES ('$name','$occu','$review','$filename')";
    $result = mysqli_query($conn, $query);

    if($result){
        header('Location: ../admin/testimonial.php');
        $_SESSION['success'] = 'Review Added Successfully';
    }
}
