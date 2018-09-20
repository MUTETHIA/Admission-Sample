<?php
include_once('../config/dbconnect.php');

if(isset($_POST['cid'])) {
    // fetch state details
    $stmt = $conn->prepare("SELECT * FROM programmes WHERE qualification=:cid ORDER BY programme ASC");
    $stmt->execute(array(':cid' => $_POST['cid']));
    echo '<option value="">Select Programme Name</option>';
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['code'] . '">' . $row['programme'] . '</option>';
    }
}


if(isset($_POST['prog'])) {
    // fetch state details
    $stmt = $conn->prepare("SELECT * FROM programmes WHERE code=:prog");
    $stmt->execute(array(':prog' => $_POST['prog']));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
   // echo '<textarea name="requirements"  id="req" cols="30" rows="3">'.$row['programme'].'</textarea> ';
     while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['programme_req'];
    }
    //echo  $row['programme'];
}
?>