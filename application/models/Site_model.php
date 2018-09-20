<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_Model {

public function degrees($level_id){
        $data = array('qualification' => $level_id);
        $qry = $this->db->get_where('programmes', $data);
        return $qry->result_array();
}

public function diploma($level_id){
        $data = array('qualification' => $level_id);
        $qry = $this->db->get_where('programmes', $data);
        return $qry->result_array();
}

public function certificate($level_id){
        $data = array('qualification' => $level_id);
        $qry = $this->db->get_where('programmes', $data);
        return $qry->result_array();
}

// check user activation status
    public function accountstatus($data)
    {
        $qry = $this->db->get_where('tblusers',$data);
        if ($qry->num_rows()>0) {
            return $qry->row('userStatus');
        }
        else {
            return false;
        }
    }

 // Function to login client user
    public function login_process($params)
    {
        $qry = $this->db->get_where('tblusers',$params);
        if ($qry->num_rows() == 1) {
            if($qry->row('userStatus')=='Y'){
              return $qry->row('Role_id');
            }
            else{
                return 0;
            }
        }
        else {
            return false;
        }
    }



}

?>