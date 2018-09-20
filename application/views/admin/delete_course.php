<?php
header('Content-type: application/json; charset=UTF-8');

    $response = array();

    if ($_POST['delete_course']) {

        require_once('../config/dbconnect.php');
        $pid = ($_POST['delete_course']);
        $query = "DELETE FROM programmes WHERE code=:pid";
        $stmt = $conn->prepare( $query );
        $stmt->execute(array(':pid'=>$pid));

        if ($stmt) {
            $response['status']  = 'success';
            $response['message'] = 'Programme Deleted Successfully ...';
        } else {
            $response['status']  = 'error';
            $response['message'] = 'Unable to delete programme ...';
        }
        echo json_encode($response);
    }
?>