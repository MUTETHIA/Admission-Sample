<?php  require_once('../inc/header1.php'); ?>
      <!-- =============================================== --><!-- Left side column. contains the sidebar -->
  <?php include_once('include/sidebar.php');  ?>         <!-- /.sidebar -->
  <?php include_once('include/functions.php');   ?>
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
    <span id="news_scroller" style="visibility:visible;"><marquee>  bdfugsuvfuhufhusdhfiuhi </marquee> </span>
    </div>

    	<br/>

<div class="row">
 <div class="col-md-12">
              <div class="panel panel-primary">
                 <div class="panel-heading"><span class="glyphicon glyphicon-education"></span>&nbsp;PROGRAMME APPLIED FOR PER CAMPUS IN A GIVEN INTAKE</div>
     <div class="panel-body">
                <div style="display: block;" class="box-body">
                       <h4 class="form-section">Programmes Applied PER CAMPUS</h4>
                       <hr>
              <form class="form-vertical" action="campus_intake_programmes" method="get" enctype="multipart/form-data">
                  <div class="col-md-4">
                  <div class="form-group has-feedback">
              <label>Intake Name: <span class="required">*</span></label>
                <select class="form-control" required="required" id="intake" onchange="test()" name="intake">
                    <option value="">~~Select Intake Name~~</option>
                 <?php
                     $intake = $conn->prepare("SELECT * FROM admissiondates");
                     $intake->execute();
                     while($row = $intake->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $row['intake_id']; ?>"><?php echo $row['intake_name']; ?></option>
                    <?php } ?>
                </select>
              </div>

              </div>
              <div class="col-md-4">
                   <div class="form-group has-feedback">
                  <label for="">Campus Name:</label>
                   <select class="form-control" required="required" id="campus" name="campus">
                    <option value="">~~Select Campus Name~~</option>
                 <?php
                     $intake = $conn->prepare("SELECT * FROM campuses");
                     $intake->execute();
                     while($row = $intake->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $row['Campus_id']; ?>"><?php echo $row['Campus_Name']; ?></option>
                    <?php } ?>
                </select>
              </div>
              </div>
               <div class="col-md-12">
               <div class="form-actions">
                <div class="row">
                <div class="col-md-6">
                <div class="row">
                <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn btn-info">Submit</button>
                <button type="reset" class="btn btn-warning">Cancel</button>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
              </form>

                    </div><!-- ./col -->

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

</div>


        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php require_once('../inc/footer.php'); ?>
<!--
$intake=$_POST['intake'];
$campus=$_POST['campus'];
$check = $conn->prepare("SELECT programmes.code, programmes.programme, faculty.faculty_name, course_levels.Level_Name, campuses.Campus_Name, admissiondates.intake_name
FROM applicants_course_details
    INNER JOIN programmes ON (applicants_course_details.Course_id = programmes.code)
    INNER JOIN faculty ON (programmes.faculty = faculty.faculty_id)
    INNER JOIN course_levels ON (programmes.qualification = course_levels.Level_id)
    INNER JOIN campuses ON (applicants_course_details.Campus = campuses.Campus_id)
    INNER JOIN admissiondates ON (applicants_course_details.intake = admissiondates.intake_id)
WHERE (applicants_course_details.Campus ='$campus'
    AND applicants_course_details.intake ='$sem')");
$res=array(
      'success'=>true,
      'message'=>'saved successfully'
);
echo json_encode($res);
-->