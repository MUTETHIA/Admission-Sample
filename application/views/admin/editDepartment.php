<?php  require_once('../inc/header1.php'); ?>
<?php
  if(isset($_GET['dept_id'])&& !empty($_GET['dept_id'])){
      $id = $_GET['dept_id'];

  }
  else
  {
 // header("Location: department.php");
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
     <div class="panel-heading">Edit Department Courses</div>
     <div class="panel-body">
    	<div class="register-box-body">

                 <?php
                $deg_edit =$conn->prepare("SELECT * FROM department WHERE department_id='$id'");
               $deg_edit->execute();
              for($i=1;$edit_row=$deg_edit->fetch();$i++){
                  $dept = $edit_row['department_id'];
                ?>
            <form method="post" action="edit_department.php<?php echo '?id='.$id; ?>" enctype="multipart/form-data">
      <div class="col-md-6 col-sm-6">
                   <div class="form-group">
                <label for="course Level">School: &nbsp;<span class="required">*</span></label>
                <select class="form-control" required="required" id="faculty_id" name="faculty_id">
               <?php
                   $school= $conn->prepare("SELECT * FROM faculty");
                   $school->execute();
                   for($i=1;$sch_row=$school->fetch();$i++){
                       ?>
                      <option value="<?php echo $sch_row['faculty_id']; ?>" <?php if($edit_row['faculty_id']==$sch_row['faculty_id']) echo 'selected="selected"';  ?> ><?php echo $sch_row['faculty_name']; ?></option>

                      <?php
                   }
                ?>

                </select>
              </div>
              <div class="form-group">
                <label for="course Level">Department Name: &nbsp;<span class="required">*</span></label>
               <input type="text" name="department_name" class="form-control" value="<?php echo $edit_row['department_name']; ?>" />
              </div>


                </div>
                  <div class="row">
                      <div class="col-md-12">
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