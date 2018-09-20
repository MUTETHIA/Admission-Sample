<?php
header('Content-type: application/json; charset=UTF-8');

    $response = array();

    if ($_POST['delete_upload']) {

        require_once('../config/dbconnect.php');
        $pid = ($_POST['delete_upload']);
        $query = "DELETE FROM tbl_payment WHERE id=:pid";

        $stmt = $conn->prepare( $query );
        $stmt->execute(array(':pid'=>$pid));
        //unlink($stmt);

        if ($stmt) {
            $response['status']  = 'success';
            $response['message'] = 'Document Deleted Successfully ...';
        } else {
            $response['status']  = 'error';
            $response['message'] = 'Unable to delete Department ...';
        }
        echo json_encode($response);
    }
?>