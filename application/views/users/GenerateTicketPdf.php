<?php
require_once( '../library/mpdf.php');
$stylesheet = file_get_contents('../assets/css/pdfLayout.css');
// Setup PDF
date_default_timezone_set('Africa/Nairobi');
$d=new DateTime();
$dat=$d->format('d/m/y  h:i:s a');
$sid="1234567";
//$mpdf = new mPDF('utf-8', 'A4',0,0,5,5,15,16,4,9,'P');
$mpdf = new mPDF('utf-8', 'A4',0,'',5,10,15,16,4,9,'P');
$mpdf->SetDisplayMode(real,'default');
require_once('../config/dbconnect.php');
require_once('../inc/session2.php');
require_once('include/functions.php');
//$mpdf->showWatermarkText = true;
//$mpdf->WriteHTML('<watermarktext content="MMUST" alpha="0.1" />');
$mpdf->setAutoTopMargin = 'stretch';
$mpdf->setAutoBottomMargin = 'stretch';
$fullname= $row['fname'];
$mpdf->SetHTMLFooter('<div class="pdf-footer">
<strong>Disclaimer :</strong> <i>This is a system generated report Form and does not require signature.</i>
<hr>
<i>Generated and Printed on '.$dat.' </i>
</div>');

$mpdf->WriteHTML($stylesheet,1);
$html='
  <html>
<body> <div class="container" >
<div class="row-fluid">
<div style="color:#fffff; text-align:left; padding:5px;padding-left:0%"><barcode code=" '.$sid.' " type="C128A" size="0.5" height="1.0"/></div>
<div style="text-align:left; font-size: 10px;">&nbsp;&nbsp;'.$ticket['ticket'].'</div>
</div>
             <div class="row-fluid "  >
              <img src="../images/logo.png" style="padding-left:39%" alt="School Logo" class="logo" width="120" height="100"/>
<h3 style="padding-top:0px; padding-left:6%; ">MASINDE MULIRO UNIVERSITY OF SCIENCE & TECHNOLOGY </h3>
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
                     <h3>Course Application Report for '.$row['fname'].'&nbsp;'.$row['lname'].' </h3>
                     <u><strong>PERSONAL INFORMATION</strong></u>
                      </div>

           <div class="row-fluid " style="padding-left:10%; padding-right:-5%;">
                          <table class="table table-bordered">
                                     <thead>
                                     <tr>
                                         <th>FIRST NAME</th>
                                         <th>LAST NAME</th>
                                         <th>GENDER </th>
                                         <th>POSTAL ADDRESS</td>
                                         <th>ID NUMBER</td>
                                         <th>MOBILE NO</th>
                                         <th>COUNTRY</th>
                                     </tr>
                                     </thead>
                                     <tbody>';
                                     $applicant = $conn->prepare("SELECT * FROM applicants_details WHERE Email_Address='$session_id'");
                                     $applicant->execute();
                              	while($row=$applicant->fetch(PDO::FETCH_ASSOC))
                                   {
                                       $html.= '<tr>
                                       <td>'.$row['First_Name'].'</td>
                                       <td>'.$row['Last_Name'].'</td>
                                       <td>'.$row['Gender'].'</td>
                                       <td>'.$row['Postal_Address'].'</td>
                                       <td>'.$row['idNumber'].'</td>
                                       <td>'.$row['Mobile'].'</td>
                                        <td>'.$row['Country'].'</td>
                                       </tr>';

                                     }
                                $html .='</tbody>
                                     </table>
                                     <br/>
                                     <u><strong>EDUCATION BACKGROUND</strong></u>
                               <table class="table table-bordered">
                                     <thead>
                                     <tr>
                                         <th>School Name</th>
                                         <th>Start Year</th>
                                         <th>Completion Year</th>
                                         <th>My Attainment</td>
                                         <th>Qualification Obtained</td>
                                         <th>Exam Name</th>
                                        </tr>
                                     </thead>
                                     <tbody>';
                                     $education = $conn->prepare("SELECT * FROM education_background WHERE Email_Address='$session_id'");
                                     $education->execute();
                              	while($row=$education->fetch(PDO::FETCH_ASSOC))
                                   {
                                       $html.= '<tr>
                                       <td>'.$row['school_name'].'</td>
                                       <td>'.$row['start_Year'].'</td>
                                       <td>'.$row['end_Year'].'</td>
                                       <td>'.$row['study_Area'].'</td>
                                       <td>'.$row['qualification_attained'].'</td>
                                       <td>'.$row['exam_name'].'</td>
                                       </tr>';
                                     }
                                $html .='</tbody>
                                     </table>
                                    <br/>
                                     <u><strong>COURSE APPLICATION</strong></u>
                                       <table class="table table-bordered">
                                     <thead>
                                     <tr>
                                         <th>COURSE LEVEL</th>
                                         <th>COURSE NAME</th>
                                         <th>MODE OF STUDY </th>
                                         <th>CAMPUS</td>
                                         </tr>
                                     </thead>
                                     <tbody>';
                              	while($row=$result->fetch(PDO::FETCH_ASSOC))
                                   {
                                       $html.= '<tr>
                                       <td>'.$row['Level_Name'].'</td>
                                       <td>'.$row['programme'].'</td>
                                       <td>'.$row['Mode_Of_Study'].'</td>
                                       <td>'.$row['Campus_Name'].'</td>
                                       </tr>';
                                     }
                                $html .='</tbody>
                                     </table>

                                     <u><strong>TESTIMONIAL DOCUMENTS</strong></u>
                                       <table class="table table-bordered">
                                     <thead>
                                     <tr>
                                         <th>Document Type</th>
                                         <th>File Name </th>
                                         <th>Date Modified</th>
                                         </tr>
                                     </thead>
                                     <tbody>';
                              	while($row=$uploads->fetch(PDO::FETCH_ASSOC))
                                   {
                                       $html.= '<tr>
                                       <td>'.$row['file_type'].'</td>
                                       <td>'.$row['file_name'].'</td>
                                       <td>'.$row['date_updated'].'</td>
                                       </tr>';
                                     }
                                     $html .='</tbody>
                                     </table>

 </p>
     <br>
  <p><strong><i>Declaration</i></strong></p>
 <div>I declare that all information required has been disclosed and and material filled in support are true, correct and complete.
 I acknowledge that providing incorrect information or withholding relevant information may result in the University withdrawing any rngagement
 irrespective of the time the anomaly is established. <br>
 <p> Signature of Applicant __________________________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:________________________. </p>

 <p><strong><i>For Official use Only</i></strong></p>
 <p>
                        <table class="table table-bordered">
                                     <thead>
                                     <tr>
                                         <th>Office Level</th>
                                         <th>COMMENTS (ADMIT/DO NOT ADMIT)</th>
                                         <th>SIGNATURE AND DATE</th>

                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                            <td>CHAIRPERSON OF DEPARTMENT </td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td>&nbsp;&nbsp;&nbsp; </td>
                                           </tr>
                                          <tr>
                                             <td>DEAN OF SCHOOL </td>
                                             <td>&nbsp;&nbsp;&nbsp;</td>
                                             <td>&nbsp;&nbsp;&nbsp; </td>
                                           </tr>
                                           <tr>
                                               <td>REGISTRAR (AA) </td>
                                               <td>&nbsp;&nbsp;&nbsp; </td>
                                               <td>&nbsp;&nbsp;&nbsp; </td>
                                             </tr>
                                     </tbody>
                                      <table>
                                       </p>

 </div>
               <div><i>Dear Applicant, you are requested to submit this during the admission date. Please present a hardcopy for verification. </i></div>
              </div> </div>  </body>
           </html>';

$mpdf->WriteHTML($html,2); // Writing html to pdf

//$mpdf->Output(); // For sending Output to browser
$mpdf->Output('MY TICKET_'.$fullname.'.pdf','I'); // For Download
exit;
?>