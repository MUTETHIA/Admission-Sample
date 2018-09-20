<?php
header('Content-type: application/json; charset=UTF-8');

    $response = array();

    if ($_POST['delete_department']) {

        require_once('../config/dbconnect.php');
        $pid = ($_POST['delete_department']);
        $query = "DELETE FROM department WHERE department_id=:pid";
        $stmt = $conn->prepare( $query );
        $stmt->execute(array(':pid'=>$pid));

        if ($stmt) {
            $response['status']  = 'success';
            $response['message'] = 'Department Deleted Successfully ...';
        } else {
            $response['status']  = 'error';
            $response['message'] = 'Unable to delete Department ...';
        }
        echo json_encode($response);
    }
?>