<?php
//manage announcements
$viewAnnounce=$conn->prepare("SELECT * FROM announcements ORDER BY id DESC");
    $viewAnnounce->execute();

//manage programes
$programmes=$conn->prepare("SELECT programmes.*, department.department_name, faculty.faculty_name, course_levels.Level_Name
FROM programmes INNER JOIN department ON (programmes.department = department.department_id) INNER JOIN faculty
        ON (department.faculty_id = faculty.faculty_id) AND (programmes.faculty = faculty.faculty_id)
    INNER JOIN course_levels ON (programmes.qualification = course_levels.Level_id) ORDER BY programmes.code ASC");
$programmes->execute();

//count all courses
$all=$conn->prepare("SELECT * FROM programmes") ;
$all->execute();
$rowall=$all->rowCount();

//select the number of applicants applied so far
$totalapp =$conn->prepare("SELECT * FROM applicants_course_details");
$totalapp->execute();
$rownumber=$totalapp->rowCount();

//Get the total number of applicants in degree level
$totaldegree=$conn->prepare("SELECT * FROM applicants_course_details WHERE Level_id=3");
$totaldegree->execute();
$degreenumber=$totaldegree->rowCount();

//Get the total number of applicants in diploma level
$totaldiploma=$conn->prepare("SELECT * FROM applicants_course_details WHERE Level_id=4");
$totaldiploma->execute();
$diplomanumber=$totaldiploma->rowCount();

//Get the total number of applicants in certificate level
$totalcertificate=$conn->prepare("SELECT * FROM applicants_course_details WHERE Level_id=5");
$totalcertificate->execute();
$certificatenumber=$totalcertificate->rowCount();

//department fetch all
$department=$conn->prepare("SELECT * FROM department");
$department->execute();

 //Select all the course levels
 $courrselevels=$conn->prepare("SELECT * FROM course_levels");
 $courrselevels->execute();

 //select the administration levels
 $admlevels = $conn->prepare("SELECT * FROM user_groups");
 $admlevels->execute();

//start of degree count
 $deg=$conn->prepare("SELECT programmes.*, course_levels.Level_Name, faculty.faculty_name
FROM programmes INNER JOIN course_levels ON (programmes.qualification = course_levels.Level_id)
    INNER JOIN faculty ON (programmes.faculty = faculty.faculty_id) WHERE (programmes.qualification =3)");
 $deg->execute();
 $rowdeg=$deg->rowCount();

 //degree edit functions

//diploma count
$dip=$conn->prepare("SELECT programmes.*,course_levels.Level_Name, faculty.faculty_name
FROM programmes INNER JOIN course_levels ON (programmes.qualification = course_levels.Level_id)
    INNER JOIN faculty ON (programmes.faculty = faculty.faculty_id) WHERE (programmes.qualification =4)");
$dip->execute();
$rowdip=$dip->rowCount();

//count certificate courses
 $cert=$conn->prepare("SELECT programmes.*,course_levels.Level_Name, faculty.faculty_name
FROM programmes INNER JOIN course_levels ON (programmes.qualification = course_levels.Level_id)
    INNER JOIN faculty ON (programmes.faculty = faculty.faculty_id) WHERE (programmes.qualification =5)");
 $cert->execute();
 $rowcert=$cert->rowCount();

 //count the users
 $users=$conn->prepare("SELECT * FROM tblusers");
 $users->execute();
 $rowusers=$users->rowCount();

 $faculty=$conn->prepare("SELECT * FROM faculty ORDER BY faculty_name ASC");
 $faculty->execute();
 //$data=$faculty->fetchAll();


//view the degree applicants
 $viewDegApplicant=$conn->prepare("SELECT applicants_course_details.Email_Address, applicants_details.First_Name,applicants_details.Last_Name, applicants_details.Mobile, programmes.programme
FROM applicants_course_details INNER JOIN applicants_details ON (applicants_course_details.Email_Address = applicants_details.Email_Address)
    INNER JOIN programmes ON (applicants_course_details.Course_id = programmes.code) WHERE (applicants_course_details.Level_id =3);");
$viewDegApplicant->execute();

//view the diploma applicants
 $viewDipApplicant=$conn->prepare("SELECT applicants_course_details.Email_Address, applicants_details.First_Name,applicants_details.Last_Name, applicants_details.Mobile, programmes.programme
FROM applicants_course_details INNER JOIN applicants_details ON (applicants_course_details.Email_Address = applicants_details.Email_Address)
    INNER JOIN programmes ON (applicants_course_details.Course_id = programmes.code) WHERE (applicants_course_details.Level_id =4);");
$viewDipApplicant->execute();

 //view the certificate applicants
 $viewCertApplicant=$conn->prepare("SELECT applicants_course_details.Email_Address, applicants_details.First_Name,applicants_details.Last_Name, applicants_details.Mobile, programmes.programme
FROM applicants_course_details INNER JOIN applicants_details ON (applicants_course_details.Email_Address = applicants_details.Email_Address)
    INNER JOIN programmes ON (applicants_course_details.Course_id = programmes.code) WHERE (applicants_course_details.Level_id =5);");
$viewCertApplicant->execute();


//view all applicants
 $viewAllApplicant=$conn->prepare("SELECT applicants_course_details.Email_Address, applicants_details.First_Name,applicants_details.Last_Name, applicants_details.Mobile, programmes.programme
FROM applicants_course_details INNER JOIN applicants_details ON (applicants_course_details.Email_Address = applicants_details.Email_Address)
    INNER JOIN programmes ON (applicants_course_details.Course_id = programmes.code)");
$viewAllApplicant->execute();

//view all applicants
 $viewSuccessfulApplicant=$conn->prepare("SELECT
    applicants_details.*, programmes.programme,applicant_track.department_status, applicant_track.faculty_status,applicants_course_details.*,campuses.Campus_Name
    FROM applicants_course_details
    INNER JOIN applicants_details ON (applicants_course_details.Email_Address = applicants_details.Email_Address)
    INNER JOIN applicant_track ON (applicant_track.Email_Address = applicants_details.Email_Address)
    INNER JOIN programmes ON (applicants_course_details.Course_id = programmes.code)
    INNER JOIN campuses ON (applicants_course_details.Campus = campuses.Campus_id)
WHERE (applicant_track.department_status =1
    AND applicant_track.faculty_status =1)");
$viewSuccessfulApplicant->execute();


//view all applicants
 $viewDeclinedApplicant=$conn->prepare("SELECT
    applicants_details.Email_Address, applicants_details.First_Name, applicants_details.Last_Name
    , applicants_details.Mobile, programmes.programme,applicant_track.department_status, applicant_track.faculty_status,applicants_course_details.ticket FROM applicants_course_details
    INNER JOIN applicants_details ON (applicants_course_details.Email_Address = applicants_details.Email_Address)
    INNER JOIN applicant_track ON (applicant_track.Email_Address = applicants_details.Email_Address)
    INNER JOIN programmes ON (applicants_course_details.Course_id = programmes.code)
WHERE (applicant_track.department_status =2 OR applicant_track.faculty_status =2)");
$viewDeclinedApplicant->execute();

//manage the admission section
$manage=$conn->prepare("SELECT applicants_details.*, applicants_details.Mobile, programmes.programme, applicant_track.department_status, applicant_track.faculty_status
    , applicant_track.registrar_status,campuses.Campus_Name FROM applicants_course_details
    INNER JOIN applicants_details ON (applicants_course_details.Email_Address = applicants_details.Email_Address)
    INNER JOIN applicant_track ON (applicant_track.Email_Address = applicants_details.Email_Address)
    INNER JOIN programmes ON (applicants_course_details.Course_id = programmes.code)
    INNER JOIN campuses ON (applicants_course_details.Campus = campuses.Campus_id)");
    $manage->execute();
?>