<?php
$page_link = pathinfo(curPageURL(),PATHINFO_FILENAME);
function curPageURL() {
 $pageURL = 'http';
 if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>
<!-- =============================================== --><!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar ">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li class="<?php if($page_link != '' && $page_link == 'dashboard'){echo 'active';}?>">
              <a href="dashboard">
                <i class="fa fa-home"></i> <span>Dashboard&nbsp;&nbsp;</span>
              </a>
            </li>

             <li class="treeview  <?php if($page_link != '' && $page_link == 'personal_details' || $page_link == 'education_details' || $page_link=='testimonial_details' || $page_link == 'payment_details' || $page_link == 'payment_transactions' || $page_link == 'course_details'){echo 'active';} ?>"><a href="#"> <i class="fa fa-cog"></i> <span>Course Application </span><i class="fa fa-angle-left pull-right"></i>  </a>
              <ul class="treeview-menu">
               <li class="<?php if($page_link != '' && $page_link == 'personal_details'){echo 'active';}?>"><a href="personal_details"><i class="fa fa-user"></i>Personal Details </a></li>
               <li class="<?php if($page_link != '' && $page_link == 'education_details'){echo 'active';}?>"><a href="education_details"><i class="fa fa-book"></i>Education Background</a></li>
               <li class="<?php if($page_link != '' && $page_link == 'testimonial_details'){echo 'active';}?>"><a href="testimonial_details"><i class="fa fa-book"></i>Testimonial Documents</a></li>
               <li class="<?php if($page_link != '' && $page_link == 'payment_details' || $page_link == 'payment_transactions'){echo 'active';}?>"><a href="payment_transactions"><i class="fa fa-money"></i>Payment Details</a></li>
               <li class="<?php if($page_link != '' && $page_link == 'course_details'){echo 'active';}?>"><a href="course_details"><i class="glyphicon glyphicon-education"></i>Course Details </a></li>
               <li class=""><a href="GenerateTicketPdf"><i class="fa fa-print"></i>Print Report</a></li>
              </ul>
            </li>

            <li class="treeview <?php if($page_link != '' && $page_link == 'viewPersonal_Data' || $page_link == 'viewEducationDetails'|| $page_link == 'viewCourseDetails'){echo 'active';} ?> "><a href="#"><i class="fa fa-briefcase"></i><span>My Details</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
             <li class="<?php if($page_link != '' && $page_link == 'viewPersonal_Data'){echo 'active';}?>"><a href="viewPersonal_Data"><i class="fa fa-user"></i>Personal Details </a></li>
             <li class="<?php if($page_link != '' && $page_link == 'viewEducationDetails'){echo 'active';}?>"><a href="viewEducationDetails"><i class="fa fa-book"></i>Education Background</a></li>
             <li class="<?php if($page_link != '' && $page_link == 'viewCourseDetails'){echo 'active';}?>"><a href="viewCourseDetails"><i class="glyphicon glyphicon-education"></i>Course Details </a></li>
              </ul>
            </li>
            <li class="treeview <?php if($page_link != '' && $page_link == 'application_track'){echo 'active';}?> "><a href="#"><i class="glyphicon glyphicon-education"></i><span>My Report  </span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <li class="<?php if($page_link != '' && $page_link == 'application_track'){echo 'active';}?> "><a href="application_track"><i class="fa fa-circle-o"></i> My Track </a></li>
              </ul>
            </li>
            <li class="treeview <?php if($page_link != '' && $page_link == 'message_replies'){echo 'active';}?> "><a href="#"><i class="fa fa-envelope"></i><span>Inquiries</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li class="<?php if($page_link != '' && $page_link == 'message_replies'){echo 'active';}?> "><a href="message_replies"><i class="fa fa-circle-o"></i> Compose</a></li>
              </ul>
            </li>

        </section>
        <!-- /.sidebar -->
      </aside>