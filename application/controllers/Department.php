<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

       public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Site_model'));
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
