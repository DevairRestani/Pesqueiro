<?php

class Adicionar extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function adicionarCompra(dados){
        $this->db->insert('comprasabertas', $dados);
    }
}