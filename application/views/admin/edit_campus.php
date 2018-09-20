<?php
require_once('../config/dbconnect.php');
$get_id=$_REQUEST['id'];
$code = $_POST['campus_code'];
 $name = $_POST['campus_name'];

 $stmt=$conn->prepare("UPDATE campuses SET code='$code', Campus_Name='$name' WHERE Campus_id='$get_id'");
 $stmt->execute();
 echo "<script>alert('Campus Details Succesfully updated!'); window.location='campus_setup.php'</script>";

?>