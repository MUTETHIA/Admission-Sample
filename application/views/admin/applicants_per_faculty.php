 <?php
 require_once('../config/dbconnect.php');
 $intake =$_GET['intake'];
 $school = $_GET['school'];
   if(!empty(($school) &&($intake))){
 $check = $conn->prepare("SELECT applicants_details.*, applicants_course_details.Mode_Of_Study, programmes.programme, admissiondates.intake_name,campuses.Campus_Name
FROM applicants_course_details
    INNER JOIN applicants_details ON (applicants_course_details.Email_Address = applicants_details.Email_Address)
    INNER JOIN programmes ON (applicants_course_details.Course_id = programmes.code)
    INNER JOIN admissiondates ON (applicants_course_details.intake = admissiondates.intake_id)
    INNER JOIN campuses ON (applicants_course_details.Campus = campuses.Campus_id)
WHERE ( applicants_course_details.intake=$intake
AND applicants_course_details.faculty_id =$school)");
       $check->execute();

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

   }
   else{
       header('Location:faculty_reports');
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
      <a href="GenerateIntakeSchoolProgrammesPdf?intake=<?php echo $intake;?>&school=<?php echo $school;?>" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-right"> </span>&nbsp;Export to PDF</a>
    </div> </div><br/>

                        <div class="panel panel-primary">
                            <div class="panel-heading"><span class="glyphicon glyphicon-education"></span>&nbsp;&nbsp;Applicants in <?php echo $name['faculty_name']; ?> FACULTY Record list</div>
                            <div class="panel-body">

                                                                           <div class="table-responsive">
                                                <table class="table table-striped table-condensed table-hover dataTables" >
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Email Address</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Mobile</th>
                                                              <th>Study Mode</th>
                                                             <th>Programme Name</th>
                                                             <th>Intake Name</th>
                                                             <th>Campus</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php

                                                      for($i=1;$row=$check->fetch(PDO::FETCH_ASSOC);$i++)
                                                       {
                                                       ?>
                                                        <tr>
                                                           <td><?php echo $i;  ?></td>
                                                           <td><?php echo $row['Email_Address'];?></td>
                                                           <td><?php echo $row['First_Name'];?></td>
                                                            <td><?php echo $row['Last_Name'];?></td>
                                                           <td> <?php  echo $row['Mobile']; ?></td>
                                                           <td> <?php  echo $row['Mode_Of_Study']; ?></td>
                                                           <td> <?php  echo $row['programme']; ?></td>
                                                           <td> <?php  echo $row['intake_name']; ?></td>
                                                           <td> <?php  echo $row['Campus_Name']; ?></td>
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