

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
                            <div class="panel-heading"><i class="fa fa-user"></i>&nbsp;&nbsp;PERSONAL INFORMATION </div>
                            <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-condensed  table-hover dataTables">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No</th>
                                                            <th>First Name </th>
                                                            <th>Last Name</th>
                                                            <th>Email</th>
                                                            <th>ID Number</th>
                                                            <th>Postal Address</th>
                                                            <th>Mobile</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $i=1;
                                                      foreach($applicant_details as $row){
                                                          $id = $row['Email_Address'];
                                                          ?>
                                                           <tr>
                                                            <td><?php echo $i;  ?></td>
                                                            <td><?php echo $row['First_Name'];  ?></td>
                                                            <td><?php echo $row['Last_Name'];  ?></td>
                                                            <td><?php echo $id;  ?></td>
                                                            <td><?php echo $row['idNumber'];  ?> </td>
                                                            <td><?php echo $row['Postal_Address'];  ?></td>
                                                            <td><?php echo $row['Mobile'];  ?></td>
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