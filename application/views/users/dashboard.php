<!-- =============================================== --><!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
         <section class="content-header">
          <h1><img src="../images/new1.png" alt=""/>
            MMUST Course Application System
          </h1>
        </section>

        <section class="content">


   <div class="row">
       <div class="col-md-12">

       </div>


    </div>
    <style type="text/css">
    .system_guide_details_writeup{
        padding: 10px;
    }
    .system_guide_details_writeup_header{
        padding-top: 20px;
        font-weight: bolder;
    }
</style>
<div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">System Guide</div>
                    <div class="panel-body">

            <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">System Guide</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="box-group" id="accordion">
                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->

                    <div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a class="collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion" href="#accord_ref_1">
                            Application Instructions Guide
                          </a>
                        </h4>
                      </div>
                      <div style="height: 0px;" aria-expanded="false" id="accord_ref_1" class="panel-collapse collapse">
                        <div class="box-body">

                            <h4 class="system_guide_details_writeup_header">Registration</h4>
                            <hr/>
                            <p>Thanks for taking the first of creating user account,before you can start to make an application.
                            </p>

                             <h4 class="system_guide_details_writeup_header">Profile Management</h4>
                        <hr/>
                        <p>
                           To apply for a university programme you will be required to complete your profile. These include your personal details, contact information, education background. You <strong>may</strong> also be required to upload scanned copies of your certificates, transcripts and passport photo. If you do not manage to complete your profile in one session your data will be saved and you can still come back and complete it at a later time.
                        </p>
                            <p>The module enables authorized users perform the course application solemnly after after the payments (non-refundable) are received in full before application.</p>
                            <h4 class="system_guide_details_writeup_header">Programme Selection</h4>
                            <hr/>
                            <p>Only when your profile is complete can you apply for the programme you wish to undertake. You will select your programme from the intakes that are open at the time of making the application. You will also be able to view the entry requirements for the programme to see if you meet the requirements before making the application.
                            </p>

                            <h4 class="system_guide_details_writeup_header">Payment of Application Fee</h4>
                            <hr/>
                            <p>If satisfied and wish to proceed you will be directed to the payment section where you pay the application fees. The system supports online payment using MPESA. In this case the system will issue an applicant reference number which should be used as the <b><span style="text-transform: uppercase">account no</span></b> when making the payment.
                            </p>
                            <h4 class="system_guide_details_writeup_header">Application Tracking</h4>
                            <hr/>
                            <p>You will be able to track the status of your application online through the system.
                            </p>
                        <h4 class="system_guide_details_writeup_header">Apply Now</h4>
                            <hr/>
                            <p>If you would wish to apply now, kindly click on the link to get started.<a class="btn btn-sm btn-info" href="personal_details">APPLY NOW</a>
                            </p>
                        </div>
                      </div>
                    </div>


                  </div>
                </div><!-- /.box-body -->
              </div>
        </div>
        </div>
        </div>
</div>


 <div class="row">
    <div class="col-md-12">
      <div class="portlet box yellow">
                            <div class="panel-heading"><i class="fa fa-globe"></i>&nbsp;&nbsp;PROGRAMMES AND REQUIREMENTS</div>
                            <div class="portlet-body form">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#degree" data-toggle="tab">Degree Programmes</a></li>
              <li><a href="#diploma" data-toggle="tab">Diploma Courses</a></li>
              <li><a href="#certificate" data-toggle="tab">Certificate Levels</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="degree">
                  <div class="table-responsive">
                                                <table class="table table-striped table-condensed  table-hover" >
                                                    <thead>
                                                        <tr>
                                                           <th>S/N</th>
                                                            <th>Course Name</th>
                                                            <th>Course Requirement</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                       $deg=1;
                                                      foreach($degrees as $row){
                                                          ?>
                                                           <tr>
                                                           <td><?php echo $deg;  ?></td>
                                                            <td><?php echo $row['programme'];  ?></td>
                                                              <td><button class="btn btn-info" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default<?php echo $deg; ?>" > View Course Requirements</button>  </td>
                                                            <div class="modal fade" id="modal-default<?php echo $deg; ?>">
                                                              <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                  <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span></button>
                                                                    <h4 class="modal-title"><?php echo $row['programme']; ?></h4>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                    <p><?php echo $row['programme_req']; ?></p>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                                    <a href="personal_details"><button type="button" class="btn btn-primary">Proceed to Application</button></a>
                                                                  </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                              </div>
                                                              <!-- /.modal-dialog -->
                                                            </div>
                                                            <!-- /.modal -->
                                                           </tr>
                                                          <?php
                                                          $deg++;
                                                      }
                                                    ?>
                                                     </tbody>
                                                </table>
                                            </div>



                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="diploma">
                   <div class="table-responsive">
                                                <table class="table table-striped table-condensed  table-hover" >
                                                    <thead>
                                                        <tr>
                                                           <th>S/N</th>

                                                            <th>Course Name</th>

                                                            <th>Course Requirement</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php

                                                       $dip=1;
                                                      foreach($diploma as $row){
                                                          ?>
                                                           <tr>
                                                           <td><?php echo $dip;  ?></td>
                                                            <td><?php echo $row['programme'];  ?></td>
                                                              <td><button class="btn btn-info"data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-diploma<?php echo $dip; ?>" > View Course Requirements</button>  </td>
                                                           </tr>
                                                              <div class="modal fade" id="modal-diploma<?php echo $dip; ?>">
                                                              <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                  <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span></button>
                                                                    <h4 class="modal-title"><?php echo $row['programme']; ?></h4>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                    <p><?php echo $row['programme_req']; ?></p>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                                    <a href="personal_details"><button type="button" class="btn btn-primary">Proceed to Application</button></a>
                                                                  </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                              </div>
                                                              <!-- /.modal-dialog -->
                                                            </div>
                                                            <!-- /.modal -->
                                                          <?php
                                                          $dip++;
                                                      }
                                                    ?>
                                                     </tbody>
                                                </table>
                                            </div>


              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="certificate">
                <div class="table-responsive">
                                                <table class="table table-striped table-condensed  table-hover">
                                                    <thead>
                                                        <tr>
                                                           <th>S/N</th>

                                                            <th>Course Name</th>

                                                            <th>Course Requirement</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php

                                                       $cert=1;
                                                      foreach($certificate as $row){
                                                          ?>
                                                           <tr>
                                                           <td><?php echo $cert;  ?></td>
                                                            <td><?php echo $row['programme'];  ?></td>
                                                              <td><button class="btn btn-info"data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-certificate<?php echo $cert; ?>" > View Course Requirements</button>  </td>
                                                           </tr>
                                                              <div class="modal fade" id="modal-certificate<?php echo $cert; ?>">
                                                              <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                  <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span></button>
                                                                    <h4 class="modal-title"><?php echo $row['programme']; ?></h4>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                    <p><?php echo $row['programme_req']; ?></p>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                                                    <a href="personal_details"><button type="button" class="btn btn-primary">Proceed to Application</button></a>
                                                                  </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                              </div>
                                                              <!-- /.modal-dialog -->
                                                            </div>
                                                            <!-- /.modal -->
                                                          <?php
                                                          $cert++;
                                                      }
                                                    ?>
                                                     </tbody>
                                                </table>
                                            </div>



              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
        </div>
        </div>
 </div>


        <!--END PAGE CONTENT -->
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->
      </div><!-- /.content-wrapper -->