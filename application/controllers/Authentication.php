<?php
class Authentication extends CI_Controller{

    function login($username = null, $password = null){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('adminModel');
        if($username == null && $password == null){
            $this->load->view('auth/login');
        }else{
            if($this->adminModel->getAplhaUser($username, $password)){
                $data = array(
                    'hash' => md5(rand(00000000, 99999999))
                );
                echo $this->session->set_userdata($data);

                redirect(base_url().'pages/view');
            }else{
                echo 'Wrong Username or Password';
            }
        }
    }

    function logout(){
        $this->session->unset_userdata('hash');
        $this->session->sess_destroy();
        redirect(base_url());
    }

}