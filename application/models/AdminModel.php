<?php
class AdminModel extends CI_Model{

    function __construct(){
        $this->load->database();
    }

    function getAplhaUser($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $query = $this->db->get('admin');
        if($query->result_array()){
            return true;
        }else{
            return false;
        }
    }

}