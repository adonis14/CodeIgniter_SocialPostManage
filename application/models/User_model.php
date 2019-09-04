<?php

class User_model extends CI_Model {

    function user_info() {

        $user_id = $this->session->userdata('user_id');
        $query = $this->db
                    ->where('id',$user_id)
                    ->get('users');
        return $query->result();

    }

    function registerUser(){

        $data = array(
                'user_name' => $this->input->post('username'),
                'user_email' => $this->input->post('useremail'),
                'user_password' => md5($this->input->post('userpassword')),
                'created_date' => date('Y-m-d:H-m-s'),
                'user_role' => "user"
            );
        $query = $this->db->
            where(
                'user_email' , $this->input->post('useremail'))
            ->get('users');

        if($query->num_rows() > 0) {
            return -1;
        } else {
            $this->db->insert('users',$data);  
            return 1;
        }
    }
    function loginUser($email, $pwd)
    {
        $this->db->where('user_email', $email);
        $query = $this->db->get('users');
        if($query->num_rows() > 0)
        {
            $row = $query->row();
            if($row->user_password == md5($pwd))
            { 
                 return array(
                        'user' => $row,
                        'type' => 1 
                    ); 
            }
            else
            {
                return array(
                        'user' => NULL,
                        'type' => -1 
                );
            }
        }
        else
        {
            return array(
                        'user' => NULL,
                        'type' => -2 
                    );  
        }
    }
    function updateUser() {
        $user_id = $this->input->post('userid');
        $data = array(
            'user_name' => $this->input->post('username'),
            'user_email' => $this->input->post('useremail'),
            'user_password' => md5($this->input->post('userpassword'))
        );
        $this->db->where('user_id', $user_id);
        $this->db->update('users', $data); 
        return 1;
    }
    function deleteUser() {
        $del_id = $this->input->post('del_user_id');
        $this->db
                ->where('user_id',$del_id)
                ->delete('users'); 
            
        if($this->db->affected_rows()){
            return 1;
        } else {
            return -1;
        }
         
    }
    function get_user_byId($userid) {
        $query = $this->db
                    ->select('*')
                    ->where('user_id',$userid)
                    ->get('users');
        return $query->result();
    }
    
    function get_all_users() {
        $q = $this->db
                    ->where('user_role','user')
                    ->order_by('user_name','asc')
                    ->get('users')                    
                    ->result();
        return $q;
    }
   
    
}
?>