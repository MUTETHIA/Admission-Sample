

      <!-- =============================================== --><!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
          <h1><img src="<?php echo base_url();?>public/images/new1.png" alt=""/>
            MMUST Course Application System
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

	<div class="row"> <div class="col-lg-4">
    <a href="add_department" type="button" class="btn btn-success">Create New +</a>
    </div> </div><br/>

                        <div class="panel panel-primary">
                            <div class="panel-heading">Department Record list</div>
                            <div class="panel-body">
                                           <div class="table-responsive">
                                                <table class="table table-striped table-condensed table-hover" id="example2">
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>School Name</th>
                                                             <th>Department Name</th>
                                                            <th style="width: 100px;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php
                                                        $i=1;
                                                      foreach($departments as $row)
                                                       { $id = $row['department_id'];
                                                       ?>
                                                        <tr>
                                                           <td><?php echo $i;  ?></td>
                                                           <td><?php echo $row['faculty_name'];?></td>
                                                           <td><?php echo $row['department_name'];?></td>
                                                            <td style="width: 120px;">
                                                            <div class="btn-group">
															<a href="editDepartment<?php echo'?dept_id='.$id; ?>" class="btn btn-info">Edit</a>
                                                            <a class="btn btn-danger" id="delete_dept" data-id="<?php echo $id; ?>" href="javascript:void(0)">Delete</a>
                                                            </div>
                                                            </td>
                                                        </tr>

                                                       <?php
                                                       $i++;
                                                       
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