
      <!-- =============================================== --><!-- Left side column. contains the sidebar -->


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
    <span> </span>
    </div>
            <div class="row">
                <div class="col-md-4">
                    <?php

                     if($countregnumber>0){

                     }
                     else{
                         ?>

                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#setup">Reg Number Setup</button>
                         <?php
                     }

                    ?>


        <div class="modal fade" id="setup">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Registration Number Setup</h4>
              </div>
              <form action="reg_setup.php" method="post">
              <div class="modal-body">
                 <div class="alert alert-warning">Kindly note this step is done once.</div>
                   <div class="row">
                       <div class="col-md-12">
                           <div class="form-group">
                               <label for="">Registration Number Start</label>
                               <input type="number" required="required" name="reg" class="form-control" />
                           </div>
                       </div>
                   </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" name="insert" class="btn btn-primary">Save changes</button>
              </div>
                </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
                </div>
            </div>
             <div class="row">
             <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Our Courses</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div style="display: block;" class="box-body">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                          <div class="inner">
                            <h3><?php echo $rowall; ?></h3>
                            <p>Total Courses</p>
                          </div>
                          <div class="icon">
                            <i class="fa fa-bell"></i>
                          </div>
                          <a href="programmes" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                    </div><!-- ./col -->

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-orange">
                          <div class="inner">
                            <h3><?php echo $rowdeg;  ?></h3>
                            <p>Degree Courses</p>
                          </div>
                          <div class="icon">
                            <i class="glyphicon glyphicon-education"></i>
                          </div>
                          <a href="Degree_courses" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                    </div><!-- ./col -->


                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-olive">
                          <div class="inner">
                            <h3><?php echo $rowdip;  ?></h3>
                            <p>Diploma Courses</p>
                          </div>
                          <div class="icon">
                            <i class="fa fa-book"></i>
                          </div>
                          <a href="diploma_courses" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                    </div><!-- ./col -->


                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-purple">
                          <div class="inner">
                            <h3> <?php echo $rowcert;  ?></h3>
                            <p>Certificate Courses</p>

                          </div>
                          <div class="icon">
                            <i class="fa fa-certificate"></i>
                          </div>
                          <a href="certificate_courses" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                    </div><!-- ./col -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

</div>

<div class="row">
 <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Application Report</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div style="display: block;" class="box-body">

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-blue">
                          <div class="inner">
                            <h3>  <?php echo $rownumber; ?></h3>
                            <p>Total Applicants</p>
                          </div>
                          <div class="icon">
                            <i class="fa fa-user"></i>
                          </div>
                          <a href="manageAdmission" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                          <div class="inner">
                            <h3><?php echo $degreenumber; ?></h3>
                            <p>Degree Applicants</p>
                          </div>
                          <div class="icon">
                            <i class="glyphicon glyphicon-education"></i>
                          </div>
                          <a href="viewDegApplicants" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-blue-active">
                          <div class="inner">
                            <h3> <?php echo $diplomanumber; ?></h3>
                            <p>Diploma Applicants</p>
                          </div>
                          <div class="icon">
                            <i class="fa fa-book"></i>
                          </div>
                          <a href="viewDipApplicants" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                          <div class="inner">
                            <h3><?php echo $certificatenumber; ?></h3>
                            <p>Certificate Applicants</p>
                          </div>
                          <div class="icon">
                            <i class="fa fa-certificate"></i>
                          </div>
                          <a href="viewCertApplicants" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                    </div><!-- ./col -->




                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

</div>
   </section><!-- /.content -->
</div>
        <!--END PAGE CONTENT -->

      </div><!-- /.content-wrapper -->
      </div><!-- /.content-wrapper -->
