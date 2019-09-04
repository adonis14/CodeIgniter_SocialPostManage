<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postmanage extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        if( !$this->session->has_userdata('userid') )
            redirect('/');
        $this->load->model("post_model", "post", true);
        $this->load->library('form_validation');
        
    }

    public function index()
    {   
        $sel_date = $this->input->get('date');
        if(!$sel_date){
            $sel_date = date("Y-m-d");
        }
        $this->post->setCountInfo();
        $data['posts'] = $this->post->getAllPosts($sel_date);
        $data['topposts'] = $this->post->getTopPosts();
        $data['date'] = $sel_date;
        $this->load->view('/dashboard',$data);
    }
    // to add new post to posts table
    public function addnewpost(){
        $this->form_validation->set_rules('channel_name', 'Site Name', 'required');
        $this->form_validation->set_rules('sub_channel_name', 'Language', 'required');
        $this->form_validation->set_rules('post_link', 'Post Link', 'required');
        $this->form_validation->set_rules('post_cat_id', 'Category', 'required');
        if ($this->form_validation->run() == FALSE) {
            $res = array('state' => "error", 'msg' => validation_errors());
        } else {
            
            $type = $this->post->registerPost();
            if ($type > 0) {
                $res   = array('state' => "success", 'msg' => 'Successfully registered.');
                
            } else if($type == -1){
                $res   = array('state' => "error", 'msg' => 'Same post already registered.');
            } else {
                $res   = array('state' => "error", 'msg' => 'Register failed.');
            }               
        }
        $toast = $res;
        $this->session->set_flashdata('toast', $toast);
        return $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($res));
    }
    public function editpost(){
        $post_id = $this->input->post('edit_post_id');
        $this->form_validation->set_rules('post_link', 'Post Link', 'required');
        $this->form_validation->set_rules('post_cat_id', 'Category', 'required');
        if ($this->form_validation->run() == FALSE) {
            $res = array('state' => "error", 'msg' => validation_errors());
        } else {
            $type = $this->post->updatePost($post_id);
            if ($type > 0) {
                $res   = array('state' => "success", 'msg' => 'Successfully updated.');
                
            }else {
                $res   = array('state' => "error", 'msg' => 'Update failed.');
            }               
        }
        $toast = $res;
        $this->session->set_flashdata('toast', $toast);
        return $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($res));
    }
    public function deletepost(){
        $post_id = $this->input->post('delete_post_id');
        $type = $this->post->deletePost($post_id);
        if ($type > 0) {
            $res   = array('state' => "success", 'msg' => 'Successfully deleted.');
        }else {
            $res   = array('state' => "error", 'msg' => 'Delete failed.');
        }               
        $toast = $res;
        $this->session->set_flashdata('toast', $toast);
        return $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($res));
    }
    
    public function getpostbyid(){
         $p_id = $this->input->post('postid');
         if($p_id){
            $res = $this->post->getPostById($p_id);
            return $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($res));
         }else {
            return $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode("false"));
         }
    }
}
