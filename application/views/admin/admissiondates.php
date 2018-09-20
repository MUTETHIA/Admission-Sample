
      <!-- =============================================== --><!-- Left side column. contains the sidebar -->


      <!-- =============================================== --><!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1><img src="<?php echo base_url();?>public/images/new1.png" alt=""/>
            MMUST Course Application System
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

<div class="row">
 <div class="col-md-12">
 <div class="panel panel-primary">
 <div class="panel-heading"><i class="fa fa-calendar"></i>&nbsp;&nbsp;ADMISSION DATES</div>
 <div class="panel-body">
                <div style="display: block;" class="box-body">
                       <h4 class="form-section">Admission Application</h4>
                       <hr>
                   <?php
                   if(isset($_POST['updatedetails'])){
                       $attach = $_POST['attach_year'];
                       $startdate = $_POST['opendob'];
                       $year = $_POST['academic'];
                       $closedate = $_POST['closedob'];
                       $semester = $_POST['semester'];
                       $status = $_POST['status'];
                       $reportingdate= $_POST['startreport'];
                        $latest = $_POST['latestreport'];

                   $sem=$conn->prepare("INSERT INTO admissiondates (year,academic_year,intake_name,start_date,end_date,reportingdates,latestReportDate,status)
                   VALUES('$attach','$year','$semester','$reportingdate','$latest','$startdate','$closedate','$status')");

                   if($sem->execute()){
                       echo "<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button>
					    <strong>Success !</strong>Academic year details successfully saved.</div>";
                   }
                   else{
                        echo "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>
					    <strong>Sorry !</strong> Query could not be executed</div>";
                   }

                   }
                   ?>
              <form method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="row">
                    <div class="col-md-4">
                  <div class="form-group">
              <label>Admission Year:<span class="required">*</span></label>
                <input required name="attach_year" value="" type="text" class="form-control" placeholder="2017" >
              </div>
              </div>
              <div class="col-md-4">
              <div class="form-group">
              <label>Academic Year Name:<span class="required">*</span></label>
                <input required name="academic" value="" type="text" class="form-control" placeholder="2017/2018" >
              </div>
                </div>

                <div class="col-md-4">
              <div class="form-group">
              <label>Semester Intake Name:<span class="required">*</span></label>
                <input required name="semester" type="text" class="form-control" placeholder="MONTH-YEAR" >
              </div>
    </div>
 </div>

 <div class="row">
                     <div class="col-md-4">
               <div class="form-group">
                <label for="">Start of Application:  <span class="required">*</span></label>
                <div class="input-group date" data-provide="datepicker"  data-date-format="yyyy-mm-dd">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>  </div>
                   <input type="text" name="opendob" class="form-control" readonly="readonly" value="" />
                </div>  </div>
         </div>

         <div class="col-md-4">
               <div class="form-group">
                <label>Closing Date:  <span class="required">*</span></label>
                <div class="input-group date" data-provide="datepicker"  data-date-format="yyyy-mm-dd" data-date-start-date="+d">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>  </div>
                  <input type="text" name="closedob" class="form-control" readonly="readonly" />
                </div>  </div>
         </div>
                <div class="col-md-4">
                <div class="form-group">
                    <label for="status">Semester Status: <span class="required">*</span></label>
                    <select name="status" id="" class="form-control">
                          <option value="">~Select Status</option>
                          <option value="Open">Open</option>
                          <option value="Closed">Closed</option>
                    </select>
                </div>
                </div>
 </div>


                 <div class="row">
                     <div class="col-md-4">
                         <div class="form-group">
                <label>Reporting/Admission Date: <span class="required">*</span></label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>  </div>
                  <input type="text"  name="startreport" class="form-control pull-right" readonly="readonly" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-start-date="+d">
                </div>  </div>
              <!-- /.form group -->
                     </div>
                      <div class="col-md-4">
                         <div class="form-group">
                <label>Latest Report/Admission Date: <span class="required">*</span></label>
                <div class="input-group date" data-provide="datepicker"  data-date-format="yyyy-mm-dd" data-date-start-date="+d">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                    </div>
                  <input type="text" name="latestreport" class="form-control" readonly="readonly" />
                </div>  </div>
              <!-- /.form group -->
                     </div>
                 </div>


                <div class="form-actions">
                <div class="row">
                <div class="col-md-12">
                <div class="row">
                <div class="col-md-offset-1 col-md-11">
                <button type="submit" name="updatedetails" class="btn btn-info">Submit</button>
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
 <div class="panel-heading"><i class="fa fa-calendar"></i>&nbsp;&nbsp;ADMISSION DATES</div>
 <div class="panel-body">
                <div style="display: block;" class="box-body">
                       <h4 class="form-section">Academic Year Show</h4>
                       <hr>
                <div class="table-responsive">
                                                <table class="table table-striped table-condensed table-hover" id="example1">
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Academic Year</th>
                                                            <th>Intake Name</th>
                                                             <th>Reporting Date</th>
                                                             <th>Latest Date</th>
                                                             <th>Status</th>
                                                            <th style="width: 100px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                       $i=1;
                                                      foreach($admission as $row)
                                                       {
                                                           $id = $row['intake_id'];
                                                       ?>
                                                         <tr>
                                                         <td><?php echo $i;  ?></td>
                                                           <td><?php echo $row['academic_year'];?></td>
                                                           <td><?php echo $row['intake_name'];?></td> 
                                                           <td><?php echo $row['reportingdates'];?></td>
                                                           <td><?php echo $row['latestReportDate'];?></td>
                                                           <td><?php echo $row['status'];?></td>
                                                           <td style="width: 150px;">
                                                            <div class="btn-group">

                                                            <a data-toggle="modal" href="#delete<?php echo $id;?>" class="btn btn-danger">Delete</a>
                                                            	<a id="close_intake" data-id="<?php echo $id; ?>" href="javascript:void(0)" class="btn btn-warning">Close</a>
                                                                <button type="button" class="btn btn-info" data-toggle="modal" href="#details<?php echo $id;?>" >View Details</button>
                                                            </div>
                                                            </td>


                                                             <div class="modal fade" id="delete<?php echo $id;?>">
                                                              <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                  <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span></button>
                                                                    <h4 class="modal-title">Delete Operation</h4>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                    <p>Are you sure to delete this Intake???</p>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                                  </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                              </div>
                                                              <!-- /.modal-dialog -->
                                                            </div>
                                                            <!-- /.modal -->
                                                         </tr>
                                                         <div class="modal fade" id="details<?php echo $id;?>">
                                                              <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                  <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span></button>
                                                                    <h4 class="modal-title">More Details</h4>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                      <div class="row">
                                                                          <div class="col-md-6">
                                                                              <div class="form-group">
                                                                                  <label for="">Academic Year:</label>
                                                                                  <input type="text" name="year" class="form-control" value="<?php echo $row['academic_year'];  ?>" />
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-md-6">
                                                                              <div class="form-group">
                                                                                  <label for="">Intake Name:</label>
                                                                                  <input type="text" name="year" class="form-control" value="<?php echo $row['intake_name'];  ?>" />
                                                                              </div>
                                                                          </div>
                                                                      </div>

                                                                          <div class="row">
                                                                          <div class="col-md-6">
                                                                              <div class="form-group">
                                                                                  <label for="">Applcation Start:</label>
                                                                                  <input type="text" name="year" class="form-control" value="<?php echo $row['start_date'];  ?>" />
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-md-6">
                                                                              <div class="form-group">
                                                                                  <label for="">Application Close:</label>
                                                                                  <input type="text" name="year" class="form-control" value="<?php echo $row['end_date'];  ?>" />
                                                                              </div>
                                                                          </div>
                                                                      </div>

                                                                          <div class="row">
                                                                          <div class="col-md-6">
                                                                              <div class="form-group">
                                                                                  <label for="">Admission Start Date:</label>
                                                                                  <input type="text" name="year" class="form-control" value="<?php echo $row['reportingdates'];  ?>" />
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-md-6">
                                                                              <div class="form-group">
                                                                                  <label for="">Latest Date:</label>
                                                                                  <input type="text" name="year" class="form-control" value="<?php echo $row['latestReportDate'];  ?>" />
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>

                                                                  </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                              </div>
                                                              <!-- /.modal-dialog -->
                                                            </div>

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
