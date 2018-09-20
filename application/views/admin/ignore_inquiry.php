<?php

    header('Content-type: application/json; charset=UTF-8');

    $response = array();

    if ($_POST['ignore_response']) {

        require_once('../config/dbconnect.php'); ;
        $pid = ($_POST['ignore_response']);
        $query = "UPDATE inquiries SET Reply='Ignored',Reply_Date=NOW() WHERE id=:pid";
        $stmt = $conn->prepare( $query );
        $stmt->execute(array(':pid'=>$pid));

        if ($stmt) {
            $response['status']  = 'success';
            $response['message'] = 'Applicant Successfully Approved...';
        } else {
            $response['status']  = 'error';
            $response['message'] = 'Unable to Approve the Applicant ...';
        }
        echo json_encode($response);
    }

    ?>