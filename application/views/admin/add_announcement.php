

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
    <span id="news_scroller" style="visibility:hidden;">   </span>
    </div>
    <div class="panel panel-primary">

    <div class="panel-heading"><span class="fa fa-bell-o"></span>&nbsp;&nbsp;Create Notifications</div>
    <div class="panel-body">
     <div style="display: block;" class="box-body">
                       <h4 class="form-section">Notifications</h4>
                       <hr>
                       <?php
                       /* if(isset($_POST['announce-add']))
                        {
                          $title=$_POST['title'];
                          $message= $_POST['messagebody'];
                          $ann=$conn->prepare("INSERT INTO announcements (Title,Body) VALUES('$title','$message')");
                          if($ann->execute()){
                             echo "<div class='alert alert-success'>Announcements added successfully.</div>";
                          }
                          else{
                              echo "<div class='alert alert-danger'>Error in connecting to database.</div>";
                          }

                        }*/
                       ?>
        <form class="form-vertical" method="post" enctype="multipart/form-data">
             <div class="col-md-6 col-lg-6">
                  <div class="form-group">
                <label for="course Level">Title: &nbsp;<span class="required">*</span></label>
                <input required name="title" type="text" class="form-control" placeholder="Title" >

                  </div>
                   <div class="form-group has-feedback">
              <label>Message Body: <span class="required">*</span></label>
                 <textarea name="messagebody" class="form-control" id="mesagebody" cols="45" rows="3"></textarea>
              </div>
             </div>
            <div class="form-actions">
                <div class="row">
                <div class="col-md-12">
                <div class="row">
                <div class="col-md-offset-2 col-md-10">
                <button type="submit" name="announce-add" class="btn btn-info">Submit</button>
                <button type="reset" class="btn btn-warning">Cancel</button>
                </div>
                </div>
                </div>
                </div>
                </div>
        </form>

     </div>

    </div>



    </div>
        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
