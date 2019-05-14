<?php
    class ExcluirComanda extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }


    public function Comanda($id){
            $this->db->where('comandaID', $id);
            $this->db->join('comandasabertas', 'comprasabertas.comandaID = comandasabertas.id');
            $this->db->delete('comprasabertas');

            $this->db->where('id', $id);
            $this->db->delete('comandasabertas');

        }

    }