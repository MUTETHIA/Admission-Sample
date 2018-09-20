<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

       public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Users_model'));
    }

	public function dashboard()
	{    if($this->session->userdata('is_logged_in_user_session')){
	    $data2['user'] = $this->Users_model->getDetails($this->session->userdata('user_session'));
        $data['degrees']=$this->Users_model->getDegreeCourses(3);
        $data['diploma']=$this->Users_model->getDiplomaCourses(4);
        $data['certificate']=$this->Users_model->getCertificateCourses(5);
        $this->load->view('users/include/header2',$data2);
        $this->load->view('users/include/sidebar');
        $this->load->view('users/dashboard',$data);
        $this->load->view('include/user_footer');
	}
    else{
        redirect('Site/user_login');
    }
	}


//load user personal details for update and addition
public function personal_details()
	{    if($this->session->userdata('is_logged_in_user_session')){
	    $data['user'] = $this->Users_model->getDetails($this->session->userdata('user_session'));
        $data['personal_data'] = $this->Users_model->getPersonalDetails($this->session->userdata('user_session'));
        $data['check'] = $this->Users_model->checkuser($this->session->userdata('user_session'));
        $data['country']=$this->Users_model->getCountry();
        $this->load->view('users/include/header2',$data);
        $this->load->view('users/include/sidebar');
        $this->load->view('users/personal_details',$data);
        $this->load->view('include/user_footer');
	}
    else{
        redirect('Site/user_login');
    }
	}


//load education details views
public function education_details()
	{    if($this->session->userdata('is_logged_in_user_session')){
	    $data2['user'] = $this->Users_model->getDetails($this->session->userdata('user_session'));
        $data['check_personal'] = $this->Users_model->checkuser($this->session->userdata('user_session'));
        $data['checkeducation']= $this->Users_model->checkuserEducation($this->session->userdata('user_session'));
        $data['usereducation']= $this->Users_model->getuserEducation($this->session->userdata('user_session'));
        $this->load->view('users/include/header2',$data2);
        $this->load->view('users/include/sidebar');
        $this->load->view('users/education_details',$data);
        $this->load->view('include/user_footer');
	}
    else{
        redirect('Site/user_login');
    }
	}


    //load testimonials view
    public function testimonial_details()
	{    if($this->session->userdata('is_logged_in_user_session')){
	    $data2['user'] = $this->Users_model->getDetails($this->session->userdata('user_session'));
        $data['check_personal'] = $this->Users_model->checkuser($this->session->userdata('user_session'));
        $data['checkeducation']= $this->Users_model->checkuserEducation($this->session->userdata('user_session'));
        $data['uploads']= $this->Users_model->getuserUploads($this->session->userdata('user_session'));
        $this->load->view('users/include/header2',$data2);
        $this->load->view('users/include/sidebar');
        $this->load->view('users/testimonial_details',$data);
        $this->load->view('include/user_footer');
	}
    else{
        redirect('Site/user_login');
    }
	}

//load course details view
public function course_details()
	{    if($this->session->userdata('is_logged_in_user_session')){
	    $data2['user'] = $this->Users_model->getDetails($this->session->userdata('user_session'));
        $data['paymentcheck']= $this->Users_model->checkuserPayment($this->session->userdata('user_session'));
        $data['courseCount']= $this->Users_model->checkuserCourse($this->session->userdata('user_session'));
        $data['admissiondates']=$this->Users_model->getAdmissionDates();
        $data['courselevels']=$this->Users_model->getCourseLevels();
        $data['campuses']=$this->Users_model->getCampuses();
        $this->load->view('users/include/header2',$data2);
        $this->load->view('users/include/sidebar');
        $this->load->view('users/course_details',$data);
        $this->load->view('include/user_footer');
	}
    else{
        redirect('Site/user_login');
    }
	}


//load personal data, entered by the user
public function viewPersonal_Data()
	{    if($this->session->userdata('is_logged_in_user_session')){
	    $data2['user'] = $this->Users_model->getDetails($this->session->userdata('user_session'));
        $data['applicant_details']=$this->Users_model->getPersonalDetails($this->session->userdata('user_session'));
        $this->load->view('users/include/header2',$data2);
        $this->load->view('users/include/sidebar');
        $this->load->view('users/viewPersonal_Data',$data);
        $this->load->view('include/user_footer');
	}
    else{
        redirect('Site/user_login');
    }
	}

