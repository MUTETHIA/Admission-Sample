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
      <a href="GenerateSucessfulPdf" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-right"> </span>&nbsp;Export to PDF</a>
    </div> </div><br/>

                        <div class="panel panel-primary">
                            <div class="panel-heading"><span class="glyphicon glyphicon-education"></span>&nbsp;&nbsp; Successful Applicants Record list</div>
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
                                                              <th>Campus</th>
                                                                <th style="width: 100px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php

                                                      for($i=1;$row=$viewSuccessfulApplicant->fetch(PDO::FETCH_ASSOC);$i++)
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
                                                           <td> <?php  echo $row['Campus_Name']; ?></td>
                                                             <td style="width: 120px;">
                                                                 <a href="viewPersonal_Data?id=<?php echo $id;  ?>"><button  class="btn btn-info">Review for Approval</button></a>
                                                            </td>
                                                           </tr>
                                                       <?php
                                                       }

                                                      ?>
                                                </tbody>
                                                </table>
                                            </div>
                            </div>
                        </div>
        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php require_once('../inc/footer.php'); ?>