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
            <h4 style="padding-left:26%;">Office of the Registrar, Academics </h4>
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
           <h4>Programmes Offered List </h4>
                          <table class="table table-bordered">
                                     <thead>
                                     <tr>
                                         <th>Code</th>
                                         <th>Programme</th>
                                         <th>Department</th>
                                         <th>Level</th>
                                     </tr>
                                     </thead>
                                     <tbody>';
                                      $result = $conn ->prepare("SELECT programmes.*, course_levels.Level_Name,department.department_name
FROM programmes INNER JOIN course_levels ON (programmes.qualification = course_levels.Level_id)
    INNER JOIN department ON (programmes.department = department.department_id)");
                                      $result ->execute();
                              	while($row=$result->fetch(PDO::FETCH_ASSOC))
		                           {
                                       $html.= '<tr>
                                       <td>'.$row['code'].'</td>
                                       <td>'.$row['programme'].'</td>
                                       <td>'.$row['department_name'].'</td>

                                       <td>'.$row['Level_Name'].'</td>
                                       </tr>';
                                     }
                                $html .='</tbody>
                                     </table>


 </p>
        <div style="color:#fffff; text-align:center; padding:5px; height: 2px; width:3px;"><barcode code=" '.$sid.' " type="C128A" size="0.8" height="2.0"/></div>
  <div style="text-align:center;">MMUSTREPORT2017</div>

              </div> </div>  </body>
           </html>';

$mpdf->WriteHTML($html,2); // Writing html to pdf

//$mpdf->Output(); // For sending Output to browser
$mpdf->Output('Programmes.pdf','I'); // For Download
exit;
?>