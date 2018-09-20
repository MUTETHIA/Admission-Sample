<?php
    header('Content-type: application/json; charset=UTF-8');

    $response = array();

    if ($_POST['delete']) {

        require_once('../config/dbconnect.php');
        $pid = ($_POST['delete']);
        $query = "DELETE FROM campuses WHERE Campus_id=:pid";
        $stmt = $conn->prepare( $query );
        $stmt->execute(array(':pid'=>$pid));

        if ($stmt) {
            $response['status']  = 'success';
            $response['message'] = 'Campus Deleted Successfully ...';
        } else {
            $response['status']  = 'error';
            $response['message'] = 'Unable to delete Campus ...';
        }
        echo json_encode($response);
    }
    ?>