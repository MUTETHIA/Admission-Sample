<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta name="language" content="en">
<link rel="shortcut icon" href="<?php echo base_url(); ?>public/images/MMUST LOGO.png" type="image/x-icon"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/form.css">

<!-- SB Admin 2 stuff -->
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url(); ?>public/plugins/bootstrap.base/css/bootstrap.min.css" rel="stylesheet">

<!-- bootstrap theme -->
<link href="<?php echo base_url(); ?>public/plugins/bootstrap.base/css/bootstrap-paper-theme.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?php echo base_url(); ?>public/css/sb-admin-2.css" rel="stylesheet">


<!-- Custom Fonts -->
<link href="<?php echo base_url(); ?>public/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
      type="text/css">
<link href="<?php echo base_url(); ?>public/css/custom_css.css" rel="stylesheet">
<!-- custom icons courtesy of Benard-->
<link href="<?php echo base_url(); ?>public/custom_icons/icon_css.css" rel="stylesheet">

 <link href="<?php echo base_url(); ?>public/assets/esystem/plugins/dataTables/dataTables.bootstrap.css " media="all" rel="stylesheet" type="text/css" />

<!-- CSS to stylize checkboxes -->
<link href="<?php echo base_url(); ?>public/plugins/checkbox/style.css" rel="stylesheet">

<!-- animation CSS -->
<!--<link href="/plugins/magic/magic.css" rel="stylesheet">-->
<link href="<?php echo base_url(); ?>public/plugins/animate/animate.css" rel="stylesheet">
<!-- Flags -->
<link href="<?php echo base_url(); ?>public/plugins/flag-icon-css-master/css/flag-icon.css" rel="stylesheet">

<!-- bootstrap select -->
<link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/bootstrap.select/dist/css/bootstrap-select.min.css">


<script type="text/javascript" src="<?php echo base_url(); ?>public/assets/plugins/jQuery/jquery.min.js"></script>
<title>Home Page - Site</title>
</head>
   <style>
.inst-logo {
    width:120px;
    height:90px;
    margin-top: 2px;
    margin-bottom: 3px;
    margin-left: 90px;
}
.inst-name {
    font-size:32px;
    font-weight:600;
}

</style>
<body>
<div class="content">

<div class="container-fluid">
        <!-- begin content here -->
        <div class="row" style="background-color: #688ACC;">
             <div class="col-md-10 col-md-offset-1" style="font-family: Arial, Helvetica, sans-serif; font-size: 30px; font-weight: 800; color: #FFFFFF;">
                 <img class="inst-logo" src="<?php echo base_url(); ?>public/images/MMUST LOGO.png" alt="">
                MMUST Online Course Application
             </div>

</div>
        <div class="row">
    <div class="col-md-12 col-md-10 col-md-offset-1">
        <p class="lead">Welcome to our university of choice, where academic excellence is our service.</p>

        <p>An applicant is exepcted to create an account to be able to keep track of your application process at any place. If you haven't created an account, kindly click on the button <strong>Create Account</strong> feature to create your account.

        </p>

        <p>At start you will fill and provide simple and basic personal information to gain access in our system. You will provide email address and password which will be used to access our system as username and password respectively, after getting to login page.
           </p>

           <div class="col-md-2"></div>
    </div>
</div>

<br>
<div class="row">
      <div class="col-md-12 col-md-10 col-md-offset-1">
          <p>Kindly click on the link below to download the application process/procedure.</p>
           <div class="btn btn-info btn-block" onclick="download();"><i class="fa fa-download"></i> Download Application Manual</div>
      </div>

</div>
   <br>

<div class="row">
    <div class="col-md-4 col-md-offset-2">
          <a href="<?php echo site_url('Site/user_register');?>"><button class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;CREATE ACCOUNT</button></a>

          </div>

    <div class="col-md-4">
        <a href="<?php echo site_url('Site/user_login');?>"><button class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span>&nbsp;&nbsp; LOGIN</button></a>

            </div>
</div>
<div class="row">
    <div class="col-md-12 col-md-10 col-md-offset-1" style="margin-top:35px;">
