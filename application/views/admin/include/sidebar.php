
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
 <aside class="main-sidebar ">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li class="<?php if($page_link != '' && $page_link == 'dashboard'){echo 'active';}?>"><a href="<?php echo site_url('Admin/dashboard'); ?>"><i class="fa fa-home"></i> <span>Dashboard&nbsp;&nbsp;</span></a>
            </li>


        <li class="treeview <?php if($page_link != '' && $page_link == 'department_accounts' || $page_link=='school_accounts' || $page_link == 'admissiondates' || $page_link == 'campus_setup' || $page_link != '' && $page_link == 'registered_users'){echo 'active';}?>"> <a href="#"> <i class="fa fa-lock"></i> <span>Administration</span> <i class="fa fa-angle-left pull-right"></i> </a>
                  <ul class="treeview-menu">
                      <li class="<?php if($page_link != '' && $page_link == 'admissiondates'){echo 'active';}?>"><a href="<?php echo site_url('Admin/admissiondates'); ?>"><i class="fa fa-calendar"></i>Admission Dates</a></li>
                      <li class="<?php if($page_link != '' && $page_link == 'school_accounts'){echo 'active';}?>"><a href="<?php echo site_url('Admin/school_accounts'); ?>"><i class="fa fa-lock"></i>School Accounts</a></li>
                      <li class="<?php if($page_link != '' && $page_link == 'department_accounts'){echo 'active';}?>"><a href="<?php echo site_url('Admin/department_accounts'); ?>"><i class="fa fa-lock"></i>Department Accounts</a></li>
                      <li class="<?php if($page_link != '' && $page_link == 'campus_setup'){echo 'active';}?>"><a href="<?php echo site_url('Admin/campus_setup'); ?>"><i class="fa fa-home"></i>Campus Setup</a></li>
                       <li class="<?php if($page_link != '' && $page_link == 'registered_users'){echo 'active';}?>"><a href="<?php echo site_url('Admin/registered_users'); ?>"><i class="fa fa-users"></i>Registered User</a></li>
                  </ul>
              </li>

      <li class="treeview <?php if($page_link != '' && $page_link == 'Degree_courses' || $page_link == 'editDegCourseForm' || $page_link == 'diploma_courses'|| $page_link == 'certificate_courses' || $page_link == 'addCourses' || $page_link == 'add_schools' || $page_link == 'departments'){echo 'active';}?>"> <a href="#"> <i class="fa fa-lock"></i> <span>System Management </span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li class="<?php if($page_link != '' && $page_link == 'Degree_courses' || $page_link == 'editDegCourseForm'){echo 'active';}?>"><a href="Degree_courses"><i class="fa fa-calendar"></i>Degree Courses</a></li>

		  <li class="<?php if($page_link != '' && $page_link == 'diploma_courses'){echo 'active';}?>"><a href="diploma_courses"><i class="fa fa-lock"></i>Diploma Courses</a></li>
           <li class="<?php if($page_link != '' && $page_link == 'certificate_courses'){echo 'active';}?>"><a href="certificate_courses"><i class="fa fa-calendar"></i>Certificate Courses</a></li>
		  <li class="<?php if($page_link != '' && $page_link == 'addCourses'){echo 'active';}?>"><a href="addCourses"><i class="fa fa-lock"></i>Manage Courses</a></li>
          <li class="<?php if($page_link != '' && $page_link == 'add_schools'){echo 'active';}?>"><a href="add_schools"><i class="fa fa-calendar"></i>Schools/Faculties</a></li>
		  <li class="<?php if($page_link != '' && $page_link == 'departments'){echo 'active';}?>"><a href="departments"><i class="fa fa-lock"></i>Departments</a></li>

        </ul>
      </li>


       <li class="treeview <?php if($page_link != '' && $page_link == 'viewDegApplicants' || $page_link == 'viewDipApplicants'|| $page_link == 'viewCertApplicants' || $page_link == 'manageApplicants'){echo 'active';}?>"> <a href="#"> <i class="fa fa-user"></i> <span>Applicants Management </span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li class="<?php if($page_link != '' && $page_link == 'viewDegApplicants'){echo 'active';}?>"><a href="viewDegApplicants"><i class="fa fa-calendar"></i>Degree Applicants</a></li>
		  <li class="<?php if($page_link != '' && $page_link == 'viewDipApplicants'){echo 'active';}?>"><a href="viewDipApplicants"><i class="fa fa-lock"></i>Diploma Applicants</a></li>
           <li class="<?php if($page_link != '' && $page_link == 'viewCertApplicants'){echo 'active';}?>"><a href="viewCertApplicants"><i class="fa fa-calendar"></i> Certificate Applicants</a></li>
           <li class="<?php if($page_link != '' && $page_link == 'manageApplicants'){echo 'active';}?>"><a href="manageApplicants"><i class="fa fa-calendar"></i>Manage Applicants</a></li>

        </ul>
      </li>


          <li class="treeview <?php if($page_link != '' && $page_link == 'manageAdmission' || $page_link == 'applicants_Letters' || $page_link=='successfulApplicants' || $page_link=='unqualifiedApplicants' || $page_link == 'program_reports' || $page_link=='applied_Programmes' || $page_link == 'intake_reports'|| $page_link == 'campus_reports' || $page_link=='department_reports' || $page_link=='faculty_reports' || $page_link == 'level_reports' || $page_link == 'marketing_reports'){echo 'active';}?>"> <a href="#"> <i class="fa fa-book"></i> <span>Reports Generation</span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li class="<?php if($page_link != '' && $page_link == 'successfulApplicants'){echo 'active';}?>"><a href="successfulApplicants"><i class="fa fa-user"></i>Successful Candidates</a></li>
          <li class="<?php if($page_link != '' && $page_link == 'unqualifiedApplicants'){echo 'active';}?>"><a href="unqualifiedApplicants"><i class="fa fa-user"></i>Declined Candidates</a></li>
            <li class="treeview <?php if($page_link != '' && $page_link == 'program_reports' || $page_link =='campus_reports' || $page_link == 'intake_reports' || $page_link=='department_reports' || $page_link=='faculty_reports' || $page_link == 'level_reports' || $page_link == 'marketing_reports'){echo 'active';}?>"><a href=""><i class="fa fa-user"></i><span>Applicants Reports</span><i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
             <li class="<?php if($page_link != '' && $page_link == 'program_reports'){echo 'active';}?>"><a href="program_reports"><i class="glyphicon glyphicon-ok"></i>Programmes Applied</a></li>
             <li class="<?php if($page_link != '' && $page_link == 'campus_reports'){echo 'active';} ?>"><a href="campus_reports"><i class="fa fa-file"></i>Per Campus</a></li>
              <li class="<?php if($page_link != '' && $page_link == 'department_reports'){echo 'active';} ?>"><a href="department_reports"><i class="fa fa-file"></i>Applicants per Department</a></li>
              <li class="<?php if($page_link != '' && $page_link == 'faculty_reports'){echo 'active';} ?>"><a href="faculty_reports"><i class="fa fa-file"></i>Applicants per Faculty</a></li>
               <li class="<?php if($page_link != '' && $page_link == 'level_reports'){echo 'active';} ?>"><a href="level_reports"><i class="fa fa-file"></i>Applicants Per Level</a></li>

          </ul>

          </li>
        </ul>
      </li>



      <li class="treeview <?php if($page_link != '' && $page_link == 'add_announcement' || $page_link == 'manage_announcements'){echo 'active';}?>"> <a href="#"> <i class="fa fa-bell-o"></i> <span>Announcements</span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li class="<?php if($page_link != '' && $page_link == 'add_announcement'){echo 'active';}?>"><a href="add_announcement"><i class="fa fa-calendar"></i>Add New</a></li>
		  <li class="<?php if($page_link != '' && $page_link == 'manage_announcements'){echo 'active';}?>"><a href="manage_announcements"><i class="fa fa-lock"></i>Manage Notices</a></li>
        </ul>
      </li>


      <li class="treeview <?php if($page_link != '' && $page_link == 'unreplied_messages' || $page_link == 'replied_messages'){echo 'active';}?>"> <a href="#"> <i class="glyphicon glyphicon-education"></i> <span>Inquiries</span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li class="<?php if($page_link != '' && $page_link == 'unreplied_messages'){echo 'active';}?>"><a href="unreplied_messages"><i class="fa fa-circle-o"></i>Unreplied</a></li>
		  <li class="<?php if($page_link != '' && $page_link == 'replied_messages'){echo 'active';}?>"><a href="replied_messages"><i class="fa fa-circle-o"></i>Replied</a></li>
        </ul>
      </li>

      
            <li class="treeview <?php if($page_link != '' && $page_link == 'compose' ){echo 'active';}?>">
              <a href="#"> <i class="fa fa-envelope"></i> <span> Mesages</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu ">
                <li class="<?php if($page_link != '' && $page_link == 'compose'){echo 'active';}?>"><a href="compose"><i class="fa fa-circle-o"></i> Compose Email</a></li>

              </ul>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>