<?php
require_once('../config/dbconnect.php');
require_once( '../library/mpdf.php');
 $intake =$_GET['intake'];
 $school = $_GET['school'];

 $check = $conn->prepare("SELECT applicants_details.*, applicants_course_details.Mode_Of_Study, programmes.programme, admissiondates.intake_name,campuses.Campus_Name
FROM applicants_course_details
    INNER JOIN applicants_details ON (applicants_course_details.Email_Address = applicants_details.Email_Address)
    INNER JOIN programmes ON (applicants_course_details.Course_id = programmes.code)
    INNER JOIN admissiondates ON (applicants_course_details.intake = admissiondates.intake_id)
    INNER JOIN campuses ON (applicants_course_details.Campus = campuses.Campus_id)
WHERE ( applicants_course_details.intake=$intake
AND applicants_course_details.faculty_id =$school)");
       $check->execute();
$rowcheck = $check->rowCount();
//$semname=$check->fetch(PDO::FETCH_ASSOC);


       $check2 = $conn->prepare("SELECT applicants_details.*, applicants_course_details.Mode_Of_Study, programmes.programme, admissiondates.intake_name,faculty.faculty_name,campuses.Campus_Name
FROM applicants_course_details
    INNER JOIN applicants_details ON (applicants_course_details.Email_Address = applicants_details.Email_Address)
    INNER JOIN programmes ON (applicants_course_details.Course_id = programmes.code)
    INNER JOIN admissiondates ON (applicants_course_details.intake = admissiondates.intake_id)
    INNER JOIN faculty ON (applicants_course_details.faculty_id = faculty.faculty_id)
    INNER JOIN campuses ON (applicants_course_details.Campus = campuses.Campus_id)
WHERE (applicants_course_details.intake=$intake
AND applicants_course_details.faculty_id =$school)");
       $check2->execute();
       $name=$check2->fetch(PDO::FETCH_ASSOC);

$stylesheet = file_get_contents('../assets/css/pdfLayout.css');
// Setup PDF
date_default_timezone_set('Africa/Nairobi');
$d=new DateTime();
$dat=$d->format('d/m/y  h:i:s a');
$year=date('Y');
 $sid="1234567";
//$mpdf = new mPDF('utf-8', 'A4',0,0,5,5,15,16,4,9,'P');
$mpdf = new mPDF('utf-8', 'A4',0,'',5,10,15,16,4,9,'P');
$mpdf->SetDisplayMode(real,'default');

require_once ('include/functions.php');
//include_once 'dbqueries.php';

$mpdf->setAutoTopMargin = 'stretch';
$mpdf->setAutoBottomMargin = 'stretch';

$mpdf->SetHTMLFooter('<div class="pdf-footer">
<strong>Disclaimer :</strong> <i>This is a system generated report and does not require signature.</i>
<hr>
<i>Generated and Printed on '.$dat.' </i>
</div>');

$mpdf->WriteHTML($stylesheet,1);
$html='
  <html>
<body> <div class="container" >
             <div class="row-fluid "  >
              <img src="../images/logo.png" style="padding-left:39%" alt="School Logo" class="logo" width="120" height="100"/>
<h3 style="padding-top:0px; padding-left:18%; ">MASINDE MULIRO UNIVERSITY OF SCIENCE & TECHNOLOGY </h3>
            <h4 style="padding-left:26%;">Office of the Registrar, Academics Affairs</h4>
              </div>
              <div class="row-fluid"  style="padding-left:10%; padding-right:-5%;">
           <div class="span6 pull-left" style="text-align:left;margin-top:-20px;"><br/>
           Tel. No: 020-2063540 <br/>
           Email: <u> info@mmust.ac.ke</u><br/>
           Website: <u>www.mmust.ac.ke</u><br/>
           </div>

           <div class="span6" style="text-align:left; padding-left:74%; margin-top:-65px; ">P.O Box 190 <br/>
                                               Kakamega-50100 <br/>
                                               Kenya.<br/>
           </div>
           </div>
           <div class=" row-fluid1"  style="padding-left:10%; padding-right:-5%;">
                      <hr/>  </div>
           <div class=" row-fluid1"  style="padding-left:10%; padding-right:-5%;">
                     <h3>PROGRAMMES APPLIED IN '.$name['faculty_name'].' INTAKE AT '.$name['intake_name'].'</h3>
                      </div>

           <div class="row-fluid " style="padding-left:10%; padding-right:-5%;">
                          <table class="table table-bordered">
                                     <thead>
                                     <tr>
                                           <th>S/N</th>
                                                            <th>Email Address</th>
                                                            <th>Full Name</th>

                                                            <th>Mobile</th>
                                                              <th>Study Mode</th>
                                                             <th>Programme Name</th>
                                                             <th>Intake Name</th>
                                                             <th>Campus</th>
                                     </tr>
                                     </thead>
                                     <tbody>';
                                      if($rowcheck>0){

                              	for($i=1;$row=$check->fetch(PDO::FETCH_ASSOC);$i++)
		                           {
                                       $html.= '<tr>
                                        <td>'.$i.'</td>
                                       <td>'.$row['Email_Address'].'</td>
                                       <td>'.$row['First_Name'].' '.$row['Last_Name'].'</td>
                                        <td>'.$row['Mobile'].'</td>
                                        <td>'.$row['Mode_Of_Study'].'</td>
                                        <td>'.$row['programme'].'</td>
                                        <td>'.$row['intake_name'].'</td>
                                        <td>'.$row['Campus_Name'].'</td>
                                       </tr>';
                                     }

                                      }
                                      else{
                                         $html.= '<tr cols="4">
                                        <td>SORRY NO RECORD SO FAR</td>

                                       </tr>';
                                      }
                                $html .='</tbody>
                                     </table>


 </p>
              </div> </div>  </body>
           </html>';

$mpdf->WriteHTML($html,2); // Writing html to pdf

//$mpdf->Output(); // For sending Output to browser
$mpdf->Output('School_Intake List.pdf','I'); // For Download
exit;
?>