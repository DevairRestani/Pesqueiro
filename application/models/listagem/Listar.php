<?php
class Listar extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->database();  // construct the Model class
    }

    public function listarComandas(){
        $this->db->select('id');
        $this->db->select('nome');
        $this->db->select('horaabertura');
        $this->db->from('comandasabertas');
        $this->db->where('estado', 1);

        $querry = $this->db->get();

        return $querry->result_array();
    }
}