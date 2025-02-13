<?php
session_start();
include '../database/db.php';

$desc = $_REQUEST['desc'];
$skill1 = $_REQUEST['skill1'];
$skill2 = $_REQUEST['skill2'];
$skill3 = $_REQUEST['skill3'];
$skill4 = $_REQUEST['skill4'];
$skill5 = $_REQUEST['skill5'];
$skill6 = $_REQUEST['skill6'];
$percentage1 = $_REQUEST['percentage1'];
$percentage2 = $_REQUEST['percentage2'];
$percentage3 = $_REQUEST['percentage3'];
$percentage4 = $_REQUEST['percentage4'];
$percentage5 = $_REQUEST['percentage5'];
$percentage6 = $_REQUEST['percentage6'];

$query = "UPDATE skills SET
disc='$desc', skill1='$skill1', skill2='$skill2',
skill3='$skill3', skill4='$skill4', skill5='$skill5',
skill6='$skill6', percentage1='$percentage1', percentage2='$percentage2',
percentage3='$percentage3', percentage4='$percentage4', percentage5='$percentage5',
percentage6='$percentage6' WHERE id='1'";

$result = mysqli_query($conn, $query);

if ($result) {
    $_SESSION['success'] = 'Updated Successfully';
} else {
    $_SESSION['error'] = 'Update Failed: ' . mysqli_error($conn);
}

header('Location: ../admin/skills.php');
exit;
