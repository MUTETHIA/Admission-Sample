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


        <div class="panel panel-info">
                            <div class="panel-heading">UNREPLIED MESSAGES </div>
                            <div class="panel-body">


                                            <div class="table-responsive">
                                                <table class="table table-striped table-condensed  table-hover" id="example2">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No</th>
                                                            <th>Sender </th>
                                                            <th>Message</th>
                                                            <th>Sent Date</th>
                                                            <th style="width: 150px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                         <?php
                                                          $stmt=$conn->prepare("SELECT * FROM inquiries WHERE Reply IS NULL");
                                                          $stmt->execute();
                                                          $i=1;
                                                          while($meso=$stmt->fetch(PDO::FETCH_ASSOC))
                                                          {
                                                              $senderid=$meso['id'];
                                                              ?>
                                                               <tr>
                                                               <td><?php echo $i;  ?></td>
                                                                <td><?php echo $meso['Sender']; ?></td>
                                                                <td><?php echo $meso['Message']; ?></td>
                                                                <td><?php echo $meso['Sent_Date']; ?></td>
                                                                 <td><a href="message_replies?chat_id=<?php echo $senderid ; ?>" class="btn btn-info">Repond</a>
                                                                 <a class="btn btn-warning" id="ignore" data-id="<?php echo $senderid; ?>" href="javascript:void(0)">Ignore</a>
                                                                </td>
                                                               </tr>
                                                              <?php
                                                       $i++;     }

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