<?php
require_once('../config/dbconnect.php');
$get_id=$_REQUEST['id'];
 //$faculty = $_POST['faculty_id'];
 $fac = $_POST['faculty_name'];

 $stmt=$conn->prepare("UPDATE faculty SET faculty_name='$fac' WHERE faculty_id='$get_id'");
 $stmt->execute();
 echo "<script>alert('School Details Succesfully updated!'); window.location='add_schools.php'</script>";

?>