//load education data, entered by the user
public function viewEducationDetails(){
    if($this->session->userdata('is_logged_in_user_session')){
	    $data2['user'] = $this->Users_model->getDetails($this->session->userdata('user_session'));
        $data['applicant_education']=$this->Users_model->getuserEducation($this->session->userdata('user_session'));
        $this->load->view('users/include/header2',$data2);
        $this->load->view('users/include/sidebar');
        $this->load->view('users/viewEducationDetails',$data);
        $this->load->view('include/user_footer');
	}
    else{
        redirect('Site/user_login');
    }
}

//view the applied course
public function viewCourseDetails(){
    if($this->session->userdata('is_logged_in_user_session')){
	    $data2['user'] = $this->Users_model->getDetails($this->session->userdata('user_session'));
        $data['courseApplied']=$this->Users_model->getUserCourseApplied($this->session->userdata('user_session'));
        $this->load->view('users/include/header2',$data2);
        $this->load->view('users/include/sidebar');
        $this->load->view('users/viewCourseDetails',$data);
        $this->load->view('include/user_footer');
	}
    else{
        redirect('Site/user_login');
    }
}


//view the applied course
public function application_track(){
    if($this->session->userdata('is_logged_in_user_session')){
	    $data2['user'] = $this->Users_model->getDetails($this->session->userdata('user_session'));
        $data2['tracker']=$this->Users_model->getUserTracker($this->session->userdata('user_session'));
        $this->load->view('users/include/header2',$data2);
        $this->load->view('users/include/sidebar');
        $this->load->view('users/application_track',$data2);
        $this->load->view('include/user_footer');
	}
    else{
        redirect('Site/user_login');
    }
}


//chatting platform for the user/ chatting page
public function message_replies(){
    if($this->session->userdata('is_logged_in_user_session')){
	    $data2['user'] = $this->Users_model->getDetails($this->session->userdata('user_session'));
        $data2['chat']=$this->Users_model->getUserChat($this->session->userdata('user_session'));
        $this->load->view('users/include/header2',$data2);
        $this->load->view('users/include/sidebar');
        $this->load->view('users/message_replies',$data2);
        $this->load->view('include/user_footer');
	}
    else{
        redirect('Site/user_login');
    }
}


//profile management
public function myprofile(){
  if($this->session->userdata('is_logged_in_user_session')){
        $data2['user'] = $this->Users_model->getDetails($this->session->userdata('user_session'));
        $data2['chat']=$this->Users_model->getUserChat($this->session->userdata('user_session'));
        $this->load->view('users/include/header2',$data2);
        $this->load->view('users/include/sidebar');
        $this->load->view('users/myprofile',$data2);
        $this->load->view('include/user_footer');
  }
  else{
      redirect('Site/user_login');
  }
}

