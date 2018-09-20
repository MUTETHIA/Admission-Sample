<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Login | MMUST Online Course Application</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>public/images/MMUST LOGO.png" type="image/x-icon">
        <!-- Bootstrap -->

        <link href="<?php echo base_url(); ?>public/plugins/bootstrap.base/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Pe-icon-7-stroke -->
        <link href="<?php echo base_url(); ?>public/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css">
        <!-- style css -->
        <link href="<?php echo base_url(); ?>public/assets/css/stylecrm.css" rel="stylesheet" type="text/css">
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
         <script type="text/javascript">
        var base_url="<?php echo base_url(); ?>"
        </script>
    </head>
        <style>
        .error,.required{
                color: #CC0000;
        }
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
        <!-- Content Wrapper -->
        <div class="login-wrapper">
           <div class="row" style="background-color: #688ACC;">
             <div class="col-md-10 col-md-offset-2" style="font-family: Arial, Helvetica, sans-serif; font-size: 30px; font-weight: 800; color: #FFFFFF;">
                 <img class="inst-logo" src="<?php echo base_url(); ?>public/images/MMUST LOGO.png" alt="">
   MMUST Online Course Application
             </div> </div>
            <div class="container-center"  style="margin-top:35px;">
            <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Please enter your credentials to login.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                         <div id="error">
            <!------
                  error display
            --->
        </div>          
                        <form id="login-form" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">Email Address: <span class="required">*</span></label>
                                <input type="email" class="form-control" name="email" id="email" required="required" aria-describedby="emailHelp" placeholder="Enter email">

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password: <span class="required">*</span></label>
                                <input type="password" class="form-control" name="password" id="password" required="required" aria-describedby="emailHelp" placeholder="Enter Password">

                            </div>
                            <div>
                                <button class="btn btn-add" type="submit" name="btn-login" id="btn-login"><span class="glyphicon glyphicon-log-in"> </span>&nbsp;Login</button>
                                <button type="reset" class="btn btn-danger"> <span class="glyphicon glyphicon-remove-circle"> </span>&nbsp;Reset</button>
                            </div>
                        </form>
                             <br><br>
                            <div class="row">
                                <div class="form-group">
                                   <div class="col-md-6">
                                   <a class="btn btn-primary" href="user_register">Create Account </a>
                               </div>
                               <div class="col-md-4">
                                    <a class="btn btn-warning" href="password_recover">Forgot Password </a>
                               </div>
                                </div>


                             </div>


                        </div>
                        </div>
                </div>
            </div>

          <footer class="main-footer">
            <strong>Copyright &copy; 2017-  <?php echo date('Y'); ?> <br>
            Incase of any queries please Email to <a href="mailto:admissions@mmust.ac.ke">admissions@mmust.ac.ke</a>.</strong><br> Phone numbers: <strong> +254702597360</strong><br> All rights reserved.
         </footer>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->

            <script src="<?php echo base_url(); ?>public/assets/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/login_processor.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>public/js/validation.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>public/js/custom_javascript.js"></script>

        <script src="<?php echo base_url(); ?>public/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>