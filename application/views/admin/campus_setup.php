

      <!-- =============================================== --><!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1><img src="<?php echo base_url(); ?>public/images/new1.png" alt=""/>
            MMUST Course Application System
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
  <span id="showingit"></span>

  <div class="row">
    <span id="news_scroller" style="visibility:hidden;">   </span>
    </div>
<div class="row">
 <div class="col-md-12">
 <div class="panel panel-primary">
 <div class="panel-heading"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Campus Setup</div>
 <div class="panel-body">
                <div style="display: block;" class="box-body">
                       <h4 class="form-section">Admission Application</h4>
                       <hr>
                   <?php
                   if(isset($_POST['campus'])){
                       $code = $_POST['campus_code'];
                       $name = $_POST['campus_name'];

                   $check_campo= $conn->prepare("SELECT * FROM campuses WHERE code='$code'");
                   $check_campo->execute();
                   $count= $check_campo->rowCount();
                   if($count>0){
                    echo "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>
					    <strong>Sorry !</strong>There exist another campus code. Try another one.</div>";
                   }
                    else{
                      $sem=$conn->prepare("INSERT INTO campuses (code,Campus_Name)
                   VALUES(:cd,:name)");
                   $sem->bindParam(':cd',$code);
                   $sem->bindParam(':name',$name) ;

                   if($sem->execute()){
                       echo "<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button>
					    <strong>Success !</strong>Campus details successfully saved.</div>";
                   }
                   else{
                        echo "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>
					    <strong>Sorry !</strong> Query could not be executed</div>";
                   }
                    }


                   }
                   ?>
              <form method="post" enctype="multipart/form-data" autocomplete="off">

              <div class="col-md-3 col-lg-4">
                  <div class="form-group has-feedback">
              <label>Campus Code:<span class="required">*</span></label>
                <input required name="campus_code" type="text" class="form-control" placeholder="01" >
              </div>
                </div>

                 <div class="col-md-3 col-lg-4">
              <div class="form-group has-feedback">
              <label>Campus Name:<span class="required">*</span></label>
                <input required name="campus_name" value="" type="text" class="form-control" placeholder="main Campus" >
              </div>

                </div>

                <div class="form-actions">
                <div class="row">
                <div class="col-md-12">
                <div class="row">
                <div class="col-md-offset-1 col-md-11">
                <button type="submit" name="campus" class="btn btn-info">Submit</button>
                <button type="reset" class="btn btn-warning">Cancel</button>
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

<div class="row">
 <div class="col-md-12">
 <div class="panel panel-primary">
 <div class="panel-heading"><i class="fa fa-home"></i>&nbsp;&nbsp;Campuses And Satelites Colleges</div>
 <div class="panel-body">
                <div style="display: block;" class="box-body">
                       <h4 class="form-section">List of all Campus</h4>
                       <hr>
                <div class="table-responsive">
                                                <table class="table table-striped table-condensed table-hover" id="example2">
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Campus Code</th>
                                                            <th>Campus Name</th>
                                                            <th style="width: 100px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                   $i=1;
                                                      foreach($campo as $row)
                                                       { $id = $row['Campus_id'];
                                                       ?>
                                                         <tr>
                                                         <td><?php echo $i;  ?></td>
                                                           <td><?php echo $row['code'];?></td>

                                                           <td><?php echo $row['Campus_Name'];?></td>
                                                           <td style="width: 150px;">
                                                            <div class="btn-group">
                                                            	<a href="editCampus.php?campus_id=<?php echo $id; ?>" class="btn btn-info">Edit</a>
                                                             <a class="btn btn-danger" id="delete_campus" data-id="<?php echo $id; ?>" href="javascript:void(0)">Delete</a>
                                                            </div>
                                                            </td>

                                                         </tr>
                                                       <?php
                                                       }
                                                    ?>
                                                    </tbody>
                                                    </table>
                                                    </div>


                </div>
 </div>
 </div>
 </div>
</div>

        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->