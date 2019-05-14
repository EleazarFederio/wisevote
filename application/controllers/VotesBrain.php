<?php
class VotesBrain extends CI_Controller{

    function addParty(){
        $partyname = $this->input->post('partyname');
        $this->load->model('partyModel');
        if($this->partyModel->addParty($partyname)){
            redirect(base_url());
        }
    }

}