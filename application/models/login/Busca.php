<?php
    class Busca extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function index($dados){
            return $this->db->get('administrador');
        }
    }