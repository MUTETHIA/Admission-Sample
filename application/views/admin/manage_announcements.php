
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


  <div class="row">
    <span style="visibility:visible;">   </span>
    </div>
	<div class="row"> <div class="col-lg-4">
    </div> </div><br/>

                        <div class="panel panel-primary">
                            <div class="panel-heading"><span class="fa fa-bell-o"></span>&nbsp;&nbsp;Announcements Record</div>
                            <div class="panel-body">

                                        <div class="table-responsive">
                                                <table class="table table-striped table-condensed table-hover" id="example2">
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Title</th>
                                                             <th>Body</th>
                                                             <th>Date Posted </th>
                                                               <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <?php
                                                        $i=1;
                                                      foreach($viewAnnounce as $row)
                                                       {  $id = $row['id'];
                                                       ?>
                                                        <tr>
                                                           <td><?php echo $i;  ?></td>
                                                           <td><?php echo $row['Title'];?></td>
                                                           <td><?php echo $row['Body'];?></td>
                                                            <td><?php echo $row['Post_Date'];?></td>
                                                            <td style="width: 120px;">
                                                            <div class="btn-group">
		        <a class="btn btn-sm btn-danger" id="delete_announcement" data-id="<?php echo $id; ?>" href="javascript:void(0)"><i class="glyphicon glyphicon-trash"></i>Delete</a>
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
