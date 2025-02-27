<?php 
include_once'../database/db.php';
$id = $_REQUEST['id'];
$query = "DELETE FROM portfolio WHERE id='$id'";
$result = mysqli_query( $conn,$query);

if($result){
   header ("location: ../admin/all-protfolio.php");
};