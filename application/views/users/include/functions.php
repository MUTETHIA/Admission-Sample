<?php

 $session_id= $_SESSION['user_session'];
 //view the course applied for
    $courseApplied = $conn ->prepare("SELECT course_levels.Level_Name, programmes.programme, applicants_course_details.*, campuses.Campus_Name
FROM course_levels INNER JOIN applicants_course_details ON (course_levels.Level_id = applicants_course_details.Level_id)
        INNER JOIN campuses ON (applicants_course_details.Campus = campuses.Campus_id)
        INNER JOIN programmes ON (programmes.qualification = course_levels.Level_id) AND (programmes.code = applicants_course_details.Course_id)WHERE (applicants_course_details.Email_Address=:uemail)");
$courseApplied ->execute(array(":uemail"=>$session_id));

//checking the uploaded files by the user
 $uploads=$conn->prepare("SELECT * FROM user_data WHERE email='$session_id'");
 $uploads->execute();
//personal data query in the applicant_details table details
  $applicant = $conn->prepare("SELECT * FROM applicants_details WHERE Email_Address=:uemail");
  $applicant->execute(array(":uemail"=>$session_id));
  $rowApp = $applicant->fetch(PDO::FETCH_ASSOC);
  $personalData =$applicant->rowCount();


  //select application-course details
  $app = $conn->prepare("SELECT * FROM applicants_course_details WHERE Email_Address=:uemail");
  $app->execute(array(":uemail"=>$session_id));
  $ticket = $app->fetch(PDO::FETCH_ASSOC);

//education background details queries regarding an applicants.
 $applicant_education = $conn->prepare("SELECT * FROM education_background  WHERE Email_Address=:uemail");
 $applicant_education->execute(array(":uemail"=>$session_id));
 $countApp=$applicant_education->rowCount();

//course applicants details queries regarding an applicants.
 $applicant_course = $conn->prepare("SELECT * FROM applicants_course_details  WHERE Email_Address=:uemail");
 $applicant_course->execute(array(":uemail"=>$session_id));
 $courseCount=$applicant_course->rowCount();

 //check on the applicant payments credibility and bar from proceeding.
 $payment = $conn->prepare("SELECT * FROM tbl_payment  WHERE email=:uemail");
 $payment->execute(array(":uemail"=>$session_id));
 $paymentcheck=$payment->rowCount();

$level = $conn->prepare("SELECT course_levels.Level_id,course_levels.Level_Name FROM course_levels INNER JOIN course_status ON (course_levels.Level_id = course_status.Level_id)
WHERE (course_status.Status =1)");
$level->execute();
$data=$level->fetchAll();

//collection of courses in their display
$courses=$conn->prepare("SELECT DISTINCT code,programme FROM programmes ");
$courses->execute();
$coursedata=$courses->fetchAll();


$result = $conn ->prepare("SELECT course_levels.Level_Name, programmes.programme
    , applicants_course_details.Mode_Of_Study,applicants_course_details.ticket, campuses.Campus_Name FROM
    programmes INNER JOIN course_levels ON (programmes.qualification = course_levels.Level_id)
    INNER JOIN applicants_course_details ON (applicants_course_details.Course_id = programmes.code) AND (applicants_course_details.Level_id = course_levels.Level_id)
    INNER JOIN campuses ON (applicants_course_details.Campus = campuses.Campus_id) WHERE (applicants_course_details.Email_Address=:uemail)");
$result ->execute(array(":uemail"=>$session_id));
//$row= $result->fetch(PDO::FETCH_ASSOC);


//Applicant tracking queries
$track = $conn->prepare("SELECT * FROM applicant_track WHERE Email_Address=:uemail");
$track->execute(array(":uemail"=>$session_id));
$rowtrack = $track->fetch(PDO::FETCH_ASSOC); 
?>