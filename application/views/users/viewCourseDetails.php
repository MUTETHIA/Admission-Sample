

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
        <div class="panel panel-primary">
                            <div class="panel-heading"><i class="glyphicon glyphicon-education"></i>&nbsp;&nbsp;COURSE APPLICATION INFORMATION </div>
                            <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-condensed  table-hover dataTables">
                                                    <thead>
                                                        <tr>
                                                            <th>Course Level</th>
                                                            <th>Course Name </th>
                                                            <th>Mode of Study</th>
                                                            <th>Campus</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $i=1;
                                                      foreach($courseApplied as $row){

                                                          ?>
                                                           <tr>
                                                           <td><?php echo $row['Level_Name'];  ?></td>
                                                            <td><?php echo $row['programme'];  ?></td>
                                                            <td><?php echo $row['Mode_Of_Study'];  ?></td>
                                                            <td><?php echo $row['Campus_Name'];  ?></td>
                                                           </tr>
                                                          <?php
                                                      }

                                                    ?>

                                                     </tbody>
                                                </table>
                                            </div>
                                </div>
                            </div>
              </div><!-- /.box -->
            </div><!-- /.col -->

</div>
        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      </div><!-- /.content-wrapper -->