<?php  require_once('../inc/header1.php'); ?>
      <!-- =============================================== --><!-- Left side column. contains the sidebar -->
   <?php include_once('include/sidebar.php');  ?>

      <!-- =============================================== --><!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            News and Events updates
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
  <div class="row">
    <span id="news_scroller" style="visibility: visible;">


     </span>
    </div>
<div class="panel panel-primary">
  <div class="panel-heading"><i class="fa fa-bell"></i> &nbsp;Compose News</div>
  <div class="panel-body">
      <?php
      if(isset($_POST['save']))
      {
           move_uploaded_file($_FILES['photo']['tmp_name'],"../../images/events/".$_FILES['photo']['name']);
             $title =$_POST['title'];
             $subtopic =$_POST['sub_topic'];
             $body = $_POST['Body'];
             $venue = $_POST['venue'];
             $helddate = $_POST['held_date'];
             $status = $_POST['status'];
             $image = $_FILES['photo']['name'];
             $regdate =date('Y-m-d H:i:s');
          $stmt=$conn->prepare("INSERT INTO tblnews_events (title,sub_topic,Body,photo,venue,held_date,status,date_reported) VALUES('$title','$subtopic','$body','$image','$venue','$helddate','$status','$regdate')");
          if($stmt->execute())
          {
          echo "<div class ='alert alert-success'>Succesful data entry</div>";
          }
          else{
              echo "div class='alert alert-danger'><strong>Sorry</strong>Error while saving data</div>";
          }
      }
      ?>
     <form role="form" method="post" autocomplete="off" enctype="multipart/form-data">
         <div class="col-lg-4">
         <div class="form-group">
         <label for="">News Title:  <span class="required">*</span></label>
         <input type="text" name="title" class="form-control" required="required" />
         </div>
         <div class="form-group">
         <label for="">News Image:  <span class="required">*</span></label>
         <input type="file" name="photo" required="required" accept="image/*" />
         </div>
         </div>
         <div class="col-lg-4">
         <div class="form-group">
         <label for="">Sub Topic:  <span class="required">*</span></label>
         <input type="text" name="sub_topic" class="form-control" required="required" />
         </div>

         <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd" data-date-start-date="+0d">
         <label for="">Host Date:  <span class="required">*</span></label>
         <input type="text" name="held_date" class="form-control" readonly="readonly" />
        <span class="input-group-btn">
        <button class="btn default" type="button">
        <i class="fa fa-calendar"></i>
        </button>
        </span>
                                    </div>
                                </div>
                                 <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Event Status:  <span class="required">*</span></label>
                                           <select name="status" id="" class="form-control">
                                               <option value="">~Select News Active~~</option>
                                               <option value="1">Active</option>
                                               <option value="0">Inactive</option>
                                           </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Venue: <span class="required">*</span></label>
                                        <input type="text" name ="venue" class="form-control" placeholder="News Venue" />
                                    </div>
                                     
                                </div>
        <div class="col-lg-12">
            <div class="form-group">
        <label for="msg_body">Body: <span class="required">*</span></label>
        <textarea rows = "7" id="elibrary_editor" required class="form-control elibrary_editor" name="Body" id = "body" placeholder="Body"> </textarea>
      </div>
        </div>

        <div class="col-lg-12">
       <button type="submit" name="save" class="btn btn-info"><i class="glyphicon glyphicon-ok"></i>&nbsp;Save News</button>
       <button type="reset" name ="cancel" class="btn btn-danger"><i class="fa fa-sign-out"></i>&nbsp;Cancel</button>
        </div>
    </form>

  </div>
</div>

        <!--END PAGE CONTENT -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Designed By</b> MUTETHIA ISAIAH
        </div>
        <strong>Copyright &copy; MMUST COURSE SYSTEM 2016.</strong> All rights reserved.
      </footer>    </div><!-- ./wrapper -->
 <!-- jQuery 2.1.4 -->
    <script src="../../assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
   <!-- <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
     /* $.widget.bridge('uibutton', $.ui.button);*/
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>

    <script src="../../assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../../assets/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="../../assets/plugins/ckeditor/ckeditor.js"></script>



      <script src="../../assets/js/app.min.js"></script>

<script src="../../assets/esystem/js/system.js"> </script>
<script src="../../assets/esystem/plugins/dataTables/jquery.dataTables.js"></script>


    <script src="../../assets/esystem/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../../assets/esystem/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="../../assets/esystem/fileinput/js/fileinput.js" type="text/javascript"></script>
    <script src="../../assets/esystem/modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
    <script src="../../assets/esystem/modal/js/bootstrap-modal.js" type="text/javascript"></script>
    <script>
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        startDate: '+d'
    });
    </script>

                  <script>
                 $(document).ready(function () {
                   $('.dataTable .dataTables table').dataTable();

                    $('.dataTables, .dataTable').dataTable();
                 });
              </script>
<script src="../../assets/esystem/js/jquery.li-scroller.1.0.js" type="text/javascript"></script>
 <script type="text/javascript">
 $(document).ready(function(){
  var slider_content = '';
 // $('#news_scroller').load(_elibrary_app_user_root+'news_events/news_pull/');
  //alert(_elibrary_app_user_root+'news_events/news_pull');
   //sendPostAjaxRequest(_elibrary_app_user_root+'news_events/news_pull','s','','#news_scroller','', '',true);

  //$('.elibrary_editor').wysihtml5();
   CKEDITOR.replace('elibrary_editor');

 });
 </script>
  </body>
</html>