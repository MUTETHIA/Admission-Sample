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
    <span id="news_scroller" style="visibility:visible;"> </span>
    </div>

    	<br/>

<div class="row">
 <div class="col-md-12">
              <div class="panel panel-primary">
                 <div class="panel-heading"><span class="fa fa-user"></span>&nbsp;APPLICANTS APPLIED FOR PER LEVEL IN A GIVEN INTAKE</div>
     <div class="panel-body">
                <div style="display: block;" class="box-body">
                       <h4 class="form-section">Level Reports Per Level</h4>
                       <hr>
              <form class="form-vertical" action="applicants_per_level" method="get" enctype="multipart/form-data">
               <div class="col-md-4">
                  <div class="form-group has-feedback">
              <label>Intake Name: <span class="required">*</span></label>
                <select class="form-control" required="required" id="intake" name="intake">
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
              <label>Level Name: <span class="required">*</span></label>
                <select class="form-control" required="required" id="level" name="level">
                    <option value="">~~Select Level Name~~</option>
                 <?php
                     $intake = $conn->prepare("SELECT * FROM course_levels");
                     $intake->execute();
                     while($row = $intake->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $row['Level_id']; ?>"><?php echo $row['Level_Name']; ?></option>
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