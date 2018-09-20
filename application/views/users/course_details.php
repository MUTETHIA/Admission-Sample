
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
    <span id="news_scroller" style="visibility:hidden;">   </span>
    </div>

    <div class="row">
        <div class="col-md-12">
                        <div class="portlet box purple">
                        <div class="portlet-title">
                        <div class="caption">
                        <i class="fa fa-gift"></i>Course Application  </div>
                        <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="javascript:;" class="remove"> </a>
                        </div>
                        </div>
                        <div class="portlet-body form">
                              <h4 class="form-section">Course Info</h4>
                       <hr>
                       <?php
                         if($paymentcheck>0){
                               if($courseCount>0){
                               echo "<div class='alert alert-success'><strong>Congratulations!!! </strong>You have applied for the course. <a href='GenerateTicketPdf' class='alert alert-info'>Generate Application Ticket</a></div>";
                               ?>
                                              <form  class="horizontal-form" method="post" id="course-form">
                           <div class="form-body">
                               <div class="row">
                               <div class="col-md-4">
                               <div class="form-group">STEP 1&nbsp;&nbsp;<label for="eng">Intake:&nbsp;<span class="required">*</span></label>
                               <select class="form-control" required="required" id="intake" name="intake">
                     <option value="">Select intake Name</option>
                    <?php
                     foreach($admissiondates as $row) { ?>
                    <option value="<?php echo $row['intake_id']; ?>"><?php echo $row['intake_name']; ?></option>
                    <?php
                    } ?>
                      </select>
              </div>
              </div>
             <div class="col-md-4">
             <div class="form-group">STEP 2&nbsp;&nbsp; <label for="eng">Programme Level:&nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="level" name="level">
                     <option value="">Select Course Level</option>
                    <?php

                     foreach($courselevels as $row) { ?>
                    <option value="<?php echo $row['Level_id']; ?>"><?php echo $row['Level_Name']; ?></option>
                    <?php } ?>
                      </select>
              </div>
                                </div>
                               <div class="col-md-4">
                               <div class="form-group">STEP 3&nbsp;&nbsp;<label for="eng">Programme Name:&nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="programme" name="programme">
                     <option value="" >Select Programme Name</option>

                      </select>
              </div>
                               </div>
                                                            <!--/span-->
                               </div>

                               <div class="row">
                                   <div class="col-md-4">
                                      <div class="form-group">
                  STEP 4&nbsp;&nbsp;<label for="grp3">Campus/Study Centre:&nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="centre" name="centre">
                    <option value ="">--SELECT Campus Name--</option>
                     <?php

                     foreach($campuses as $row) { ?>
                    <option value="<?php echo $row['Campus_id']; ?>"><?php echo $row['Campus_Name']; ?></option>
                    <?php } ?>
                      </select>
              </div>
                                   </div>

                                   <div class="col-md-4">
                                       <div class="form-group">
                 STEP 5&nbsp;&nbsp;<label for="eng">Mode of Study:&nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="studymode" name="studymode">
                    <option value ="">--SELECT Study Mode--</option>
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Evening Class">Evening Class</option>
                        <option value="Weekend Class">Weekend Classes</option>
                        <option value="ODEL">ODEL</option>
                      </select>
              </div>

                                   </div>


                              <!--     <div id="requrement" style="display: none">
                                          <div class="col-md-4">
                                       <div class="form-group">
                            <label for="eng">Requrements:&nbsp;</label>

                               </div>

                                   </div>
                                   </div>-->



                               </div>
                               <div class="row">
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
                               </div>
                           </div>
                           </form>
                               <?php
                         }
                       else{
                           echo "<div class='alert alert-info'><strong>Congratulations!!! </strong>You can proceed with application</div>";
                           echo $this->session->flashdata('success');
                           
                           echo $this->session->flashdata('error');
                           ?>
                                          <form  class="horizontal-form" action="<?php echo site_url('Users/applyCourse'); ?>" method="post" id="course-form">
                           <div class="form-body">
                               <div class="row">
                               <div class="col-md-4">
                               <div class="form-group">STEP 1&nbsp;&nbsp;<label for="eng">Intake:&nbsp;<span class="required">*</span></label>
                               <select class="form-control" required="required" id="intake" name="intake">
                     <option value="">Select intake Name</option>
                    <?php
                     foreach($admissiondates as $row) { ?>
                    <option value="<?php echo $row['intake_id']; ?>"><?php echo $row['intake_name']; ?></option>
                    <?php
                    } ?>
                      </select>
              </div>
              </div>
             <div class="col-md-4">
             <div class="form-group">STEP 2&nbsp;&nbsp; <label for="eng">Programme Level:&nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="level" name="level">
                     <option value="">Select Course Level</option>
                    <?php

                     foreach($courselevels as $row) { ?>
                    <option value="<?php echo $row['Level_id']; ?>"><?php echo $row['Level_Name']; ?></option>
                    <?php } ?>
                      </select>
              </div>
                                </div>
                               <div class="col-md-4">
                               <div class="form-group">STEP 3&nbsp;&nbsp;<label for="eng">Programme Name:&nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="programme" name="programme">
                     <option value="" >Select Programme Name</option>

                      </select>
              </div>
                               </div>
                                                            <!--/span-->
                               </div>

                               <div class="row">
                                   <div class="col-md-4">
                                      <div class="form-group">
                  STEP 4&nbsp;&nbsp;<label for="grp3">Campus/Study Centre:&nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="centre" name="centre">
                    <option value ="">--SELECT Campus Name--</option>
                     <?php

                     foreach($campuses as $row) { ?>
                    <option value="<?php echo $row['Campus_id']; ?>"><?php echo $row['Campus_Name']; ?></option>
                    <?php } ?>
                      </select>
              </div>
                                   </div>

                                   <div class="col-md-4">
                                       <div class="form-group">
                 STEP 5&nbsp;&nbsp;<label for="eng">Mode of Study:&nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="studymode" name="studymode">
                    <option value ="">--SELECT Study Mode--</option>
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Evening Class">Evening Class</option>
                        <option value="Weekend Class">Weekend Classes</option>
                        <option value="ODEL">ODEL</option>
                      </select>
              </div>

                                   </div>


                              <!--     <div id="requrement" style="display: none">
                                          <div class="col-md-4">
                                       <div class="form-group">
                            <label for="eng">Requrements:&nbsp;</label>

                               </div>

                                   </div>
                                   </div>-->



                               </div>
                               <div class="row">
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
                               </div>
                           </div>
                           </form>

                           <?php
                           }
                           ?>


                           <?php
                       }
                       else{
                          echo "<div class='alert alert-danger'><strong>Sorry!!! </strong>Seems you have not made the payments. Kindly uploads the banklips.
                           <a href='payment_transactions' class='alert alert-info'>Make Payments</a>
                           </div>";
                           ?>
                                                <form  class="horizontal-form" method="post" id="course-form">
                           <div class="form-body">
                               <div class="row">
                               <div class="col-md-4">
                               <div class="form-group">STEP 1&nbsp;&nbsp;<label for="eng">Intake:&nbsp;<span class="required">*</span></label>
                               <select class="form-control" required="required" id="intake" name="intake">
                     <option value="">Select intake Name</option>
                    <?php
                     foreach($admissiondates as $row) { ?>
                    <option value="<?php echo $row['intake_id']; ?>"><?php echo $row['intake_name']; ?></option>
                    <?php
                    } ?>
                      </select>
              </div>
              </div>
             <div class="col-md-4">
             <div class="form-group">STEP 2&nbsp;&nbsp; <label for="eng">Programme Level:&nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="level" name="level">
                     <option value="">Select Course Level</option>
                    <?php

                     foreach($courselevels as $row) { ?>
                    <option value="<?php echo $row['Level_id']; ?>"><?php echo $row['Level_Name']; ?></option>
                    <?php } ?>
                      </select>
              </div>
                                </div>
                               <div class="col-md-4">
                               <div class="form-group">STEP 3&nbsp;&nbsp;<label for="eng">Programme Name:&nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="programme" name="programme">
                     <option value="" >Select Programme Name</option>

                      </select>
              </div>
                               </div>
                                                            <!--/span-->
                               </div>

                               <div class="row">
                                   <div class="col-md-4">
                                      <div class="form-group">
                  STEP 4&nbsp;&nbsp;<label for="grp3">Campus/Study Centre:&nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="centre" name="centre">
                    <option value ="">--SELECT Campus Name--</option>
                     <?php

                     foreach($campuses as $row) { ?>
                    <option value="<?php echo $row['Campus_id']; ?>"><?php echo $row['Campus_Name']; ?></option>
                    <?php } ?>
                      </select>
              </div>
                                   </div>

                                   <div class="col-md-4">
                                       <div class="form-group">
                 STEP 5&nbsp;&nbsp;<label for="eng">Mode of Study:&nbsp;<span class="required">*</span></label>
                  <select class="form-control" required="required" id="studymode" name="studymode">
                    <option value ="">--SELECT Study Mode--</option>
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Evening Class">Evening Class</option>
                        <option value="Weekend Class">Weekend Classes</option>
                        <option value="ODEL">ODEL</option>
                      </select>
              </div>

                                   </div>


                              <!--     <div id="requrement" style="display: none">
                                          <div class="col-md-4">
                                       <div class="form-group">
                            <label for="eng">Requrements:&nbsp;</label>

                               </div>

                                   </div>
                                   </div>-->



                               </div>
                               <div class="row">
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
                               </div>
                           </div>
                           </form>
                           <?php
                       }

                       ?>


                        </div>
                        </div>
        </div>
    </div>

         <!-- END PAGE HEADER-->
         <!--
                    <div class="row">
                        <div class="col-md-12">
                                          <div class="portlet box blue">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-gift"></i>Form Sample </div>
                                                <div class="tools">
                                                    <a href="javascript:;" class="collapse"> </a>
                                                    <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                                    <a href="javascript:;" class="reload"> </a>
                                                    <a href="javascript:;" class="remove"> </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">

                                                <form class="form-horizontal" role="form">
                                                    <div class="form-body">
                                                        <h2 class="margin-bottom-20"> View User Info - Bob Nilson </h2>
                                                        <h3 class="form-section">Person Info</h3>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">First Name:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> Bob </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Last Name:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> Nilson </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Gender:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> Male </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Date of Birth:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> 20.01.1984 </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Category:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> Category1 </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Membership:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> Free </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <h3 class="form-section">Address</h3>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Address:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> #24 Sun Park Avenue, Rolton Str </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">City:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> New York </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">State:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> New York </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Post Code:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> 457890 </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Country:</label>
                                                                    <div class="col-md-9">
                                                                        <p class="form-control-static"> USA </p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-offset-3 col-md-9">
                                                                        <button type="submit" class="btn green">
                                                                            <i class="fa fa-pencil"></i> Edit</button>
                                                                        <button type="button" class="btn default">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6"> </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                        </div>
                    </div>


          -->

        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
