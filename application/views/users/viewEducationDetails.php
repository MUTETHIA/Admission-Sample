

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
  <span id="showingit"></span>

  <div class="row">
    <span id="news_scroller" style="visibility: visible;"><marquee>NEWS WILL BE APPREARING HERE </marquee> </span>
    </div>

        <div class="row">
                        <div class="col-md-12">
                          <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box purple">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="glyphicon glyphicon-education"></i>Education Background</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                <th width="5%"> Code </th>
                                                <th>School Name </th>
                                                <th>Start Year </th>
                                                <th>End Year </th>
                                                <th>Area of Study</th>
                                                <th>Qualification</th>
                                                  <th>Exam Name</th>
                                            </tr>
                                            </thead>
                                     <tbody>
                                          <?php
                                                       $i=1;
                                                      foreach($applicant_education as $row){
                                                          $id = $row['Email_Address'];
                                                          ?>
                                                          <tr>
                                                          <td><?php echo $i; ?></td>
                                                         <td><?php echo $row['school_name']; ?></td>
                                                         <td><?php echo $row['start_Year']; ?></td>
                                                         <td><?php echo $row['end_Year']; ?></td>
                                                          <td><?php echo $row['study_Area']; ?></td>
                                                          <td><?php echo $row['qualification_attained']; ?></td>
                                                          <td><?php echo $row['exam_name']; ?></td>
                                                          </tr>

                                                    <?php
                                                      }

                                                    ?>

                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                    </div>

              </div><!-- /.box -->
            </div><!-- /.col -->

</div>
        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      </div><!-- /.content-wrapper -->