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
	<br/>

                        <div class="panel panel-primary">
                            <div class="panel-heading"><span class="glyphicon glyphicon-education"></span>&nbsp;&nbsp;Admission Letter Generation</div>
                            <div class="panel-body">

                                                                           <div class="table-responsive">
                                                <table class="table table-striped table-condensed table-hover" id="example1">
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                             <th>Mobile</th>
                                                             <th>Programme</th>
                                                             <th>Department Status</th>
                                                             <th>Faculty Status</th>
                                                             <th>Registrar Status</th>
                                                             <th>Campus</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php

                                                      for($i=1;$row=$manage->fetch(PDO::FETCH_ASSOC);$i++)
                                                       {
                                                         $dept = $row['department_status'];
                                                         $fac = $row['faculty_status'];
                                                         $reg = $row['registrar_status'];

                                                       ?>
                                                        <tr>
                                                           <td><?php echo $i;  ?></td>
                                                           <td><?php echo $row['First_Name'];?></td>
                                                           <td><?php echo $row['Last_Name'];?></td>
                                                           <td><?php echo $row['Mobile'];?></td>
                                                            <td><?php echo $row['programme'];?></td>
                                                            <?php  if($row['department_status']==0):  ?>
                                                           <td> Awaiting</td>
                                                           <?php  elseif($row['department_status']==1):  ?>
                                                            <td>Approved</td>
                                                             <?php else: ?>
                                                              <td>Declined</td>
                                                              <?php endif ?>

                                                            <?php  if($row['faculty_status']==0):  ?>
                                                           <td> Awaiting</td>
                                                           <?php  elseif($row['faculty_status']==1):  ?>
                                                            <td>Approved</td>
                                                             <?php else: ?>
                                                              <td>Declined</td>
                                                              <?php endif ?>
                                                           <?php  if($row['registrar_status']==0):  ?>
                                                           <td> Awaiting</td>
                                                           <?php  elseif($row['registrar_status']==1):  ?>
                                                            <td>Approved </td>
                                                             <?php else: ?>
                                                              <td>Declined</td>
                                                              <?php endif ?>
                                                           <td><?php echo $row['Campus_Name'];?></td>    
                                                           </tr>
                                                       <?php
                                                       }

                                                      ?>
                                                </tbody>
                                                </table>
                                            </div>
                            </div>
        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php require_once('../inc/footer.php'); ?>