<?php

class CriarComanda extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function salvarComanda($dados){
        $this->db->insert('comandasabertas', $dados);

        return $this->db->insert_id();
    }
}