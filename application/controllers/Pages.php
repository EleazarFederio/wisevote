<?php
class Pages extends CI_Controller{

    function view($page = 'home'){
        if($this->session->userdata('hash') == ""){
            //redirect(base_url().'authentication/login');
        }

        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }
    
        $data['title'] = ucfirst($page);
        $this->load->view('templates/header');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
    }

}