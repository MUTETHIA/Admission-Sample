<?php
require_once('../config/dbconnect.php');

$get_id=$_REQUEST['id'];

// sql to delete a record
$stmt = $conn->prepare("DELETE  FROM admissiondates WHERE intake_id='$get_id'");
$stmt->execute();
header('location:admissiondates');
?>