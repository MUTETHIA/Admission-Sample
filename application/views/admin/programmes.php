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
    <span style="visibility:hidden;">   </span>
    </div>

    <div class="row"> <div class="col-lg-4">
      <a href="GenerateProgrammes" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-right"> </span>&nbsp;Export to PDF</a>
    </div> </div><br/>

                        <div class="panel panel-primary">
                            <div class="panel-heading">Course Record list</div>
                            <div class="panel-body">
                                           <div class="table-responsive">
                                                <table class="table table-striped table-condensed table-hover" id="example1">
                                                    <thead>
                                                        <tr>
                                                            <th>Code</th>
                                                            <th>Programme Name</th>
                                                            <th>Department</th>
                                                            <th>School</th>
                                                            <th>Level</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php

                                                      for($i=0;$row=$programmes->fetch(PDO::FETCH_ASSOC);$i++)
                                                       {  $id = $row['code'];
                                                       ?>
                                                        <tr>
                                                           <td><?php echo $id;  ?></td>
                                                           <td><?php echo $row['programme'];?></td>
                                                           <td><?php echo $row['department_name'];?></td>
                                                           <td><?php echo $row['faculty_name'];?></td>
                                                           <td> <?php  echo $row['Level_Name']; ?></td>

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