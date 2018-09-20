<?php  require_once('../inc/header1.php'); ?>
<?php
  if(isset($_GET['edit_id'])&& !empty($_GET['edit_id'])){
      $id = $_GET['edit_id'];

  }
  else
  {
      //header("Location: latest_news.php");
  }
  ?>

      <!-- =============================================== --><!-- Left side column. contains the sidebar -->

    <?php include_once('include/sidebar.php');  ?>
               <!-- /.sidebar -->
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
    <span id="news_scroller" style="visibility:hidden;">   </span>
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="panel panel-primary">
     <div class="panel-heading">Edit Degree Courses</div>
     <div class="panel-body">
    	<div class="register-box-body">

                 <?php
                $deg_edit =$conn->prepare("SELECT * FROM programmes WHERE code='$id'");
               $deg_edit->execute();
              for($i=1;$edit_row=$deg_edit->fetch();$i++){
                  $id = $edit_row['code'];
                ?>
            <form method="post" action="edit_degree.php<?php echo '?id='.$id; ?>" enctype="multipart/form-data">
      <div class="col-md-4 col-sm-6">
                   <div class="form-group">
                <label for="course Level">Faculty/School: &nbsp;<span class="required">*</span></label>
                <select class="form-control" required="required" id="faculty_id" name="faculty_id">
                <option value ="">--Select Faculty Name--</option>
               <?php
                   $school= $conn->prepare("SELECT * FROM faculty");
                   $school->execute();
                   for($i=1;$sch_row=$school->fetch();$i++){
                       ?>
                      <option value="<?php echo $sch_row['faculty_id']; ?>" <?php if($edit_row['faculty']==$sch_row['faculty_id']) echo 'selected="selected"';  ?> ><?php echo $sch_row['faculty_name']; ?></option>

                      <?php
                   }
                ?>

                </select>
              </div>
              <div class="form-group">
                <label for="course Level">Department Name: &nbsp;<span class="required">*</span></label>

                  <select class="form-control" required="required" id="department_id" name="department_id">
                    <option value ="">--Select Department Name--</option>
                 <?php
                   $school= $conn->prepare("SELECT * FROM department");
                   $school->execute();
                   for($i=1;$dept_row=$school->fetch();$i++){
                       ?>
                      <option value="<?php echo $dept_row['department_id']; ?>" <?php if($edit_row['department']==$dept_row['department_id']) echo 'selected="selected"';  ?> ><?php echo $dept_row['department_name']; ?></option>

                      <?php
                   }
                ?>

                      </select>
              </div>
               <div class="form-group">
                <label for="course Level">Course Level: &nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="Level_id" name="Level_id">

                <option value ="">--Select Course Level--</option>
                <option value="3"<?php if($edit_row['qualification']==3) echo 'selected="selected"'  ?> >Degree</option>
                <option value="4"<?php if($edit_row['qualification']==4) echo 'selected="selected"'  ?> >Diploma</option>
                <option value="5"<?php if($edit_row['qualification']==5) echo 'selected="selected"'  ?> >Certificate</option>
                      </select>
              </div>

                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="form-group has-feedback">
              <label>Course Name: <span class="required">*</span></label>
                <input required name="Course_Name" type="text" class="form-control" value="<?php echo $edit_row['programme'];?>" placeholder="Course name" >
                <span class="glyphicon glyphicon-education form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
              <label>Course Minimum Requirement:</label>
                 <textarea name="course_req" class="form-control" id="course_req" cols="45" rows="3"><?php echo $edit_row['programme_req'];?></textarea>
              </div>
              </div>
               <div class="form-actions">
                <div class="row">
                <div class="col-md-6">
                <div class="row">
                <div class="col-md-offset-3 col-md-9">
                <button type="submit" name="deg-edit" class="btn btn-info">Submit</button>
                <button type="reset" class="btn btn-warning">Cancel</button>
                </div>
                </div>
                </div>
                </div>
                </div>

            </form>
            <?php
            }
            ?>
      </div><!-- /.form-box -->

      </div>
      </div>
    </div><!--   end of first half -->
</div>

        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php require_once('../inc/footer.php'); ?>