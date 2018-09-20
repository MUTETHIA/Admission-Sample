<?php  require_once('../inc/header1.php'); ?>
<?php
  if(isset($_GET['campus_id'])&& !empty($_GET['campus_id'])){
      $id = $_GET['campus_id'];

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
     <div class="panel-heading">Edit Campuses</div>
     <div class="panel-body">
    	<div class="register-box-body">

                 <?php
                $campus_edit =$conn->prepare("SELECT * FROM campuses WHERE Campus_id='$id'");
                 $campus_edit->execute();
              for($i=1;$edit_row=$campus_edit->fetch();$i++){
                  $id = $edit_row['Campus_id'];
                ?>
            <form method="post" action="edit_campus.php<?php echo '?id='.$id; ?>">
      <div class="col-md-4 col-sm-6">
                   <div class="form-group">
                <label for="course Level">Campus Code: &nbsp;<span class="required">*</span></label>
                 <input type="text" name="campus_code" class="form-control" value="<?php echo $edit_row['code']; ?>" />
              </div>
              <div class="form-group">
                <label for="course Level">Campus Name: &nbsp;<span class="required">*</span></label>
               <input type="text" name="campus_name" class="form-control" value="<?php echo $edit_row['Campus_Name']; ?>" />
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