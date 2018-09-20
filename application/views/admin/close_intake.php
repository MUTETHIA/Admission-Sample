<?php
	
	header('Content-type: application/json; charset=UTF-8');

	$response = array();
	
	if ($_POST['close']) {
		
		require_once('../config/dbconnect.php'); ;
		$pid = ($_POST['close']);
		$query = "UPDATE admissiondates SET status='Closed' WHERE intake_id=:pid";
		$stmt = $conn->prepare( $query );
		$stmt->execute(array(':pid'=>$pid));
		
		if ($stmt) {
			$response['status']  = 'success';
			$response['message'] = 'Intake Closed Successfully...';
		} else {
			$response['status']  = 'error';
			$response['message'] = 'Unable to Close the Intake ...';
		}
		echo json_encode($response);
	}

    ?>