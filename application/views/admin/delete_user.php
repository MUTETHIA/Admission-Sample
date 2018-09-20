<?php
require_once('../config/dbconnect.php');
 $get_id=$_REQUEST['id'];

 $stmt=$conn->prepare("DELETE FROM tblusers  WHERE id='$get_id'");
  $stmt->execute();
  echo "<script>alert('User Succesfully Deleted!'); window.location='registered_users.php'</script>";

?>