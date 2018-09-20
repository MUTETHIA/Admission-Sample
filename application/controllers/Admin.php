<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

       public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Admin_model'));
    }

	public function dashboard()
	{
	    if($this->session->userdata('is_logged_in_admin')){
    $data['details']=$this->Admin_model->getDetails($this->session->userdata('email'));
    $data['count']=$this->Admin_model->getMessages();
    $data2['countregnumber']=$this->Admin_model->countRegnumber();
    $data2['rowall']=$this->Admin_model->countProgrammes();
    $data2['rowdeg']=$this->Admin_model->countDegree(3);
    $data2['rowdip']=$this->Admin_model->countDiploma(4);
    $data2['rowcert']=$this->Admin_model->countCertificate(5);
    $data2['rownumber']=$this->Admin_model->allApplicants();
    $data2['degreenumber']=$this->Admin_model->countDegreeApplicants(3);
    $data2['diplomanumber']=$this->Admin_model->countDiplomaApplicants(4);
    $data2['certificatenumber']=$this->Admin_model->countCertificateApplicants(5);

    $this->load->view('admin/include/header1',$data);
    $this->load->view('admin/include/sidebar');
    $this->load->view('admin/dashboard',$data2);
    $this->load->view('include/footer');
	    }
        else{
            redirect('Site/user_login');
        }
}

  //admision dates
    public function admissiondates()
	{
        if($this->session->userdata('is_logged_in_admin')){
            $data['details']=$this->Admin_model->getDetails($this->session->userdata('email'));
             $data['count']=$this->Admin_model->getMessages();
            $data2['admission']=$this->Admin_model->getAdmissionDates();
            $this->load->view('admin/include/header1',$data);
            $this->load->view('admin/include/sidebar');
            $this->load->view('admin/admissiondates',$data2);
            $this->load->view('include/footer');
        }
        else{
            redirect('Site/user_login');
        }
	}


    //school accounts
     public function school_accounts()
	{
        if($this->session->userdata('is_logged_in_admin')){
           $data['details']=$this->Admin_model->getDetails($this->session->userdata('email'));
            $data['count']=$this->Admin_model->getMessages();
           $data2['faculty']=$this->Admin_model->getFaculty();
           $data2['adm']=$this->Admin_model->getRoleLevels();
           $this->load->view('admin/include/header1',$data);
            $this->load->view('admin/include/sidebar');
            $this->load->view('admin/school_accounts',$data2);
            $this->load->view('include/footer');
        }
        else{
            redirect('Site/user_login');
        }
	}


     //department accounts accounts
     public function department_accounts()
	{
        if($this->session->userdata('is_logged_in_admin')){
         $data['details']=$this->Admin_model->getDetails($this->session->userdata('email'));
         $data['count']=$this->Admin_model->getMessages();
         $data2['faculty']=$this->Admin_model->getFaculty();
         $data2['adm']=$this->Admin_model->getRoleLevels();
         $this->load->view('admin/include/header1',$data);
         $this->load->view('admin/include/sidebar');
         $this->load->view('admin/accounts',$data2);
         $this->load->view('include/footer');
        }
        else{
           redirect('Site/user_login');
        }
	}


 //campus setup
     public function campus_setup()
	{
        if($this->session->userdata('is_logged_in_admin')){
          $data['details']=$this->Admin_model->getDetails($this->session->userdata('email'));
          $data['count']=$this->Admin_model->getMessages();
          $this->load->view('admin/include/header1',$data);
          $data2['campo']=$this->Admin_model->getCampuses();
          $this->load->view('admin/include/sidebar');
          $this->load->view('admin/campus_setup',$data2);
          $this->load->view('include/footer');
        }
        else{
           redirect('Site/user_login');
        }
	}

 //registered users
     public function registered_users()
	{
        if($this->session->userdata('is_logged_in_admin')){
          $data['details']=$this->Admin_model->getDetails($this->session->userdata('email'));
          $data['count']=$this->Admin_model->getMessages();
          $this->load->view('admin/include/header1',$data);
          $data2['users']=$this->Admin_model->getRegisteredUsers();
          $this->load->view('admin/include/sidebar');
          $this->load->view('admin/registered_users',$data2);
          $this->load->view('include/footer');
        }
        else{
           redirect('Site/user_login');
        }
	}

 //degree courses
     public function Degree_courses()
	{
        if($this->session->userdata('is_logged_in_admin')){
          $data['details']=$this->Admin_model->getDetails($this->session->userdata('email'));
           $data['count']=$this->Admin_model->getMessages();
           $this->load->view('admin/include/header1',$data);
            $data2['deg']=$this->Admin_model->getDegreeCourses(3);
            $this->load->view('admin/include/sidebar');
            $this->load->view('admin/Degree_courses',$data2);
            $this->load->view('include/footer');
        }
        else{
           redirect('Site/user_login');
        }
	}


 //diploma courses
     public function  diploma_courses()
	{
        if($this->session->userdata('is_logged_in_admin')){
          $data['details']=$this->Admin_model->getDetails($this->session->userdata('email'));
           $data['count']=$this->Admin_model->getMessages();
           $this->load->view('admin/include/header1',$data);
            $data2['dip']=$this->Admin_model->getDegreeCourses(4);
            $this->load->view('admin/include/sidebar');
            $this->load->view('admin/diploma_courses',$data2);
            $this->load->view('include/footer');
        }
        else{
           redirect('Site/user_login');
        }
	}

