<?php include_once('../inc/header1.php');  ?>

      <!-- =============================================== --><!-- Left side column. contains the sidebar -->
    <?php include_once('include/sidebar.php');  ?>         <!-- /.sidebar -->
      <?php include_once('include/functions.php');    ?>

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
    <span style="visibility:visible;">   </span>
    </div>
	<div class="row"> <div class="col-lg-4">
      <a href="GenerateDeclinedPdf" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-right"> </span>&nbsp;Export to PDF</a>
    </div> </div><br/>

                        <div class="panel panel-primary">
                            <div class="panel-heading"><span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Declined Applicants Record list</div>
                            <div class="panel-body">

                            <div class="table-responsive">
                                                <table class="table table-striped table-condensed table-hover" id="example2">
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Code</th>
                                                            <th>Email Address</th>
                                                             <th>First Name</th>
                                                             <th>Last Name</th>
                                                             <th>Mobile Number</th>
                                                             <th>Programme Name</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php
                                                      for($i=1;$row=$viewDeclinedApplicant->fetch(PDO::FETCH_ASSOC);$i++)
                                                       {  $id = $row['Email_Address'];
                                                       ?>
                                                        <tr>
                                                           <td><?php echo $i;  ?></td>
                                                            <td> <?php echo $row['ticket']; ?></td>  
                                                           <td><?php echo $row['Email_Address'];?></td>
                                                           <td><?php echo $row['First_Name'];?></td>
                                                            <td><?php echo $row['Last_Name'];?></td>
                                                           <td> <?php  echo $row['Mobile']; ?></td>
                                                           <td> <?php  echo $row['programme']; ?></td>
                                                            <td ><button class="btn btn-warning" data-toggle="modal" data-target="#approve<?php echo $i;  ?>">Reset Decline</button>    </td>

                                                           </tr>
                                                            <div class="modal fade" id="approve<?php echo $i;  ?>" tabindex="-1" role="dialog" aria-labelledby="modal-label">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <form action="reset_declined?id=<?php echo $id; ?>" method="post">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        <h4 class="modal-title" id="modal-label"> <?php echo $row['First_Name'].' '.$row['Last_Name']; ?></h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure to RESET?

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-success">Ok</button>
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       <?php
                                                       }

                                                      ?>
                                                </tbody>
                                                </table>
                                            </div>
                            </div>
                        </div>
    
									</div><!-- /.col -->
								</div><!-- /.row -->
        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php require_once('../inc/footer.php'); ?>