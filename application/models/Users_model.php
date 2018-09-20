<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

//get details of the logged user
public function getDetails($email){
     $data = array(
            'email' => $email
        );
        $qry = $this->db->get_where('tblusers', $data);
        return $qry->result_array();
}

//get course details for insertion during course application
public function getCourseDetails($courseID){

        $sqlQuery='SELECT faculty.faculty_id, department.department_id,programmes.code FROM department
                            INNER JOIN faculty ON (department.faculty_id = faculty.faculty_id)
                            INNER JOIN programmes ON (programmes.department = department.department_id) AND (programmes.faculty = faculty.faculty_id)
                            WHERE (programmes.code =?)';
        $query=$this->db->query($sqlQuery,$courseID);
        return $query->result_array();
}



//get personal details  of the logged user
    public function getPersonalDetails($email){
     $data = array(
            'Email_Address' => $email
        );
        $qry = $this->db->get_where('applicants_details', $data);
        if($qry->num_rows() > 0) {
          return $qry->result_array();
        }
        else{
            return 0;
        }
}


    //check user availability in aplicant details table
    public function checkuser($email){
      $this->db->where('Email_Address',$email);
      return $this->db->count_all_results('applicants_details');
    }

//check user availability in aplicant details table
    public function checkuserEducation($email){
      $this->db->where('Email_Address',$email);
      return $this->db->count_all_results('education_background');
    }

//check user availability in aplicant details table
    public function checkuserPayment($email){
      $this->db->where('email',$email);
      return $this->db->count_all_results('tbl_payment');
    }
 //check user availability in aplicant details table
    public function checkuserCourse($email){
      $this->db->where('Email_Address',$email);
      return $this->db->count_all_results('applicants_course_details');
    }
//check user availability in aplicant details table
    public function getuserEducation($email){
         $data = array(
            'Email_Address' => $email
        );
       $qry = $this->db->get_where('education_background', $data);
       if($qry){
           return $qry->result_array();
       }
       else{
           return false;
       }
    }


//get the chatting logic and replies
public function getUserChat($email){
  $data = array(
            'Sender' => $email
        );
       $qry = $this->db->get_where('inquiries', $data);
       if($qry){
           return $qry->result_array();
       }
       else{
           return false;
       }
}


//inserting the chats from the user
public function chatAppProcess($data){
 $query=$this->db->insert('inquiries',$data);
 if($query){
   return true;
 }
 else{
     return false;
 }
}

//resetting profile password
public function resetPassword($email,$data){
     $this->db->where('email', $email);
     $qry = $this->db->update('tblusers', $data);
     if($qry){
         return true;
     }
     else{
         return false;
     }

}
//check user tracking status in various sections
    public function getUserTracker($email){
         $data = array(
            'Email_Address' => $email
        );
       $qry = $this->db->get_where('applicant_track', $data);
       if($qry){
           return $qry->result_array();
       }
       else{
           return false;
       }
    }
//get details of the course applied
public function getUserCourseApplied($email){
    $sql='SELECT course_levels.Level_Name, programmes.programme, applicants_course_details.*, campuses.Campus_Name
FROM course_levels INNER JOIN applicants_course_details ON (course_levels.Level_id = applicants_course_details.Level_id)
        INNER JOIN campuses ON (applicants_course_details.Campus = campuses.Campus_id)
        INNER JOIN programmes ON (programmes.qualification = course_levels.Level_id) AND (programmes.code = applicants_course_details.Course_id)WHERE (applicants_course_details.Email_Address=?)';
$query=$this->db->query($sql,$email);
if($query){
    return $query->result_array();
}
else{
    return false;
}
}
//check user uploads in the upload table
    public function getuserUploads($email){
         $data = array(
            'email' => $email
        );
       $qry = $this->db->get_where('user_data', $data);
       if($qry){
           return $qry->result_array();
       }
       else{
           return false;
       }
    }

