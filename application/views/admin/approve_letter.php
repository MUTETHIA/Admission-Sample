<?php
	
	header('Content-type: application/json; charset=UTF-8');

	$response = array();

	if ($_POST['approve']) {
		
		require_once('../config/dbconnect.php'); ;
		$pid = ($_POST['approve']);

		$query = "UPDATE applicant_track SET registrar_status=1 WHERE Email_Address=:pid";
		$stmt = $conn->prepare( $query );
		$stmt->execute(array(':pid'=>$pid));


		if ($stmt) {
			$response['status']  = 'success';
			$response['message'] = 'Applicant Admission Letter Generated...';
		} else {
			$response['status']  = 'error';
			$response['message'] = 'Unable to Generate the Applicant ...';
		}
		echo json_encode($response);
	}

    ?>