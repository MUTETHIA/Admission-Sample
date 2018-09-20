

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
    <a href="addCourses" type="button" class="btn btn-success">Create New +</a>
      <a href="GenerateDegree" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-right"> </span>&nbsp;Export to PDF</a>
    </div> </div><br/>

                        <div class="panel panel-primary">
                            <div class="panel-heading">Degree Courses Record list</div>
                            <div class="panel-body">

                                           <div class="table-responsive">
                                                <table class="table table-striped table-condensed table-hover" id="example2">
                                                    <thead>
                                                        <tr>
                                                             <th>S/N</th>
                                                            <th>Code</th>
                                                            <th>Course Name</th>
                                                            <th>School Name</th>
                                                            <th>Course Requirement</th>
                                                            <th>Date Modified</th>
                                                            <th style="width: 100px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php
                                                         $i=1;
                                                      foreach($deg as $row)
                                                       {  $id = $row['code'];
                                                       ?>
                                                        <tr>
                                                           <td><?php echo $i;  ?></td>
                                                           <td><?php echo $id;  ?></td>
                                                           <td><?php echo $row['programme'];?></td>
                                                           <td><?php echo $row['faculty_name'];?></td>
                                                           <td style="width: 260px;"> <?php  echo $row['programme_req']; ?></td>
                                                            <td style="width: 150px;"> <?php  echo $row['date_modified']; ?></td>
                                                            <td style="width: 120px;">
                                                            <div class="btn-group">
															<a href="editDegCourseForm<?php echo'?edit_id='.$id; ?>" class="btn btn-info">Edit</a>
                                                            <a id="delete_programme" data-id="<?php echo $id; ?>" href="javascript:void(0)" class="btn btn-danger">Delete</a></div>
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