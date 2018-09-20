<?php
require_once('../config/dbconnect.php');
$id= $_GET['id'];
//if(isset($_POST['insert'])){
    //$reg = $_POST['reg'];

    $sql=$conn->prepare("UPDATE applicant_track SET department_status = 0,faculty_status = 0 WHERE Email_Address = '$id' ");
    $sql->execute();
    echo "<script>alert('Reset successfully Completed!'); window.location='unqualifiedApplicants'</script>";
//}

?>