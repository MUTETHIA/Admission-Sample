<?php


    header('Content-type: application/json; charset=UTF-8');

    $response = array();

    if ($_POST['delete']) {

        require_once('../config/dbconnect.php');
        $pid = ($_POST['delete']);
        $query = "DELETE FROM announcements WHERE id=:pid";
        $stmt = $conn->prepare( $query );
        $stmt->execute(array(':pid'=>$pid));

        if ($stmt) {
            $response['status']  = 'success';
            $response['message'] = 'Announcement Deleted Successfully ...';
        } else {
            $response['status']  = 'error';
            $response['message'] = 'Unable to delete Announcement ...';
        }
        echo json_encode($response);
    }
    ?>