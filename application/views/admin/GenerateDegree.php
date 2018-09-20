<?php
require_once( '../library/mpdf.php');
$stylesheet = file_get_contents('../assets/css/pdfLayout.css');
// Setup PDF
date_default_timezone_set('Africa/Nairobi');
$d=new DateTime();
$dat=$d->format('d/m/y  h:i:s a');
 $sid="1234567";

$mpdf = new mPDF('utf-8', 'A4',0,'',5,10,15,16,4,9,'P');
$mpdf->SetDisplayMode(real,'default');
require_once('../config/dbconnect.php');
require_once ('include/functions.php');
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
            <h4 style="padding-left:26%;">Office of the Registrar, Academics Affairs </h4>
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


           <div class="row-fluid " style="padding-left:10%; padding-right:-5%;">
           <h4>Degree Courses List </h4>
                          <table class="table table-condensed table-striped table-bordered">
                                     <thead>
                                     <tr>
                                         <th>COURSE NAME</th>

                                         <th>SCHOOL NAME</th>
                                         <th>COURSE REQUIREMENT</th>
                                     </tr>
                                     </thead>
                                     <tbody>';

                              	while($row=$deg->fetch(PDO::FETCH_ASSOC))
		                           {
                                       $html.= '<tr>
                                       <td>'.$row['programme'].'</td>

                                       <td>'.$row['faculty_name'].'</td>
                                        <td>'.$row['programme_req'].'</td>
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
$mpdf->Output('Degree List.pdf','I'); // For Download
exit;
?>