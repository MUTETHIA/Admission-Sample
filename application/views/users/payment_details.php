
      <!-- =============================================== --><!-- Left side column. contains the sidebar -->

      <!-- =============================================== --><!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Payment Information
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
 <div class="panel-heading"><i class="fa fa-money"></i>&nbsp;BANK PAYMENT INFORMATION</div>
 <div class="panel-body">
                <div style="display: block;" class="box-body">
                       <h4 class="form-section">Please note your are supposed to upload BANK SLIP Document HERE!!!!.</h4>
                       <h4 class="form-section">Kindly note that the application will not be processed if this section is NOT filled accordingly.</h4>

                       <h4 class="form-section">Please note that uploads should be less than 2MB in size. Kindly NOTE: <strong>Documents should be:
                       <ol>
                           <li>Word Document</li>
                           <li>PDF</li>
                           <li>Image: PNG or JPEG</li>
                       </ol>
                       </strong></h4>
                       <hr>
                    <?php
                   echo $this->session->flashdata('success_msg');
                   echo  $this->session->flashdata('error');
                       ?>

              <form id="course-form" action="<?php echo site_url('Users/savePayments'); ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="col-md-6">
              <div class="form-group">
                <label for="slip">Browse Document:&nbsp;<span class="required">*</span></label>
                  <input type="file" name="filename" required="required" />
              </div>
              </div>


                 <div class="col-md-12">
                <div class="form-actions">
                <div class="row">
                <div class="col-md-6">
                <div class="row">
                <div class="col-md-offset-3 col-md-9">
                <button type="submit" name="apply" class="btn btn-info">Submit</button>
                <button type="reset" class="btn btn-warning">Cancel</button>
                </div>
                </div>
                </div>
                <div class="col-md-6"> </div>
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
                            <div class="panel-heading"><i class="glyphicon glyphicon-upload"></i>&nbsp;&nbsp;PAYMENT UPLOADS</div>
                            <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-condensed  table-hover dataTables" id="dataTables-catalogueList">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial</th>
                                                            <th>File Name </th>
                                                            <th>Date Modified</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                           $i=1;
                                                      foreach($payments as $row){
                                                          $id = $row['id'];
                                                          ?>
                                                           <tr>
                                                           <td><?php echo $i;  ?></td>
                                                            <td><?php echo $row['file_name'];  ?></td>
                                                            <td><?php echo $row['date_updated'];  ?></td>
                                                            <td><a id="delete_uploads" data-id="<?php echo $id; ?>" href="javascript:void(0)" class="btn btn-danger">Delete</a></td>
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

        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
