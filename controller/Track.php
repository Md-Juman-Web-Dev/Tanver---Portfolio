<?php
include_once(__DIR__ . '/../database/db.php');
// Get visitor IP
$ip_address = $_SERVER['REMOTE_ADDR'];


// Insert visit record
$stmt = $conn->prepare("INSERT INTO visitors (ip_address) VALUES (?)");
$stmt->bind_param("s", $ip_address);
$stmt->execute();