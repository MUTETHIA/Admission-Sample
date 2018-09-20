<?php
require_once('../config/dbconnect.php');
$get_id=$_REQUEST['id'];
 $faculty = $_POST['faculty_id'];
 $dept = $_POST['department_id'];
 $level = $_POST['Level_id'];
 $courseName = $_POST['Course_Name'];
 $creq = $_POST['course_req'];


 $stmt=$conn->prepare("UPDATE programmes SET faculty='$faculty',department='$dept',qualification='$level',programme='$courseName',programme_req='$creq',date_modified=NOW() WHERE code='$get_id'");
  $stmt->execute();
  echo "<script>alert('Course Details Succesfully updated!'); window.location='Degree_courses.php'</script>";

?>