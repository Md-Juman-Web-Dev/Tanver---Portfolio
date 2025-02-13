<?php
session_start();
include '../database/db.php';
$clients = $_REQUEST['clients'];
$project = $_REQUEST['project'];
$support = $_REQUEST['support'];
$worker = $_REQUEST['worker'];
$errors=[];

if(empty( $clients )){
    $errors['client_error'] = "Field Shouldn't Remain Empty";
}
if(empty( $project )){
    $errors['project_error'] = "Field Shouldn't Remain Empty";
}
if(empty( $support )){
    $errors['support_error'] = "Field Shouldn't Remain Empty";
}
if(empty( $worker )){
    $errors['worker_error'] = "Field Shouldn't Remain Empty";
}

if(count($errors) > 0){
    $_SESSION['errors']= $errors;
    header('Location: ../admin/stats.php');
}else{
    $query = "UPDATE stats SET client='$clients',project='$project',support='$support',worker='$worker' WHERE id='1'";
    $result = mysqli_query($conn,$query);
    $_SESSION['success']='Data Updated Successfully';
    header('Location: ../admin/stats.php');
}

