 <?php
 require_once('../config/dbconnect.php');
 $sem = $_GET['intake'];
   if(!empty($sem)){
       $check = $conn->prepare("SELECT programmes.code, programmes.programme, faculty.faculty_name, course_levels.Level_Name, campuses.Campus_Name, admissiondates.intake_name
FROM applicants_course_details INNER JOIN programmes ON (applicants_course_details.Course_id = programmes.code)
    INNER JOIN faculty ON (programmes.faculty = faculty.faculty_id) INNER JOIN course_levels ON (programmes.qualification = course_levels.Level_id)
    INNER JOIN campuses ON (applicants_course_details.Campus = campuses.Campus_id)
    INNER JOIN admissiondates ON (applicants_course_details.intake = admissiondates.intake_id)
     WHERE (applicants_course_details.intake ='$sem')");
       $check->execute();
       //$rowApplied = $check->fetch(PDO::FETCH_ASSOC);
   }
   else{
       header('Location:program_reports');
   }

?>
<?php include_once('../inc/header1.php');  ?>

      <!-- =============================================== --><!-- Left side column. contains the sidebar -->
    <?php include_once('include/sidebar.php');  ?>         <!-- /.sidebar -->
      <?php include_once('include/functions.php');    ?>

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


  <div class="row">
    <span style="visibility:visible;">   </span>
    </div>
	<div class="row"> <div class="col-lg-4">
      <a href="GenerateAppliedProgrammesPdf?intake=<?php echo $sem;?>" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-right"> </span>&nbsp;Export to PDF</a>
    </div> </div><br/>

                        <div class="panel panel-primary">
                            <div class="panel-heading"><span class="glyphicon glyphicon-education"></span>&nbsp;&nbsp;Applied Programmes Record list</div>
                            <div class="panel-body">

                                                                           <div class="table-responsive">
                                                <table class="table table-striped table-condensed table-hover" id="example2">
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Code</th>
                                                             <th>Programme Name</th>
                                                             <th>Faculty Name</th>
                                                             <th>Level Name</th>
                                                             <th>Campus</th>
                                                             <th>Intake Name</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php

                                                      for($i=1;$row=$check->fetch(PDO::FETCH_ASSOC);$i++)
                                                       {
                                                       ?>
                                                        <tr>
                                                           <td><?php echo $i;  ?></td>
                                                           <td><?php echo $row['code'];?></td>
                                                           <td><?php echo $row['programme'];?></td>
                                                            <td><?php echo $row['faculty_name'];?></td>
                                                           <td> <?php  echo $row['Level_Name']; ?></td>
                                                           <td> <?php  echo $row['Campus_Name']; ?></td>
                                                           <td> <?php  echo $row['intake_name']; ?></td>
                                                           </tr>
                                                       <?php
                                                       }

                                                      ?>
                                                </tbody>
                                                </table>
                                            </div>
                            </div>
                        </div>
        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php require_once('../inc/footer.php'); ?>