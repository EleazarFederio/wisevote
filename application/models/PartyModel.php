<?php
class PartyModel extends CI_Model{

    function __construct(){
        $this->load->database();
    }

    function getModel(){
        $this->db->query('SELECT * FROM');
    }

    function addParty($partyname){
        $data = array(
            'party_name' => $partyname
        );
        if($this->db->insert('party', $data)){
            return true;
        }else{
            return false;
        }
    }

}