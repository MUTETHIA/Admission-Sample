<?php
require_once('../config/dbconnect.php');
 $get_id=$_REQUEST['id'];

 $stmt=$conn->prepare("UPDATE tblusers SET userStatus='Y'  WHERE id='$get_id'");
  $stmt->execute();
  echo "<script>alert('User Succesfully Activated!'); window.location='registered_users.php'</script>";

?>