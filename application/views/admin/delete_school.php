<?php
header('Content-type: application/json; charset=UTF-8');

    $response = array();

    if ($_POST['delete_faculty']) {

        require_once('../config/dbconnect.php');
        $pid = ($_POST['delete_faculty']);
        $query = "DELETE FROM faculty WHERE faculty_id=:pid";
        $stmt = $conn->prepare( $query );
        $stmt->execute(array(':pid'=>$pid));

        if ($stmt) {
            $response['status']  = 'success';
            $response['message'] = 'Faculty Deleted Successfully ...';
        } else {
            $response['status']  = 'error';
            $response['message'] = 'Unable to delete Faculty ...';
        }
        echo json_encode($response);
    }
?>