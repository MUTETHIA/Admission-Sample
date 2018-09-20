<?php
class Error extends CI_Controller
{
    function index()
        {
            $data['heading']='404 Error';
            $data['message']='Page requested not found';
           $this->load->view('errors/html/error_404',$data);
        }

}
?>