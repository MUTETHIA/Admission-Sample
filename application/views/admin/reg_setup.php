<?php
require_once('../config/dbconnect.php');
if(isset($_POST['insert'])){
  $reg = $_POST['reg'];

  $sql=$conn->prepare("INSERT INTO reg_generator (reg_id) VALUES('$reg')");
  $sql->execute();
  echo "<script>alert('Registration Details successfully Setup!'); window.location='dashboard'</script>"; 
}

?>