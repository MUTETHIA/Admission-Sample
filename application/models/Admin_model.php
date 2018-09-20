<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

 // Get logged user details
    public function getDetails($email)
    {
        $data = array(
            'email' => $email
        );
        $qry = $this->db->get_where('tblusers', $data);
        if ($qry) {
            return $qry->result_array();
        }
    }
   //get all replies
   public function getMessages(){
       $con="Reply IS NULL";
       $query=$this->db->get_where('inquiries',$con);
        return $this->db->count_all_results();
   }
 // Count registration number
    public function countRegnumber()
    {
        return $this->db->count_all('reg_generator');
    }

 // Count registration number
    public function countProgrammes()
    {
        return $this->db->count_all('programmes');
    }
    //count all applicants
    public function allApplicants(){
    return $this->db->count_all('applicants_course_details');
    }

    //count degree programmes
    public function countDegree($level){
      $this->db->where('qualification', $level);
      return $this->db->count_all_results('programmes');
    }

    //get all degree courses and their details
    public function getDegreeCourses($level){
      $this->db->select('*');
      $this->db->from('programmes p');
      $this->db->join('course_levels c','p.qualification=c.Level_id','left');
      $this->db->join('faculty f','p.faculty = f.faculty_id' );
      $this->db->where('p.qualification',$level);
      $query=$this->db->get();
      return $query->result_array();

    }
     //get all diploma courses and their details
    public function getDiplomaCourses($level){
      $this->db->select('*');
      $this->db->from('programmes p');
      $this->db->join('course_levels c','p.qualification=c.Level_id','left');
      $this->db->join('faculty f','p.faculty = f.faculty_id' );
      $this->db->where('p.qualification',$level);
      $query=$this->db->get();
      return $query->result_array();

    }
     //get all diploma courses and their details
    public function getCertificateCourses($level){
      $this->db->select('*');
      $this->db->from('programmes p');
      $this->db->join('course_levels c','p.qualification=c.Level_id','left');
      $this->db->join('faculty f','p.faculty = f.faculty_id' );
      $this->db->where('p.qualification',$level);
      $query=$this->db->get();
      return $query->result_array();

    }

   public function departments(){
    $this->db->select('*');
    $this->db->from('department d');
    $this->db->join('faculty f','d.faculty_id =f.faculty_id','left');
    $query=$this->db->get();
    return $query->result_array();
   }
    //count diploma programmes
public function countDiploma($level){
$this->db->where('qualification', $level);
return $this->db->count_all_results('programmes');
}

 //count certificate programmes
public function countCertificate($level){
$this->db->where('qualification', $level);
return $this->db->count_all_results('programmes');
}

//degree applicants
public function countDegreeApplicants($le){
$this->db->where('Level_id',$le);
return $this->db->count_all_results('applicants_course_details');
}

//diploma applicants
public function countDiplomaApplicants($le){
$this->db->where('Level_id',$le);
return $this->db->count_all_results('applicants_course_details');
}

//certificates applicants
public function countCertificateApplicants($le){
$this->db->where('Level_id',$le);
return $this->db->count_all_results('applicants_course_details');
}
//END OF DASHBOARD FUNCTIONALITY FUNCTIONS

public function getAdmissionDates(){
 $qry = $this->db->get('admissiondates');
 $this->db->order_by('intake_id', 'ASC');
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


//get all announcements and communications
//get all registered users
public function getAnnouncement(){
    $query=$this->db->get('announcements');
    return $query->result_array();
}
//get course levels
public function getCourseLevels(){
    $query=$this->db->get('course_levels');
    $this->db->order_by('Level_id','ASC');
    return $query->result_array();
}


/* APPLICANT MANAGEMENT */



}

?>