//check user uploads in the upload table
    public function getuserPayments($email){
         $data = array(
            'email' => $email
        );
       $qry = $this->db->get_where('tbl_payment', $data);
       if($qry){
           return $qry->result_array();
       }
       else{
           return false;
       }
    }

//update user personal data
public function update_personalData($data){
      $qry = $this->db->insert('applicants_details', $data);
        if ($qry) {
            return true;
        } else {
            return false;
        }
}

//course application into the database
public function applyCourse($data){
    $query=$this->db->insert('applicants_course_details',$data);
    if($query){
        return true;
    }
    else{
        return false;
    }
}
 //insert testimonials in the database
 public function saveTestimonials($data){
    $query=$this->db->insert('user_data',$data);
    if($query){
        return true;
    }
    else{
        return false;
    }
 }

  //insert testimonials in the database
 public function savePayments($data){
    $query=$this->db->insert('tbl_payment',$data);
    if($query){
        return true;
    }
    else{
        return false;
    }
 }
public function UserEducation($params){
    $query=$this->db->insert('education_background',$params);
    if($query){
        return true;
    }
    else{
        return false;
    }
}
//get countries registered
public function getCountry(){
  $q = $this->db->get('country');
  $this->db->order_by('country_name','ASC');
 return $q->result_array();
}
 //get all degree courses and their details
    public function getDegreeCourses($level){
      $this->db->select('*');
      $this->db->from('programmes p');
      $this->db->join('faculty f','p.faculty = f.faculty_id','left' );
      $this->db->where('p.qualification',$level);
      $query=$this->db->get();
      return $query->result_array();
    }
     //get all diploma courses and their details
    public function getDiplomaCourses($level){
      $this->db->select('*');
      $this->db->from('programmes p');
      //$this->db->join('course_levels c','p.qualification=c.Level_id','left');
      $this->db->join('faculty f','p.faculty = f.faculty_id','left' );
      $this->db->where('p.qualification',$level);
      $query=$this->db->get();
      return $query->result_array();

    }
     //get all diploma courses and their details
    public function getCertificateCourses($level){
      $this->db->select('*');
      $this->db->from('programmes p');
     // $this->db->join('course_levels c','p.qualification=c.Level_id','left');
      $this->db->join('faculty f','p.faculty = f.faculty_id','left' );
      $this->db->where('p.qualification',$level);
      $query=$this->db->get();
      return $query->result_array();
    }

//END OF DASHBOARD FUNCTIONALITY FUNCTIONS

public function getAdmissionDates(){
 $qry = $this->db->get('admissiondates');
 //$this->db->order_by('intake_id', 'ASC');
 return $qry->result_array();
}

//get course levels
public function getCourseLevels(){
 $qry = $this->db->get('course_levels');
 //$this->db->order_by('Level_id', 'ASC');
 return $qry->result_array();
}
public function getFaculty(){
 $q = $this->db->get('faculty');
 //$this->db->order_by('faculty_name','ASC');
 return $q->result_array();
}

public function getRoleLevels(){
 $qry = $this->db->get('user_groups');
 $this->db->order_by('Role_id', 'ASC');
 return $qry->result_array();
}

public function getCampuses(){
    $qry=$this->db->get('campuses');
    $this->db->order_by('Campus_id','ASC');
    return $qry->result_array();
}

//get all registered users
public function getRegisteredUsers(){
    $query=$this->db->get('tblusers');
    return $query->result_array();
}

//load programmes depending on the selected level of study
public function populate_programme($params){
    $data = array(
            'qualification' => $params
        );
       $qry = $this->db->get_where('programmes', $data);
       if($qry){
           return $qry->result_array();
       }
       else{
           return false;
       }
}

//load programmes depending on the selected level of study
public function populate_coursereg($params){
    $data = array(
            'code' => $params
        );
       $qry = $this->db->get_where('programmes', $data);
       if($qry){
            if ($qry->num_rows() > 0) {
            return $qry->row('programme');
        }
          else{
              return false;
          }
       }
}


}

?>