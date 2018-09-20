<?php
require_once('../config/dbconnect.php');
$get_id=$_REQUEST['id'];
 $faculty = $_POST['faculty_id'];
 $dept = $_POST['department_name'];

 $stmt=$conn->prepare("UPDATE department SET faculty_id='$faculty',department_name='$dept' WHERE department_id='$get_id'");
 $stmt->execute();
 echo "<script>alert('Department Details Succesfully updated!'); window.location='departments.php'</script>";

?>