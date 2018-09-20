<?php
include_once('../config/dbconnect.php');

if(isset($_POST['fid'])) {
    // fetch state details
    $stmt = $conn->prepare("SELECT * FROM department WHERE faculty_id=:fid ORDER BY department_name ASC");
    $stmt->execute(array(':fid' => $_POST['fid']));
    echo '<option value="">Select Department Name</option>';
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['department_id'] . '">' . $row['department_name'] . '</option>';
    }
}


?>