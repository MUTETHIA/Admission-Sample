<?php  require_once('../inc/header1.php');  ?>
      <!-- =============================================== --><!-- Left side column. contains the sidebar -->
    <?php include_once('include/sidebar.php');  ?>

      <!-- =============================================== --><!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            MMUST Application System <small>  Dashboard </small>
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
        <div class="panel panel-primary">
                            <div class="panel-heading">Inquiry <u></u>Request Submitted by Users </div>
                            <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-condensed  table-hover dataTables" id="dataTables-catalogueList">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No</th>
                                                            <th>Program Inquired </th>
                                                            <th>Full Name</th>
                                                            <th>Mobile No</th>
                                                            <th>Email Address</th>
                                                            <th>Date Reported</th>
                                                            <th>Code Generated</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                      $stmt=$conn->prepare("SELECT * FROM subscriptions");
                                                      $stmt->execute();
                                                      $i=1;
                                                      while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                                          $emailid=$row['id'];
                                                          ?>
                                                           <tr>
                                                           <td><?php echo $i;  ?></td>
                                                            <td><?php echo $row['program'];  ?></td>
                                                             <td><?php echo $row['fullname'];  ?></td>
                                                              <td><?php echo $row['phone'];  ?></td>
                                                               <td><?php echo $row['email'];  ?></td>
                                                                <td><?php echo $row['date_added'];  ?></td>
                                                                 <td><?php echo $row['code'];  ?></td>
                                                                 <td><a href="subscription_respond?mail_id=<?php echo $emailid; ?>" class="btn btn-info">Repond</a>
                                                                  </td>
                                                           </tr>
                                                          <?php
                                                     $i++; }

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
  <?php require_once('../inc/footer.php'); ?>