//certificate courses
     public function  certificate_courses()
	{
        if($this->session->userdata('is_logged_in_admin')){
          $data['details']=$this->Admin_model->getDetails($this->session->userdata('email'));
           $data['count']=$this->Admin_model->getMessages();
           $this->load->view('admin/include/header1',$data);
            $data2['cert']=$this->Admin_model->getDegreeCourses(5);
            $this->load->view('admin/include/sidebar');
            $this->load->view('admin/certificate_courses',$data2);
            $this->load->view('include/footer');
        }
        else{
           redirect('Site/user_login');
        }
	}


    //add courses
     public function  addCourses()
	{
            if($this->session->userdata('is_logged_in_admin')){
            $data['details']=$this->Admin_model->getDetails($this->session->userdata('email'));
            $data['count']=$this->Admin_model->getMessages();
            $data2['faculty']=$this->Admin_model->getFaculty();
            $data2['courrselevels']=$this->Admin_model->getCourseLevels();
            $this->load->view('admin/include/header1',$data);
            $this->load->view('admin/include/sidebar');
            $this->load->view('admin/addCourses',$data2);
            $this->load->view('include/footer');
           }
            else{
           redirect('Site/user_login');
           }
	}


 //add new school in the database
     public function  add_schools()
	{
            if($this->session->userdata('is_logged_in_admin')){
            $data['details']=$this->Admin_model->getDetails($this->session->userdata('email'));
            $data['count']=$this->Admin_model->getMessages();
            $data2['faculty']=$this->Admin_model->getFaculty();
            $data2['courrselevels']=$this->Admin_model->getCourseLevels();
            $this->load->view('admin/include/header1',$data);
            $this->load->view('admin/include/sidebar');
            $this->load->view('admin/add_schools',$data2);
            $this->load->view('include/footer');
           }
            else{
           redirect('Site/user_login');
           }
	}


 //display all departments
     public function  departments()
	{
            if($this->session->userdata('is_logged_in_admin')){
            $data['details']=$this->Admin_model->getDetails($this->session->userdata('email'));
            $data['count']=$this->Admin_model->getMessages();
            $data2['departments']=$this->Admin_model->departments();
            //$data2['courrselevels']=$this->Admin_model->getCourseLevels();
            $this->load->view('admin/include/header1',$data);
            $this->load->view('admin/include/sidebar');
            $this->load->view('admin/departments',$data2);
            $this->load->view('include/footer');
           }
            else{
           redirect('Site/user_login');
           }
	}

//add new departments
  public function  add_department()
	{
            if($this->session->userdata('is_logged_in_admin')){
            $data['details']=$this->Admin_model->getDetails($this->session->userdata('email'));
            $data['count']=$this->Admin_model->getMessages();
            $data2['faculty']=$this->Admin_model->getFaculty();
            $this->load->view('admin/include/header1',$data);
            $this->load->view('admin/include/sidebar');
            $this->load->view('admin/add_department',$data2);
            $this->load->view('include/footer');
           }
            else{
           redirect('Site/user_login');
           }
	}



/*
start  of
Managing announcements sections
*/

//adding the announcements and other communications
public function  add_announcement()
	{
            if($this->session->userdata('is_logged_in_admin')){
            $data['details']=$this->Admin_model->getDetails($this->session->userdata('email'));
            $data['count']=$this->Admin_model->getMessages();
            $data2['faculty']=$this->Admin_model->getFaculty();
            $this->load->view('admin/include/header1',$data);
            $this->load->view('admin/include/sidebar');
            $this->load->view('admin/add_announcement',$data2);
            $this->load->view('include/footer');
           }
            else{
           redirect('Site/user_login');
           }
	}

//display communications
public function  manage_announcements()
	{
            if($this->session->userdata('is_logged_in_admin')){
            $data['details']=$this->Admin_model->getDetails($this->session->userdata('email'));
            $data['count']=$this->Admin_model->getMessages();
            $data2['viewAnnounce']=$this->Admin_model->getAnnouncement();
            $this->load->view('admin/include/header1',$data);
            $this->load->view('admin/include/sidebar');
            $this->load->view('admin/manage_announcements',$data2);
            $this->load->view('include/footer');
           }
            else{
           redirect('Site/user_login');
           }
	}
/*
end of
Managing announcements sections
*/



                /* START OF COMPOSE SECTION  */
           public function  compose()
	       {
            if($this->session->userdata('is_logged_in_admin')){
            $data['details']=$this->Admin_model->getDetails($this->session->userdata('email'));
            $data['count']=$this->Admin_model->getMessages();
            $this->load->view('admin/include/header1',$data);
            $this->load->view('admin/include/sidebar');
            $this->load->view('admin/compose');
            $this->load->view('include/footer');
           }
            else{
           redirect('Site/user_login');
           }
	       }
/*===== START OF COMPOSE SECTION =====*/



/*===== START OF APPLICANT MANAGEMENT =====*/


/*===== START OF APPLICANT MANAGEMENT =====*/

  /*=====function to logout admin from their accounts======*/
    function logout()
    {
        // Unset User Data
        $this->session->unset_userdata('is_logged_in_admin');
        $this->session->unset_userdata('email');
        $this->session->sess_destroy();

        redirect('Site/user_login');
    }
}
