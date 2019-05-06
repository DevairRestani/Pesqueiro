<?php

class BuscaCompras extends CI_Model{
    function __contruct(){
        parent::__construct();
        $this->load->database();
    }

    public function buscar($idComanda){
        $this->db->select('*');
        $this->db->from('comandasabertas');
        $this->db->join('comprasabertas', 'comandasabertas.id = comprasabertas.comandaID');
        $this->db->where('comandasabertas.id', $idComanda);

        $querry = $this->db->get();
        

        return $querry->result_array();
    }

}