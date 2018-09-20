<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

       public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Site_model'));
    }

	public function index()
	{
	    $data['degrees']=$this->Site_model->degrees(3);
        $data['diploma']=$this->Site_model->diploma(4);
        $data['certificate']=$this->Site_model->certificate(5);
        $this->load->view('login/index',$data);
	}

    	public function user_register()
	{
        $this->load->view('auth/user_register');
	}

    //login form load view
    	public function user_login()
	{
        $this->load->view('auth/user_login');
	}

   function sendemail(){
        $config['protocol'] = 'smtp';
        $config['charset'] = 'utf-8';
        $config['smtp_host'] = 'vsoft.co.ke'; //smtp host name
        $config['smtp_port'] = '465'; //smtp port number
        $config['smtp_crypto'] = 'ssl';
        $config['smtp_user'] = 'guestsmart@vsoft.co.ke';
        $config['smtp_pass'] = 'Vsoft@2018'; //$from_email password
        $config['validate'] = FALSE;
        $config['smtp_timeout'] ='4';
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n";
        $config['crlf'] = "\r\n";
        $this->email->initialize($config);

        $url = base_url()."user/confirmation/";
        $this->email->from('guestsmart@vsoft.co.ke', 'The Smart Guest');
    $this->email->to('mutethiaisaiah@gmail.com');
    $this->email->subject('Please Verify Your Email Address');
    $message = "<html><head><head></head><body><p>Hi,</p><p>Thanks for registration with CodesQuery.</p><p>Please click below link to verify your email.</p>".$url."<br/><p>Sincerely,</p><p>CodesQuery Team</p></body></html>";
    $this->email->message($message);
    if($this->email->send()){
         $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Please confirm the mail sent to your email id to complete the registration.</div>');
         echo $this->session->flashdata('msg');
    }

    }













    //password recovery load view
    public function password_recover()
    {
        $this->load->view('auth/password_recover');
    }
    //login process of data and checking authentication
    public function login_process(){
        if(isset($_POST['btn-login'])){
             $user_email = trim($this->input->post('email'));
             $user_password =trim($this->input->post('password'));
             $password =md5($user_password);
             $statusY = "Y";
             $statusN = "N";

              $params = array(
                'email' => $user_email,
                'password' =>  $password
            );
             $accountstatus=$this->Site_model->accountstatus($params);
             $results = $this->Site_model->login_process($params);
              if($accountstatus== $statusY){
                if($results==1){
                 echo "ok";
                 $session_data1 = array(
                        'email' => $this->input->post('email'),
                        'is_logged_in_admin' => 1
                    );
                    $this->session->set_userdata($session_data1);

                      }
                else if($results==2){
                 echo "ok1";
                   $session_dataA = array(
                        'user_session' => $this->input->post('email'),
                        'is_logged_in_user_session' => 1
                    );
                    $this->session->set_userdata($session_dataA);
                 }
                 else if($results==3){
                 echo "ok2";
                 $session_dataD = array(
                        'department_session' => $this->input->post('email'),
                        'is_logged_in_department_session' => 1
                    );
                    $this->session->set_userdata($session_dataD);
                 }
                else if($results==4){
                 echo "ok3";
                 $session_dataDean = array(
                        'dean_session' => $this->input->post('email'),
                        'is_logged_in_dean_session' => 1
                    );
                    $this->session->set_userdata($session_dataDean);
                 }
                 else if($results==5){
                 echo "ok4";
                 $session_dataDirector = array(
                        'director_session' => $this->input->post('email'),
                        'is_logged_in_director_session' => 1
                    );
                    $this->session->set_userdata($session_dataDirector);
                 }
                 else{
                     echo "ok5";
                 }
              }
               else if ($accountstatus== $statusN){
                         echo "Sorry, your account is not activated.";
                     }
                     else{
                          echo "Wrong Email or Password details.Check";
                     }
            }
    }

    //load our terms of operations
     	public function terms_conditions()
	{
        $this->load->view('auth/terms_&_conditions');
	}

}