<div class="panel panel-info col-md-12">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#bachelors">Degree Programmes</a></li>
        <li><a data-toggle="tab" href="#dip">Diploma Programmes</a></li>
        <li><a data-toggle="tab" href="#cert">Certificate Programmes</a></li>
    </ul>
   <div class="tab-content">
        <div id="bachelors" class="tab-pane fade in active">
             <table class="table table-condensed table-striped table-bordered dataTables">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>PROGRAMME NAME</th>
                        <th>VIEW MORE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $count=1;
                     foreach($degrees as $rowdegree){

                         ?>
                          <tr>
                           <td><?php echo $count; ?> </td>
                           <td><?php echo $rowdegree['programme']; ?></td>
                              <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-deg<?php echo $count; ?>">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-deg<?php echo $count; ?>">
                                                              <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                  <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span></button>
                                                                    <h4 class="modal-title"><?php echo $rowdegree['programme']; ?></h4>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                    <p><?php echo $rowdegree['programme_req']; ?></p>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                                                    <a href="<?php echo site_url('Site/user_register'); ?>"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                                                  </div>
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

   <div id="dip" class="tab-pane fade">
<table class="table table-condensed table-striped table-bordered table-responsive dataTables">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>PROGRAMME NAME</th>
                        <th>VIEW MORE</th>
                    </tr>
                    </thead>
                    <tbody>
                           <?php
                      $countdip=1;
                     foreach($diploma as $rowdip){
                         ?>
                          <tr>
                           <td><?php echo $countdip; ?> </td>
                           <td><?php echo $rowdip['programme']; ?></td>
                            <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-default<?php echo $countdip; ?>">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-default<?php echo $countdip; ?>">
                                                              <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                  <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span></button>
                                                                    <h4 class="modal-title"><?php echo $rowdip['programme']; ?></h4>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                    <p><?php echo $rowdip['programme_req']; ?></p>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                                                    <a href="<?php echo site_url('Site/user_register'); ?>"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                                                  </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                              </div>
                                                              <!-- /.modal-dialog -->
                                                            </div>
                                                            <!-- /.modal -->
                         <?php
                         $countdip++;
                     }
                    ?>
                    </tbody>
                    </table>
   </div>


   <div id="cert" class="tab-pane fade">
<table class="table table-condensed table-striped table-bordered table-responsive dataTables">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>PROGRAMME NAME</th>
                        <th>VIEW MORE</th>
                    </tr>
                    </thead>
                    <tbody>
                           <?php
                    $countcert=1;
                     foreach($certificate as $rowcert){
                         ?>
                          <tr>
                           <td><?php echo $countcert; ?> </td>
                           <td><?php echo $rowcert['programme']; ?></td>
                                 <td>
                            <a href="" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-cert<?php echo $countcert; ?>">View Details</a></td>
                          </tr>
                               <div class="modal fade" id="modal-cert<?php echo $countcert; ?>">
                                                              <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                  <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span></button>
                                                                    <h4 class="modal-title"><?php echo $rowcert['programme']; ?></h4>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                    <p><?php echo $rowcert['programme_req']; ?></p>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i>Close</button>
                                                                    <a href="<?php echo site_url('Site/user_register'); ?>"><button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Proceed to Application</button></a>
                                                                  </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                              </div>
                                                              <!-- /.modal-dialog -->
                                                            </div>
                                                            <!-- /.modal -->
                         <?php
                         $countcert++;
                     }
                    ?>
                    </tbody>
                    </table>
   </div>

   </div>

</div>
 </div>
</div>
        <!-- end content here-->
          <script>
        function download(){
            window.location.href="<?php echo base_url(); ?>public/uploads/MADAM HAKUNA_Admission Letter.pdf";
        }
        </script>
    </div>
    <div class="clearfix"></div>
</div>
    <div id="footer" style="background-color: white;">
    <font color="#1e90ff">
        <h5><b>Incase of any queries please Email to <a
                    href="mailto:admissions@mmust.ac.ke?Subject=Support Inquiry" target="_top">
                    admissions@mmust.ac.ke</a></b></h5>
        <h6><b>Phone numbers:  +254702597360</b></h6>
    </font>
</div><!-- footer -->
 <script src="<?php echo base_url(); ?>public/assets/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>public/plugins/bootstrap.base/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/esystem/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/esystem/plugins/dataTables/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>public/assets/js/managed-datatables.js"></script>
<script>
  $(function () {
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
   <script>
                 $(document).ready(function () {
                   $('.dataTable .dataTables table').dataTable();
                    $('.dataTables, .dataTable').dataTable({
                       'paging'      : true,
                      'lengthChange': false,
                      'searching'   : true,
                      'ordering'    : false,
                      'info'        : false,
                      'autoWidth'   : true
                    });
                 });


              </script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url(); ?>public/js/sb-admin-2.js"></script>

<script src="<?php echo base_url(); ?>public/js/custom_javascript.js"></script>

<script  src="<?php echo base_url(); ?>public/plugins/bootstrap.select/dist/js/bootstrap-select.min.js"></script>
</body>

</html>