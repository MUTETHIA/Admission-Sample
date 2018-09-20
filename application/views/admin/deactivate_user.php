<?php
require_once('../config/dbconnect.php');
 $get_id=$_REQUEST['id'];

 $stmt=$conn->prepare("UPDATE tblusers SET userStatus='N'  WHERE id='$get_id'");
  $stmt->execute();
  echo "<script>alert('User Succesfully Dactivated!'); window.location='registered_users.php'</script>";

?>