

      <!-- =============================================== --><!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1><img src="<?php echo base_url(); ?>public/images/new1.png" alt=""/>
            MMUST Course Application System
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
  <span id="showingit"></span>

  <div class="row">
    <span id="news_scroller" style="visibility: visible;"></span>
    </div>


                    <div class="row">
                        <div class="col-md-12">
                          <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box purple">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-users"></i>Registered User</div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="example2">
                                            <thead>
                                               <tr>
                                                            <th>Serial</th>
                                                            <th>First Name </th>
                                                            <th>Last Name</th>
                                                            <th>Email Address</th>
                                                            <th>Phone Number</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                            </thead>
                                     <tbody>
                                 <?php
                                    $count=1;
                                    foreach($users as $row){
                                        $id= $row['id'];
                                        ?>
                                        <tr>
                                         <td><?php echo $count; ?></td>
                                         <td><?php echo $row['fname']; ?> </td>
                                         <td><?php echo $row['lname']; ?> </td>
                                         <td><?php echo $row['email']; ?> </td>
                                         <td><?php echo $row['phone']; ?> </td>
                                         <td><?php if($row['userStatus']=='Y'){
                                             echo "Active";
                                         }
                                         else{
                                             echo "Inactive";
                                         }?>

                                          </td>
                                         <td>
                                              <div class="btn-group">
                  <button type="button" class="btn btn-info">Actions</button>
                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#delete<?php echo $id; ?>" data-toggle="modal" >Delete</a></li>
                           <?php if($row['userStatus']=='Y'){
                                            ?>
                                      <li><a href="#deactivate<?php echo $id; ?>" data-toggle="modal">Deactivate</a></li>
                           <?php
                           }
                           else{
                           ?>
                           <li><a href="#activate<?php echo $id; ?>" data-toggle="modal">Activate</a></li>
                           <?php
                             }
                    ?>
                  </ul>
                </div>
                                         </td>
                                        </tr>

                                        <!-- Start of delete user modal    -->
                                         <div class="modal fade" id="delete<?php echo $id; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete User</h4>
              </div>
              <form action="delete_user?id=<?php echo $id; ?>" method="post" >
              <div class="modal-body">

               <h4>Are you sure to delete <br>
               <?php echo $row['fname'].' '.$row['lname'];  ?>
               </h4>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info pull-left" data-dismiss="modal">Close</button>
                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->



                                 <!-- Start of deactivate user modal    -->
                                         <div class="modal fade" id="deactivate<?php echo $id; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Deactivate User</h4>
              </div>
              <form action="deactivate_user?id=<?php echo $id; ?>" method="post" >
              <div class="modal-body">

               <h4>Are you sure to deactivate <br> <br>
               <?php echo $row['fname'].' '.$row['lname'];  ?>
               </h4>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info pull-left" data-dismiss="modal">Close</button>
                <button type="submit" name="delete" class="btn btn-danger">Deactivate</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->



        <!-- Start of activate user modal    -->
                                         <div class="modal fade" id="activate<?php echo $id; ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Deactivate User</h4>
              </div>
              <form action="activate_user?id=<?php echo $id; ?>" method="post" >
              <div class="modal-body">

               <h4>Are you sure to activate <br> <br>
               <?php echo $row['fname'].' '.$row['lname'];  ?>
               </h4>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info pull-left" data-dismiss="modal">Close</button>
                <button type="submit" name="delete" class="btn btn-danger">Activate</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
                                        <?php
                                        $count++;
                                    }

                                     ?>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        </div>
                    </div>
              </div><!-- /.box -->
            </div><!-- /.col -->

</div>
        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      </div><!-- /.content-wrapper -->
