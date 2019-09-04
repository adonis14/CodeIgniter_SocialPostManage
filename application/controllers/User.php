<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model("user_model", "user", true);
        $this->load->library('form_validation');
    }

    public function index()
    {
        redirect('/login');
    }
    
    // to check if the user is valid.
    public function login()
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST')
        {

            $useremail = $this->input->post('email');
            $password = $this->input->post('password');
            $this->form_validation->set_rules('email', 'Useremail', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() == FALSE) {
                $toast = array('state' => "error", 'msg' => validation_errors());
                $this->session->set_flashdata('toast', $toast);    
            } else {

                $response = $this->user->loginUser($useremail, $password);
                if ($response['type'] == 1) {
                    $this->session->set_userdata('userid', $response['user']->user_id);
                    $this->session->set_userdata('username', $response['user']->user_name);
                    $this->session->set_userdata('userrole', $response['user']->user_role);
                    $toast = array('state' => "success", 'msg' => 'Successfully logged in.');
                    $this->session->set_flashdata('toast', $toast);    
                    redirect('/postmanage');
                } else if ($response['type'] == -1) {
                    $msg = "Password not correct.";
                    $toast = array('state' => "error", 'msg' => $msg);
                    $this->session->set_flashdata('toast', $toast);    
                } else {
                    $msg = "Email is not correct.";
                    $toast = array('state' => "error", 'msg' => $msg);
                    $this->session->set_flashdata('toast', $toast);    
                }
               
            }
        }
        $this->load->view('login');
    }
    // to add new user to cms_users table
    public function register(){
        $username = $this->input->post('username');
        $userjob = $this->input->post('userjob');
        $this->form_validation->set_rules('username', 'Full Name', 'required');
        $this->form_validation->set_rules('userpassword', 'Password', 'required');
        $this->form_validation->set_rules('useremail', 'Email', 'required');
        $this->form_validation->set_rules('usercountry', 'Country', 'required');
        $this->form_validation->set_rules('userjob', 'Job', 'required');
        if ($this->form_validation->run() == FALSE) {
            $res = array('state' => false, 'msg' => validation_errors());
        } else {
            $config['upload_path']        = 'assets/Media/users';
            $config['allowed_types']     = 'gif|jpg|jpeg|png';
            $config['file_name']     = "L_".date("U");
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            if($this->upload->do_upload('userimage')){
                $image_name = $this->upload->data('file_name');
            }else{
                $image_name = "default-user.png";
            }
            $type = $this->user->registerUser($image_name);
            if ($type > 0) {
                $res   = array('state' => true, 'msg' => 'Successfully registered.');
                $toast = array('state' => true, 'msg' => 'Successfully Registered.');
                 $this->session->set_flashdata('toast', $toast);
            } else if($type == -1){
                $res   = array('state' => false, 'msg' => 'Same user already registered.');
            } else {
                $res   = array('state' => false, 'msg' => 'Register failed.');
            }               
        }
        return $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($res));
    }
    //to destory user session when he logged out.

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('userrole');
        $this->session->unset_userdata('userid');
        redirect('/');
    }
}
