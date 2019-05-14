<?php

class EditarComanda extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function AlterarComanda($comandaId, $produtoId ,$comanda, $compra){
        $this->db->where('id', $comandaId);
        $this->db->update('comandasabertas', $comanda);

        $this->db->where('comandaID', $comandaId);
        $this->db->where('produtoID', $produtoId);
        $this->db->update('comprasabertas', $compra);
        return $this->db->insert_id();
    }
}