<?php
require_once('../config/dbconnect.php');
$get_id=$_REQUEST['id'];
  $startdate = $_POST['opendob'];
  $closedate = $_POST['closedob'];
  $semester = $_POST['semester'];
  $status = $_POST['status'];


 $stmt=$conn->prepare("UPDATE admissiondates SET academic_year='$semester',reportingdates='$startdate',latestReportDate='$closedate',status='$status' WHERE dateId='$get_id'");
  $stmt->execute();
  echo "<script>alert('Academic Details successfully updated!'); window.location='admissiondates.php'</script>";

?>