//resetting password in my profile
public function resetPassword(){
            if(isset($_POST['change_password']))
            {
            $pass=$this->input->post('password');
            $passupdate = md5($pass);
            $params=array(
            'password'=>$passupdate
            );
        $result=$this->Users_model->resetPassword($this->session->userdata('user_session'),$params);
        if($result){
         $this->session->set_flashdata('success','<div class="alert alert-success">
						<button class="close" data-dismiss="alert">&times;</button>
						<strong> Success!!! </strong>You have changed your Password successfully.
						</div>');
         redirect('Users/myprofile');
        }
        else{
         $this->session->set_flashdata('error','<div class="alert alert-danger"><strong>Sorry!!! </strong>An error occured while processsing.</div>');
         redirect('Users/myprofile');
        }
            }
}
//process the chat from the user
public function chatApp(){
     if($this->session->userdata('is_logged_in_user_session')){
                if(isset($_POST['send'])){
                  //$sender =$this->session->userdata('user_session');
                  $message =$_POST['message'];
                  $reported =date('Y-m-d H:i:s');

                  $params=array(
                    'Sender'=>$this->session->userdata('user_session'),
                    'Message'=>$message,
                    'Sent_Date'=>$reported
                  );
                  $chat=$this->Users_model->chatAppProcess($params);
                  if($chat){
                   $this->session->set_flashdata('success','<div class="alert alert-success"><strong>Success!!! </strong>Thanks for contacting us. Our agent will get back to you soonest.</div>');
               redirect('Users/message_replies');
                  }
                  else{
                  $this->session->set_flashdata('error','<div class="alert alert-danger"><strong>Sorry!!! </strong>We could complete request. An error occured.</div>');
                  redirect('Users/message_replies');
                  }
                  }
     }
     else{
       redirect('Site/user_login');
     }
}
    //process the course application
    public function applyCourse(){
        if($this->session->userdata('is_logged_in_user_session')){
          if(isset($_POST['apply'])){
              $email = $this->session->userdata('user_session');
              $sem = $_POST['intake'];
              $level=$_POST['level'];
              $course = $_POST['programme'];
              $study = $_POST['studymode'];
              $centre = $_POST['centre'];
              $number = rand(1000,10000);
              $year = date('Y');
              $regdate = date('Y-m-d');
              $ticket= $course.'/'.$number.'/'.$year;

              $details=$this->Users_model->getCourseDetails($course);
              foreach($details as $det){
                $faculty= $det['faculty_id'];
                $dept = $det['department_id'];
              }
              $params=array(
              'Email_Address'=>$email,
              'intake'=>$sem,
              'Level_id'=>$level,
              'Course_id'=>$course,
              'faculty_id'=> $faculty,
              'dept_id'=>$dept,
              'Mode_Of_Study'=>$study,
              'Campus'=>$centre,
              'ticket'=>$ticket,
              'applied_date'=>$regdate
              );

              $register=$this->Users_model->applyCourse($params);
              if($register){
               $this->session->set_flashdata('success','<div class="alert alert-success"><strong>Success!!! </strong>Your data has been saved Successfully. <a href="GenerateTicketPdf" class="alert alert-info">Generate Application Ticket</a> </div>');
               redirect('Users/course_details');
              }
              else{
                $this->session->set_flashdata('error','<div class="alert alert-danger"><strong>Sorry!!! </strong>An error occured while processing your request. </div>');
               redirect('Users/course_details');
              }
          }
        }
         else{
        redirect('Site/user_login');
    }
    }
//load payment details view
public function payment_transactions()
	{    if($this->session->userdata('is_logged_in_user_session')){
	    $data2['user'] = $this->Users_model->getDetails($this->session->userdata('user_session'));
        $this->load->view('users/include/header2',$data2);
        $this->load->view('users/include/sidebar');
        $this->load->view('users/payment_transactions');
        $this->load->view('include/user_footer');
	}
    else{
        redirect('Site/user_login');
    }
	}


//load payment details view
public function payment_details()
	{    if($this->session->userdata('is_logged_in_user_session')){
	    $data2['user'] = $this->Users_model->getDetails($this->session->userdata('user_session'));
        $data['payments']= $this->Users_model->getuserPayments($this->session->userdata('user_session'));
        $this->load->view('users/include/header2',$data2);
        $this->load->view('users/include/sidebar');
        $this->load->view('users/payment_details',$data);
        $this->load->view('include/user_footer');
	}
    else{
        redirect('Site/user_login');
    }
	}

//save uploaded testimonials
public function savePayments(){
    if($this->session->userdata('is_logged_in_user_session')){
         if(isset($_POST['apply'])){
              $config['upload_path']="public/uploads/payments/";
              $config['allowed_types']='pdf|doc|docx|jpeg|jpg|png';
              $config['encrypt_name'] = TRUE;
              $this->load->library('upload',$config);
               if($this->upload->do_upload("filename")){
                     $data = $this->upload->data();
                   $image= $data['file_name'];
                   $params=array(
                   'email'=>$this->session->userdata('user_session'),
                   'file_name'=>$image,
                   'date_updated'=>date('Y-m-d h:i:s')
                   );
                  $results= $this->Users_model->savePayments($params);
                   if($results){
                  $this->session->set_flashdata('success_msg','<div class="alert alert-success">Your payments file has been uploaded successfully uploaded!</div>');
                  redirect('Users/payment_details');

                  }
               }
               else{
                   $this->session->set_flashdata('error','<div class="alert alert-danger">'.$this->upload->display_errors().'</div>');
                  redirect('Users/payment_details');
               }
          }
    }
    else{
        redirect('Site/user_login');
    }
}

//save uploaded testimonials
public function saveTestimonials(){
    if($this->session->userdata('is_logged_in_user_session')){
         //if(isset($_POST['apply'])){
              $config['upload_path']="public/uploads/testimonials/";
              $config['allowed_types']='pdf|doc|docx|jpeg|jpg|png';
              $config['encrypt_name'] = TRUE;
              $this->load->library('upload',$config);
               if($this->upload->do_upload("filename")){
                     $data = $this->upload->data();
                   $image= $data['file_name'];
                   $type=$data['file_type'];
                   $size=$data['file_size'];
                   $params=array(
                   'email'=>$this->session->userdata('user_session'),
                   'file_type'=>$_POST['doc_name'],
                   'file_name'=>$image,
                   'file_size'=>$size,
                   'date_updated'=>date('Y-m-d h:i:s')
                   );
                  $results= $this->Users_model->saveTestimonials($params);
                   if($results){
                  $this->session->set_flashdata('success_msg','<div class="alert alert-success">Your file was successfully uploaded!</div>');
                  redirect('Users/testimonial_details');
                  }
               }
               else{
                   $this->session->set_flashdata('error','<div class="alert alert-danger">'.$this->upload->display_errors().'</div>');
                  redirect('Users/testimonial_details');
               }
          //}
    }
    else{
        redirect('Site/user_login');
    }
}
//user education insertion
public function userEducation(){
 if($this->session->userdata('is_logged_in_user_session')){
   if(isset($_POST['edu'])){
     $params=array(
     'Email_Address'=>$this->session->userdata('user_session'),
     'school_name'=>$this->input->post('school_name'),
     'start_Year'=>$this->input->post('startYear'),
     'end_Year'=>$this->input->post('endYear'),
     'study_Area' =>$this->input->post('areaOfStudy'),
     'qualification_attained'=>$this->input->post('qualification'),
     'exam_name'=>$this->input->post('exam')
     );

        $result=$this->Users_model->UserEducation($params);
        if($result){
        $this->session->set_flashdata('success','<div class="alert alert-success">Success!!! Education information saved successfully.</div>');
        redirect('Users/education_details');
        }
        else{
          $this->session->set_flashdata('error','<div class="alert alert-danger">Sorry!!! Error in operation.</div>');
          redirect('Users/education_details');
        }
     }
   }
   else{
     redirect('Site/user_login');
 }

}

 //update personal details in the database
 public function update_personal(){
    if($this->session->userdata('is_logged_in_user_session')){
       if(isset($_POST['updatedetails'])){
           $params=array(
           'Email_Address'=>$this->session->userdata('user_session'),
           'First_Name'=> $_POST['fname'],
           'Middle_Name'=> $_POST['mname'],
           'Last_Name' => $_POST['lname'],
           'idNumber'=> $_POST['idnumber'],
           'DoB' => $_POST['dob'],
           'Gender' => $_POST['gender'],
           'Postal_Address'=> $_POST['postal'],
           'Mobile'=> $_POST['phone'],
           'Country' => $_POST['country']
           );
       $results=$this->Users_model->update_personalData($params);
       if($results){
        $this->session->set_flashdata('success','<div class="alert alert-success">Success!!! Personal Informaation successfully saved. </div>');
       redirect('Users/personal_details');
       }
       else{
        $this->session->set_flashdata('error','<div class="alert alert-danger">Sorry!! an error occured while processing the request. </div>');
       redirect('Users/personal_details');
       }
       }
    }
    else{
        redirect('Site/user_login');
    }
 }


//load programmes depending on the loaded level of study
 public function populate_programme($id){
    if($this->session->userdata('is_logged_in_user_session')){
    if(isset($_POST['cid'])) {
        $id=$_POST['cid'];
    $getprogrammes= $this->Users_model->populate_programme($id);
    echo '<option value="" disabled="disabled">Select Programme Name</option>';
     foreach($getprogrammes as $row) {
    echo '<option value="'. $row['code'] .'">' .$row['programme']. '</option>';
    }
}

    }
    else{
        redirect('Site/user_login');
    }
 }


//update personal details in the database
 public function populate_coursereg($programID){
    if($this->session->userdata('is_logged_in_user_session')){
    if(isset($_POST['prog'])) {
        $programID=$_POST['prog'];
    $getrequirements= $this->Users_model->populate_programme($programID);
     echo '<textarea name="requirements"  id="req" cols="30" rows="2">'.$getrequirements.'</textarea> ';;
}

    }
    else{
        redirect('Site/user_login');
    }
 }


//logout the user and redirect to login
public function logout(){
    // Unset User Data
        $this->session->unset_userdata('is_logged_in_user_session');
        $this->session->unset_userdata('user_session');
        $this->session->sess_destroy();
        redirect('Site/user_login');
}





}
