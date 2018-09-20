<?php
    foreach($user as $row){

    }
    ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Masinde Muliro University | Course System</title>
    <link rel="shortcut icon" href="../images/logo.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/swal2/sweetalert2.min.css" type="text/css" /> 
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/skins/_all-skins.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/plugins/daterangepicker/daterangepicker-bs3.css">


    <link href="<?php echo base_url(); ?>public/assets/esystem/datepicker/css/datepicker.css">
 
    <link href="<?php echo base_url(); ?>public/assets/esystem/css/li-scroller.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>public/assets/esystem/plugins/dataTables/dataTables.bootstrap.css " media="all" rel="stylesheet" type="text/css" />


  <style>
   .error,.required{
       color: #FF1A1A;
   }

  </style>
   </head>
   <body class="hold-transition skin-purple  sidebar-mini" onload="set_interval()" onclick="reset_interval()" onkeypress="reset_interval()" onscroll="reset_interval()">
    <!-- Site wrapper -->
    <div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="dashboard" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">MMUST</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">MMUST</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
                             <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>

                         <span class="label label-success"> 0</span>

                </a>
                <ul class="dropdown-menu">

                      <li class="header">You have 0 message(s)</li>

                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                    </ul>
                  </li>

                    <li class="footer"><a href="#">See All Messages</a></li>

                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                       <?php if($row['photo'] !=""):  ?>
                  <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo'];  ?>" class="user-image" alt="User Image">
                      <?php else: ?>
                    <img src="<?php echo base_url(); ?>public/uploads/profile.jpg"  class="user-image" alt="Profile Picture" />
                    <?php endif; ?>
                  <span class="hidden-xs"><?php echo $row['fname']." ".$row['lname']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                  <?php  if($row['photo']!=""):  ?>
                    <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo'];  ?>" class="img-circle" alt="User Image">
                    <?php else: ?>
                    <img src="<?php echo base_url(); ?>public/uploads/profile.jpg" class="img-circle" alt="Profile Picture" />
                    <?php endif; ?>
                    <p>
                     <?php echo $row['email']; ?><small>Member since <?php echo $row['date_registered'];  ?></small>
                    </p>
                  </li>
                  <!-- Menu Body -->

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="myprofile" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo site_url('Users/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <!-- <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li> -->
            </ul>
          </div>
        </nav>
      </header>