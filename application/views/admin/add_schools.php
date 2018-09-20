

      <!-- =============================================== --><!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1><img src="<?php echo base_url();?>public/images/new1.png" alt="logo"/>
            MMUST Course Application System
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

<div class="row">
 <div class="col-md-12">
              <div class="panel panel-primary">
                 <div class="panel-heading"><span class="glyphicon glyphicon-education"></span>&nbsp;&nbsp;&nbsp;ADD SCHOOLS</div>
     <div class="panel-body">
                <div style="display: block;" class="box-body">
                       <h4 class="form-section">School Information</h4>
                       <hr>
                       <?php
                     /*    if(isset($_POST['school-add']))
                         {
                          $name = $_POST['faculty_name'];
                           $stmt1=$conn->prepare("INSERT INTO faculty (faculty_name) VALUES('$name')");
                           $result=$stmt1->execute();
                          if($result){
                            echo "<div class='alert alert-success fade in'>
                                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>x</a>
                                         Faculty Details Successfully Saved</div>";
                                 }
                                 else
                                 {
                     echo "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry !</strong> Query could not be executed </div>";
                                 }

                          }*/
                       ?>
              <form class="form-vertical" method="post" enctype="multipart/form-data">
                <div class="col-md-3 col-lg-4">
                  <div class="form-group has-feedback">
              <label>School Name: <span class="required">*</span></label>
                <input required name="faculty_name" type="text" class="form-control" placeholder="School name" >
                <span class="glyphicon glyphicon-education form-control-feedback"></span>
              </div>
              </div>
               <div class="form-actions">
                <div class="row">
                <div class="col-md-12">
                <div class="row">
                <div class="col-md-offset-3 col-md-9">
                <button type="submit" name="school-add" class="btn btn-info">Submit</button>
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
                 <div class="panel-heading"><span class="glyphicon glyphicon-education"></span>&nbsp;&nbsp;&nbsp;SCHOOLS LIST</div>
     <div class="panel-body">
                <div style="display: block;" class="box-body">
                      
                       <div class="table-responsive">
                                                <table class="table table-striped table-condensed table-hover" id="example2">
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>School Name</th>
                                                            <th style="width: 100px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       <?php
                                                        $i=1;
                                                      foreach($faculty as $row)
                                                       { $id = $row['faculty_id'];
                                                       ?>
                                                        <tr>
                                                           <td><?php echo $i;  ?></td>
                                                           <td><?php echo $row['faculty_name'];?></td>
                                                            <td style="width: 120px;">
                                                            <div class="btn-group">
															<a href="editSchool.php?sc_id=<?php echo $id; ?>" class="btn btn-info">Edit</a>
                                                            <a class="btn btn-danger" id="delete_school" data-id="<?php echo $id; ?>" href="javascript:void(0)">Delete</a>

                                                            </div>
                                                            </td>

                                                        </tr>

                                                       <?php
                                                       $i++;

                                                       }

                                                      ?>
                                                    </tbody>
                                                </table>
                       </div>

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