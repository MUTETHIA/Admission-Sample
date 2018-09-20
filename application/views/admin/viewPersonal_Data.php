<?php  require_once('../inc/header1.php');  ?>
<?php  require_once('include/functions.php');  ?>
<?php
  if(isset($_GET['id'])&& !empty($_GET['id'])){
      $id = $_GET['id'];

  }
  else
  {
      //header("Location: latest_news.php");
  }
  ?>
      <!-- =============================================== --><!-- Left side column. contains the sidebar -->
      <?php require_once('include/sidebar.php');  ?>
  
      <!-- =============================================== --><!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1><img src="../images/new1.png" alt=""/>
            MMUST Course Application System
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
  <span id="showingit"></span>

  <div class="row">
    <span id="news_scroller" style="visibility: visible;"> </span>
    </div>
              <div class="row">
                        <div class="col-md-12">
                          <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;PERSONAL INFORMATION</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>

                                                <th>First Name </th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>ID Number</th>
                                                <th>Postal Address</th>
                                                <th>Mobile</th>
                                                <th>Country</th>
                                            </tr>
                                            </thead>
                                     <tbody>
                                          <?php
                                                       $applicant = $conn->prepare("SELECT * FROM applicants_details WHERE Email_Address=:uemail");
                                                        $applicant->execute(array(":uemail"=>$id));
                                                      for($i=1;$row=$applicant->fetch(PDO::FETCH_ASSOC);$i++){
                                                          $id = $row['Email_Address'];
                                                          ?>
                                                           <tr>

                                                            <td><?php echo $row['First_Name'];  ?></td>
                                                            <td><?php echo $row['Last_Name'];  ?></td>
                                                             <td><?php echo $id;  ?></td>
                                                             <td><?php echo $row['idNumber'];  ?> </td>
                                                            <td><?php echo $row['Postal_Address'];  ?></td>
                                                            <td><?php echo $row['Mobile'];  ?></td>
                                                            <td><?php echo $row['Country'];  ?></td>
                                                           </tr>
                                                          <?php
                                                      }

                                                    ?>

                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                    </div>

                                 <div class="row">
                        <div class="col-md-12">
                          <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="glyphicon glyphicon-education"></i>Education Background</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                <th width="5%"> Code </th>
                                                <th>School Name </th>
                                                <th>Start Year </th>
                                                <th>End Year </th>
                                                <th>Area of Study</th>
                                                <th>Qualification</th>
                                                  <th>Exam Name</th>
                                            </tr>
                                            </thead>
                                     <tbody>
                                          <?php
                                                       $edu = $conn->prepare("SELECT * FROM education_background WHERE Email_Address=:uemail");
                                                        $edu->execute(array(":uemail"=>$id));
                                                      for($i=1;$row=$edu->fetch(PDO::FETCH_ASSOC);$i++){
                                                          $id = $row['Email_Address'];
                                                          ?>
                                                          <tr>
                                                          <td><?php echo $i; ?></td>
                                                         <td><?php echo $row['school_name']; ?></td>
                                                         <td><?php echo $row['start_Year']; ?></td>
                                                         <td><?php echo $row['end_Year']; ?></td>
                                                          <td><?php echo $row['study_Area']; ?></td>
                                                          <td><?php echo $row['qualification_attained']; ?></td>
                                                          <td><?php echo $row['exam_name']; ?></td>
                                                          </tr>

                                                    <?php
                                                      }

                                                    ?>

                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                    </div>


                                              <div class="row">
                        <div class="col-md-12">
                          <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box yellow">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-money"></i>Payments Details</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                               <tr>
                                                            <th>Serial</th>
                                                            <th>File Name </th>
                                                            <th>Date Modified</th>
                                                            <th>Action</th>
                                                        </tr>
                                            </thead>
                                     <tbody>
                                 <?php
                                                       $pay = $conn->prepare("SELECT * FROM tbl_payment WHERE email=:uemail");
                                                        $pay->execute(array(":uemail"=>$id));
                                                      for($i=1;$row=$pay->fetch(PDO::FETCH_ASSOC);$i++){
                                                          //$id = $row['Email_Address'];
                                                          ?>
                                                             <tr>
                                                           <td><?php echo $i;  ?></td>
                                                            <td><?php echo $row['file_name'];  ?></td>
                                                            <td><?php echo $row['date_updated'];  ?></td>
                                                            <td><a id="" data-id="<?php echo $id; ?>" href="../uploads/payments/<?php echo $row['file_name'];  ?>" class="btn btn-info">Download</a></td>
                                                           </tr>
                                                          <?php
                                                      }

                                                    ?>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                    </div>




                    <div class="row">
                        <div class="col-md-12">
                          <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box purple">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="glyphicon glyphicon-education"></i>Testimonials For Perusal</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                               <tr>
                                                            <th>Serial</th>
                                                            <th>File Name </th>
                                                            <th>Date Modified</th>
                                                            <th>Action</th>
                                                        </tr>
                                            </thead>
                                     <tbody>
                                 <?php
                                                       $pay = $conn->prepare("SELECT * FROM user_data WHERE email=:uemail");
                                                        $pay->execute(array(":uemail"=>$id));
                                                      for($i=1;$row=$pay->fetch(PDO::FETCH_ASSOC);$i++){
                                                          //$id = $row['Email_Address'];
                                                          ?>
                                                             <tr>
                                                           <td><?php echo $i;  ?></td>
                                                            <td><?php echo $row['file_name'];  ?></td>
                                                            <td><?php echo $row['date_updated'];  ?></td>
                                                            <td><a id="" data-id="<?php echo $id; ?>" href="../uploads/documents/<?php echo $row['file_name'];  ?>" class="btn btn-info">Download</a></td>
                                                           </tr>
                                                          <?php
                                                      }

                                                    ?>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                    </div>


                                    <div class="panel panel-primary">
                            <div class="panel-heading"><i class="glyphicon glyphicon-education"></i>&nbsp;&nbsp;COURSE APPLICATION INFORMATION </div>
                            <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr> <th>Intake Name</th>
                                                            <th>Course Level</th>
                                                            <th>Course Name </th>
                                                            <th>Minimal Requirement</th>
                                                            <th>Mode of Study</th>
                                                            <th>Campus</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
    $result = $conn ->prepare("SELECT course_levels.Level_Name, programmes.programme, programmes.programme_req,admissiondates.*, applicants_course_details.Mode_Of_Study, campuses.Campus_Name
    , applicants_course_details.Email_Address
FROM applicants_course_details
    INNER JOIN course_levels ON (applicants_course_details.Level_id = course_levels.Level_id)
    INNER JOIN campuses ON (applicants_course_details.Campus = campuses.Campus_id)
    INNER JOIN programmes ON (applicants_course_details.Course_id = programmes.code)
     INNER JOIN admissiondates ON (applicants_course_details.intake = admissiondates.intake_id)
     WHERE (applicants_course_details.Email_Address =:uemail)");
$result ->execute(array(":uemail"=>$id));
                                                      for($i=1;$row=$result->fetch(PDO::FETCH_ASSOC);$i++){
                                                          ?>
                                                           <tr>
                                                               <td><?php echo $row['intake_name'];  ?></td>
                                                           <td><?php echo $row['Level_Name'];  ?></td>
                                                            <td><?php echo $row['programme'];  ?></td>
                                                            <td><?php echo $row['programme_req'];  ?></td>
                                                            <td><?php echo $row['Mode_Of_Study'];  ?></td>
                                                            <td><?php echo $row['Campus_Name'];  ?></td>
                                                           </tr>
                                                          <?php
                                                      }
                                                    ?>

                                                     </tbody>
                                                </table>

                                            </div>
                                           
                                </div>
                            </div>

                       <div class="row">
                           <div class="col-md-6">
                               <div class="portlet box purple">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="glyphicon glyphicon-education"></i>Upon Successful Application</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <?php
                                    if(isset($_POST['reg_gen'])){
                                        $selectmail = $conn->prepare("SELECT applicants_details.*,faculty.faculty_name,campuses.*, programmes.programme,applicants_course_details.*,admissiondates.*
                                    FROM applicants_course_details
                                        INNER JOIN applicants_details ON (applicants_course_details.Email_Address = applicants_details.Email_Address)
                                        INNER JOIN programmes ON (applicants_course_details.Course_id = programmes.code)
                                        INNER JOIN faculty ON (programmes.faculty = faculty.faculty_id)
                                        INNER JOIN campuses ON (applicants_course_details.Campus = campuses.Campus_id)
                                        INNER JOIN admissiondates ON (applicants_course_details.intake = admissiondates.intake_id)
                                        WHERE (applicants_details.Email_Address ='$id')");
                                     $selectmail->execute();
                                     $row=$selectmail->fetch(PDO::FETCH_ASSOC);
                                       $approve =$conn->prepare("UPDATE applicant_track SET registrar_status=1,admission_letter_status=1 WHERE Email_Address='$id'");
                                        $approve->execute();

                                      $reg = $conn->query("SELECT reg_id FROM reg_generator ORDER BY reg_id DESC LIMIT 1 ");
                                      $regid = $reg->fetchColumn();
                                      if( $regid !=NULL){
                                        $newreg= $regid+1;
                                      }
                                      else{
                                          $newreg= 56900;
                                      }
                                      $regnumber=$row['Course_id'].'/'.$row['code'].'-'.$newreg.'/'.$row['year'];
                                      $sql= $conn->query("INSERT INTO reg_generator (reg_id,email,reg_number) VALUES('$newreg','$id','$regnumber') ");

                                      //echo $regnumber;


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
		      'content' =>'Reg Number:&nbsp;'.$regnumber,
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
$stylesheet = file_get_contents('../assets/css/pdfLayout.css');
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
                                                             REG NO:&nbsp;<strong>'.$regnumber.' </strong> <br/>
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

Use the enclosed details on the Fees Structure to pay for your fees at any KCB Bank branch using:

       <br><strong>Account Number <i>1101922109</i>, Kakamega Branch. </strong>
          <br>
You are expected to present pay-in bank slips to the University during registration of the opening date.
<strong>Please note that registration and fees payment should be completed within the first three (3) weeks after the opening date,
failure to  which it will be assumed you have deferred your studies to the next academic year.</strong>
<p>I take this opportunity to congratulate you for having been admitted in this University and I look forward to welcoming you when the new academic year begins.   <br/>
</p>
Yours sincerely, <br/>

 <img src="../images/onyancha.png" alt=""  style="background-color: #FFFFFF; border: none;"  width="80" height="60"/> <br/>
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
          //$mail->Host = gethostbyname("smtp.gmail.com");
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
          $mail->addAddress($id,$fullname);
          //$mail->addCC('');
          $mail->addAttachment('../uploads/letters/'.$fullname.'_Admission Letter.pdf');
          $mail ->addAttachment('../uploads/handbook/SHORT HAND BOOK.pdf');
          $mail->isHTML(true);
          $mail->Subject = 'Admission Documents';
          $mail->Body = 'Dear '.$fullname.', We would like to congratulate you for a successful application. In regard to that, kindly find the attached documents, go through them keenly.';
          if ($mail->send()) {
              echo "
                  <div class='col-md-6'>
              <div class='alert alert-success'>Congratulations!!! Email and an SMS has been successfuly been sent. </div> </div>";
             //echo "<script>window.location='applicants_Letters'</script>";
             }
             else{
                 echo "<div class='colm-md-6'><div class='alert alert-danger'>Error in connection. </div></div>";

             }
                                    }

                                    ?>
                               <form method="post">
                                   <div class="form-group">
                                       <button type="submit" name="reg_gen" class="btn btn-success">Generate Admission Letter</button>
                                   </div>
                               </form>
                                </div>
                               </div>
                           </div>

                           <div class="col-md-6">
                                     <div class="portlet box yellow">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="glyphicon glyphicon-remove"></i>Decline Application</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                <h4><strong>Kindly Note: This Section applies only when the application is meant to be unsuccesful.</strong></h4>
                           <?php
                              if(isset($_POST['decline'])){
                                  $checkstatus=$conn->prepare("SELECT email FROM reg_generator WHERE email='$id'");
                                  $checkstatus->execute();
                                  $count=$checkstatus->rowCount();
                                  if($count>0){
                                    echo "<div class='alert alert-danger'>Sorry!!! Applicant has an admission letter, cannot be reviewed.</div>";
                                  }
                                  else{
                                      $comment=$_POST['reg_comment'];
                                  $decline =$conn->prepare("UPDATE applicant_track SET registrar_status=2,registrar_comment='$comment',admission_letter_status=2 WHERE Email_Address='$id'");
                                  if($decline->execute()){
                                      echo "<div class='alert alert-success'>Applicant has been reviewed successfully. </div>";
                                  }
                                  else{
                                       echo "<div class='alert alert-danger'>Opps!!! Error occured. </div>";
                                  }
                                  }

                              }
                           ?>
                           <form method="post">
                                   <div class="form-group">
                                       <label for="">Reasons for Decline:</label>
                                       <textarea name="reg_comment" class="form-control" required="required"></textarea>
                                   </div>
                                  <div class="form-group">
                                       <button type="submit" name="decline" class="btn btn-danger">Decline Application</button>
                                   </div>
                               </form>
                                </div>
                               </div>


                           </div>
                       </div>

              </div><!-- /.box -->
            </div><!-- /.col -->

</div>
        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      </div><!-- /.content-wrapper -->
  <?php require_once('../inc/footer.php'); ?>