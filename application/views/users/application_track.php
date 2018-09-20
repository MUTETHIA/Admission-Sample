       <?php
         foreach($user as $row){

         }
       ?>
       <?php

       foreach($tracker as $rowtrack){
           
       }
       ?>
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
    <span id="news_scroller" style="visibility:visible;">   </span>
    </div>

<div class="row">

 <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><strong><?php echo $row['fname'].' '.$row['lname'];?></strong>&nbsp;&nbsp;&nbsp;Application Track</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div style="display: block;" class="box-body">

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <?php  if($rowtrack['department_status']==0):  ?>
                        <div class="small-box bg-blue">
                          <div class="inner">
                            <h3>Awaiting</h3>
                            <p>Department Level</p>
                          </div>
                          <div class="icon">
                            <i class="fa fa-retweet"></i>
                          </div>
                          <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                        <?php  elseif($rowtrack['department_status']==1):  ?>
                        <div class="small-box bg-green">
                          <div class="inner">
                            <h3>Approved</h3>
                            <p>Department Level</p>
                          </div>
                          <div class="icon">
                            <i class="glyphicon glyphicon-ok"></i>
                          </div>
                          <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                        <?php else: ?>
                      <div class="small-box bg-orange">
                          <div class="inner">
                            <h3>Declined</h3>
                            <p>Department Level</p>
                          </div>
                          <div class="icon">
                            <i class="glyphicon glyphicon-remove"></i>
                          </div>
                          <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                      <?php endif ?>
                    </div><!-- ./col -->

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                         <?php  if($rowtrack['faculty_status']==0):  ?>
                        <div class="small-box bg-blue">
                          <div class="inner">
                            <h3>Awaiting</h3>
                            <p>Faculty Level</p>
                          </div>
                          <div class="icon">
                            <i class="fa fa-retweet"></i>
                          </div>
                          <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                         <?php  elseif($rowtrack['faculty_status']==1):  ?>
                        <div class="small-box bg-green">
                          <div class="inner">
                            <h3>Approved</h3>
                            <p>Faculty Level</p>
                          </div>
                          <div class="icon">
                            <i class="glyphicon glyphicon-ok"></i>
                          </div>
                          <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                         <?php else: ?>
                        <div class="small-box bg-orange">
                          <div class="inner">
                            <h3>Declined</h3>
                            <p>Faculty Level</p>
                          </div>
                          <div class="icon">
                            <i class="glyphicon glyphicon-remove"></i>
                          </div>
                          <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                          <?php endif ?>
                    </div><!-- ./col -->


                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                         <?php  if($rowtrack['registrar_status']==0):  ?>
                        <div class="small-box bg-blue">
                          <div class="inner">
                            <h3>Awaiting</h3>
                            <p>Registrar Level</p>
                          </div>
                          <div class="icon">
                            <i class="fa fa-retweet"></i>
                          </div>
                          <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                           <?php  elseif($rowtrack['registrar_status']==1):  ?>
                        <div class="small-box bg-green">
                          <div class="inner">
                            <h3>Approved</h3>
                            <p>Registrar Level</p>
                          </div>
                          <div class="icon">
                            <i class="glyphicon glyphicon-ok"></i>
                          </div>
                          <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                           <?php else: ?>
                        <div class="small-box bg-orange">
                          <div class="inner">
                            <h3>Declined</h3>
                            <p>Registrar Office</p>
                          </div>
                          <div class="icon">
                            <i class="glyphicon glyphicon-remove"></i>
                          </div>
                          <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                          </a>
                        </div>
                         <?php endif ?>
                    </div><!-- ./col -->

              




                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

</div>



</div>
        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      </div><!-- /.content-wrapper -->