<?php
 require_once('../config/dbconnect.php');
$email=$_GET['mail_id'];
if(!empty($email)) {
$selectmail = $conn->prepare("SELECT applicants_details.*,faculty.faculty_name, programmes.programme,applicants_course_details.ticket,applicants_course_details.reg_no,admissiondates.*
FROM applicants_course_details
    INNER JOIN applicants_details ON (applicants_course_details.Email_Address = applicants_details.Email_Address)
    INNER JOIN programmes ON (applicants_course_details.Course_id = programmes.code)
    INNER JOIN faculty ON (programmes.faculty = faculty.faculty_id)
    INNER JOIN admissiondates ON (applicants_course_details.intake = admissiondates.intake_id)
    WHERE (applicants_details.Email_Address ='$email')");
$selectmail->execute();
$data = $selectmail->fetchAll();

}
 ?>
<?php
   foreach($data as $row):
	require_once('../library/mpdf.php');
$mpdf = new mPDF();
$mpdf = new mPDF('utf-8', 'A4',0,'',4,20,5,16,4,9,'P');

 $mpdf->SetDisplayMode(real,'default');
 $sid="1234567";


 require_once('include/functions.php');
 date_default_timezone_set('Africa/Nairobi');

  $fullname= $row['First_Name'].' '.$row['Last_Name'];

 	$arr = [
		  'odd' => [
		    'L' => [
		      'content' => $title,
		      'font-size' => 10,
		      'font-style' => 'B',
		      'font-family' => 'serif',
		      'color'=>'#27292b'
		    ],
		    'C' => [
		      'content' => 'Page - {PAGENO} of {nbpg}',
		      'font-size' => 10,
		      'font-style' => 'B',
		      'font-family' => 'serif',
		      'color'=>'#27292b'
		    ],
		    'L' => [
		      'content' => 'Generated on {DATE j-m-Y h:i A }',
		      'font-size' => 10,
		      'font-style' => 'B',
		      'font-family' => 'serif',
		      'color'=>'#27292b'
		    ],
            'R' => [
		      'content' =>'Reg Number:&nbsp;'.$row['reg_no'],
		      'font-size' => 10,
		      'font-style' => 'B',
		      'font-family' => 'serif',
		      'color'=>'#27292b'
		    ],
		    'line' => 1,
		  ],
		  'even' => []
		];
$mpdf->SetFooter($arr);
$mpdf->WriteHTML('<sethtmlpageheader name="main" page="ALL" value="on" show-this-page="1">');
$mpdf->list_indent_first_level = 1;
$stylesheet = file_get_contents('assets/css/pdfLayout.css');
     ob_end_clean();
$mpdf->WriteHTML($stylesheet,1);

$html='<body> <div class="container" >
             <div class="row-fluid"  >
              <img src="../images/logo.png" style="padding-left:39%" alt="" class="logo" width="120" height="100"/>
             <h3 style="padding-top:0px;padding-left:12%; ">MASINDE MULIRO UNIVERSITY OF SCIENCE & TECHNOLOGY </h3>
            <h4 style="padding-left:32%;">Office of Registrar, Academics Affairs</h4>

              </div> <div class="row-fluid"  style="padding-left:10%; padding-right:-5%;">

           <div class="span6 pull-left" style="text-align:left;margin-top:-10px; font-size: 11px;"> Tel. No.020-2555555<br/>
                                                Email: <u> info@mmust.ac.ke</u><br/>
                                                 Website: <u>www.mmust.ac.ke</u><br/>


           </div>

              <div class="span6" style="text-align:left; padding-left:74%; margin-top:-60px;font-size: 11px; ">P.O Box 190 <br/>
                                               Kakamega-50100 <br/>
                                               Kenya.<br/>

           </div>

           </div>
                         <div class=" row-fluid1"  style="padding-left:10%; padding-right:-5%;">

                      <hr/>

                      </div>

                      <div class="row-fluid"  style="padding-left:10%; padding-right:-5%; font-size: 12px;">
<div class="span6 pull-left" style="text-align:left;">
                                          FULL NAME: <strong>'.$fullname.'</strong> <br/>

                                          EMAIL: &nbsp;<strong>'.$row['Email_Address'].'&nbsp;&nbsp;.</strong><br/>
                                          MOBILE: &nbsp;<strong>'.$row['Mobile'].'</strong><br/>

                                                 <br/>
                                                  Dear &nbsp;' .$row['First_Name'] .'.

           </div>
            <div class="span6" style="text-align:left;  padding-left:64%; margin-top:-73px;">
                                                             MMU/COR:504029<br/>
                                                             REGISTRATION NO:&nbsp;<strong>'.$row['reg_no'].' </strong> <br/>
                                                             ADDRESS:&nbsp;<strong>'. $row['Postal_Address'].'  </strong> <br/>

                                                              <br/>


           </div>

           </div>
         <div class="row-fluid " style="padding-left:10%; padding-right:-5%;">
              <h5><u>RE: ADMISSION INTO THE UNIVERSITY '.$row['academic_year'].' ACADEMIC YEAR  </u></h5>
             </div>
           <div class="row-fluid " style="padding-left:10%; padding-right:-5%; font-size: 12px;">
       Following your application for admission into the University, I am pleased to offer you a place in the <strong>'.ucwords($row['faculty_name']).',</strong>for the programme leading to a
     <strong>'.$row['programme'].'</strong> which commences on <strong>'.date("l, F d, Y",strtotime($row['reportingdates'])).' at Main Campus, Kakamega.</strong>
     <p>This offer is made on the basis of the statement of your qualifications as presented by the Kenya National Examination Council or other approved examination bodies.
     To verify the authenticity of these qualifications, we advise you to present the following documents to the Dean,<strong>'.ucwords($row['faculty_name']).',</strong> at Kakamega Main Campus on the
     on the <strong>opening date:</strong>
      <ul style="list-style: disc;">
       <li>Original KCSE Results Slip or Certificate (or other educational certificates) and a photocopy </li>
       <li>Original National ID (or Birth Certificate) and a photocopy. </li>
       <li>Original Passport and Student&acute;s Pass and copies (for foreign students) </li>
      </ul>
      </p>
 Enclosed please find the Admission Requirements Student&rsquo; Handbook. Forms MMU/2 and MMU/3 in the booklet should be completed and submitted together with your original certificates during verification.
 <br/>
 Please note that you are expected to make your private arrangements for accommodation, food and transport during the duration of your studentship.
 <p>Regulations Governing the Conduct and Discipline of students at the university, Document B, must be thoroughly read, comprehend and kept for future reference. </p>

Use the enclosed details on the Fees Structure to pay for your fees at any National Bank branch using:
        <br>
       <strong>Account Number 0 100 370 554 000, Kakamega Branch. </strong>

You are expected to present pay-in bank slips to the University during registration of the opening date.
<strong>Please note that registration and fees payment should be completed within the first three (3) weeks after the opening date,
failure to  which it will be assumed you have deferred your studies to the next academic year.</strong>
<p>I take this opportunity to congratulate you for having been admitted in this University and I look forward to welcoming you when the new academic year begins.   <br/>
</p>
Yours sincerely, <br/>

 <img src="../images/onyancha.png"alt=""  style="background-color: #FFFFFF; border: none;"  width="80" height="60"/> <br/>
<strong>Dr. C. K. Onyancha
 <br/>
<u>Ag. Registrar Academic Affairs</u>
</strong>
 </p>

              </div> </div>  </body>
           </html>';

 $mpdf->WriteHTML($html,2);

$letter=$mpdf->Output('../uploads/letters/'.$fullname.'_Admission Letter.pdf','F');
//$attachment= chunk_split(base64_encode($letter));
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
          $mail->Mailer = "smtp";
          $mail->Host = 'smtp.gmail.com';
          $mail->SMTPSecure = 'ssl';
          $mail->SMTPAuth = true;
          $mail->Username = 'app@mmust.ac.ke';
        $mail->Password = 'application@2018';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->smtpConnect([
        'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        ]
        ]);
        $mail->setFrom('app@mmust.ac.ke', 'MMUST Online Course Application');
          $mail->addAddress($email,'');
          //$mail->addCC('');
          $mail->addAttachment('../uploads/letters/'.$fullname.'_Admission Letter.pdf');
          //$mail ->addAttachment('');
          $mail->isHTML(true);
          $mail->Subject = 'Admission Documents';
          $mail->Body = 'Dear '.$fullname.', We would like to congratulate you for a successful application. In regard to that, kindly find the attached documents, go through them keenly.';
          if ($mail->send()) {
              echo "<div class='alert alert-success'>Congratulations!!! Email and an SMS has been successfuly been sent. </div>";
             echo "<script>window.location='applicants_Letters'</script>";

             }
             else{
                 echo "<div class='alert alert-success'>Error in connection. </div>";

             }




	exit;
    endforeach
?>

