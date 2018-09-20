<?php
require_once('../config/dbconnect.php');
require_once( '../library/mpdf.php');
 $sem = $_GET['intake'];
 //$intake =  $_GET['intake'];
$check = $conn->prepare("SELECT programmes.code, programmes.programme, faculty.faculty_name, course_levels.Level_Name, campuses.Campus_Name, admissiondates.intake_name
FROM applicants_course_details INNER JOIN programmes ON (applicants_course_details.Course_id = programmes.code)
    INNER JOIN faculty ON (programmes.faculty = faculty.faculty_id) INNER JOIN course_levels ON (programmes.qualification = course_levels.Level_id)
    INNER JOIN campuses ON (applicants_course_details.Campus = campuses.Campus_id)
    INNER JOIN admissiondates ON (applicants_course_details.intake = admissiondates.intake_id)
     WHERE (applicants_course_details.intake =$sem)");
$check->execute();
//$semname=$check->fetch(PDO::FETCH_ASSOC);
$name=$conn->prepare("SELECT programmes.code, programmes.programme, faculty.faculty_name, course_levels.Level_Name, campuses.Campus_Name, admissiondates.intake_name
FROM applicants_course_details INNER JOIN programmes ON (applicants_course_details.Course_id = programmes.code)
    INNER JOIN faculty ON (programmes.faculty = faculty.faculty_id) INNER JOIN course_levels ON (programmes.qualification = course_levels.Level_id)
    INNER JOIN campuses ON (applicants_course_details.Campus = campuses.Campus_id)
    INNER JOIN admissiondates ON (applicants_course_details.intake = admissiondates.intake_id)
     WHERE (applicants_course_details.intake =$sem)");
$name->execute();
$semname=$name->fetch(PDO::FETCH_ASSOC);
$intname=$semname['intake_name'];
$stylesheet = file_get_contents('../assets/css/pdfLayout.css');
// Setup PDF
date_default_timezone_set('Africa/Nairobi');
$d=new DateTime();
$dat=$d->format('d-m-y  h:i:s a');
$year=date('Y');
 $sid="1234567";
//$mpdf = new mPDF('utf-8', 'A4',0,0,5,5,15,16,4,9,'P');
$mpdf = new mPDF('utf-8', 'A4',0,'',5,10,15,16,4,9,'P');
$mpdf->SetDisplayMode(real,'default');

require_once ('include/functions.php');
//include_once 'dbqueries.php';
//$mpdf->showWatermarkText = true;
//$mpdf->WriteHTML('<watermarktext content="MMUST" alpha="0.1" />');
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
<h3 style="padding-top:0px; padding-left:4%; ">MASINDE MULIRO UNIVERSITY OF SCIENCE & TECHNOLOGY </h3>
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
                     <h3>PROGRAMMES APPLIED '.$intname.' INTAKE</h3>
                      </div>

           <div class="row-fluid " style="padding-left:10%; padding-right:-5%;">
                          <table class="table table-bordered">
                                     <thead>
                                     <tr>
                                          <th>Serial</th>
                                         <th>Code</th>
                                         <th>Programme</th>
                                         <th>School Name</th>
                                         <th>Campus</th>
                                     </tr>
                                     </thead>
                                     <tbody>';

                              	for($i=1;$row=$check->fetch(PDO::FETCH_ASSOC);$i++)
		                           {
                                       $html.= '<tr>
                                        <td>'.$i.'</td>
                                       <td>'.$row['code'].'</td>
                                       <td>'.$row['programme'].'</td>
                                        <td>'.$row['faculty_name'].'</td>
                                        <td>'.$row['Campus_Name'].'</td>

                                       </tr>
                                       ';

                                     }
                                $html .='</tbody>
                                     </table>


 </p>


              </div> </div>  </body>
           </html>';

$mpdf->WriteHTML($html,2); // Writing html to pdf

//$mpdf->Output(); // For sending Output to browser
$mpdf->Output('Programme Applied List.pdf','I'); // For Download
exit;
?>