<?php 

session_start();
$resume=$_REQUEST['resume'];
$description=$_REQUEST['description'];
$title=$_REQUEST['title'];
$present=$_REQUEST['present'];
$experion=$_REQUEST['experion'];
$labelOne=$_REQUEST['label-1'];
$labelTwo=$_REQUEST['label-2'];
$labelThree=$_REQUEST['label-3'];
$errors = [];


//*Validate for Resume
if(empty($resume)){
    $errors['resume_error'] = 'Resume Should Not Remain Empty';
}

//*Validation For Description
if(empty($description)){
    $errors['description_error'] = 'Description Should Not Remain Empty';
}

//*Validation For Title
if(empty($title)){
    $errors['title_error'] = 'Title Should Not Remain Empty';
}

//*Validation For Present
if(empty($present)){
    $errors['present_error'] = 'Present Should Not Remain Empty';
}

//*Validation For Experion
if(empty($experion)){
    $errors['experion_error'] = 'Experion Should Not Remain Empty';
}

//*Validation For Labels
if(empty($labelOne)){
    $errors['labelOne_error'] = 'Label 1 Should Not Remain Empty';
}

if(empty($labelTwo)){
    $errors['labelTwo_error'] = 'Label 2 Should Not Remain Empty';
}

if(empty($labelThree)){
    $errors['labelThree_error'] = 'Label 3 Should Not Remain Empty';
}

//If No Errors then Save to Database

if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    header('Location: ../admin/sumary.php');
}else{
    include '../database/db.php';
   $query ="UPDATE sumary SET resume='$resume',description='$description',title='$title',present='$present',experion='$experion',labelOne='$labelOne',labelTwo='$labelTwo',labelThree='$labelThree' WHERE id= '1'";
    $result = mysqli_query($conn, $query);
    
    if($result){

       header('Location: ../admin/sumary.php');
    }
}